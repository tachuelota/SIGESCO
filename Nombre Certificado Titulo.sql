SELECT 'Certificado de Titulo Universitario' as titulo, 
url_titulo_trabajador_laboral_educacion_universitaria as url,
DATE_FORMAT(fecha_carga_url_trabajador_laboral_educacion_universitaria,'%d-%m-%Y') as fecha
FROM trabajador_laboral_educacion_universitaria
WHERE trabajador_laboral_id_trabajador_laboral = 107

UNION

SELECT concat('Certificado de ', nombre_tipo_educacion_posterior) as titulo, url_certificado_educacion_posterior as url, 
IFNULL(DATE_FORMAT(fecha_carga_url_educacion_posterior,'%d-%m-%Y'),'-') as fecha
FROM educacion_posterior,tipo_educacion_posterior
WHERE 
educacion_posterior.tipo_educacion_posterior_id_tipo_educacion_posterior = tipo_educacion_posterior.id_tipo_educacion_posterior AND
trabajador_laboral_id_trabajador_laboral = 107

UNION 
SELECT titulo_trabajador_laboral_documentacion as titulo, url_trabajador_laboral_documentacion as url,
IFNULL(DATE_FORMAT(fecha_subida_trabajador_laboral_documentacion,'%d-%m-%Y'),'-') as fecha
FROM trabajador_laboral_documentacion
WHERE trabajador_laboral_id_trabajador_laboral = 107