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
    
    <div class="mb-3">
    <label for="meetname" class="form-label">Meet Name</label>
    <input type="text" class="form-control" id="meetname" name="meetname" placeholder="English and communication" value="">
    </div>
    <div class="mb-3">
    <label for="starttime" class="form-label">Start Time</label>
    <input type="text" class="form-control" id="starttime" placeholder="YYYY-MM-DD HH:MM:SS" name="starttime" value="" >
    </div>
    <div class="mb-3">
    <label for="endingtime" class="form-label">End Time</label>
    <input type="text" class="form-control" id="endingtime" placeholder="YYYY-MM-DD HH:MM:SS" name="endingtime" value="" >
    </div>
    <button type="submit" name="add" class="btn btn-primary">Add</button>
  


    </form>

    <?php

    if (isset($_POST['add'])) {
        $meetname = $_POST['meetname'];
        $starttime = $_POST['starttime'];
        $endtime = $_POST['endingtime'];
        $insertquery1 = "INSERT INTO 'meets' (name,start_time,end_time) Values ('$meetname','$starttime','$endtime')  ";
        $query = mysqli_query($conn, $insertquery1);
// shubham said he need two tables thats wht pushing in two tables
        $insertquery2 = "INSERT INTO 'usermeet' (name,start_time,end_time) Values ('$meetname','$starttime','$endtime')  ";
        $query = mysqli_query($conn, $insertquery2);

        
        header("Location: admin.php");

    }


    ?>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>



</body>

</html>