<?php
class News_model extends CI_Model {

    /**
     * News_model constructor.
     */
    public function __construct()
    {
        $this->load->database();
        parent::__construct();
        $this->db->query('CREATE TABLE news (
        id int(11) NOT NULL AUTO_INCREMENT,
        title varchar(128) NOT NULL,
        slug varchar(128) NOT NULL,
        text text NOT NULL,
        PRIMARY KEY (id),
        KEY slug (slug)
);');
    }
}


public function get_news($slug = FALSE)
{
    if ($slug === FALSE)
    {
        $query = $this->db->get('news');
        return $query->result_array();
    }

    $query = $this->db->get_where('news', array('slug' => $slug));
    return $query->row_array();
}
