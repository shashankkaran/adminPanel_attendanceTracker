<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
   <title>Document</title>

<style>
form{
    margin: 5%;
}



</style>




</head>

<body>

<?php 

include 'connectadmin.php';

?>


    <form method="post">



<?php 




$id =$_GET['id'];
$sql = "SELECT * FROM meets where id=$id";
$result = mysqli_query($conn, $sql);
$res = mysqli_fetch_assoc($result);







?>








    
    <div class="mb-3">
    <label for="meetname" class="form-label">Meet Name</label>
    <input type="text" class="form-control" id="meetname" value="<?php echo $res['name'] ?>" name="meetname" placeholder="English and communication" value="">
    </div>
    <div class="mb-3">
    <label for="starttime" class="form-label">Start Time</label>
    <input type="text" class="form-control" id="starttime" value="<?php echo $res['start_time'] ?>" placeholder="YYYY-MM-DD HH:MM:SS" name="starttime" value="" >
    </div>
    <div class="mb-3">
    <label for="endingtime" class="form-label">End Time</label>
    <input type="text" class="form-control" id="endingtime" value="<?php echo $res['end_time'] ?>" placeholder="YYYY-MM-DD HH:MM:SS" name="endingtime" value="" >
    </div>
    <input type="submit" name="save" class="btn btn-primary" value="Save Changes"/>
  


    </form>

 <?php 

 if(isset($_POST['save'])){
$id = $_GET['id'];

$name = $_POST['meetname'];
$starttime = $_POST['starttime'];
$endtime = $_POST['endingtime'];

$updatequery ="UPDATE meets SET 'name'='$name','start_time'='$starttime','end_tme'='$endtime' where id ='$id'  ";
$query = mysqli_query($conn,$updatequery);
header("Refresh:0");

 }
 
 
 
 ?>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>



</body>

</html>