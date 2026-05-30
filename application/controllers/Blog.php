<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_blog');
    }
    public function index()
    {
        $data['lang']        = $this->lang;
        $data['is_en']       = $this->is_en;
        $data['lang_prefix'] = $this->lang_prefix;

        if ($this->is_en) {
            $data['keywords'] = "electrical information, electrical tips, electrical installation tips, electrical contractor blog";
            $data['description'] = "Find useful content about electrical systems, electrical installation tips, maintenance insights, and other electrical information.";
            $data['title'] = "Latest Electrical Insights and Information - Bangundaya.com";
            $data['canonical'] = "en/blog";
        } else {
            $data['keywords'] = "informasi seputar dunia kelistrikan, tips instalasi listrik, artikel listrik, blog kontraktor listrik";
            $data['description'] = "Temukan beragam konten menarik tentang kelistrikan, tips instalasi listrik, maintenance listrik, dan informasi lainnya.";
            $data['title'] = "Informasi Terkini Seputar Dunia Kelistrikan - Bangundaya.com";
            $data['canonical'] = "blog";
        }

        $this->template->load('template', 'blog', $data);
    }
    public function detail($slug = null)
    {
        $has_en_version = false;
        $data['data_blog'] = $this->M_blog->get_data($slug);

        if ($data['data_blog']) {
            $content = $data['data_blog']->content;
            $title = $data['data_blog']->title;
            $data['keywords'] = $title;
            $data['description'] = strip_tags(substr($content, 0, 150));
            $data['title_header'] = $title;

            $id_cari = $data['data_blog']->id_blog;
            $id_artikel_terdekat = $this->M_blog->cariIdArtikelTerdekat($id_cari);
            $data['baca_juga'] = $this->M_blog->get_data_by($id_artikel_terdekat);

        // Pastikan $data['baca_juga'] tidak null sebelum mengakses properti title
            if ($data['baca_juga']) {
                $baca_juga = $data['baca_juga']->title;
            } else {
            $baca_juga = null; // atau tindakan lain yang sesuai
        }

        // Update $title after assigning to $data['title_header']
        $title = substr($title, 0, 45);
        $data['title'] = $title . " - Bangundaya.com";
        $data['canonical'] = "blog/" . $slug;
        $data['data_blog_all'] = $this->M_blog->get_data_all(5);
        $this->template->load('template', 'detail_blog', $data);
    } else {
        $data['title'] = "Blog tidak ditemukan";
        $data['keywords'] = "";
        $data['description'] = "Artikel blog tidak ditemukan.";
        $this->template->load('template', 'error_blog', $data);
    }
}
}