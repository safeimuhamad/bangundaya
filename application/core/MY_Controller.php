<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public $lang;
    public $is_en;
    public $lang_prefix;

    public function __construct()
    {
        parent::__construct();

        // Ambil dari URL segment
        $segment1 = $this->uri->segment(1);

        if ($segment1 == 'en') {
            $this->lang = 'en';
            $this->is_en = true;
            $this->lang_prefix = 'en/';
        } else {
            $this->lang = 'id';
            $this->is_en = false;
            $this->lang_prefix = '';
        }
    }
}