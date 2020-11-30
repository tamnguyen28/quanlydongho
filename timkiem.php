<?php
include "includes/header.php";
include "includes/connection.php";
if(isset($_POST['datatk'])){
    $data = $_POST['datatk'];
    $query ="SELECT * FROM Product WHERE Product.Name like '%$data%'";
    $result = mysqli_query($conn, $query);
    ?>
    <div class="product-wrapper-container">
        <?php while ($row = mysqli_fetch_assoc($result)) {
            include 'Timkiemtn.php';
        }?>
    <div class="product-wrapper-container">

<?php } ?>
