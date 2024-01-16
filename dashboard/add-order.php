<?php
require_once '../connection.php';
session_start();
if($_SESSION['user']->username == ''){header('Location:login.php');}
else{}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restorant</title>
      <!-- Icon Font Stylesheet -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- css style -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">
    <!-- css Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php require '../assets/navbar.php';?>
<form method="POST" enctype="multipart/form-data">
<div class="wow fadeInUp" data-wow-delay="0.2s">
        <div class="form-group">
            <div class="form-floating">
            <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required>
                <label for="name">Food Name</label>
            </div>
        </div>
    <!-- <input type="number" name="price" required> -->
    <div class="form-group">
            <div class="form-floating">
                <input name="price" type="number" class="form-control" id="number" placeholder="Price" required>
                <label for="price">Price</label>
            </div>
        </div>
        <div class="form-group">
            <div class="form-floating">
    <select name="type" class="form-control" id="name" style="cursor: pointer; background-color: #fff;" required>
        <option disabled selected value>...</option>
        <option value="1">Food</option>
        <option value="2">Drinks</option>
        <option value="3">Sweets</option>
    </select>
    <label for="type">Type Food</label>
</div>
</div>
    <div class="form-group">
            <div class="form-floating">
                <input name="img" type="file" class="form-control" id="name" placeholder="food img" style="cursor: pointer; background-color: #fff;" required>
                <label for="img">Food Img</label>
            </div>
        </div>
    <!-- <textarea name="desc" required></textarea> -->
    <div class="form-group">
            <div class="form-floating">
            <input name="desc" type="textarea" class="form-control" id="name" placeholder="Description" required>
                <label for="desc">Description</label>
            </div>
        </div>
        <div class="form-group">
            <button name="add" type="submit" class="btn btn-primary" style="width:30%">add</button>
        </div>
</form>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
<?php
if(isset($_POST['add'])){
    $add = $db->prepare("INSERT INTO orders(name,info,price,type,image)VALUES(:name,:info,:price,:type,:image)");
    $img = $_FILES['img']['name'];
    $add->bindParam("name",$_POST['name']);
    $add->bindParam("info",$_POST['desc']);
    $add->bindParam("price",$_POST['price']);
    $add->bindParam("type",$_POST['type']);
    $add->bindParam("image",$img);
    if($add->execute()){
        echo '<div class="alert alert-success">success</div>';
    }
    else{
        echo '<div class="alert alert-danger">error</div>';
    }
}
?>
<style>
.add-order{color: var(--primary) !important;}
form{
    display: flex;
    flex-direction: column;
    width: 50%;
    margin: auto;
    margin-top: 100px;
}
input , select , textarea{
    margin: 10px 0;
}
</style>
</html>