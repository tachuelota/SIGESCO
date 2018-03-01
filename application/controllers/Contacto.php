<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

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
			$this->load->view('front_end/header/principal');
			$this->load->view('front_end/menu_top/invitado');
            $this->load->view('front_end/contacto/invitado');
			$this->load->view('front_end/footer/principal');
	}
    
    ///////////////////////////////////////////////////////////////////////////
    
    //////////////////////////////  F U N C I O N E S   //////////////////////////////
    public function enviar_mensaje()
	{
        $config = Array(
            'protocol' => 'sendmail',
            'mailtype' => 'html',
            'smtp_host' => 'mail.sigesco.cl', //your SMTP host
            'smtp_port' => 26,
            'smtp_user' => 'no-responder@sigesco.cl', //your SMTP email address
            'smtp_pass' => 'system2012', //your SMTP email password
            'charset' => 'utf-8',
            'wordwrap' => TRUE
        );
        ////////////////////// M E N S A J E   U S U A R I O  //////////////////////////////
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->set_header('MIME-Version', '1.0; charset=utf-8'); //must add this line
        $this->email->set_header('Content-type', 'text/html'); //must add this line
        $this->email->from('no-responder@sigesco.cl', 'SIGESCO - Respuesta Automática', 'contacto@sigesco.cl');
        $this->email->to($this->input->post('email_mensaje'));
        $this->email->subject('Respuesta Automatica de SIGESCO');
                    
        $datos['nombre'] = $this->input->post('nombre_mensaje',TRUE);
        $datos['email'] = $this->input->post('email_mensaje',TRUE);
        $datos['telefono'] = $this->input->post('telefono_mensaje',TRUE);
        $datos['mensaje'] = $this->input->post('cuerpo_mensaje',TRUE);
        $mensaje = $this->load->view('emails/email_respuesta_automatica',$datos,true);
        ///////////////////////////////////////////////////////////////////////////////////            
        $this->email->message($mensaje);   

        if($this->email->send()){
            $this->email->set_newline("\r\n");
            $this->email->set_header('MIME-Version', '1.0; charset=utf-8'); //must add this line
            $this->email->set_header('Content-type', 'text/html'); //must add this line
            $this->email->from($this->input->post('email_mensaje',TRUE), $this->input->post('nombre_mensaje',TRUE) );
            $this->email->to('contacto@sigesco.cl');
            $this->email->subject('Mensaje desde SIGESCO');

            $mensaje = '';
            
            $mensaje .= 'Mensaje de '.$this->input->post('nombre_mensaje',TRUE).", Teléfono :".$this->input->post('telefono_mensaje',TRUE).", Email:".$this->input->post('email',TRUE).". Y su mensaje es: ".$this->input->post('cuerpo_mensaje',TRUE);
            $this->email->message($mensaje);
   
            if($this->email->send()){
                echo TRUE;
            }else{
                echo FALSE;
            }
        }
    }
    //////////////////////////////////////////////////////////////////////////////////
}
