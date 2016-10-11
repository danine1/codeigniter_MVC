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


class HomeModel extends CI_Model {
    
    //output a list all the values in the table 'bands'
    public function get_by_name($data){
        
        
        //by looking for a null value the output will be all records in the table
        //in the bands table of service_db 
        if($data === null){
        $this->db->select(`id`, `bandname`, `start_date`, `bio`, `email`);
        $this->db->from('bands');
        $query = $this->db->get();
        }else{
        //output specific values according to the input
        $this->db->select('data');
        $query = $this->db->get_where('bands', (['data' => $data]));
        if($this->db->count_all_results('bands') === 1){
            return $query->rows();
        }
        }
        
        //intercept output and convert data to json
        $json = $this->output->
                set_content_type('Content-Type: application/json; charset=utf-8')
                ->set_output(json_encode($query->result_array()));
        
        return $json;
        
    }
    
    //output each bandname or is there is any value for name( any variable)
    public function get_by_details($data){
        
        
        if($data === null){
        $this->db->select('bandname');
        $this->db->from('bands');
        $query = $this->db->get();
        }else{
        $this->db->select('bandname');
        $query = $this->db->get_where('bands',['bandname' => $data]);
        if($this->db->count_all_results('bands') === 1){
            return $query->row();
        }
        }
        $json = $this->output->
                set_content_type('Content-Type: application/json; charset=utf-8')
                ->set_output(json_encode($query->result_array()));
        
        return $json;
        
}

    
    

}

