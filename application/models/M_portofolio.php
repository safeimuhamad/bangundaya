<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_portofolio extends CI_Model
{
    public function get_data_category()
    {
        $query = $this->db->get('category');
        return $query->result_array();
    }

    public function getPortofolioByKategori($kategori)
    {
        // Query database untuk mengambil portofolio dengan kategori yang sesuai
        $query = $this->db->get_where('portofolio', array('category' => $kategori));

        // Mengembalikan hasil query sebagai array
        return $query->result_array();
    }



    public function getAllPortofolio()
    {
    // Query database untuk mengambil maksimal 10 data portofolio
        $query = $this->db->limit(6)->get('portofolio');

    // Mengembalikan hasil query sebagai array
        return $query->result_array();
    }

    public function getKontraktor()
    {
        // Query database untuk mengambil maksimal 6 data portofolio kategori Kontraktor Elektrikal
        $query = $this->db
                    ->where('category', 'Kontraktor Elektrikal')
                    ->limit(6)
                    ->get('portofolio');

        return $query->result_array();
    }

    public function getInstalasi()
    {
        // Query database untuk mengambil maksimal 6 data portofolio kategori Kontraktor Elektrikal
        $query = $this->db
                    ->where('category', 'Instalasi Listrik')
                    ->limit(6)
                    ->get('portofolio');

        return $query->result_array();
    }

    public function getPanel()
    {
        // Query database untuk mengambil maksimal 6 data portofolio kategori Kontraktor Elektrikal
        $query = $this->db
                    ->where('category', 'Panel Listrik')
                    ->limit(6)
                    ->get('portofolio');

        return $query->result_array();
    }

    public function getGenset()
    {
        // Query database untuk mengambil maksimal 6 data portofolio kategori Kontraktor Elektrikal
        $query = $this->db
                    ->where('category', 'Sewa Genset')
                    ->limit(6)
                    ->get('portofolio');

        return $query->result_array();
    }

    public function add()
    {
        $portofolio_name = $this->input->post('portofolio_name', true);
        $category = $this->input->post('category', true);
        echo $portofolio_name . "|" . $_FILES['foto']['name'];
        $no_random = rand(1, 10000);
        $this->load->library('upload');
        $config['upload_path'] = './template/assets_admin/portofolio';
        $config['allowed_types'] = 'webp|jpg|jpeg|png|JPG|JPEG|PNG';
        $config['max_size'] = '5020';
        $config['file_name'] = $no_random . '.webp';
        $config['overwrite'] = true;
        $this->upload->initialize($config);
        if (!empty($_FILES['foto']['name'])) {
            if ($this->upload->do_upload('foto')) {
                $data = [
                    'portofolio_name' => $portofolio_name,
                    'category' => $category,
                    'foto' => base64_encode($no_random . '.webp'),
                ];
                return $this->db->insert('portofolio', $data);
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function get_all_data()
    {
        $this->db->order_by('id_portofolio', 'DESC');
        $query = $this->db->get('portofolio');
        return $query->result_array();
    }

    public function get_portofolio_limit()
    {
        $this->db->order_by('id_portofolio', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get('portofolio');
        return $query->result_array();
    }

    public function get_data_by_category($category)
    {
        $this->db->where('category', $category);
        $this->db->order_by('id_portofolio', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get('portofolio');

        // Debugging: Tampilkan query yang dijalankan
        // echo $this->db->last_query();

        return $query->result_array();
    }

    public function get_data_portofolio_json()
    {
        $filter = $this->input->post("filter");
        if ($filter != 'all') {
            $this->db->where("category", $filter);
        }
        return $this->db->get('portofolio')->result();
    }

    public function get_data($id)
    {
        return $this->db->get_where('portofolio', ['id_portofolio' => $id])->row();
        //return $query->result_array();
    }

    public function category()
    {
        // $query = $this->db->get_where('category',['type' => 'portofolio']);
        //return $query->result_array();

        //$query = $this->db->get_where('category',['type' => "portofolio"]);
        //return $query->result_array();
        return $this->db->get_where('category', ['type' => 'portofolio'])->result();
    }

    public function get_data_all()
    {
        return $this->db->get('portofolio')->result();
    }

    public function update($id)
    {
        $portofolio_name = $this->input->post('portofolio_name', true);
        $category = $this->input->post('category', true);
        $no_random = rand(1, 10000);
        $this->load->library('upload');
        $config['upload_path'] = './template/assets_admin/portofolio/';
        $config['allowed_types'] = 'webp|jpg|jpeg|png|JPG|JPEG|PNG';
        $config['max_size'] = '5020';
        $config['file_name'] = $no_random . '.webp';
        $config['overwrite'] = true;
        $this->upload->initialize($config);
        if (!empty($_FILES['foto']['name'])) {
            if ($this->upload->do_upload('foto')) {
                $data = [
                    'portofolio_name' => $portofolio_name,
                    'category' => $category,
                    'foto' => base64_encode($no_random . '.webp'),
                ];
                $this->db->where('id_portofolio', $id);
                return $this->db->update('portofolio', $data);
            } else {
                // echo "gagal1";
                return false;
            }
        } else {
            // echo "gagal2";
            $data = [
                'portofolio_name' => $portofolio_name,
                'category' => $category,
            ];
            $this->db->where('id_portofolio', $id);
            return $this->db->update('portofolio', $data);
        }
    }

    public function list()
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;

        // if (!empty($_POST['search']['value'])) {
        //     $keyword = $_POST['search']['value'];
        //     $this->db->like('portofolio_name', $keyword);
        //     $this->db->or_like('category', $keyword);
        //     $this->db->order_by('id_portofolio', 'DESC');
        //     $query = $this->db->get('portofolio');
        // } else {
        //     $this->db->order_by('id_portofolio', 'DESC');
        //     $query = $this->db->get('portofolio');
        // }
        // $count_all = $query->num_rows();
        // $this->db->limit($start, $length);
        // $data_tabel = $query->result();
        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT * FROM portofolio WHERE
            portofolio_name LIKE '%$keyword%'
            OR category LIKE '%$keyword%'
            ORDER BY id_portofolio DESC";
            $count_all = $this->db->query($query)->num_rows();
            $data_tabel = $this->db->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT * FROM portofolio ORDER BY id_portofolio DESC";
            $count_all = $this->db->query($query)->num_rows();
            $data_tabel = $this->db->query($query . " LIMIT $start,$length")->result();
        }
        foreach ($data_tabel as $hasil) {
            $row = array();
            $row[] = $no++;
            $row[] = '<center><a target="_blank" href="' . base_url() . 'template/assets_admin/portofolio/' . base64_decode($hasil->foto) . '" ><img height="60px" src="' . base_url() . 'template/assets_admin/portofolio/' . base64_decode($hasil->foto) . '" /></a></center>';
            $row[] = $hasil->portofolio_name;
            $row[] = $hasil->category;
            $row[] = '<a class="btn btn-success btn-xs" href="' . base_url() . 'portofolioadmin/update/' . $hasil->id_portofolio . '"><i class="fa fa-edit"></i> Update</a>
            <button class="btn btn-danger btn-xs" onclick="buttonDelete(' . $hasil->id_portofolio . ');"><i class="fa fa-trash"></i> Delete</button>';
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $count_all,
            "recordsFiltered" => $count_all,
            "data" => $data,
        );
        return $output;
    }

    public function delete_portofolio($id)
    {
        $this->db->where('id_portofolio', $id);
        $foto = $this->db->get('portofolio')->row();
        $foto = base64_decode($foto->foto);
        $path_mhs = './template/assets_admin/portofolio/';
        @unlink($path_mhs . $foto);
        $this->db->where('id_portofolio', $id);
        return $this->db->delete('portofolio');
    }
}
