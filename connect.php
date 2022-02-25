<?php 
$conn = mysqli_connect('localhost','root','','se_project2022');

if($conn){
    mysqli_query($conn,"SET NAMEs 'utf8'");
}else{
    echo "ket noi that bai";
}
?>