<?php
session_start();
if($_SESSION['user']->username == ''){
    header('Location:login.php');
}
else{
    
}
require_once '../connection.php';
$show = $db->prepare("SELECT * FROM orders");
$show->execute();
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
<?php require '../assets/navbar.php';
$i = 1;
echo '<form method="POST"><table>';
foreach($show as $order){
    echo '<tr><td>'.$i++.'</td><td>'.$order['name'].'</td><td>'.$order['info'].'</td><td>'.$order['price'].'</td><td>'.$order['type'].'</td><td><img src="../img/'.$order['image'].'"></td>
    <td><button name="update" class="btn btn-primary" type="submit" value='.$order['id'].'>Update</button></td></tr>';
}
echo '</table></form>';
if(isset($_POST['update'])){
    $showOrder = $db->prepare("SELECT * FROM orders WHERE id = ". $_POST['update']);
    $showOrder->execute();
    $order = $showOrder->fetchObject();
    echo '<form method="POST" enctype="multipart/form-data">
    <input type="text" name="name" value='.$order->name.'>
    <input type="number" name="price" value='.$order->price.'>
    <select name="type">
        <option disabled value>---</option>
        <option value="Food">Food</option>
        <option value="Drink">Drinks</option>
        <option value="Sweets">Sweets</option>
    </select>
    <textarea name="desc">'.$order->info.'</textarea>
    <button type="submit" name="up" value='.$order->id.'>update</button>
</form>';
}
if(isset($_POST['up'])){
    $update = $db->prepare("UPDATE orders SET name = :name, price = :price, info = :info WHERE id = :id");
    $update->bindParam("id",$_POST['up']);
    $update->bindParam("name",$_POST['name']);
    $update->bindParam("price",$_POST['price']);
    $update->bindParam("info",$_POST['desc']);
    $update->execute();
}
?>
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
<style>.update-order{color: var(--primary) !important;}</style>
</html>