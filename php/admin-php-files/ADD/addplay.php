<?php
$host= 'localhost';
$user= 'root';
$pass='';
$db= 'PleasantVille';

$con = mysqli_connect($host,$user,$pass,$db);

if($con)
    echo 'connected successfully to PlasantVille database';

$playwright = $_POST['playwright'];
$playtitle = $_POST['title'];
$time = $_POST['playtime'];
$poster = $_POST['poster'];
//di ba mumatter ang lowercase/uppercase? wa koy sure pacheck daw ani mga bai - alfi
$sql="INSERT into play(Playwright, Title, Time, Poster) values ('$playwright', '$playtitle', '$time', '$poster')";

$query=mysqli_query($con,$sql);

if($query)
    echo 'Adding play complete!';
else
    echo 'A problem has been encountered. Pls check addplay.';
?>