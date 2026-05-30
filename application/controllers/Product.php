<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_product_web');
    }
    public function index()
    {
        $data['lang']        = $this->lang;
        $data['is_en']       = $this->is_en;
        $data['lang_prefix'] = $this->lang_prefix;

        $data['phone']              = "+6281384250674";
        $data['office_phone']       = "02184908050";
        $data['office_phone_space'] = "021-8490-8050";

        if ($this->is_en) {
            $data['title_header'] = "Product";
            $data['canonical']    = "en/product";

            $data['keywords'] = "electrical materials, electrical products, electrical panels, generator set, solar panel, electrical accessories";
            $data['description'] = "Get information about electrical products and materials. We provide various high-quality electrical materials. Contact our sales team for a free consultation.";
            $data['title'] = "Product - Bangundaya.com";
        } else {
            $data['title_header'] = "Produk";
            $data['canonical']    = "product";

            $data['keywords'] = "material listrik, produk listrik, panel listrik, genset, panel surya, aksesoris listrik";
            $data['description'] = "Dapatkan informasi terkait produk dan material listrik. Menyediakan berbagai material listrik dengan kualitas tinggi. Hubungi tim sales kami untuk diskusi lebih lanjut secara gratis!";
            $data['title'] = "Produk - Bangundaya.com";
        }

        $data['panel']     = $this->M_product_web->getPanel();
        $data['genset']    = $this->M_product_web->getGenset();
        $data['aksesoris'] = $this->M_product_web->getAksesoris();
        $data['plts']      = $this->M_product_web->getPlts();

        $this->template->load('template', 'product', $data);
    }

    public function detail($slug = null)
    {
        $data['keywords'] = "Atap Alderon, Atap Kanopi Rumah, Bahan Bahan Kanopi, Besi Hollow Galvanis, Stainless Stell, Rangka Baja Ringan, Material Bangunan";
        $data['description'] = "Kami menyediakan layanan pemasangan kanopi, jasa bangun rumah dan renovasi rumah berkualitas tinggi. Tim ahli kami siap membantu Anda dalam proses konstruksi.";

        $data['phone'] = "+6281384250674";
        $data['office_phone'] = "02184908050";
        $data['office_phone_space'] = "021-8490-8050";

        $data['data_product'] = $this->M_product_web->get_data($slug);
        $data['data_product_all'] = $this->M_product_web->get_data_all(5);
        $data['title'] = $data['data_product']->product_name; // Mengatur judul berdasarkan produk yang sedang di-detail
        $data['title_header'] = $data['data_product']->product_name; // Mengatur judul header berdasarkan produk yang sedang di-detail

        $this->template->load('template', 'product_detail', $data);
    }


    public function get_data_product_json()
    {
        $data = $this->M_product_web->get_data_product_json();
        echo json_encode($data);
    }
}