<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Locate_Inmate extends CI_Controller {

/**
   class comments 
 
 */

   public function __construct()
   {
     parent::__construct(); 
       // Your own constructor code
   }

   public function index()
   {
       $this->load->view('locate_inmate');
   }

}

/* End of file Locate_Inmate.php */
