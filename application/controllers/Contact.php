<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_contact');
    }

    public function index()
    {
        $data['lang']        = $this->lang;
        $data['is_en']       = $this->is_en;
        $data['lang_prefix'] = $this->lang_prefix;

        if ($this->is_en) {
            $data['keywords'] = "contact bangundaya, electrical contractor contact, bangundaya address";
            $data['description'] = "We are ready to help your electrical problems. Contact us for a free consultation without any charges.";
            $data['title'] = "Contact Us - Bangundaya.com";
            $data['canonical'] = "en/contact";

            $name_label    = "Your Name";
            $phone_label   = "Phone";
            $email_label   = "Email";
            $message_label = "Message";

            $msg_required = "cannot be empty!";
            $success_msg  = "Message sent successfully!";
            $redirect_url = "en/contact";
        } else {
            $data['keywords'] = "contact bangundaya, alamat bangundaya, kontak kontraktor listrik";
            $data['description'] = "Kami siap membantu masalah kelistrikan anda. Hubungi kami untuk berkonsultasi lebih lanjut. Gratis tanpa dikenakan biaya.";
            $data['title'] = "Kontak Kami - Bangundaya.com";
            $data['canonical'] = "contact";

            $name_label    = "Nama";
            $phone_label   = "No. Telepon";
            $email_label   = "Email";
            $message_label = "Pesan";

            $msg_required = "tidak boleh kosong!";
            $success_msg  = "Pesan berhasil dikirim!";
            $redirect_url = "contact";
        }

        $this->form_validation->set_rules('name', $name_label, 'required|trim|xss_clean', [
            'required' => $name_label . ' ' . $msg_required
        ]);

        $this->form_validation->set_rules('telp', $phone_label, 'required|trim|xss_clean', [
            'required' => $phone_label . ' ' . $msg_required
        ]);

        $this->form_validation->set_rules('email', $email_label, 'required|trim|xss_clean|valid_email', [
            'required'    => $email_label . ' ' . $msg_required,
            'valid_email' => $this->is_en ? 'Invalid email format!' : 'Format email tidak valid!'
        ]);

        $this->form_validation->set_rules('message', $message_label, 'required|trim|xss_clean', [
            'required' => $message_label . ' ' . $msg_required
        ]);

        if ($this->form_validation->run() == false) {
            $this->template->load('template', 'contact', $data);
        } else {
            $this->M_contact->add();
            $this->session->set_flashdata('info', $success_msg);
            redirect($redirect_url);
        }
    }
}