<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$data['content']='backend/content';
		$data['pesan']=$this->session->flashdata('pesan');
		$this->load->view('backend/index',$data);
	}


//Jadwal Meeting...>

		public function pelamar(){
		$data['pelamar']=$this->db->query("select * from pelamar")->result();
		$data['content']='backend/pelamar/detail';
		$data['judul']='Data Meeting';
		$data['pesan']=$this->session->flashdata('pesan');
		$this->load->view('backend/index',$data);
	}
	public function tambahpel(){
		$data['content']='backend/pelamar/tambah';
		$data['judul']='Tambah Data Meeting';
		$data['pesan']=$this->session->flashdata('pesan');
		$this->load->view('backend/index',$data);
	}
	
	public function prosestambahpel(){
		$data['no']=$this->input->post('no');
		$data['tgl']=$this->input->post('tgl');
		
		$data['waktu']=$this->input->post('waktu');
		$data['durasi']=$this->input->post('durasi');
		$data['depar']=$this->input->post('depar');
		$data['ket']=$this->input->post('ket');
		
		if (empty($data['no']) || empty($data['tgl']) ||  empty($data['waktu']) || empty($data['durasi']) || empty($data['depar']) || empty($data['ket']) ){

			$this->session->set_flashdata('pesan','Data gagal di simpan, Data kurang lengkap');
			redirect('backend/tambahpel');
		}else{
			$this->db->insert('pelamar',$data);
			$this->session->set_flashdata('pesan','Data berhasil disimpan');
			redirect('backend/pelamar');
		}
	}
	public function deletpel($no){
		if($no){
			$this->db->delete('pelamar','no='.$no);
				$this->session->set_flashdata('pesan','Data berhasil dihapus');
			redirect('backend/pelamar');
		}
	}
	public function editpel($no){
		if($no){
	$data['sql']=$this->db->query('select * from pelamar where no='.$no)->row();
			$data['content']='backend/pelamar/edit';
		$data['judul']='Edit Data Meeting';
		$this->load->view('backend/index',$data);
			
		}
	}
	public function proseseditpel(){
		$no=$this->input->post('no');
		$data['tgl']=$this->input->post('tgl');
		
		$data['waktu']=$this->input->post('waktu');
		$data['durasi']=$this->input->post('durasi');
		$data['depar']=$this->input->post('depar');
		$data['ket']=$this->input->post('ket');
		
		
		if (empty($no) || empty($data['tgl']) || empty($data['waktu']) || empty($data['durasi']) || empty($data['depar']) || empty($data['ket']) ){

			$this->session->set_flashdata('pesan','Data gagal di Edit, Data kurang lengkap');
			redirect('backend/editpel');
		}else{
			$this->db->where('no',$no);
			$this->db->update('pelamar',$data);
			$this->session->set_flashdata('pesan','Data berhasil diedit');
			redirect('backend/pelamar');
		}
	}
	

