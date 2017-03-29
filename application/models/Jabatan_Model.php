<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Jabatan_Model extends CI_Model {
	
		public function insertJabatan($id)
		{
			$object = array('namaJabatan' => $this->input->post('namaJabatan'), 'tanggalMulai'=>$this->input->post('tanggalMulai'), 'tanggalSelesai'=>$this->input->post('tanggalSelesai'), 'fk_pegawai'=>$this->input->post('$id'));
			$this->db->insert('jabatan_pegawai', $object);
		}


		/*public function getPegawai($id)
		{
			$this->db->where('id', $id);	
			$query = $this->db->get('jabatan',1);
			return $query->result();

		}

		public function updateById($id)
		{
			$data = array('nama' => $this->input->post('nama'), 'alamat' => $this->input->post('alamat'),'tanggalLahir' => $this->input->post('tanggalLahir'),'nip' => $this->input->post('nip'), );
			$this->db->where('id', $id);
			$this->db->update('pegawai', $data);
		}

		public function deletePegawai($id)
		{
			$this->db->delete('pegawai', array('id' => $id));
		}*/
	
	}
	
	/* End of file Jabatan_Model.php */
	/* Location: ./application/models/Jabatan_Model.php */
?>