<?php
require('vendor/autoload.php');
$con=mysqli_connect('localhost','id17494817_print_shastra','_Vp0|hQ!w!ZoKtqe','id17494817_print_shastradb');
$res=mysqli_query($con,"select * from product");
if(mysqli_num_rows($res)>0){
	$html='<style></style><Table border="2px">';
		$html.='<tr><td>product_id</td><td>product_name</td><td>product_image</td><td>brand_id</td><td>categories_id</td><td>quantity</td><td>rate</td><td>active</td><td>status</td><td>cost_price</td></tr>';
		while($row=mysqli_fetch_assoc($res)){
			$html.='<tr><td>'.$row['product_id'].'</td><td>'.$row['product_name'].'</td><td>'.$row['product_image'].'</td><td>'.$row['brand_id'].'</td><td>'.$row['categories_id'].'</td><td>'.$row['quantity'].'</td><td>'.$row['rate'].'</td><td>'.$row['active'].'</td><td>'.$row['status'].'</d><td>'.$row['cost_price'].'</d></tr>';
		}
	$html.='</Table>';
}else{
	$html="Data not found";
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='media/'.time().'.pdf';
$mpdf->output($file,'d');
//D
//I
//F
//s
?>