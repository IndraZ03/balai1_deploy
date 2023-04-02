<?php
class Upload extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //load Helper for Form
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
        $this->load->model('DatabaseEsign');
    }
    public function inskal()
    {
        $config['upload_path'] = './berkas/';
        $config['allowed_types'] = 'pdf|docx';


        $this->load->library('upload', $config);
        $dokumen = $this->input->post('dokumen');


        if (!$this->upload->do_upload('berkas')) {
            redirect('user/dokumen_inskal');
            $this->session->set_flashdata('pesan-gagal', '<div class="alert alert-danger" role="alert"> Dokumen Gagal Diajukan!</div>');
        } else {
            $nama_file = $this->upload->data('file_name');
            $path = sprintf('%s', $nama_file);
            date_default_timezone_set('Asia/Jakarta');
            $tanggal = date('Y-m-d H:i:s');
            $data = array('dokumen' => $dokumen, 'path' => $path, 'tanggal_pengajuan' => $tanggal);
            $this->DatabaseEsign->InsertDataDokumenInskal($data);
            $this->session->set_flashdata('pesan-sukses', '<div class="alert alert-success" role="alert"> Dokumen Berhasil Diajukan!</div>');
            redirect('user/dokumen_inskal');
        }
    }

    public function poolbar()
    {
        $config['upload_path'] = './berkas/';
        $config['allowed_types'] = 'pdf|docx';


        $this->load->library('upload', $config);
        $dokumen = $this->input->post('dokumen');


        if (!$this->upload->do_upload('berkas')) {
            redirect('user/dokumen_poolbar');
            $this->session->set_flashdata('pesan-gagal', '<div class="alert alert-danger" role="alert"> Dokumen Gagal Diajukan!</div>');
        } else {
            $nama_file = $this->upload->data('file_name');
            $path = sprintf('%s', $nama_file);
            date_default_timezone_set('Asia/Jakarta');
            $tanggal = date('Y-m-d H:i:s');
            $data = array('dokumen' => $dokumen, 'path' => $path, 'tanggal_pengajuan' => $tanggal);
            $this->DatabaseEsign->InsertDataDokumenPoolbar($data);
            $this->session->set_flashdata('pesan-sukses', '<div class="alert alert-success" role="alert"> Dokumen Berhasil Diajukan!</div>');
            redirect('user/dokumen_poolbar');
        }
    }



    public function status_kasubid_inskal()

    {
        $keterangan = $this->input->post('keterangan');
        $status = $this->input->post('status_kasubid');
        $id = $this->input->post('id');
        date_default_timezone_set('Asia/Jakarta');
        $tanggal_acc = date('Y-m-d H:i:s');
        $data_submit = array(
            'status_kasubid' => $status,
            'keterangan' => $keterangan,
            'tanggal_acc_k' => $tanggal_acc
        );
        $where = array(
            'id' => $id
        );
        $this->session->set_flashdata('konfirmasi', '<div class="alert alert-success" role="alert"> Dokumen Berhasil Dikonfirmasi!</div>');
        $this->DatabaseEsign->update_data($where, $data_submit, 'dokumen_inskal');
        redirect('user/dokumen_kasubid_inskal');
    }
    public function hapus_data_inskal()
    {
        $id = $this->input->post('id');
        $where = array(
            'id' => $id
        );
        $this->DatabaseEsign->hapus($where, 'dokumen_inskal');
        $this->session->set_flashdata('pesan-sukses-hapus', '<div class="alert alert-success" role="alert"> Dokumen Berhasil Dihapus!</div>');
        redirect('user/dokumen_inskal');
    }

    public function status_kasubid_poolbar()

    {
        $keterangan = $this->input->post('keterangan');
        $status = $this->input->post('status_kasubid');
        $id = $this->input->post('id');
        date_default_timezone_set('Asia/Jakarta');
        $tanggal_acc = date('Y-m-d H:i:s');
        $data_submit = array(
            'status_kasubid' => $status,
            'keterangan' => $keterangan,
            'tanggal_acc_k' => $tanggal_acc
        );
        $where = array(
            'id' => $id
        );
        $this->session->set_flashdata('konfirmasi', '<div class="alert alert-success" role="alert"> Dokumen Berhasil Dikonfirmasi!</div>');
        $this->DatabaseEsign->update_data($where, $data_submit, 'dokumen_poolbar');
        redirect('user/dokumen_kasubid_poolbar');
    }
    public function hapus_data_poolbar()
    {
        $id = $this->input->post('id');
        $where = array(
            'id' => $id
        );
        $this->DatabaseEsign->hapus($where, 'dokumen_poolbar');
        $this->session->set_flashdata('pesan-sukses-hapus', '<div class="alert alert-success" role="alert"> Dokumen Berhasil Dihapus!</div>');
        redirect('user/dokumen_poolbar');
    }
    public function status_kabid_inskal()

    {
        $keterangan = $this->input->post('keterangan');
        $status = $this->input->post('status_kabid');
        $id = $this->input->post('id');
        date_default_timezone_set('Asia/Jakarta');
        $tanggal_acc = date('Y-m-d H:i:s');
        $data_submit = array(
            'status_kabid' => $status,
            'keterangan' => $keterangan,
            'tanggal_acc_kd' => $tanggal_acc
        );
        $where = array(
            'id' => $id
        );
        $this->session->set_flashdata('konfirmasi', '<div class="alert alert-success" role="alert"> Dokumen Berhasil Dikonfirmasi!</div>');
        $this->DatabaseEsign->update_data($where, $data_submit, 'dokumen_inskal');
        redirect('user/bo_kabid_inskal');
    }
    public function status_kabid_poolbar()

    {
        $keterangan = $this->input->post('keterangan');
        $status = $this->input->post('status_kabid');
        $id = $this->input->post('id');
        date_default_timezone_set('Asia/Jakarta');
        $tanggal_acc = date('Y-m-d H:i:s');
        $data_submit = array(
            'status_kabid' => $status,
            'keterangan' => $keterangan,
            'tanggal_acc_kd' => $tanggal_acc
        );
        $where = array(
            'id' => $id
        );
        $this->session->set_flashdata('konfirmasi', '<div class="alert alert-success" role="alert"> Dokumen Berhasil Dikonfirmasi!</div>');
        $this->DatabaseEsign->update_data($where, $data_submit, 'dokumen_poolbar');
        redirect('user/bo_kabid_poolbar');
    }

    public function status_kabal_inskal()

    {
        $keterangan = $this->input->post('keterangan');
        $status = $this->input->post('status_kabal');
        $id = $this->input->post('id');
        date_default_timezone_set('Asia/Jakarta');
        $tanggal_acc = date('Y-m-d H:i:s');
        $data_submit = array(
            'status_kabal' => $status,
            'keterangan' => $keterangan,
            'tanggal_acc_kb' => $tanggal_acc
        );
        $where = array(
            'id' => $id
        );
        $this->session->set_flashdata('konfirmasi', '<div class="alert alert-success" role="alert"> Dokumen Berhasil Dikonfirmasi!</div>');
        $this->DatabaseEsign->update_data($where, $data_submit, 'dokumen_inskal');
        redirect('balai/kabal_inskal');
    }
    public function status_kabal_poolbar()

    {
        $keterangan = $this->input->post('keterangan');
        $status = $this->input->post('status_kabal');
        $id = $this->input->post('id');
        date_default_timezone_set('Asia/Jakarta');
        $tanggal_acc = date('Y-m-d H:i:s');
        $data_submit = array(
            'status_kabal' => $status,
            'keterangan' => $keterangan,
            'tanggal_acc_kb' => $tanggal_acc
        );
        $where = array(
            'id' => $id
        );
        $this->session->set_flashdata('konfirmasi', '<div class="alert alert-success" role="alert"> Dokumen Berhasil Dikonfirmasi!</div>');
        $this->DatabaseEsign->update_data($where, $data_submit, 'dokumen_poolbar');
        redirect('balai/kabal_poolbar');
    }
    public function download_sekbal_inskal()
    {
        $config['upload_path'] = './download/';
        $config['allowed_types'] = 'pdf|docx';


        $this->load->library('upload', $config);
        $id = $this->input->post('id');
        $status = $this->input->post('status_sekbal');

        if (!$this->upload->do_upload('download')) {
            redirect('balai/sekbal_inskal');
            $this->session->set_flashdata('pesan-gagal', '<div class="alert alert-danger" role="alert"> Dokumen Gagal Diupload!</div>');
        } else {
            $nama_file = $this->upload->data('file_name');
            $path = sprintf('%s', $nama_file);
            date_default_timezone_set('Asia/Jakarta');
            $tanggal = date('Y-m-d H:i:s');
            $where = array(
                'id' => $id
            );
            $data = array('download' => $path, 'status_sekbal' => $status, 'tanggal_acc_s' => $tanggal);
            $this->DatabaseEsign->update_data($where, $data, 'dokumen_inskal');;
            $this->session->set_flashdata('pesan-sukses', '<div class="alert alert-success" role="alert"> Dokumen Berhasil Dikirim!</div>');
            redirect('balai/sekbal_inskal');
        }
    }

    public function download_sekbal_poolbar()
    {
        $config['upload_path'] = './download/';
        $config['allowed_types'] = 'pdf|docx';


        $this->load->library('upload', $config);
        $id = $this->input->post('id');
        $status = $this->input->post('status_sekbal');

        if (!$this->upload->do_upload('download')) {
            redirect('balai/sekbal_poolbar');
            $this->session->set_flashdata('pesan-gagal', '<div class="alert alert-danger" role="alert"> Dokumen Gagal Diupload!</div>');
        } else {
            $nama_file = $this->upload->data('file_name');
            $path = sprintf('%s', $nama_file);
            date_default_timezone_set('Asia/Jakarta');
            $tanggal = date('Y-m-d H:i:s');
            $where = array(
                'id' => $id
            );
            $data = array('download' => $path, 'status_sekbal' => $status, 'tanggal_acc_s' => $tanggal);
            $this->DatabaseEsign->update_data($where, $data, 'dokumen_poolbar');;
            $this->session->set_flashdata('pesan-sukses', '<div class="alert alert-success" role="alert"> Dokumen Berhasil Dikirim!</div>');
            redirect('balai/sekbal_inskal');
        }
    }
}
