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

    public function login()
    {
        echo 'login';
    }
}

