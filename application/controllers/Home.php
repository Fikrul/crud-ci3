<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('karyawan_model');
		$this->load->helper(['url_helper', 'form']);
    	$this->load->library(['form_validation', 'session']);
	}

	/*public function index($page = 'home_view')
	{
		if(! file_exists(APPPATH.'views/'.$page.'.php'))
		{
			show_404();
		}

		$data['title'] = 'Beranda';
		$data['jembut'] = 'LOL';

		$this->load->view($page, $data);
	}

	public function about($page = 'about')
	{
		if(! file_exists(APPPATH.'views/'.$page.'.php'))
		{
			show_404();
		}

		$data['title'] = 'About';

		$this->load->view($page, $data);
	}*/

	public function lihatdata()
	{
		$data['database'] = $this->karyawan_model->get_all_data();

		$data['title'] = "Test tampil Database";

		$this->load->view('templates/header', $data);
		$this->load->view('tampildata', $data);
		$this->load->view('templates/footer');
	}

	public function formtambah()
	{
		$data['title'] = "Tambah Data | Test tampil Database";

		$this->load->view('templates/header', $data);
		$this->load->view('formtambah');
		$this->load->view('templates/footer');
	}

	public function tambahkaryawan()
	{
		$this->form_validation->set_message('is_unique', '{field} sudah terpakai');

		$this->form_validation->set_rules('id_kar', 'id_kar', ['required', 'is_unique[karyawan.id_kar]']);

		$this->validasi();

		if($this->form_validation->run() === FALSE)
		{
			$this->formtambah();
		}
		else
		{
			$this->karyawan_model->tambah_karyawan();
			$this->session->set_flashdata('input_sukses','Data Karyawan Telah Berhasil di Input');
			redirect(current_url());
		}
	}

	public function hapusdata($id)
	{
		$this->karyawan_model->hapus_karyawan($id);
		$this->session->set_flashdata('hapus_sukses','Data mobil berhasil di hapus');
		redirect('/home/lihatdata');
	}

	public function formedit($id)
	{
		$data['title'] = 'Edit Data | Test tampil Database';

		$data['db'] = $this->karyawan_model->edit_karyawan($id);

		$this->load->view('templates/header', $data);
		$this->load->view('formedit', $data);
		$this->load->view('templates/footer');
	}

	public function updatekaryawan($id)
	{
		$this->validasi();

		if($this->form_validation->run() === FALSE)
		{
			$this->formedit($id);
		}
		else
		{
			$this->karyawan_model->update_karyawan();
			$this->session->set_flashdata('update_sukses', 'Data mobil berhasil diperbaharui');
			redirect('/home/lihatdata');
		}
	}

	public function validasi()
	{
		$this->form_validation->set_message('required', '{field} tidak boleh kosong');

		$config = [[
					'field' => 'id_kar',
					'label' => 'id_kar',
					'rules' => 'required'
				],
				[
					'field' => 'nama_kar',
					'label' => 'nama_kar',
					'rules' => 'required'
				],
				[
					'field' => 'jabatan_kar',
					'label' => 'jabatan_kar',
					'rules' => 'required'
				]];

		$this->form_validation->set_rules($config);
	}

	/*public function regist()
	{
		$this->load->view('templates/header', $data);
		$this->load->view('register');
		$this->load->view('templates/footer');
	}*/
}
?>