<?php
$con=mysqli_connect('localhost','id17494817_print_shastra','_Vp0|hQ!w!ZoKtqe','id17494817_print_shastradb');
$sql="select * from brands";
$res=mysqli_query($con,$sql);
$html='<style></style><table class="table" border="2px">';
		$html.='<tr><td>BrandId</td><td>BrandName</td><td>BrandActive</td><td>brand_status</td></tr>';
while($row=mysqli_fetch_assoc($res)){
	$html.='<tr><td>'.$row['brand_id'].'</td><td>'.$row['brand_name'].'</td><td>'.$row['brand_active'].'</td><td>'.$row['brand_status'].'</td></tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=brands.xls');
echo $html;


?>