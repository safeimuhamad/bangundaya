<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_blog');
		$this->load->model('M_portofolio');
		$this->load->model('M_testimoni');
		$this->load->model('M_product_web');
	}

	public function index()
	{
		$lang = $this->lang;

		$data['lang']        = $this->lang;
		$data['is_en']       = $this->is_en;
		$data['lang_prefix'] = $this->lang_prefix;

    // META SEO
		if ($this->is_en) {
			$data['title'] = "Electrical Contractor Company - Professional Electrical Services";
			$data['keywords'] = "electrical contractor, electrical installation contractor, panel contractor, MEP contractor, electrical services company";
			$data['description'] = "Looking for a reliable electrical contractor? We provide professional electrical installation and services. Contact us today!";
		} else {
			$data['title'] = "Kontraktor Listrik - Perusahaan Kontraktor Elektrikal";
			$data['keywords'] = "kontraktor mekanikal elektrikal, perusahaan kontraktor listrik, me kontraktor, kontraktor instalasi listrik, kontraktor listrik pln, kontraktor pln, kontraktor panel listrik, kontraktor me, kontraktor elektrikal, kontraktor listrik";
			$data['description'] = "Cari kontraktor listrik? Kami menyediakan jasa kontraktor elektrikal berkualitas & berpengalaman. Hubungi kami sekarang!";
		}

		$data['all_data']    = $this->M_portofolio->getKontraktor();
		$data['testimoni']   = $this->M_testimoni->getKontraktor();
		$data['product']     = $this->M_product_web->getAksesoris();
		$data['new_article'] = $this->M_blog->get_data_all(3);

		$this->template->load('template', 'home', $data);
	}

	public function get_data_blog_json()
	{
		$data = $this->M_blog->get_data_blog_json();
		echo json_encode($data);
	}
}