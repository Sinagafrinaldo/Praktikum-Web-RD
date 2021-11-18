<?php  
if(isset($_POST['submit'])){
	$j_mangga = $_POST['j_mangga'];
	$j_jambu = $_POST['j_jambu'];
	$j_salak = $_POST['j_salak'];
	$h_mangga = 15000;
	$h_jambu = 13000;
	$h_salak = 10000;

	if ($j_mangga == NULL){
		$j_mangga = 0;
	}
	if ($j_jambu == NULL){
		$j_jambu = 0;
	}
	if ($j_salak == NULL){
		$j_salak = 0;
	}

	class hitung{
		public $jumlah;
		public $harga;
		function __construct($jumlah, $harga){
			$this->jumlah = $jumlah;
			$this->harga = $harga;
		}
		function total_harga(){
			return ($this->jumlah)*($this->harga);
		}
	}
	$tot_mangga = new hitung($j_mangga,$h_mangga);
	$tot_jambu = new hitung($j_jambu, $h_jambu);
	$tot_salak = new hitung($j_salak, $h_salak);
};

?>
