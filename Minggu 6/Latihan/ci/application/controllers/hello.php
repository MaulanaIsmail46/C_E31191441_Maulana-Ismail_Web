<?php  

class hello extends CI_Controller {
	public function index() {
		//echo "<h2>Hello World CI!</h2>";
		
		//c3 - membuat model "hello_model"
		$this->load->model('hello_model');

		//Pengambilan objek dari kelas hello_model dan dimuat di var $model
		$model = $this->hello_model;

		//Mengambil data dari model 
		$a = $model->txt;

		//Membuat data yang akan dikirim ke view
		$data['teks'] = $a;

		//memanggil file view 
		$this->load->view('helloview', $data); //file view
	}
}


?>