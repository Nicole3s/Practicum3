<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_model extends CI_Model{
    public function getTestData(){

        return $this->db->get('test')->result();
    }

}