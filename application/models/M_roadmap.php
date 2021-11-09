<?php
class M_roadmap extends CI_Model{

	function get_all_roadmap(){
		$hsl=$this->db->query("SELECT tbl_roadmap.*,DATE_FORMAT(port_tanggal,'%d %M %Y') AS tanggal FROM tbl_roadmap ORDER BY port_id DESC");
		return $hsl;
	} 
	
	function simpan_roadmap($judul,$isi,$user_nama,$gambar){
		$hsl=$this->db->query("INSERT INTO tbl_roadmap (port_judul,port_deskripsi,port_author,port_image) VALUES ('$judul','$isi','$user_nama','$gambar')");
		return $hsl;
	}

	function get_roadmap_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_roadmap WHERE port_id='$kode'");
		return $hsl;
	}

	function update_roadmap($port_id,$judul,$isi,$user_nama,$gambar){
		$hsl=$this->db->query("UPDATE tbl_roadmap SET port_judul='$judul',port_deskripsi='$isi',port_author='$user_nama',port_image='$gambar' WHERE port_id='$port_id'");
		return $hsl;
	}

	function update_roadmap_tanpa_img($port_id,$judul,$isi,$user_nama){
		$hsl=$this->db->query("UPDATE tbl_roadmap SET port_judul='$judul',port_deskripsi='$isi',port_author='$user_nama' WHERE port_id='$port_id'");
		return $hsl;
	}

	function hapus_roadmap($kode){
		$hsl=$this->db->query("DELETE FROM tbl_roadmap WHERE port_id='$kode'");
		return $hsl;
	}


	//Frontend
	function get_roadmap(){
		$hsl=$this->db->query("SELECT tbl_roadmap.*,DATE_FORMAT(port_tanggal,'%d %M %Y') AS tanggal FROM tbl_roadmap ORDER BY port_id DESC");
		return $hsl;
	}

	function get_roadmap_per_page($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_roadmap.*,DATE_FORMAT(port_tanggal,'%d %M %Y') AS tanggal FROM tbl_roadmap ORDER BY port_id DESC LIMIT $offset,$limit");
		return $hsl;
	}
}