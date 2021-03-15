<?php  

class Soal_4 extends CI_Controller {
	public function index() {
		//c3 - membuat model "Hello_model"
		$this->load->model('modelSoal_4');

		//Pengambilan objek dari kelas Hello_model dan dimuat di var $model
		$model = $this->modelSoal_4;

		//Mengambil data dari model 
		$a = $model->txt1;
		$b = $model->txt2;

		//Membuat data yang akan dikirim ke view
		$data = array (
			"var1" => $a,
			"var2" => $b
		);
		
		//memanggil file view 
		$this->load->view('soal_4', $data); //file view
	}
}


?>