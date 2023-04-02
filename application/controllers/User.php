<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
        $this->load->model('DatabaseEsign');
        //is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function profile()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('templates/footer');
    }

    public function bidang_observasi()
    {
        $data['title'] = 'Bidang Observasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-1', $data);
        $this->load->view('templates/topbar-balai', $data);
        $this->load->view('templates/bidang_observasi', $data);
        $this->load->view('templates/footer');
    }

    public function dokumen_inskal()
    {
        $data['title'] = 'Pengajuan E-Sign';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //visualiasi data
        $data['dokumen_inskal'] = $this->DatabaseEsign->GetDataDokumenInskal();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-1', $data);
        $this->load->view('templates/topbar-balai', $data);
        $this->load->view('templates/dokumen_inskal', $data);
        $this->load->view('templates/footer');
    }


    public function dokumen_kasubid_inskal()
    {
        $data['title'] = 'Kasubid Inskal';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //visualiasi data
        $data['dokumen_inskal'] = $this->DatabaseEsign->GetDataDokumenInskal();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-1', $data);
        $this->load->view('templates/topbar-balai', $data);
        $this->load->view('templates/inskal-kasubid', $data);
        $this->load->view('templates/footer', $data);
    }

    public function dokumen_poolbar()
    {
        $data['title'] = 'Pengajuan E-Sign';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //visualiasi data
        $data['dokumen_poolbar'] = $this->DatabaseEsign->GetDataDokumenPoolbar();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-1', $data);
        $this->load->view('templates/topbar-balai', $data);
        $this->load->view('templates/dokumen_poolbar', $data);
        $this->load->view('templates/footer');
    }

    public function dokumen_kasubid_poolbar()
    {
        $data['title'] = 'Kasubid Poolbar';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //visualiasi data
        $data['dokumen_poolbar'] = $this->DatabaseEsign->GetDataDokumenPoolbar();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-1', $data);
        $this->load->view('templates/topbar-balai', $data);
        $this->load->view('templates/poolbar-kasubid', $data);
        $this->load->view('templates/footer');
    }

    public function bo_kabid()
    {
        $data['title'] = 'Kabid Bidang I';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-1', $data);
        $this->load->view('templates/topbar-balai', $data);
        $this->load->view('templates/bo_kabid', $data);
        $this->load->view('templates/footer');
    }
    public function bo_kabid_inskal()
    {
        $data['title'] = 'Kabid Bidang I';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //visualiasi data
        $data['dokumen_inskal'] = $this->DatabaseEsign->GetDataDokumenInskal();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-1', $data);
        $this->load->view('templates/topbar-balai', $data);
        $this->load->view('templates/bo_kabid_inskal', $data);
        $this->load->view('templates/footer');
    }
    public function bo_kabid_poolbar()
    {
        $data['title'] = 'Kabid Bidang I';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //visualiasi data
        $data['dokumen_poolbar'] = $this->DatabaseEsign->GetDataDokumenPoolbar();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-1', $data);
        $this->load->view('templates/topbar-balai', $data);
        $this->load->view('templates/bo_kabid_poolbar', $data);
        $this->load->view('templates/footer');
    }




    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('user');
        }
    }


    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                    redirect('user/changepassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password changed!</div>');
                    redirect('user/changepassword');
                }
            }
        }
    }
}
