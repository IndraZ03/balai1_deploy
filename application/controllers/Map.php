<?php
class Map extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
        $this->load->model('DatabaseEsign');
        //is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Peta Wilayah';


        $this->load->view('map/index');
    }
}
