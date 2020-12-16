<?php
include "includes/header.php";
include "includes/connection.php";
if (isset($_POST['datatk'])) {
    $data = addslashes($_POST['datatk']);
    $query = " SELECT * FROM product WHERE product.Name like '%$data%'";
    $result = mysqli_query($conn, $query);
?>
    <h3 style="margin-left:20px; margin-top:30px">Kết quả tìm kiếm: <?php echo mysqli_num_rows($result) ?> Sản phẩm</h3>
    <div class="product-wrapper-container">
        <?php while ($row = mysqli_fetch_assoc($result)) {
            include 'Timkiemtn.php';
        } ?>
        <div class="product-wrapper-container">

        <?php } ?>