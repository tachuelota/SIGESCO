SELECT IF(
	(SELECT count(*) 
	 FROM educacion_posterior 
	 WHERE (tipo_educacion_posterior_id_tipo_educacion_posterior = '1' OR  tipo_educacion_posterior_id_tipo_educacion_posterior = '2') AND
     educacion_posterior.trabajador_laboral_id_trabajador_laboral = '107')
    ,
	 /* SI ES EDUCACION POSTERIOR */
    (SELECT concat(especialidad_educacion_posterior,(if(situacion_educacion_posterior = 1,' - Titulado.',' - Egresado.'))) as situacion
	 FROM educacion_posterior
	 WHERE (situacion_educacion_posterior = '1' OR  situacion_educacion_posterior = '2') AND
     educacion_posterior.trabajador_laboral_id_trabajador_laboral = '107'
     ORDER BY (educacion_posterior.tipo_educacion_posterior_id_tipo_educacion_posterior) ASC
     LIMIT 1)
    ,
		IF(
		(SELECT count(*) 
		 FROM trabajador_laboral_educacion_universitaria 
		 WHERE (situacion_trabajador_laboral_educacion_universitaria = '1' OR  situacion_trabajador_laboral_educacion_universitaria = '2') AND
		 trabajador_laboral_educacion_universitaria.trabajador_laboral_id_trabajador_laboral = '107')
		,
		 /* SI ES EDUCACION UNIVERSITARIA */
		(SELECT concat('Educacion Universitaria',', ',especialidad_trabajador_laboral_educacion_universitaria , 
			(if(situacion_trabajador_laboral_educacion_universitaria = 1,', Titulado.',', Egresado.')))
		 FROM trabajador_laboral_educacion_universitaria
		 WHERE (situacion_trabajador_laboral_educacion_universitaria = '1' OR  situacion_trabajador_laboral_educacion_universitaria = '2') AND
		 trabajador_laboral_educacion_universitaria.trabajador_laboral_id_trabajador_laboral = '107'
         ORDER BY (situacion_trabajador_laboral_educacion_universitaria) asc
         LIMIT 1
         )
		,
			IF(
			(SELECT count(*) 
			 FROM trabajador_laboral_educacion_media 
			 WHERE (situacion_trabajador_laboral_educacion_media = '1' OR  situacion_trabajador_laboral_educacion_media = '3') AND
			 trabajador_laboral_educacion_media.trabajador_laboral_id_trabajador_laboral = '107')
			,
			 /* SI ES EDUCACION MEDIA */
			(SELECT concat('Educacion Media',',',
				(if(situacion_trabajador_laboral_educacion_media = 1,' Completo - ',' Cursando - ')),especialidad_trabajador_laboral_educacion_media)
			 FROM trabajador_laboral_educacion_media
			 WHERE (situacion_trabajador_laboral_educacion_media = '1' OR  situacion_trabajador_laboral_educacion_media = '3') AND
			 trabajador_laboral_educacion_media.trabajador_laboral_id_trabajador_laboral = '107'
			 ORDER BY (situacion_trabajador_laboral_educacion_media) asc
			 LIMIT 1
			 )
			,
            /* SI ES EDUCACION BASICA */
            (SELECT concat('Educacion Basica',',',
				(if(situacion_trabajador_laboral_educacion_basica = 1,' Completo. ',' Cursando. ')))
			 FROM trabajador_laboral_educacion_basica
			 WHERE (situacion_trabajador_laboral_educacion_basica = '1' OR  situacion_trabajador_laboral_educacion_basica = '3') AND
			 trabajador_laboral_educacion_basica.trabajador_laboral_id_trabajador_laboral = '107'
			 ORDER BY (situacion_trabajador_laboral_educacion_basica) asc
			 LIMIT 1
			 )))) as educacion;