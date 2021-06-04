<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
class Item extends CI_Controller {
   
   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct(); 
  
      $this->load->library('form_validation');
      $this->load->library('session');
   }
   
   /**
    * Create from display on this method.
    *
    * @return Response
   */
   public function index()
   {
      $this->load->view('item');
   }
   
   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function itemForm()
   {
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'required');
   
        if ($this->form_validation->run() == FALSE){
            $this->load->view('item'); 
        }else{
           echo json_encode(['success'=>'Record added successfully.']);
        }
    }
}