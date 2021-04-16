<?php 



//database connnection
$username = "root";
$password = "";
$server = 'localhost';
$db = 'meeting';

$conn =mysqli_connect($server,$username,$password,$db);




if($conn){
    ?>
    <script>
        // alert("connected");
    </script>

    <?php
}
else{
echo 'connection failed';
}
?>

