<?php


class Mijnprofiel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('mijnprofiel/mijnprofiel');
        $this->load->view('templates/footer');
    }

    public function register()
    {
        echo 'register';
    }



    public function login()
    {



        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email',
            'trim|required|valid_email',
            array('required' => 'Het %s-veld moet nog worden ingevuld.',
                'Email'=>'Het %s-veld moet correct zijn')
        );
        $this->form_validation->set_rules('password', 'Wachtwoord',
            'trim|required|min_length[6]|max_length[12]',
            array('required' => 'Het %s-veld moet nog worden ingevuld.',
                'min_length' => 'Het %s-veld moet minstens 6 en maximum 12 karakters zijn.')
        );

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('mijnprofiel/inlogscherm');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->load->view('templates/header');
            $this->load->view('pages/home');
            $this->load->view('templates/footer');
        }

    }

    public function registreer()
    {
        //$this->load->model('page_model'); //willen iets uit de database halen moetmodel aanmaken

        $this->load->helper('form');

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('nickname', 'Nickname',
            'trim|required|min_length[3]|max_length[12]',
            array('required' => 'Het %s-veld moet nog worden ingevuld.',
                'min_length' => 'Het %s-veld moet minstens 3 en maximum 16 karakters zijn.')
        );
        $this->form_validation->set_rules('naam', 'Naam',
            'trim|required|min_length[3]|max_length[16]',
            array('required' => 'Het %s-veld moet nog worden ingevuld.',
                'min_length' => 'Het %s-veld moet minstens 3 en maximum 16 karakters zijn.')
        );
        $this->form_validation->set_rules('password', 'Wachtwoord',
            'trim|required|min_length[6]|max_length[12]',
            array('required' => 'Het %s-veld moet nog worden ingevuld.',
                'min_length' => 'Het %s-veld moet minstens 6 en maximum 12 karakters zijn.')
        );
        $this->form_validation->set_rules('passconf', 'Wachtwoord bevestiging',
            'trim|required|matches[password]',
            array('required' => 'Het %s-veld moet nog worden ingevuld of is niet correct.',
                'matches' => 'Het %s-veld moet matchen')
        );
        $this->form_validation->set_rules('email', 'Email',
            'trim|required|valid_email', //|is_unique[users.email]\
            array('required' => 'Het %s-veld moet nog worden ingevuld.',
                'Email'=>'Het %s-veld moet correct zijn')
        );
//        $this->form_validation->set_rules('leeftijd', 'Leeftijd', //geboortedatum stored als leeftijd is niet handig
//            'trim|required|integer', //|is_unique[users.email]\
//            array('required' => 'Het %s-veld moet nog worden ingevuld.'));
        //geslacht m/v
        //min leeftijdsvoorkeur
        //max leeftijdsvoorkeur
        //perstype

//        $geslacht = array(
//            'man'         => 'man',
//            'vrouw'       => 'vrouw'
//        );
//
//        //$shirts_on_sale = array('small', 'large');
//        echo form_dropdown('geslacht', $geslacht);
//
//        $geslachtsvoorkeur = array(
//            'man'         => 'man',
//            'vrouw'       => 'vrouw'
//        );
//        echo form_dropdown('geslachtsvoorkeur', $geslachtsvoorkeur);


        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('mijnprofiel/registreer');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->load->view('templates/header');
            $this->load->view('mijnprofiel/registreergelukt');
            $this->load->view('templates/footer');
        }

    }
}

