<?php


class Mijnprofiel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->helper(array('form'));
        $this->load->view('templates/header');
        $this->load->view('mijnprofiel/login_view');
        $this->load->view('templates/footer');
    }

//    public function register()
//    {
//        echo 'register';
//    }



//    public function login()
//    {
//        //$this->load->model('page_model'); //willen iets uit de database halen moetmodel aanmaken
//
//        $this->load->helper('form');
//
//        $this->load->helper(array('form', 'url'));
//
//        $this->load->library('form_validation');
//
//        $this->form_validation->set_rules('email', 'Email',
//            'trim|required|valid_email',
//            array('required' => 'Het %s-veld moet nog worden ingevuld.',
//                'Email'=>'Het %s-veld moet correct zijn')
//        );
//        $this->form_validation->set_rules('password', 'Wachtwoord',
//            'trim|required|min_length[6]|max_length[12]',
//            array('required' => 'Het %s-veld moet nog worden ingevuld.',
//                'min_length' => 'Het %s-veld moet minstens 6 en maximum 12 karakters zijn.')
//        );
//        $this->form_validation->set_rules('passconf', 'Wachtwoord bevestiging',
//            'trim|required|matches[password]',
//            array('required' => 'Het %s-veld moet nog worden ingevuld of is niet correct.',
//                'matches' => 'Het %s-veld moet matchen')
//        );
//
//
//
//        $this->load->helper('url');
//        $this->load->model('page_model');
//        $data['title']=ucfirst($page);
//        $data['dataSet']= $this->page_model->getData();
//
//        //$dataSet = $this->page_model->getData();
//        $this->load->view('templates/header',$data);
//        $this->load->view('pages/'.$page,$data);
//        $this->load->view('templates/footer',$data);
//    }
//
//    public function bewerken($user_id)
//    {
//        echo 'kom dan jonguhh... '.$user_id;
//    }
//
//    public function registreer()
//    {
//        //$this->load->model('page_model'); //willen iets uit de database halen moetmodel aanmaken
//
//        $this->load->helper('form');
//
//        $this->load->helper(array('form', 'url'));
//
//        $this->load->library('form_validation');
//
//        $this->form_validation->set_rules('nickname', 'Nickname',
//            'trim|required|min_length[3]|max_length[12]',
//            array('required' => 'Het %s-veld moet nog worden ingevuld.',
//                'min_length' => 'Het %s-veld moet minstens 3 en maximum 16 karakters zijn.')
//        );
//        $this->form_validation->set_rules('naam', 'Naam',
//            'trim|required|min_length[3]|max_length[16]',
//            array('required' => 'Het %s-veld moet nog worden ingevuld.',
//                'min_length' => 'Het %s-veld moet minstens 3 en maximum 16 karakters zijn.')
//        );
//        $this->form_validation->set_rules('password', 'Wachtwoord',
//            'trim|required|min_length[6]|max_length[12]',
//            array('required' => 'Het %s-veld moet nog worden ingevuld.',
//                'min_length' => 'Het %s-veld moet minstens 6 en maximum 12 karakters zijn.')
//        );
//        $this->form_validation->set_rules('passconf', 'Wachtwoord bevestiging',
//            'trim|required|matches[password]',
//            array('required' => 'Het %s-veld moet nog worden ingevuld of is niet correct.',
//                'matches' => 'Het %s-veld moet matchen')
//        );
//        $this->form_validation->set_rules('email', 'Email',
//            'trim|required|valid_email', //|is_unique[users.email]\
//            array('required' => 'Het %s-veld moet nog worden ingevuld.',
//                'Email'=>'Het %s-veld moet correct zijn')
//        );
//        $this->form_validation->set_rules('leeftijd', 'Leeftijd', //geboortedatum stored als leeftijd is niet handig
//            'trim|required|integer', //|is_unique[users.email]\
//            array('required' => 'Het %s-veld moet nog worden ingevuld.'));
//        //geslacht m/v
//        //min leeftijdsvoorkeur
//        //max leeftijdsvoorkeur
//        //perstype
//
//        if ($this->form_validation->run() == FALSE)
//        {
//            $this->load->view('templates/header');
//            $this->load->view('mijnprofiel/inlogscherm');
//            $this->load->view('templates/footer');
//        }
//        else
//        {
//            $this->load->view('templates/header');
//            $this->load->view('mijnprofiel/formsuccess');
//            $this->load->view('templates/footer');
//        }
//
//        $options = array(
//            'small'         => 'Small Shirt',
//            'med'           => 'Medium Shirt',
//            'large'         => 'Large Shirt',
//            'xlarge'        => 'Extra Large Shirt',
//        );
//
//        $shirts_on_sale = array('small', 'large');
//        echo form_dropdown('shirts', $options, 'large');
//
//        /*
//                Would produce:
//
//                <select name="shirts">
//                        <option value="small">Small Shirt</option>
//                        <option value="med">Medium  Shirt</option>
//                        <option value="large" selected="selected">Large Shirt</option>
//                        <option value="xlarge">Extra Large Shirt</option>
//                </select>
//        */
//
//        echo form_dropdown('shirts', $options, $shirts_on_sale);

        /*
                Would produce:

                <select name="shirts" multiple="multiple">
                        <option value="small" selected="selected">Small Shirt</option>
                        <option value="med">Medium  Shirt</option>
                        <option value="large" selected="selected">Large Shirt</option>
                        <option value="xlarge">Extra Large Shirt</option>
                </select>
        */

//        $this->load->view('pages/inlogscherm'); // een view met twee forms ofzo
//
//        $data['title']=ucfirst($page);
//        $data['dataSet']= $this->page_model->getData();
//
//        $dataSet = $this->page_model->getData();
//        $this->load->view('templates/header',$data);
//
//        echo 'login';
//    }
}

