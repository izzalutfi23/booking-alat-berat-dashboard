<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mpdfcontroller extends CI_Controller {
 
	public function printPDF()
	{
		$mpdf = new \Mpdf\Mpdf();
		$data = $this->load->view('hasilPrint', [], TRUE);
		$mpdf->WriteHTML($data);
		$mpdf->Output();
	}
 
}