<?php
/**
 * Created by PhpStorm.
 * User: Tijmen
 * Date: 6-4-2016
 * Time: 10:47
 */
class Pages extends CI_Controller {
    #zodat de controller methodenen variabelen die gedefineerd zijn in de CI_Controller kan overnemen.

    public function view($page = 'home')
    {
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}
