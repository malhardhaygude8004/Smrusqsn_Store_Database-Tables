<?php
require('vendor/autoload.php');
$con=mysqli_connect('localhost','id17494817_print_shastra','_Vp0|hQ!w!ZoKtqe','id17494817_print_shastradb');
$res=mysqli_query($con,"select * from order_item");
if(mysqli_num_rows($res)>0){
	$html='<style></style><Table border="2px">';
		$html.='<tr><td>order_item_id</td><td>order_id</td><td>product_id</td><td>quantity</td><td>rate</td><td>total</td><td>order_item_status</td><td>product_wise_discount</td><td>product_wise_discount_amount</td></tr>';
		while($row=mysqli_fetch_assoc($res)){
			$html.='<tr><td>'.$row['order_item_id'].'</td><td>'.$row['order_id'].'</td><td>'.$row['product_id'].'</td><td>'.$row['quantity'].'</td><td>'.$row['rate'].'</td><td>'.$row['total'].'</td><td>'.$row['order_item_status'].'</td><td>'.$row['product_wise_discount'].'</td><td>'.$row['product_wise_discount_amount'].'</tr>';
		}
	$html.='</Table>';
}else{
	$html="Data not found";
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='media/'.time().'.pdf';
$mpdf->output($file,'d');

?>