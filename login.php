<!-- <?php
// session_start();
?> -->
<?php include "includes/header.php"?>
<br>
<!-- <?php
//Gọi file connection.php ở bài trước
// require_once("includes/connection.php");
//     //Kiểm tra nếu người dùng đã ấn nút đăng nhập thì mới xử lý
// if(isset($_POST["btn_submit"])){
//     //lấy thông tin người dùng
//     $username = $_POST["username"];
//     $password =$_POST["pass"];
//     //làm sạch thông tin, xóa bỏ các tag html, ký tự đặnc biệt
// }
?> -->


<!-- user-login-area-start -->
<div class="user-login-area mb-70">
			<div class="container">
            <form method="POST" action="login.php">
				<div class="row">
					<div class="col-lg-12">
						<div class="login-title text-center mb-30">
							<h2>Login</h2>
							<p>doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo<br>inventore veritatis et quasi architecto beat</p>
						</div>
					</div>
					<div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-12 col-xs-12">
						<div class="login-form">
							<div class="single-login">
								<label>Username or email<span>*</span></label>
								<input type="text" id="username" name="username" />
							</div>
							<div class="single-login">
								<label>Passwords <span>*</span></label>
								<input type="text" id="pass" name="pass" />
							</div>
							<div class="single-login single-login-2" >
								<input type="submit" name="btn_submit" value="Login">
								<input id="rememberme" type="checkbox" name="rememberme" value="forever">
								<span>Remember me</span>
							</div>
							<a href="#">Lost your password?</a>
                        </div>
					</div>
                </div>
            </form>
			</div>
</div>
<!-- user-login-area-end -->
<?php include "includes/footer.php"?>