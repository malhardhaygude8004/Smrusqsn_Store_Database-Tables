<?php
require('vendor/autoload.php');
$con=mysqli_connect('localhost','id17494817_print_shastra','_Vp0|hQ!w!ZoKtqe','id17494817_print_shastradb');
$res=mysqli_query($con,"select * from brands");
if(mysqli_num_rows($res)>0){
	$html='<style></style><table class="table" border="2px">';
		$html.='<tr><td>BrandId</td><td>BrandName</td><td>BrandActive</td><td>brand_status</td></tr>';
		while($row=mysqli_fetch_assoc($res)){
			$html.='<tr><td>'.$row['brand_id'].'</td><td>'.$row['brand_name'].'</td><td>'.$row['brand_active'].'</td><td>'.$row['brand_status'].'</td></tr>';
		}
	$html.='</table>';
}else{
	$html="Data not found";
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='media/'.time().'.pdf';
$mpdf->output($file,'d');

?>