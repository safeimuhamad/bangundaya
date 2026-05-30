<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoniadmin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('micool_app') != TRUE) {
            redirect('login');
        }
        $this->load->library('form_validation');
        $this->load->model('M_testimoni');
    }

    public function index()
    {
        $this->template->load('tmp_admin', 'admin/testimoni/list');
    }

    public function list()
    {
        $data = $this->M_testimoni->list();
        echo json_encode($data);
    }
	
    public function add() {
        ob_start();
        
        $this->form_validation->set_rules('testimoni_name', 'testimoni Name', 'required|trim|xss_clean', ['required' => 'testimoni Name cannot be empty!']);
        $this->form_validation->set_rules('category', 'Category', 'required|trim|xss_clean', ['required' => 'Category Name cannot be empty!']);
        $this->form_validation->set_rules('message', 'Message', 'required|trim|xss_clean', ['required' => 'Message Name cannot be empty!']);
        
        if ($this->form_validation->run() == false) {
            $data['category'] = $this->M_testimoni->category();
            $this->template->load('tmp_admin', 'admin/testimoni/add', $data);
        } else {
            if ($this->M_testimoni->add()) {
                $this->session->set_flashdata('info', 'testimoni data stored successfully!');
                redirect('testimoniadmin');
            } else {
                $this->session->set_flashdata('danger', 'Sorry, There is something wrong!');
                redirect('testimoniadmin');
            }
        }
        
        ob_end_flush();
    }

    public function update($id = null)
    {
        $this->form_validation->set_rules('testimoni_name', 'testimoni Name', 'required|trim|xss_clean', ['required' => 'testimoni Name cannot be empty!']);
        if ($this->form_validation->run() == false) {
            $data['data_testimoni'] = $this->M_testimoni->get_data($id);
            $data['category'] = $this->M_testimoni->category();
            $this->template->load('tmp_admin', 'admin/testimoni/update', $data);
        } else {
            if ($this->M_testimoni->update($id)) {
                $this->session->set_flashdata('info', 'testimoni data updated successfully!');
                redirect('testimoniadmin');
            } else {
                $this->session->set_flashdata('danger', 'Sorry, There is something wrong!');
                redirect('testimoniadmin');
            }
        }
    }

    public function delete_testimoni($id = null)
    {
        if ($this->M_testimoni->delete_testimoni($id)) {
            $this->session->set_flashdata('info', 'testimoni has been deleted!');
            redirect('testimoniadmin');
        } else {
            $this->session->set_flashdata('info', 'Sorry, There is something wrong!');
            redirect('testimoniadmin');
        }
    }
}
