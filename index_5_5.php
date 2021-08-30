<?php
$con=mysqli_connect('localhost','id17494817_print_shastra','_Vp0|hQ!w!ZoKtqe','id17494817_print_shastradb');
$sql="select * from users";
$res=mysqli_query($con,$sql);
$html='<style></style><Table border="2px">';
		$html='<style></style><table class="table" border="2px">';
		$html.='<tr><td>user_id</td><td>user_name</td><td>password</td><td>email</td></tr>';
while($row=mysqli_fetch_assoc($res)){
$html.='<tr><td>'.$row['user_id'].'</td><td>'.$row['username'].'</td><td>'.$row['password'].'</td><td>'.$row['email'].'</td></tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=users.xls');
echo $html;


?>