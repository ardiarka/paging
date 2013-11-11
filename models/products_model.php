<?php
class Products_model extends CI_Model {


function __construct()
    {        
        parent::__construct();
    }
	
	//fungsimembuat page
	public function load_table($limit, $start)
    {
            $this->db->limit($limit, $start);
return $this->db->get('products')->result();
    }

}
