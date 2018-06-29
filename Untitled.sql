SELECT 

CONCAT('[',(select group_concat('{"modulo":"',nombre_modulo,'","submodulos":',IF(url_modulo = "#",(CONCAT('[',(select group_concat('{"nombre":"',nombre_submodulos,'","url":"',url_submodulos,'"}') from submodulos WHERE modulo_id_modulo = id_modulo),']')),"\"\""),',"url":"',url_modulo,'"}') from modulo),']') as modulo
FROM empresa_contratista
WHERE ((email_empresa_contratista = '76.192.487-7') OR 
(user_empresa_contratista = '76.192.487-7') OR 
(rut_empresa_contratista = '76.192.487-7'))