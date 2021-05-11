<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo "SUBMITTED";
}
else{
echo"no connection";
}
mysqli_select_db($con,'justicepostingdata');
$fbusername=$_POST['fbusername'];
$postlink=$_POST['postlink'];
$comments=$_POST['comments'];
$query="insert into userinfodata(comments)
values( '$fbusername','$postlink', '$comments');
echo"$query";
mysqli_query($con,$query);
header('location:index.php');

?>