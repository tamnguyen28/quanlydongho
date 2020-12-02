<?php include "includes/header.php" ?>
<br />
<?php 
    include "includes/connection.php";
?>
<?php 
if(isset($_POST['capnhatsoluong'])){
    
    for($i=0; $i<count($_POST['product_id']); $i++){
        $sanpham_id = $_POST['product_id'][$i];
        $soluong = $_POST['soluong'][$i];
        if($soluong <= 0){
            $sql_delete = mysqli_query($conn, "DELETE FROM giohang WHERE sanpham_id='$sanpham_id'");
        }else{
            $sql_update = mysqli_query($conn, "UPDATE giohang SET soluong = '$soluong' WHERE sanpham_id='$sanpham_id'");
        }
    }
}else if(isset($_GET['xoa'])){
    $id = $_GET['xoa'];
    $sql_delete = mysqli_query($conn, "DELETE FROM giohang WHERE id_giohang='$id'");
}
?>

		<!-- entry-header-area-start -->
		<div class="entry-header-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
                        <br />
						<div class="entry-header-title" align="center">
							<h2>Giỏ hàng</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- entry-header-area-end -->
		<!-- cart-main-area-start -->
		<div class="cart-main-area mb-70">
			<div class="container">
				<div class="row">
                    <?php
                    $sql_lay_giohang = mysqli_query($conn, "SELECT * FROM giohang ORDER BY id_giohang DESC");
                    ?>
					<div class="col-lg-12">
						<form action="giohang.php" method="post">
							<div class="table-content table-responsive">
								<table>
									<thead>
										<tr>
                                            <th class="product-stt">STT</th>
											<th class="product-thumbnail">Hình ảnh</th>
											<th class="product-name">Sản phẩm</th>
											<th class="product-price">Giá tiền</th>
											<th class="product-quantity">Số lượng</th>
											<th class="product-subtotal">Tổng tiền</th>
											<th class="product-remove">Quản lý</th>
										</tr>
									</thead>
									<tbody>
                                    <?php 
                                    $i = 0;	
                                    $total = 0;
									while($row = mysqli_fetch_array($sql_lay_giohang))
									{ 
                                        $tongtien = $row['soluong'] * $row['giasanpham'];
                                        $total += $tongtien;
                                        $i++;
                                    ?>
										<tr>
                                            <td><?php echo $i ?></td>
											<td class="product-thumbnail"><a href="#"><img src="public/frontend/img/product/<?php echo $row['hinhanh']; ?>" alt=" " class="img-responsive"/></a></td>
											<td class="product-name"><a href="#"><?php echo $row['tensanpham']; ?></a></td>
											<td class="product-price"><span id="price" class="amount"><?php echo number_format($row['giasanpham']) . 'vnd';?></span></td>
											<td class="product-quantity">
                                                <input type="number" min="1" name="soluong[]" value="<?php echo $row['soluong'];?>">
                                                <input type="hidden" name="product_id[]" value="<?php echo $row['sanpham_id'];?>">
                                            </td>
                                            <td class="product-subtotal"><?php echo number_format($tongtien) . 'vnd';?></td>
											<td class="product-remove">
                                                <a href="?xoa=<?php echo $row['id_giohang']?>">Xóa</a>
                                            </td>
										</tr>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="7">Tổng tiền: <?php  echo number_format($total) . 'vnd';?> </td>
                                    </tr>
                                    <tr>
                                        <td colspan="7"><input type="submit" class=" btn btn-success" value="Cập nhật giỏ hàng" name="capnhatsoluong"/></td>
                                    </tr>
									</tbody>
								</table>
							</div>
						</form>
					</div>
				</div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="wc-proceed-to-checkout">
                                <a href="thanhtoan.php">Thanh toán</a>
                        </div>
                    </div>
                </div>
			</div>
		</div>
		<!-- cart-main-area-end -->
<?php include "includes/footer.php"?>

<!-- <script>
	document.getElementById('asubmit1').onclick = function() {
		document.getElementById('formtk1').submit();
	}
</script> -->
