<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_product extends CI_Model
{
    public function get_data_category()
    {
        return $this->db->get('category')->result();
    }

    public function get_data_category_product()
    {
        $this->db->where('type', 'product');
        $result = $this->db->get('category')->result();
        return $result;
    }

    public function getDataUnit()
    {
        return $this->db->get('unit')->result();
    }

    public function getDataType()
    {
        return $this->db->get('type')->result();

    }

    public function check()
    {
        $product_name = $this->input->post('product_name', true);
        $slug = url_title($product_name, '-', true);
        return $this->db->get_where('product', ['slug' => $slug])->row();
    }

public function add()
{
    $product_name = $this->input->post('product_name', true);
    $slug         = url_title($product_name, '-', true);
    $description  = $this->input->post('content', true);
    $category     = $this->input->post('category', true);
    $type         = $this->input->post('type', true);
    $uom          = $this->input->post('uom', true);
    $buy_price    = $this->input->post('buy_price', true);
    $sell_price   = $this->input->post('sell_price', true);

    if (empty($_FILES['foto']['name'])) {
        return false;
    }

    $no_random = rand(1, 10000);

    $this->load->library('upload');
    $config['upload_path']   = './template/assets_admin/images/user';
    $config['allowed_types'] = 'jpg|jpeg|png|JPG|JPEG|PNG';
    $config['max_size']      = 5020;
    $config['file_name']     = $no_random . '_' . $_FILES['foto']['name'];
    $config['overwrite']     = true;

    $this->upload->initialize($config);

    if (!$this->upload->do_upload('foto')) {
        // kalau mau lihat error upload:
        // log_message('error', $this->upload->display_errors('', ''));
        return false;
    }

    $data = [
        'product_name' => $product_name,
        'description'  => $description,
        'category'     => $category,
        'slug'         => $slug,
        'type'         => $type,
        'unit'         => $uom,
        'buy_price'    => $buy_price,
        'sell_price'   => $sell_price,
        'foto'         => base64_encode($config['file_name']),
    ];

    return $this->db->insert('product', $data);
}


    public function get_data($id)
    {
        return $this->db->get_where('product', ['id_product' => $id])->row();
    }
    public function get_data_all()
    {
        return $this->db->get_where('product')->result();
    }

    public function update($id)
    {
        $product_name = $this->input->post('product_name', true);
        $slug = url_title($product_name, '-', true);
        $description = $this->input->post('content', true);
        $category = $this->input->post('category', true);
        $buy_price = $this->input->post('buy_price', true);
        $sell_price = $this->input->post('sell_price', true);
        $type = $this->input->post('type', true);
        $uom = $this->input->post('uom', true);
        $no_random = rand(1, 10000);
        $this->load->library('upload');
        $config['upload_path'] = './template/assets_admin/images/user';
        $config['allowed_types'] = 'jpg|jpeg|png|JPG|JPEG|PNG';
        $config['max_size'] = '5020';
        $config['file_name'] = $no_random . $_FILES['foto']['name'];
        $config['overwrite'] = true;
        $this->upload->initialize($config);
        if (!empty($_FILES['foto']['name'])) {
            if ($this->upload->do_upload('foto')) {
                $data = [
                    'product_name' => $product_name,
                    'description' => $description,
                    'category' => $category,
                    'slug' => $slug,
                    'buy_price' => $buy_price,
                    'sell_price' => $sell_price,
                    'type' => $type,
                    'unit' => $uom,
                    'foto' => base64_encode($no_random . $_FILES['foto']['name']),
                ];
                $this->db->where('id_product', $id);
                return $this->db->update('product', $data);
            } else {
                // echo "gagal1";
                return false;
            }
        } else {
            // echo "gagal2";
            $data = [
                'product_name' => $product_name,
                'description' => $description,
                'category' => $category,
                'buy_price' => $buy_price,
                'sell_price' => $sell_price,
                'slug' => $slug,
                'type' => $type,
                'unit' => $uom,
            ];
            $this->db->where('id_product', $id);
            return $this->db->update('product', $data);
        }
    }

    public function list()
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;
        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT * FROM product WHERE
                product_name LIKE '%$keyword%'
                OR description LIKE '%$keyword%'
                ORDER BY id_product DESC";
            $count_all = $this->db->query($query)->num_rows();
            $data_tabel = $this->db->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT * FROM product  ORDER BY id_product DESC";
            $count_all = $this->db->query($query)->num_rows();
            $data_tabel = $this->db->query($query . " LIMIT $start,$length")->result();
        }

        foreach ($data_tabel as $hasil) {
            $row = array();
            $row[] = $no++;
            $row[] = '<center><a target="_blank" href="' . base_url() . 'template/assets_admin/images/user/' . base64_decode($hasil->foto) . '" ><img height="60px" src="' . base_url() . 'template/assets_admin/images/user/' . base64_decode($hasil->foto) . '" /></a></center>';
            $row[] = $hasil->product_name;
            $row[] = $hasil->category;
            $row[] = formatRupiah($hasil->buy_price);
            $row[] = formatRupiah($hasil->sell_price);
            $row[] = strlen($hasil->description) >= 35 ? substr($hasil->description, 0, 35) . "..." : $hasil->description;
            $row[] = '<a class="btn btn-success" href="' . base_url() . 'productadmin/update/' . $hasil->id_product . '"><i class="fa fa-eye"></i></a>
            <button class="btn btn-danger" onclick="buttonDelete(' . $hasil->id_product . ');"><i class="fa fa-trash"></i></button>';
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

    public function delete_product($id)
    {
        $this->db->where('id_product', $id);
        $foto = $this->db->get('product')->row();
        $foto = base64_decode($foto->foto);
        $path_mhs = './template/assets_admin/images/user/';
        @unlink($path_mhs . $foto);
        $this->db->where('id_product', $id);
        return $this->db->delete('product');
    }
}