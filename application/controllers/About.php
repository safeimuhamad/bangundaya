<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_portofolio');
        $this->load->library('form_validation');
        $this->load->model('M_contact');
    }

    public function index()
    {
        $data['lang']        = $this->lang;
        $data['is_en']       = $this->is_en;
        $data['lang_prefix'] = $this->lang_prefix;

        if ($this->is_en) {
            $data['keywords'] = "bangundaya company profile, electrical contractor company, electrical services company indonesia";
            $data['description'] = "Bangundaya.com is an electrical contractor company providing professional electrical installation, maintenance, panels, and energy solutions for residential, commercial, and industrial projects.";
            $data['title'] = "About Us - Bangundaya.com";
            $data['canonical'] = "en/profile";

            $name_label    = "Your Name";
            $phone_label   = "Phone";
            $service_label = "Service";
            $message_label = "Message";

            $success_msg = "Estimate service sent successfully!";
            $redirect_url = "en/profile";
        } else {
            $data['keywords'] = "website bangundaya, company profile bangundaya, kontraktor listrik bangundaya, kontraktor elektrikal indonesia";
            $data['description'] = "Bangundaya.com merupakan perusahaan kontraktor elektrikal yang melayani instalasi listrik, panel listrik, maintenance, dan solusi energi untuk rumah, gedung, komersial, dan industri.";
            $data['title'] = "Tentang Kami - Bangundaya.com";
            $data['canonical'] = "profile";

            $name_label    = "Nama";
            $phone_label   = "No. Telepon";
            $service_label = "Layanan";
            $message_label = "Pesan";

            $success_msg = "Permintaan estimasi berhasil dikirim!";
            $redirect_url = "profile";
        }

        $this->form_validation->set_rules('name', $name_label, 'required|trim|xss_clean', [
            'required' => $name_label . ' tidak boleh kosong!'
        ]);

        $this->form_validation->set_rules('telp', $phone_label, 'required|trim|xss_clean', [
            'required' => $phone_label . ' tidak boleh kosong!'
        ]);

        $this->form_validation->set_rules('service', $service_label, 'required|trim|xss_clean', [
            'required' => $service_label . ' tidak boleh kosong!'
        ]);

        $this->form_validation->set_rules('message', $message_label, 'required|trim|xss_clean', [
            'required' => $message_label . ' tidak boleh kosong!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->template->load('template', 'about', $data);
        } else {
            $this->M_contact->add();
            $this->session->set_flashdata('info', $success_msg);
            redirect($redirect_url);
        }
    }
}