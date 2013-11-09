<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
    {
        parent::__construct();   
        $this->load->model('Products_model','datamodel');     
    }
	   
	
	public function index()
	{
		 
		$data['title']='List Of Products';	
		$kedb = $this->db->get('products');
		 
		 //Untuk mengeset URL / alamat yang digunakan
		 $config['base_url'] = base_url()."backend/products/index";
		 //mengambil nilai jumlah baris atau jumlah data yang ada dalam database yang sudah deselect variable kedb
         $config['total_rows'] = $kedb->num_rows();
		 //mengatur jumlah post yang ditampilkan dalam 1 halaman
         $config['per_page'] = 20;
		 //penomoran halaman ditempatkan di uri segment ke 4, artinya nomor halaman diletakan setelah nama controller,nama fungsi, dan parameter pertama.
		 $config['uri_segment'] = 4;
		 //Kata pada halaman pertama
		 $config['first_page'] = 'Awal';
		 //Kata pada halaman akhir
		 $config['last_page'] = 'Akhir';
		 //Kata pada halaman selanjutnya kalau diatas adalah tombol “>”
		 $config['next_page'] = '&laquo;';
		 //Kata pada halaman sebelumnya kalau diatas adalah tombol “<”
		 $config['prev_page'] = '&raquo;';
		 //Teks yang ingin ditampilkan dalam link "terakhir" di sebelah kanan.
		 $config['last_link'] = 'Akhir';
		 //Teks yang ingin ditampilkan dalam link "awal" di sebelah kiri.
		 $config['first_link'] = 'Awal';
		 //menginisialisasi pagination class dengan menggunakan konfigurasi yang telah diatur sebelumnya.
         $this->pagination->initialize($config);
		 
		 
         //Mengambil posisi halaman berapa sekarang yang di lihat dari url nya jika tidak ada berarti dalam posisi 0  
         $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
           
         $data['table'] = $this->datamodel->load_table($config["per_page"], $page);
		 //membuat link navigasi halaman.
         $data['links'] = $this->pagination->create_links();
		 //membuat nomor
		  $data['no'] = $page;
		 $this->mytemplate->loadBackend('products',$data);
	}
	
	
	
	
	
	

	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
