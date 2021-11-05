<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{


	public function index()
	{
		$this->load->view('home');
	}
	public function metode2()
	{
		$this->load->view('metode2');
	}
	public function metode()
	{
		$data['list_nama2'] = $this->db->get('list_nama2')->result();
		$this->load->view('metode', $data);
	}

	public function create()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$data = $this->input->post();

			$this->db->insert('list_nama2', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success text-center" role="alert" style="width:500px">
				Data Berhasil di Input!
				</div>');
			redirect('user/create');
		} else {
			$this->load->view('user/create');
		}
	}
	public function update($id)
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$data = $this->input->post();


			$this->db->where('id', $id);
			$this->db->update('list_nama2', $data);

			redirect('user'); //halaman
		} else {
			$data['item'] = $this->db->get_where('list_nama2', ['id' => $id])->row();
			$this->load->view('user/update', $data);
		}
	}
	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('list_nama2');

		redirect('user/metode');
	}




	public function cart()
	{
		$this->load->view('cart');
	}
	public function checkout()
	{
		$this->load->view('checkout');
	}
	public function contact_us()
	{
		$this->load->view('contact-us');
	}
	public function gallery()
	{
		$this->load->view('gallery');
	}
	public function my_account()
	{
		$this->load->view('my-account');
	}
	public function shop_detail()
	{
		$this->load->view('shop-detail');
	}
	public function wishlist()
	{
		$this->load->view('wishlist');
	}
	public function shop()
	{
		$this->load->view('shop');
	}
	public function sido()
	{
		$this->load->view('sido');
	}
	public function keranjang()
	{
		$this->load->view('keranjang');
	}
}