//Departemen...>

		public function departemen(){
		$data['departemen']=$this->db->query("select * from departemen")->result();
		$data['content']='backend/departemen/detail';
		$data['judul']='Data Departemen';
		$data['pesan']=$this->session->flashdata('pesan');
		$this->load->view('backend/index',$data);
	}
	
	public function tambahdprt(){
		$data['content']='backend/departemen/tambah';
		$data['judul']='Tambah Data Departemen';
		$data['pesan']=$this->session->flashdata('pesan');
		$this->load->view('backend/index',$data);
	}

	public function prosestambahdprt(){
		$data['nomor']=$this->input->post('nomor');
		$data['nama_dprt']=$this->input->post('nama_dprt');
		$data['anggota']=$this->input->post('anggota');
		
		
		if (empty($data['nomor']) || empty($data['nama_dprt']) ||  empty($data['anggota']) ){

			$this->session->set_flashdata('pesan','Data gagal di simpan, Data kurang lengkap');
			redirect('backend/tambahdprt');
		}else{
			$this->db->insert('departemen',$data);
			$this->session->set_flashdata('pesan','Data berhasil disimpan');
			redirect('backend/departemen');
		}
	}

		public function deletdprt($nomor){
		if($nomor){
			$this->db->delete('departemen','nomor='.$nomor);
				$this->session->set_flashdata('pesan','Data berhasil dihapus');
			redirect('backend/departemen');
		}
	}

	public function editdprt($nomor){
		if($nomor){
	$data['sql']=$this->db->query('select * from departemen where nomor='.$nomor)->row();
			$data['content']='backend/departemen/edit';
		$data['judul']='Edit Data departemen';
		$this->load->view('backend/index',$data);
			
		}
	}
	public function proseseditdprt(){
		$nomor=$this->input->post('nomor');
		$data['nama_dprt']=$this->input->post('nama_dprt');		
		$data['anggota']=$this->input->post('anggota');
		
		
		if (empty($nomor) || empty($data['nama_dprt']) || empty($data['anggota']) ){

			$this->session->set_flashdata('pesan','Data gagal di Edit, Data kurang lengkap');
			redirect('backend/editdprt');
		}else{
			$this->db->where('nomor',$nomor);
			$this->db->update('departemen',$data);
			$this->session->set_flashdata('pesan','Data berhasil diedit');
			redirect('backend/departemen');
		}
	}


//Absen...>

	public function absen(){
		$data['absen']=$this->db->query("select * from absen")->result();
		$data['content']='backend/absen/detail';
		$data['judul']='Data Absen';
		$data['pesan']=$this->session->flashdata('pesan');
		$this->load->view('backend/index',$data);
	}
	
	public function tambahabsen(){
		$data['content']='backend/absen/tambah';
		$data['judul']='Tambah Data Absen';
		$data['pesan']=$this->session->flashdata('pesan');
		$this->load->view('backend/index',$data);
	}

	public function prosestambahabsen(){
		$data['nip']=$this->input->post('nip');
		$data['nama']=$this->input->post('nama');
		$data['departemen']=$this->input->post('departemen');
		$data['bagian']=$this->input->post('bagian');
		
		
		if (empty($data['nip']) || empty($data['nama']) ||  empty($data['departemen']) ||  empty($data['bagian']) ){

			$this->session->set_flashdata('pesan','Data gagal di simpan, Data kurang lengkap');
			redirect('backend/tambahabsen');
		}else{
			$this->db->insert('absen',$data);
			$this->session->set_flashdata('pesan','Data berhasil disimpan');
			redirect('backend/absen');
		}
	}

		public function deletabsen($nip){
		if($nip){
			$this->db->delete('absen','nip='.$nip);
				$this->session->set_flashdata('pesan','Data berhasil dihapus');
			redirect('backend/absen');
		}
	}

	public function editabsen($nip){
		if($nip){
	$data['sql']=$this->db->query('select * from absen where nip='.$nip)->row();
			$data['content']='backend/absen/edit';
		$data['judul']='Edit Data Absen';
		$this->load->view('backend/index',$data);
			
		}
	}
	public function proseseditabsen(){
		$nip=$this->input->post('nip');
		$data['nama']=$this->input->post('nama');		
		$data['departemen']=$this->input->post('departemen');
		$data['bagian']=$this->input->post('bagian');
		
		
		if (empty($nip) || empty($data['nama']) || empty($data['departemen']) || empty($data['bagian']) ){

			$this->session->set_flashdata('pesan','Data gagal di Edit, Data kurang lengkap');
			redirect('backend/editabsen');
		}else{
			$this->db->where('nip',$nip);
			$this->db->update('absen',$data);
			$this->session->set_flashdata('pesan','Data berhasil diedit');
			redirect('backend/absen');
		}
	}

	


