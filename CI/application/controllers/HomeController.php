<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
* Author- Ronan Dineen
* Assignment WI 2.0, CodeIgniter MVC Webservice, Digital Skills Academy
* Student ID: D14126351
 Date : 10/06/2015
* Ref: https://ellislab.com/codeigniter/user-guide/database/active_record.html
* Ref: https://www.youtube.com/watch?v=IOZqRgOgSu4
* Ref: http://rogue-systems.com/2013/01/24/return-json-with-codeigniter/
*/


/*
 * This controller allows an API to query the databse by parameters 'get_by_name' AND
 * 'get_by_details'
 * The idea is that it would tie in with a dynamic list application (JQM) 
 * There is a mod rewrite to remove 'index.php'
 * Exported database in root
 */
class HomeController extends CI_Controller {
    
   //to load the model automatically using the following method:
    public function __construct() {
        parent::__construct();
        $this->load->model('HomeModel');
    }   
    
    //takes value from method in HomeModel and assigns it to an array and sent to
    //the view. Elimates need to iterate or echo json in the view
    public function get_by_name($data = null){
        $result['json'] = $this->HomeModel->get_by_name($data);
        $this->load->view('DataView', $result['json']);
        
    }
    
    public function get_by_details($name = null){
        $result['json'] = $this->HomeModel->get_by_details($name);
        $this->load->view('DetailsView', $result['json']);
    }
    
  
}

