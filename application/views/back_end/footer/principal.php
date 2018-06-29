<!-- Inicio Modal Agregar Tipo Documento -->
<div class="modal fade" id="modal_agregar_tipo_documento" tabindex="-1" role="dialog" aria-labelledby="Agregar Documento" style="z-index: 1090;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Tipo de Documento</h4>
      </div>
      <div class="modal-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="titulo_documento_trabajador" name="titulo_documento_trabajador" placeholder="Ingrese título para Tipo de Documento">
                    </div>
                    <div class="col-md-12" style="margin-top:2%">
                        <div class="input-group input-group-lg" style="width:100%">
                            <textarea rows="7" cols="50" id="descripcion_documento_trabajador" name="descripcion_documento_trabajador" placeholder="Ingrese descripción del Tipo de Documento"></textarea>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button id="crear_tipo_documentacion" type="button" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal Agregar Tipo Documento-->

<!-- Footer Start -->
      <footer id="footer">
        <div class="copyright">
          <div class="container">
            <p>2016 &copy; Todos los Derechos Reservados <a href="#">SIGESCO</a></p>

            <ul class="list-inline">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </footer>
      <!-- end #footer -->
    <!-- Scripts -->
      <script src="<?=base_url()?>js/jquery.ba-outside-events.min.js"></script>
      <script src="<?=base_url()?>js/jquery.responsive-tabs.js"></script>
      <script src="<?=base_url()?>js/jquery.flexslider-min.js"></script>
      <script src="<?=base_url()?>js/jquery.fitvids.js"></script>
      <script src="<?=base_url()?>js/jquery.inview.min.js"></script>
      <script src="<?=base_url()?>js/jquery.tagsinput.min.js"></script>
      <script src="<?=base_url()?>js/owl.carousel.min.js"></script>
      <script src="<?=base_url()?>js/scripts.js"></script>

    </div>
    <!-- end #main-wrapper -->
    </body>
  </html>
