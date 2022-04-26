<?php
include "dbconect.php";

$id = $_GET['id'];
$updateView=mysqli_query($connect,"update posts SET views=views+1 where id='$id'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Portal</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

</head>
<body>
    <?php
    include "header.php";
    ?>
<?php
$id=$_GET['id'];
    $query=mysqli_query($connect, "select * from posts where id='$id'");
    $row= mysqli_fetch_array($query);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <h2 class="display-6"><?php echo $row['title'];?></h2>


                        <div class="row text-black ">
                                 <div class="col-3 fw-bold"><i class="bi bi-file-person"></i>
<?php echo $row['author'];?></div>
                                 <div class="col ms-5  mb-3"><i class="bi bi-clock"></i>


                                    <?php $raw=$row['date'];
                                 echo $date=date("[g-i-A] {d-M-Y} [l] (z)", strtotime($raw));?></div>
                                 <div class="col ms-5 mb-3"><i class="bi bi-eye"></i>

                                     <?php echo $row['views'];?>
                                 </div>
                             </div>

                             <p class="lead">
                                 <?php echo $row['content'];?>
                             </p>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>