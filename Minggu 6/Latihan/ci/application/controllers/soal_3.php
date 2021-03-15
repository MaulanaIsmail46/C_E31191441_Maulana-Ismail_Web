<?php  

class Soal_3 extends CI_Controller {
	public function index() {
		//echo "<h2>Hello World CI!</h2>";

		//c3 - membuat model "Hello_model"
		$this->load->model('modelsoal_3');

		//Pengambilan objek dari kelas Hello_model dan dimuat di var $model
		$model = $this->modelsoal_3;

		//Mengambil data dari model 
		$a = $model->txt;

		//Membuat data yang akan dikirim ke view
		$data['teks'] = $a;
		
		//memanggil file view 
		$this->load->view('soal_3', $data); //file view
	}
}


?>