<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_testimoni extends CI_Model
{
    public function get_data_category()
    {
        $query = $this->db->get('category');
        return $query->result_array();
    }

    public function gettestimoniByKategori($kategori)
    {
        // Query database untuk mengambil testimoni dengan kategori yang sesuai
        $query = $this->db->get_where('testimoni', array('category' => $kategori));

        // Mengembalikan hasil query sebagai array
        return $query->result_array();
    }



    public function getAlltestimoni()
    {
    // Query database untuk mengambil maksimal 10 data testimoni
        $query = $this->db->limit(6)->get('testimoni');

    // Mengembalikan hasil query sebagai array
        return $query->result_array();
    }

    public function getKontraktor()
    {
        // Query database untuk mengambil maksimal 6 data testimoni kategori Kontraktor Elektrikal
        $query = $this->db
                    ->where('category', 'Kontraktor Listrik')
                    ->limit(6)
                    ->get('testimoni');

        return $query->result_array();
    }

    public function getInstalasi()
    {
        // Query database untuk mengambil maksimal 6 data testimoni kategori Kontraktor Elektrikal
        $query = $this->db
                    ->where('category', 'Instalasi Listrik')
                    ->limit(6)
                    ->get('testimoni');

        return $query->result_array();
    }

    public function getPanel()
    {
        // Query database untuk mengambil maksimal 6 data testimoni kategori Kontraktor Elektrikal
        $query = $this->db
                    ->where('category', 'Panel Listrik')
                    ->limit(6)
                    ->get('testimoni');

        return $query->result_array();
    }

    public function getGenset()
    {
        // Query database untuk mengambil maksimal 6 data testimoni kategori Kontraktor Elektrikal
        $query = $this->db
                    ->where('category', 'Sewa Genset')
                    ->limit(6)
                    ->get('testimoni');

        return $query->result_array();
    }

    public function add()
    {
        $testimoni_name = $this->input->post('testimoni_name', true);
        $message        = $this->input->post('message', true);
        $category       = $this->input->post('category', true);

        $data = [
            'testimoni_name' => $testimoni_name,
            'message'        => $message,
            'category'       => $category,
        ];

        return $this->db->insert('testimoni', $data);
    }


    public function get_all_data()
    {
        $this->db->order_by('id_testimoni', 'DESC');
        $query = $this->db->get('testimoni');
        return $query->result_array();
    }

    public function get_testimoni_limit()
    {
        $this->db->order_by('id_testimoni', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get('testimoni');
        return $query->result_array();
    }

    public function get_data_by_category($category)
    {
        $this->db->where('category', $category);
        $this->db->order_by('id_testimoni', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get('testimoni');

        // Debugging: Tampilkan query yang dijalankan
        // echo $this->db->last_query();

        return $query->result_array();
    }

    public function get_data_testimoni_json()
    {
        $filter = $this->input->post("filter");
        if ($filter != 'all') {
            $this->db->where("category", $filter);
        }
        return $this->db->get('testimoni')->result();
    }

    public function get_data($id)
    {
        return $this->db->get_where('testimoni', ['id_testimoni' => $id])->row();
        //return $query->result_array();
    }

    public function category()
    {
        // $query = $this->db->get_where('category',['type' => 'testimoni']);
        //return $query->result_array();

        //$query = $this->db->get_where('category',['type' => "testimoni"]);
        //return $query->result_array();
        return $this->db->get_where('category', ['type' => 'testimoni'])->result();
    }

    public function get_data_all()
    {
        return $this->db->get('testimoni')->result();
    }

    public function update($id)
    {
        $testimoni_name = $this->input->post('testimoni_name', true);
        $category = $this->input->post('category', true);
        $no_random = rand(1, 10000);
        $this->load->library('upload');
        $config['upload_path'] = './template/assets_admin/testimoni/';
        $config['allowed_types'] = 'webp|jpg|jpeg|png|JPG|JPEG|PNG';
        $config['max_size'] = '5020';
        $config['file_name'] = $no_random . '.webp';
        $config['overwrite'] = true;
        $this->upload->initialize($config);
        if (!empty($_FILES['foto']['name'])) {
            if ($this->upload->do_upload('foto')) {
                $data = [
                    'testimoni_name' => $testimoni_name,
                    'category' => $category,
                    'foto' => base64_encode($no_random . '.webp'),
                ];
                $this->db->where('id_testimoni', $id);
                return $this->db->update('testimoni', $data);
            } else {
                // echo "gagal1";
                return false;
            }
        } else {
            // echo "gagal2";
            $data = [
                'testimoni_name' => $testimoni_name,
                'category' => $category,
            ];
            $this->db->where('id_testimoni', $id);
            return $this->db->update('testimoni', $data);
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
        //     $this->db->like('testimoni_name', $keyword);
        //     $this->db->or_like('category', $keyword);
        //     $this->db->order_by('id_testimoni', 'DESC');
        //     $query = $this->db->get('testimoni');
        // } else {
        //     $this->db->order_by('id_testimoni', 'DESC');
        //     $query = $this->db->get('testimoni');
        // }
        // $count_all = $query->num_rows();
        // $this->db->limit($start, $length);
        // $data_tabel = $query->result();
        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT * FROM testimoni WHERE
            testimoni_name LIKE '%$keyword%'
            OR category LIKE '%$keyword%'
            ORDER BY id_testimoni DESC";
            $count_all = $this->db->query($query)->num_rows();
            $data_tabel = $this->db->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT * FROM testimoni ORDER BY id_testimoni DESC";
            $count_all = $this->db->query($query)->num_rows();
            $data_tabel = $this->db->query($query . " LIMIT $start,$length")->result();
        }
        foreach ($data_tabel as $hasil) {
            $row = array();
            $row[] = $no++;
            $row[] = $hasil->testimoni_name;

            // batasi message 30 karakter
            $message = strlen($hasil->message) > 30 
                ? substr($hasil->message, 0, 30) . '...' 
                : $hasil->message;

            $row[] = $message;

            $row[] = $hasil->category;

            $row[] = '<a class="btn btn-success btn-xs" href="' . base_url() . 'testimoniadmin/update/' . $hasil->id_testimoni . '"><i class="fa fa-edit"></i> Update</a>
                      <button class="btn btn-danger btn-xs" onclick="buttonDelete(' . $hasil->id_testimoni . ');"><i class="fa fa-trash"></i> Delete</button>';

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

    public function delete_testimoni($id)
    {
        $this->db->where('id_testimoni', $id);
        $foto = $this->db->get('testimoni')->row();
        $foto = base64_decode($foto->foto);
        $path_mhs = './template/assets_admin/testimoni/';
        @unlink($path_mhs . $foto);
        $this->db->where('id_testimoni', $id);
        return $this->db->delete('testimoni');
    }
}
