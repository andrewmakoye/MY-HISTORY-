<?php
$con=mysqli_connect("localhost","root","","lasted");
if(isset($_POST['save'])){

$us=$_POST['username'];
$e=$_POST['email'];
$ps=$_POST['password'];

$ins="INSERT INTO tutu(username,email,password) VALUES('$us','$e','$ps')";
$run=mysqli_query($con,$ins);
if($run){
<?php
$con=mysqli_connect("localhost","root","","lasted");
if(isset($_POST['save'])){

$us=$_POST['username'];
$e=$_POST['email'];
$ps=$_POST['password'];

$ins="INSERT INTO tutu(username,email,password) VALUES('$us','$e','$ps')";
$run=mysqli_query($con,$ins);
if($run){
header('Location: favourite.html');
}
else
{
echo"not okay";
}
}
mysqli_close($con);


?>
}
else
{
echo"not okay";
}
}
mysqli_close($con);


?>
