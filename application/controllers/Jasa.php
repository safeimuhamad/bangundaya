<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jasa extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('M_portofolio');
		$this->load->model('M_testimoni');
		$this->load->model('M_blog');
		$this->load->model('M_product_web');

		$this->phone = '+628111378337';
		$this->office_phone = '021 8490 8050';
		$this->office_phone_space = '021 8490 8050';

		$this->load->library('CI_URI');
	}

	public function index()
	{
		$data['lang']        = $this->lang;
		$data['is_en']       = $this->is_en;
		$data['lang_prefix'] = $this->lang_prefix;

		if ($this->is_en) {
			$data['canonical']   = "en/jasa";
			$data['keywords']    = "electrical services, electrical contractor services, electrical installation service, electrical panel service, electrical maintenance";
			$data['description'] = "With more than 10 years of experience, Bangundaya provides professional electrical services for homes, offices, commercial buildings, and industrial facilities.";
			$data['title']       = "Electrical Services - Bangundaya.com";
		} else {
			$data['canonical']   = "jasa";
			$data['keywords']    = "layanan jasa kelistrikan, jasa instalasi listrik, jasa panel listrik, jasa maintenance listrik, kontraktor listrik";
			$data['description'] = "Telah berpengalaman lebih dari 10 tahun memberikan layanan kelistrikan profesional. Hubungi kami untuk berkonsultasi lebih lanjut.";
			$data['title']       = "Layanan Jasa Kelistrikan - Bangundaya.com";
		}

		$this->template->load('template', 'services', $data);
	}

	public function instalasi_listrik()
	{
		$data['lang']        = $this->lang;
		$data['is_en']       = $this->is_en;
		$data['lang_prefix'] = $this->lang_prefix;

    // Untuk canonical & hreflang
		$data['alternate_id'] = 'jasa/instalasi-listrik';
		$data['alternate_en'] = 'en/service/electrical-installation';

		if ($this->is_en) {
			$data['canonical'] = 'en/service/electrical-installation';
			$data['keywords'] = 'electrical installation service, electrical contractor, electrician service, electrical installation for homes, building electrical installation, office electrical installation, factory electrical installation';
			$data['description'] = 'Need electrical installation services? Bangundaya provides professional electrical installation for homes, offices, buildings, and industrial facilities. Contact us for consultation.';
			$data['title'] = 'Electrical Installation Services - Bangundaya.com';
		} else {
			$data['canonical'] = 'jasa/instalasi-listrik';
			$data['keywords'] = 'tukang listrik, tukang listrik panggil, tukang listrik 24 jam, tukang listrik panggilan terdekat, tukang listrik terdekat, jasa instalasi listrik, jasa tukang listrik, upah pemasangan instalasi listrik per titik, harga instalasi listrik per titik, harga borongan instalasi listrik per titik, harga jasa penarikan kabel per meter, tukang instalasi listrik, jasa pemasangan listrik, jasa pemasangan instalasi listrik, harga pasang instalasi listrik per titik, jasa pasang listrik per titik, jasa instalasi listrik terdekat, jasa instalasi listrik per titik, biaya instalasi listrik per titik, harga borongan instalasi listrik, harga jasa pemasangan panel listrik 3 phase, harga pasang listrik pertitik, jasa pasang lampu per titik, jasa tukang listrik terdekat, tukang instalasi listrik terdekat, jasa pemasangan instalasi listrik per titik, harga jasa instalasi listrik, harga per titik instalasi listrik, jasa pasang listrik baru, harga borongan listrik per titik, jasa instalasi listrik rumah, biaya pasang instalasi listrik per titik, biaya pasang instalasi listrik pertitik, harga instalasi listrik';
			$data['description'] = 'Butuh jasa instalasi listrik? Kami menyediakan tukang listrik terdekat untuk pemasangan & instalasi listrik rumah & gedung. Hubungi kami untuk konsultasi!';
			$data['title'] = 'Jasa Instalasi Listrik – Tukang Listrik Terdekat';
		}

		$data['all_data']    = $this->M_portofolio->getInstalasi();
		$data['testimoni']   = $this->M_testimoni->getInstalasi();
		$data['new_article'] = $this->M_blog->get_data_all(3);
		$data['product']     = $this->M_product_web->getAksesoris();

		$this->template->load('template', 'service/instalasi-listrik', $data);
	}

	public function instalasi_listrik_jakarta()
	{
		$data['lang'] = $this->lang;
		$data['is_en'] = $this->is_en;
		$data['lang_prefix'] = $this->lang_prefix;

		$data['alternate_id'] = 'jasa/instalasi-listrik-jakarta';
		$data['alternate_en'] = 'en/service/electrical-installation-jakarta';

		if ($this->is_en) {
			$data['canonical'] = 'en/service/electrical-installation-jakarta';
			$data['keywords'] = 'electrical installation jakarta, electrician jakarta, electrical contractor jakarta, building electrical installation jakarta';
			$data['description'] = 'Need electrical installation services in Jakarta? Bangundaya provides professional electrical installation for homes, offices, buildings, and industrial facilities.';
			$data['title'] = 'Electrical Installation Services Jakarta - Bangundaya.com';
		} else {
			$data['canonical'] = 'jasa/instalasi-listrik-jakarta';
			$data['keywords'] = 'jasa pasang listrik baru jakarta, jasa instalasi listrik jakarta barat, jasa tukang listrik jakarta, jasa instalasi listrik jakarta selatan, tukang listrik jakarta timur, jasa instalasi listrik jakarta, harga jasa instalasi listrik jakarta, tukang listrik jakarta selatan, kontraktor elektrikal jakarta, kontraktor mekanikal elektrikal jakarta, kontraktor listrik jakarta, kontraktor mekanikal elektrikal di jakarta';
			$data['description'] = 'Butuh jasa instalasi listrik Jakarta? Kami menyediakan tukang listrik Jakarta untuk pemasangan & instalasi listrik rumah & gedung. Hubungi kami untuk konsultasi!';
			$data['title'] = 'Jasa Instalasi Listrik Jakarta – Tukang Listrik Jakarta';
		}

		$data['all_data'] = $this->M_portofolio->getInstalasi();
		$data['testimoni'] = $this->M_testimoni->getInstalasi();
		$data['new_article'] = $this->M_blog->get_data_all(3);
		$data['product'] = $this->M_product_web->getAksesoris();

		$this->template->load('template', 'service/instalasi-listrik-jakarta', $data);
	}

	public function instalasi_listrik_bekasi()
	{
		$data['lang'] = $this->lang;
		$data['is_en'] = $this->is_en;
		$data['lang_prefix'] = $this->lang_prefix;

		$data['alternate_id'] = 'jasa/instalasi-listrik-bekasi';
		$data['alternate_en'] = 'en/service/electrical-installation-bekasi';

		if ($this->is_en) {
			$data['canonical'] = 'en/service/electrical-installation-bekasi';
			$data['keywords'] = 'electrical installation bekasi, electrician bekasi, electrical contractor bekasi, building electrical installation bekasi';
			$data['description'] = 'Looking for electrical installation services in Bekasi? Bangundaya provides professional electrical installation for homes, offices, buildings, and industrial facilities.';
			$data['title'] = 'Electrical Installation Services Bekasi - Bangundaya.com';
		} else {
			$data['canonical'] = 'jasa/instalasi-listrik-bekasi';
			$data['keywords'] = 'tukang listrik bekasi, jasa instalasi listrik bekasi, jasa tukang listrik bekasi, tukang listrik bekasi timur, kontraktor listrik bekasi, kontraktor mekanikal elektrikal di bekasi';
			$data['description'] = 'Cari jasa instalasi listrik Bekasi? Kami menyediakan tukang listrik Bekasi untuk pemasangan & instalasi listrik rumah & gedung. Hubungi kami untuk konsultasi!';
			$data['title'] = 'Jasa Instalasi Listrik Bekasi – Tukang Listrik Bekasi';
		}

		$data['all_data'] = $this->M_portofolio->getInstalasi();
		$data['testimoni'] = $this->M_testimoni->getInstalasi();
		$data['new_article'] = $this->M_blog->get_data_all(3);
		$data['product'] = $this->M_product_web->getAksesoris();

		$this->template->load('template', 'service/instalasi-listrik-bekasi', $data);
	}

	public function instalasi_listrik_depok()
	{
		$data['lang'] = $this->lang;
		$data['is_en'] = $this->is_en;
		$data['lang_prefix'] = $this->lang_prefix;

		$data['alternate_id'] = 'jasa/instalasi-listrik-depok';
		$data['alternate_en'] = 'en/service/electrical-installation-depok';

		if ($this->is_en) {
			$data['canonical'] = 'en/service/electrical-installation-depok';
			$data['keywords'] = 'electrical installation depok, electrician depok, electrical contractor depok, building electrical installation depok';
			$data['description'] = 'Looking for electrical installation services in Depok? Bangundaya provides professional electrical installation for homes, offices, buildings, and industrial facilities.';
			$data['title'] = 'Electrical Installation Services Depok - Bangundaya.com';
		} else {
			$data['canonical'] = 'jasa/instalasi-listrik-depok';
			$data['keywords'] = 'tukang listrik depok, jasa instalasi listrik depok, tukang listrik cinere, jasa tukang listrik depok, tukang listrik panggilan depok, tukang listrik sawangan, kontraktor elektrikal depok, kontraktor mekanikal elektrikal depok, kontraktor listrik depok, kontraktor mekanikal elektrikal di depok';
			$data['description'] = 'Cari jasa instalasi listrik Depok? Kami menyediakan tukang listrik Depok untuk pemasangan & instalasi listrik rumah & gedung. Hubungi kami untuk konsultasi!';
			$data['title'] = 'Jasa Instalasi Listrik Depok – Tukang Listrik Depok';
		}

		$data['all_data'] = $this->M_portofolio->getInstalasi();
		$data['testimoni'] = $this->M_testimoni->getInstalasi();
		$data['new_article'] = $this->M_blog->get_data_all(3);
		$data['product'] = $this->M_product_web->getAksesoris();

		$this->template->load('template', 'service/instalasi-listrik-depok', $data);
	}

	public function instalasi_listrik_bogor()
	{
		$data['lang'] = $this->lang;
		$data['is_en'] = $this->is_en;
		$data['lang_prefix'] = $this->lang_prefix;

		$data['alternate_id'] = 'jasa/instalasi-listrik-bogor';
		$data['alternate_en'] = 'en/service/electrical-installation-bogor';

		if ($this->is_en) {
			$data['canonical'] = 'en/service/electrical-installation-bogor';
			$data['keywords'] = 'electrical installation bogor, electrician bogor, electrical contractor bogor, building electrical installation bogor';
			$data['description'] = 'Looking for electrical installation services in Bogor? Bangundaya provides professional electrical installation for homes, offices, buildings, and industrial facilities.';
			$data['title'] = 'Electrical Installation Services Bogor - Bangundaya.com';
		} else {
			$data['canonical'] = 'jasa/instalasi-listrik-bogor';
			$data['keywords'] = 'tukang listrik bogor, jasa instalasi listrik bogor, pasang listrik baru bogor, pasang listrik baru kota bogor, tukang listrik di bogor, tukang listrik panggilan bogor, kontraktor elektrikal bogor, kontraktor mekanikal elektrikal bogor, kontraktor listrik bogor, kontraktor mekanikal elektrikal di bogor';
			$data['description'] = 'Cari jasa instalasi listrik Bogor? Kami menyediakan tukang listrik Bogor untuk pemasangan & instalasi listrik rumah & gedung. Hubungi kami untuk konsultasi!';
			$data['title'] = 'Jasa Instalasi Listrik Bogor – Tukang Listrik Bogor';
		}

		$data['all_data'] = $this->M_portofolio->getInstalasi();
		$data['testimoni'] = $this->M_testimoni->getInstalasi();
		$data['new_article'] = $this->M_blog->get_data_all(3);
		$data['product'] = $this->M_product_web->getAksesoris();

		$this->template->load('template', 'service/instalasi-listrik-bogor', $data);
	}

	public function instalasi_listrik_tangerang()
	{
		$data['lang'] = $this->lang;
		$data['is_en'] = $this->is_en;
		$data['lang_prefix'] = $this->lang_prefix;

		$data['alternate_id'] = 'jasa/instalasi-listrik-tangerang';
		$data['alternate_en'] = 'en/service/electrical-installation-tangerang';

		if ($this->is_en) {
			$data['canonical'] = 'en/service/electrical-installation-tangerang';
			$data['keywords'] = 'electrical installation tangerang, electrician tangerang, electrical contractor tangerang, building electrical installation tangerang';
			$data['description'] = 'Need electrical installation services in Tangerang? Bangundaya provides professional electrical installation for homes, offices, buildings, and industrial facilities.';
			$data['title'] = 'Electrical Installation Services Tangerang - Bangundaya.com';
		} else {
			$data['canonical'] = 'jasa/instalasi-listrik-tangerang';
			$data['keywords'] = 'tukang listrik tangerang, tukang listrik bsd, jasa instalasi listrik tangerang, tukang listrik panggilan bsd, tukang listrik panggilan tangerang, kontraktor elektrikal tangerang, kontraktor mekanikal elektrikal tangerang, kontraktor listrik tangerang, kontraktor mekanikal elektrikal di tangerang';
			$data['description'] = 'Butuh jasa instalasi listrik Tangerang? Kami menyediakan tukang listrik Tangerang untuk pemasangan & instalasi listrik rumah & gedung. Hubungi kami untuk konsultasi!';
			$data['title'] = 'Jasa Instalasi Listrik Tangerang – Tukang Listrik Tangerang';
		}

		$data['all_data'] = $this->M_portofolio->getInstalasi();
		$data['testimoni'] = $this->M_testimoni->getInstalasi();
		$data['new_article'] = $this->M_blog->get_data_all(3);
		$data['product'] = $this->M_product_web->getAksesoris();

		$this->template->load('template', 'service/instalasi-listrik-tangerang', $data);
	}

	public function instalasi_listrik_serang()
	{
		$data['lang'] = $this->lang;
		$data['is_en'] = $this->is_en;
		$data['lang_prefix'] = $this->lang_prefix;

		$data['alternate_id'] = 'jasa/instalasi-listrik-serang';
		$data['alternate_en'] = 'en/service/electrical-installation-serang';

		if ($this->is_en) {
			$data['canonical'] = 'en/service/electrical-installation-serang';
			$data['keywords'] = 'electrical installation serang, electrician serang, electrical contractor serang, building electrical installation serang';
			$data['description'] = 'Looking for electrical installation services in Serang? Bangundaya provides professional electrical installation for homes, offices, buildings, and industrial facilities.';
			$data['title'] = 'Electrical Installation Services Serang - Bangundaya.com';
		} else {
			$data['canonical'] = 'jasa/instalasi-listrik-serang';
			$data['keywords'] = 'tukang listrik serang, jasa instalasi listrik serang, tukang listrik panggilan serang, kontraktor elektrikal serang, kontraktor mekanikal elektrikal serang, kontraktor listrik serang, kontraktor mekanikal elektrikal di serang';
			$data['description'] = 'Cari jasa instalasi listrik Serang? Kami menyediakan tukang listrik Serang untuk pemasangan & instalasi listrik rumah & gedung. Hubungi kami untuk konsultasi!';
			$data['title'] = 'Jasa Instalasi Listrik Serang – Tukang Listrik Serang';
		}

		$data['all_data'] = $this->M_portofolio->getInstalasi();
		$data['testimoni'] = $this->M_testimoni->getInstalasi();
		$data['new_article'] = $this->M_blog->get_data_all(3);
		$data['product'] = $this->M_product_web->getAksesoris();

		$this->template->load('template', 'service/instalasi-listrik-serang', $data);
	}

	public function panel_listrik()
	{
		$data['lang'] = $this->lang;
		$data['is_en'] = $this->is_en;
		$data['lang_prefix'] = $this->lang_prefix;

		$data['alternate_id'] = 'jasa/panel-listrik';
		$data['alternate_en'] = 'en/service/electrical-panel';

		if ($this->is_en) {
			$data['canonical'] = 'en/service/electrical-panel';
			$data['keywords'] = 'electrical panel service, electrical panel installation, 3 phase electrical panel, panel assembly service';
			$data['description'] = 'Bangundaya provides professional electrical panel assembly, installation, and 1 phase or 3 phase panel services with quality components and certified technicians.';
			$data['title'] = 'Electrical Panel Installation Services - Bangundaya.com';
		} else {
			$data['canonical'] = 'jasa/panel-listrik';
			$data['keywords'] = 'harga jasa pemasangan panel listrik 3 phase, jasa panel listrik, jasa pasang panel listrik, jasa pemasangan panel listrik 3 phase, harga jasa perakitan panel listrik, jasa perakitan panel listrik, jasa instalasi panel listrik, harga jasa pembuatan panel listrik, jasa merakit panel listrik, pemasangan panel 3 phase';
			$data['description'] = 'Kami melayani jasa perakitan, pemasangan, dan instalasi panel listrik 1 phase & 3 phase. Komponen berkualitas & teknisi bersertifikat. Konsultasi gratis!';
			$data['title'] = 'Jasa Panel Listrik & Instalasi Panel 3 Phase Profesional';
		}

		$data['all_data'] = $this->M_portofolio->getPanel();
		$data['new_article'] = $this->M_blog->get_data_all(3);
		$data['product'] = $this->M_product_web->getPanel();
		$data['testimoni'] = $this->M_testimoni->getPanel();

		$this->template->load('template', 'service/panel-listrik', $data);
	}

	public function maintenance_listrik()
	{
		$data['lang'] = $this->lang;
		$data['is_en'] = $this->is_en;
		$data['lang_prefix'] = $this->lang_prefix;

		$data['alternate_id'] = 'jasa/maintenance-electrical';
		$data['alternate_en'] = 'en/service/electrical-maintenance';

		if ($this->is_en) {
			$data['canonical'] = 'en/service/electrical-maintenance';
			$data['keywords'] = 'electrical maintenance, electrical inspection, electrical panel maintenance, building electrical maintenance';
			$data['description'] = 'Periodic electrical inspection and maintenance services for buildings and industrial facilities to prevent system failures and maintain electrical safety.';
			$data['title'] = 'Professional Electrical Inspection & Maintenance Services';
		} else {
			$data['canonical'] = 'jasa/maintenance-electrical';
			$data['keywords'] = 'maintenance electrical, maintenance listrik, inspeksi listrik, maintenance panel listrik, inspeksi instalasi listrik';
			$data['description'] = 'Layanan inspeksi & maintenance listrik berkala untuk gedung & industri. Cegah kerusakan sistem & pastikan keamanan instalasi Anda. Konsultasi gratis!';
			$data['title'] = 'Jasa Inspeksi & Maintenance Listrik Gedung Profesional';
		}

		$data['all_data'] = $this->M_portofolio->getAllPortofolio();
		$data['new_article'] = $this->M_blog->get_data_all(3);

		$this->template->load('template', 'service/maintenance-electrical', $data);
	}

	public function panel_surya()
	{
		$data['lang'] = $this->lang;
		$data['is_en'] = $this->is_en;
		$data['lang_prefix'] = $this->lang_prefix;

		$data['alternate_id'] = 'jasa/pemasangan-panel-surya';
		$data['alternate_en'] = 'en/service/solar-panel-installation';

		if ($this->is_en) {
			$data['canonical'] = 'en/service/solar-panel-installation';
			$data['keywords'] = 'solar panel installation, solar power system, rooftop solar panel, on grid solar panel, off grid solar panel';
			$data['description'] = 'Professional solar panel and solar power system installation services for homes, offices, commercial buildings, and industrial facilities.';
			$data['title'] = 'Professional Solar Panel Installation Services';
		} else {
			$data['canonical'] = 'jasa/pemasangan-panel-surya';
			$data['keywords'] = 'plts, pembangkit listrik tenaga surya, plts atap, plts off grid, plts on grid, plts grid, plts hybrid, atap panel surya, pembangkit listrik tenaga surya plts, harga plts, pemasangan plts, panel listrik tenaga surya, plts mini, paket plts, biaya pemasangan panel surya 900 watt, harga panel surya 1000 watt lengkap, biaya pemasangan plts, panel plts, panel surya off grid, plts pembangkit listrik tenaga surya, plts rumahan, atap surya, harga plts 2000 watt, paket panel surya 2000 watt, paket plts 1000 watt, plts rumah, harga plts 1000 watt, harga panel surya 500wp, harga plts 5000 watt, jasa pasang plts, paket plts 2000 watt, panel surya ongrid, plts 1000 watt, plts apung, plts komunal, plts portable, plts sederhana, harga plts rumahan, paket plts 5000 watt, paket plts off grid, panel surya atap, pasang plts off grid, pemasangan plts off grid, plts untuk rumah, biaya plts, pemasangan panel surya, instalasi panel surya, biaya pemasangan panel surya 1300 watt, pemasangan solar panel, biaya pasang panel surya, harga pasang panel surya, pemasangan solar panel di rumah, jasa pemasangan panel surya, pasang plts, instalasi solar panel, jasa pasang solar panel, biaya pemasangan solar panel, pemasangan panel surya di rumah, harga pemasangan solar panel, biaya pemasangan panel surya 2200 watt, biaya pemasangan solar panel 2200 watt, instalasi tenaga surya, instalasi panel surya untuk rumah, biaya instalasi panel surya, instalasi listrik tenaga surya, instalasi solar cell, instalasi solar panel rumah, pemasangan solar cell, pemasangan solar panel di atap, pemasangan solar panel rumah, plts atap rumah, jasa panel surya, jasa instalasi panel surya';
			$data['description'] = 'Jasa instalasi PLTS/panel surya/solar cell untuk rumah dan gedung. Harga transparan, mulai dari 900–2200 watt. Efisiensi tinggi, bergaransi, siap pasang PLTS atap.';
			$data['title'] = 'Pemasangan & Instalasi PLTS/Panel Surya Profesional';
		}

		$data['all_data'] = $this->M_portofolio->getAllPortofolio();
		$data['new_article'] = $this->M_blog->get_data_all(3);
		$data['product'] = $this->M_product_web->getPlts();

		$this->template->load('template', 'service/panel-surya', $data);
	}

	public function sewa_genset()
	{
		$data['lang'] = $this->lang;
		$data['is_en'] = $this->is_en;
		$data['lang_prefix'] = $this->lang_prefix;

		$data['alternate_id'] = 'jasa/sewa-genset';
		$data['alternate_en'] = 'en/service/generator-rental';

		if ($this->is_en) {
			$data['canonical'] = 'en/service/generator-rental';
			$data['keywords'] = 'generator rental, genset rental, rental generator set, generator rental for event, generator rental for project';
			$data['description'] = 'Generator rental services for events, projects, offices, industries, and emergency power needs. Available for daily and monthly rental.';
			$data['title'] = 'Generator Rental Services - Bangundaya.com';
		} else {
			$data['canonical'] = 'jasa/sewa-genset';
			$data['keywords'] = 'sewa genset, sewa genset terdekat, rental genset, rental genset terdekat, harga sewa genset, penyewaan genset terdekat, sewa genset 100 kva, harga sewa genset per hari, persewaan genset, sewa genset 20 kva, harga sewa genset 100 kva, penyewaan genset, sewa genset 60 kva, persewaan genset terdekat, sewa genset 80 kva, sewa genset 40 kva, jasa sewa genset, genset sewa, sewa genset 150 kva, harga sewa genset 60 kva';
			$data['description'] = 'Sewa genset 20–150 KVA untuk acara, proyek, dan darurat. Harga sewa genset harian & bulanan terjangkau. Tersedia genset silent & open. Hubungi kami!';
			$data['title'] = 'Sewa Genset Terdekat & Rental Genset Harian | Bergaransi';
		}

		$data['all_data'] = $this->M_portofolio->getGenset();
		$data['testimoni'] = $this->M_testimoni->getGenset();
		$data['new_article'] = $this->M_blog->get_data_all(3);

		$this->template->load('template', 'service/sewa-genset', $data);
	}

	public function perbaikan_listrik()
	{
		$data['lang'] = $this->lang;
		$data['is_en'] = $this->is_en;
		$data['lang_prefix'] = $this->lang_prefix;

		$data['alternate_id'] = 'jasa/perbaikan-listrik';
		$data['alternate_en'] = 'en/service/electrical-repair';

		if ($this->is_en) {
			$data['canonical'] = 'en/service/electrical-repair';
			$data['keywords'] = 'electrical repair, emergency electrical repair, electrical troubleshooting, electrical short circuit repair';
			$data['description'] = 'Emergency electrical repair services for short circuits, burned panels, and electrical failures for homes, buildings, and industrial facilities.';
			$data['title'] = '24/7 Emergency Electrical Repair Services';
		} else {
			$data['canonical'] = 'jasa/perbaikan-listrik';
			$data['keywords'] = 'jasa perbaikan listrik, jasa perbaikan listrik terdekat, jasa perbaikan listrik rumah, jasa perbaikan instalasi listrik rumah, biaya perbaikan instalasi listrik rumah, perbaikan instalasi listrik rumah, jasa perbaikan listrik konslet, tukang perbaikan listrik rumah, jasa perbaikan instalasi listrik, service instalasi listrik, tukang perbaikan listrik, jasa benerin listrik';
			$data['description'] = 'Layanan perbaikan instalasi listrik, korsleting, dan panel terbakar untuk gedung & rumah. Tanggap darurat 24/7 Jabodetabek. Hubungi teknisi berpengalaman sekarang!';
			$data['title'] = 'Jasa Perbaikan Listrik 24 Jam – Tanggap Darurat Korsleting';
		}

		$data['all_data'] = $this->M_portofolio->getAllPortofolio();
		$data['new_article'] = $this->M_blog->get_data_all(3);

		$this->template->load('template', 'service/perbaikan-listrik', $data);
	}

	public function penangkal_petir()
	{
		$data['lang'] = $this->lang;
		$data['is_en'] = $this->is_en;
		$data['lang_prefix'] = $this->lang_prefix;

		$data['alternate_id'] = 'jasa/pasang-penangkal-petir';
		$data['alternate_en'] = 'en/service/lightning-protection-grounding';

		if ($this->is_en) {
			$data['canonical'] = 'en/service/lightning-protection-grounding';
			$data['keywords'] = 'lightning protection, grounding installation, lightning rod installation, building lightning protection';
			$data['description'] = 'Professional lightning protection and grounding installation services for homes, buildings, factories, and industrial areas based on safety standards.';
			$data['title'] = 'Lightning Protection & Grounding Installation Services';
		} else {
			$data['canonical'] = 'jasa/pasang-penangkal-petir';
			$data['keywords'] = 'pasang penangkal petir, jasa pasang penangkal petir, jasa penangkal petir, instalasi penangkal petir, biaya pasang penangkal petir, harga pemasangan penangkal petir, instalasi penyalur petir, jasa pasang anti petir, harga jasa pasang penangkal petir, harga jasa pemasangan grounding, jasa grounding listrik, jasa pasang grounding, jasa pasang grounding listrik, jasa pasang grounding listrik rumah, harga pemasangan anti petir, instalasi penangkal petir gedung, instalasi penangkal petir rumah, kontraktor penangkal petir, biaya pasang grounding listrik, biaya pasang penangkal petir rumah, ongkos pasang penangkal petir, instalasi anti petir, pemasangan grounding penangkal petir';
			$data['description'] = 'Layanan pemasangan penangkal petir dan grounding listrik untuk gedung, pabrik, rumah, hingga area industri. Instalasi standar SNI & IEC. Konsultasi gratis.';
			$data['title'] = 'Jasa Pasang Penangkal Petir & Grounding Listrik Profesional';
		}

		$data['all_data'] = $this->M_portofolio->getAllPortofolio();
		$data['new_article'] = $this->M_blog->get_data_all(3);

		$this->template->load('template', 'service/penangkal-petir', $data);
	}

	public function pembuatan_slo()
	{
		$data['lang'] = $this->lang;
		$data['is_en'] = $this->is_en;
		$data['lang_prefix'] = $this->lang_prefix;

		$data['alternate_id'] = 'jasa/pembuatan-slo-listrik';
		$data['alternate_en'] = 'en/service/slo-nidi-certification';

		if ($this->is_en) {
			$data['canonical'] = 'en/service/slo-nidi-certification';
			$data['keywords'] = 'SLO certification, NIDI certification, PLN electrical certificate, electrical installation inspection';
			$data['description'] = 'Professional SLO and NIDI certification services for PLN electricity connection, electrical inspection, and installation compliance requirements.';
			$data['title'] = 'SLO & NIDI Certification Services - Bangundaya.com';
		} else {
			$data['canonical'] = 'jasa/pembuatan-slo-listrik';
			$data['keywords'] = 'harga slo dan nidi, harga nidi slo, jasa pembuatan slo pln, pembuatan nidi dan slo, pemeriksaan instalasi listrik, jasa slo listrik, pengujian instalasi listrik, sertifikat nidi pln, slo pemasangan listrik baru, biaya pembuatan nidi';
			$data['description'] = 'Layanan pembuatan SLO dan NIDI PLN untuk penyambungan listrik baru, pemeriksaan instalasi listrik, dan kebutuhan sertifikasi kelistrikan.';
			$data['title'] = 'Jasa Pembuatan SLO & NIDI PLN Profesional';
		}

		$data['all_data'] = $this->M_portofolio->getAllPortofolio();
		$data['new_article'] = $this->M_blog->get_data_all(3);

		$this->template->load('template', 'service/slo-listrik', $data);
	}

}