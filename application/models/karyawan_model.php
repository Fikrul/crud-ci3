<?php

class Karyawan_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_all_data()
	{
		$query = $this->db->get('karyawan');
		return $query->result();
	}

	public function tambah_karyawan()
	{
		$data = [
					'id_kar' => $this->input->post('id_kar'),
					'nama_kar' => $this->input->post('nama_kar'),
					'lahir' => $this->input->post('lahir'),
					'gender' => $this->input->post('gender'),
					'jabatan_kar' => $this->input->post('jabatan_kar'),
				];

		$this->db->insert('karyawan', $data);
	}

	public function edit_karyawan($id)
	{
		$query = $this->db->get_where('karyawan', ['id_kar' => $id]);
		return $query->row();
	}

	public function update_karyawan()
	{
		$kondisi = ['id_kar' => $this->input->post('id_kar')];
		
		$data = [
					'nama_kar' => $this->input->post('nama_kar'),
					'lahir' => $this->input->post('lahir'),
					'jabatan_kar' => $this->input->post('jabatan_kar'),
					'gender' => $this->input->post('gender'),
				];

		$this->db->update('karyawan', $data, $kondisi);
	}

	public function hapus_karyawan($id)
	{
		$this->db->delete('karyawan', ['id_kar' => $id]);
	}
}

?>