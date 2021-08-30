<?php
$con=mysqli_connect('localhost','id17494817_print_shastra','_Vp0|hQ!w!ZoKtqe','id17494817_print_shastradb');
$sql="select * from categories";
$res=mysqli_query($con,$sql);
$html='<style></style><Table border="2px">';
		$html.='<tr><td>CategoriesId</td><td>CategoriesName</td><td>CategoriesActive</td><td>categories_status</td></tr>';
while($row=mysqli_fetch_assoc($res)){
$html.='<tr><td>'.$row['categories_id'].'</td><td>'.$row['categories_name'].'</td><td>'.$row['categories_active'].'</td><td>'.$row['categories_status'].'</td></tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=categories.xls');
echo $html;

?>