<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busqueda extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
    //////////////////////////////  V I S T A S  //////////////////////////////
    
	public function index()
	{
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
            $this->load->model('listas','lista',TRUE);
			$this->load->view('back_end/header/principal');
            $datos_mensaje['mensajes'] = $this->lista->lista_mensajes_trabajador($this->session->userdata('sigesco_laboral_id'));
            $datos_mensaje['cantidad_mensajes'] = count($datos_mensaje['mensajes']);
			//////////////////////////////  M E N U   T O P  /////////////////////////////////
			if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 1){
                $this->load->view('back_end/menu_top/administrador',$datos_mensaje);
            }
            
            if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 2){
                $this->load->view('back_end/menu_top/ejecutivo',$datos_mensaje);
            }
            //////////////////////////////////////////////////////////////////////
            //////////////////////////////   B O D Y   /////////////////////////////
            $datos['ciudades'] = $this->lista->lista_ciudades();
            $this->load->view('back_end/busqueda/busqueda',$datos);
            ////////////////////////////////////////////////////////////////////////
			$this->load->view('back_end/footer/principal');
        } else {redirect('/login', 'refresh');}
	}
    
    ///////////////////////////////////////////////////////////////////////////
    
    public function trabajadores()
	{
            if($this->input->post('palabra_busqueda',TRUE) != ''){
                $datos['palabra_busqueda'] = $this->input->post('palabra_busqueda',TRUE);}
            else{$datos['palabra_busqueda'] = '';}
        
            if($this->input->post('ciudad_busqueda',TRUE) != ''){
                $datos['ciudad_busqueda'] = $this->input->post('ciudad_busqueda',TRUE);}
            else{$datos['ciudad_busqueda'] = '';}
            $this->load->model('listas','lista',TRUE);
            $datos['listas'] = $this->lista->lista_listas_ejecutivo($this->session->userdata('sigesco_laboral_id'));
			$this->load->view('front_end/header/principal');
            ////////////////////   M E N U   T O P   /////////////////////////////
            if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 2){
                $this->load->view('back_end/menu_top/ejecutivo',$datos);
            }else{
                $this->load->view('front_end/menu_top/invitado');
            }
			//////////////////////////////////////////////////////////////////////
            //////////////////////////////   B O D Y   /////////////////////////////
            if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 2){
                if($this->input->post('ciudad_busqueda_id',TRUE)){
                    $this->session->set_userdata('ciudad_busqueda_sigesco', $this->input->post('ciudad_busqueda_id',TRUE));
                }
                
                if($this->input->post('palabra_busqueda',TRUE)){
                    $this->session->set_userdata('palabra_busqueda_sigesco', $this->input->post('palabra_busqueda',TRUE));
                }
                
                $datos['trabajadores'] = $this->lista->lista_trabajadores($this->session->userdata('palabra_busqueda_sigesco'), $this->session->userdata('ciudad_busqueda_sigesco'));
                $this->load->view('back_end/busqueda/trabajadores',$datos);
            }else{
                if($this->input->post('ciudad_busqueda_id',TRUE)){
                    $this->session->set_userdata('ciudad_busqueda_sigesco', $this->input->post('ciudad_busqueda_id',TRUE));
                }
                
                if($this->input->post('palabra_busqueda',TRUE)){
                    $this->session->set_userdata('palabra_busqueda_sigesco', $this->input->post('palabra_busqueda',TRUE));
                }
                $datos['trabajadores'] = $this->lista->lista_trabajadores($this->session->userdata('palabra_busqueda_sigesco'), $this->session->userdata('ciudad_busqueda_sigesco'));
                $this->load->library('pagination');
                $config = array();
                $config["base_url"] = base_url()."busqueda/trabajadores";
                $config["total_rows"] = count($datos['trabajadores']);
                $config["per_page"] = 1;
                $config["uri_segment"] = 3;
                $config["full_tag_open"] = "<div class='pagination-content clearfix'><nav><ul class='list-inline'>";
                $config["full_tag_close"] = "</ul></nav></div>";
                $config["prev_link"] = "Previo";
                $config["prev_tag_open"] = "<li class='previo'>";
                $config["prev_tag_close"] = "</li>";
                $config["next_link"] = "Siguiente";
                $config["next_tag_open"] = "<li class='next'>";
                $config["next_tag_close"] = "</li>";
                $config["first_link"] = "Primero";
                $config["first_tag_open"] = "<li style='margin: 0px 5px'>";
                $config["first_tag_close"] = "</li>";
                $config["cur_tag_open"] = "<li style='margin: 0px 5px' class='active'><a class='number'>";
                $config["cur_tag_close"] = "</a></li>";
                $config["num_tag_open"] = "<li class='number'>";
                $config["num_tag_close"] = "</li>";
                
                $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                $datos['trabajadores'] = $this->lista->lista_trabajadores_parte($this->session->userdata('palabra_busqueda_sigesco'), $this->session->userdata('ciudad_busqueda_sigesco'),$config["per_page"] , $page);
                $this->pagination->initialize($config);
                
                $datos["links"] = $this->pagination->create_links();

                
                $this->load->view('front_end/busqueda/trabajadores',$datos);
            }
            //////////////////////////////////////////////////////////////////////
			
            $this->load->view('front_end/footer/principal');
	}
    
    
    //////////////////////////////  F U N C I O N E S   //////////////////////////////
    
        
    
    
    //////////////////////////////////////////////////////////////////////////////////
    
    
}
