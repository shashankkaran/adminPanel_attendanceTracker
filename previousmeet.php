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
    <title>Admin</title>
</head>

<body>

    <table class="table table-striped table-hover">
        <h4 style="display: block;text-align:center;margin-top:3%;font-family: 'Lobster', cursive; ">Previous Meetings</h4>

        <div style="display: flex; justify-content:center;margin-left:10%;margin-right:10%;margin-top:2% " class="btn-group" role="group" aria-label="Basic example">


            <a href="previousmeet.php"> <button type="button" class="btn btn-secondary">Previous Meetings</button></a>
            <a href="admin.php">
                <button type="button" class="btn btn-primary">Upcoming Meetings</button></a>



            <a href="addmeet.php"> <button type="button" class="btn btn-danger">
                    + New Meeting
                </button>
            </a>




        </div>




        <thead>
            <tr>
                <th scope="col">Serial No</th>
                <th scope="col">Meeting Details</th>
                <th scope="col">Start Time</th>
                <th scope="col">End Time</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>
            </tr>
        </thead>
        <?php
        include 'connectadmin.php';

// logic for division of meets

date_default_timezone_set('Asia/Kolkata');
$cdatetime = date("Y-m-d h:i:s");



        $sql = "SELECT * FROM meets where end_time <='$cdatetime'   "  ;
        $result = mysqli_query($conn, $sql);
        $i = 1;

        while ($res = mysqli_fetch_array($result)) {






        ?>


            <tbody>
                <tr>
                    <th scope="row"><?php echo $i ?></th>
                    <td><?php echo $res['name'];  ?></td>
                    <td><?php echo $res['start_time'];  ?></td>
                    <td><?php echo $res['end_time'];  ?></td>
                    <td><a href="updaterow.php?id=<?php echo $res['id'];?>"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M8.424 12.282l4.402 4.399-5.826 1.319 1.424-5.718zm15.576-6.748l-9.689 9.804-4.536-4.536 9.689-9.802 4.536 4.534zm-6 8.916v6.55h-16v-12h6.743l1.978-2h-10.721v16h20v-10.573l-2 2.023z" />
                        </svg></a></td>
                    <td><a href="deleterow.php?id=<?php echo $res['id'];?>" ><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                            <path d="M5.662 23l-5.369-5.365c-.195-.195-.293-.45-.293-.707 0-.256.098-.512.293-.707l14.929-14.928c.195-.194.451-.293.707-.293.255 0 .512.099.707.293l7.071 7.073c.196.195.293.451.293.708 0 .256-.097.511-.293.707l-11.216 11.219h5.514v2h-12.343zm3.657-2l-5.486-5.486-1.419 1.414 4.076 4.072h2.829zm.456-11.429l-4.528 4.528 5.658 5.659 4.527-4.53-5.657-5.657z" />
                        </svg></a></td>
                </tr>

            </tbody>

        <?php
            $i++;
        }
        ?>
    </table>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>