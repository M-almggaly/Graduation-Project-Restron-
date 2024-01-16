<?php
require_once '../connection.php';
session_start();
if($_SESSION['user']->username == ''){
    header('Location:login.php');
}
else{
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="refresh" content="30">
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

<?php

if(isset($_POST['check'])){
    $update = $db->prepare('UPDATE log SET delivered = true WHERE id = :id');
    $update->bindParam('id',$_POST['check']);
    $update->execute();
}
if(isset($_POST['delete'])){
    $delete = $db->prepare('DELETE FROM log WHERE id = '.$_POST['delete']);
    $delete->execute();
}
?>
<form method="POST">
<table>
      <tr id="headeruser">              
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Total Price</th>
                    <th colspan="3">OK or Delet</th>

                </tr>
                <!-- <tr id="popu"><td>1</td>
                    <td>mohammed ahmed almggaly</td>
                    <td>773251954</td>
                    <td>150$</td>
                    <td><i class="fa fa-check" style="color: #5bbf90;"></i></td>
                    <td><i class="fa fa-trash" style="color: #fd3333ed;"></i></td>
                </tr> -->
                <?php
                $show = $db->prepare("SELECT * FROM log WHERE delivered = 0");
                $show->execute();
                $i = 1;
                foreach($show as $log){
                    echo '<tr id="popu">
                  
                    <td>'.$i++.'</td>
                    <td>'.$log['name'].'</td>
                    <td>773251965</td>
                    <td>150$</td>
                    <td><button type="submit" name="check" value='.$log['id'].'><i class="fa fa-check" style="color: #5bbf90;"></i></button></td>
                    <td><button type="submit" name="delete" value='.$log['id'].'><i class="fa fa-trash" style="color: #fd3333ed;"></i></button></td>

                </tr>';
                }
                ?>


</table>
</div>


</div>
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
<style>
    *{
        margin:0;
        padding: 0;
    }
form {
    margin: 20px;
}
body {
   background-color: #fff;
}
.navbar-dark .navbar-nav .nav-link {
    width: 100%;
}
.ms-auto {
    margin-left: 0 !important;
    width: 100%;
}
.home{color: var(--primary) !important;}</style>
</html>