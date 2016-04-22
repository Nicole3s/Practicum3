<?php


class Mijnprofiel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo "appeltaart is lekker";
    }

    public function register()
    {
        echo 'register';
    }

    public function like($user_id)
    {
        echo 'like with param '.$user_id;
    }

    public function bewerken($user_id)
    {
        echo 'kom dan jonguhh... '.$user_id;
    }

    public function login()
    {
        //$this->load->model('page_model'); //willen iets uit de database halen moetmodel aanmaken

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('mijnprofiel/inlogscherm');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->load->view('templates/header');
            $this->load->view('mijnprofiel/formsuccess');
            $this->load->view('templates/footer');
        }

//        $this->load->view('pages/inlogscherm'); // een view met twee forms ofzo
//
//        $data['title']=ucfirst($page);
//        $data['dataSet']= $this->page_model->getData();
//
//        $dataSet = $this->page_model->getData();
//        $this->load->view('templates/header',$data);
//
//        echo 'login';
    }
}