// Hasil...>

	public function hasil(){
		$data['hasil']=$this->db->query("select * from hasil")->result();
		$data['content']='backend/hasil/detail';
		$data['judul']='Data Hasil Meeting';
		$data['pesan']=$this->session->flashdata('pesan');
		$this->load->view('backend/index',$data);
	}
	
	public function tambahhasil(){
		$data['content']='backend/hasil/tambah';
		$data['judul']='Tambah Data Hasil Meeting';
		$data['pesan']=$this->session->flashdata('pesan');
		$this->load->view('backend/index',$data);
	}

	public function prosestambahhasil(){
		$data['tgl']=$this->input->post('tgl');
		$data['departemen']=$this->input->post('departemen');
		$data['hasil']=$this->input->post('hasil');
		
		
		if (empty($data['tgl']) || empty($data['departemen']) ||  empty($data['hasil']) ){

			$this->session->set_flashdata('pesan','Data gagal di simpan, Data kurang lengkap');
			redirect('backend/tambahhasil');
		}else{
			$this->db->insert('hasil',$data);
			$this->session->set_flashdata('pesan','Data berhasil disimpan');
			redirect('backend/hasil');
		}
	}

		public function delethasil($nomor){
		if($nomor){
			$this->db->delete('hasil','nomor='.$nomor);
				$this->session->set_flashdata('pesan','Data berhasil dihapus');
			redirect('backend/hasil');
		}
	}

	public function edithasil($tgl){
		if($tgl){
	$data['sql']=$this->db->query('select * from hasil where tgl='.$tgl)->row();
			$data['content']='backend/hasil/edit';
		$data['judul']='Edit Data Hasil Meeting';
		$this->load->view('backend/index',$data);
			
		}
	}
	public function prosesedithasil(){
		$tgl=$this->input->post('tgl');
		$data['departemen']=$this->input->post('departemen');		
		$data['hasil']=$this->input->post('hasil');
		
		
		if (empty($tgl) || empty($data['departemen']) || empty($data['hasil']) ){

			$this->session->set_flashdata('pesan','Data gagal di Edit, Data kurang lengkap');
			redirect('backend/hasil');
		}else{
			$this->db->where('tgl',$tgl);
			$this->db->update('hasil',$data);
			$this->session->set_flashdata('pesan','Data berhasil diedit');
			redirect('backend/hasil');
		}
	}


//Login...>

	public function login(){
		$data['pesan']=$this->session->flashdata('pesan');
		$this->load->view('backend/login',$data);
	}
	public function proseslogin(){
		$user=$this->input->post('user');
		$pass=$this->input->post('pass');
		if(!empty($user) && !empty($pass)){
			$sql=$this->db->query("select * from  user where user='".$user."' and pass='".md5($pass)."' ")->result();
			if(count($sql)>0){
				$this->session->set_flashdata('pesan','User pass berhasil');
				redirect('backend');
			}else{
				$this->session->set_flashdata('pesan','User pass salah');
				redirect('backend/login');
			}
		}else{
				$this->session->set_flashdata('pesan','User pass Tidak Lengkap');
				redirect('backend/login');
			}
	}


public function tambahuser(){
		$data['content']='backend/user/tambah';
		$data['judul']='Tambah Data Admin';
		$data['pesan']=$this->session->flashdata('pesan');
		$this->load->view('backend/index',$data);
	}

	public function prosestambahuser(){
		$data['id']=$this->input->post('id');
		$data['nama']=$this->input->post('nama');
		$data['user']=$this->input->post('user');
		$data['pass']=$this->input->post('pass');
		
		if (empty($data['id']) || empty($data['nama']) ||  empty($data['user']) ||  empty($data['pass']) ){

			$this->session->set_flashdata('pesan','Data gagal di simpan, Data kurang lengkap');
			redirect('backend/tambahlogin');
		}else{
			$this->db->insert('user',$data);
			$this->session->set_flashdata('pesan','Data berhasil disimpan');
			redirect("backend/user/tambah");
		}
	}

	}