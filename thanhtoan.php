<?php include "includes/header.php" ?>
<br />
		<!-- checkout-area-start -->
		<div class="checkout-area mb-70">
			<div class="container">
				<div class="row">
					<form action="#">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="checkbox-form">						
								<h3>Chi tiết hóa đơn</h3>
								<div class="row">
									<div class=" col-lg-12">
										<div class="country-select">
											<label>Quốc gia <span class="required">*</span></label>
											<select>
											  <option value="volvo">English</option>
											  <option value="saab">Việt Nam</option>
											  <option value="mercedes">Afghanistan</option>
											  <option value="audi">Ghana</option>
											  <option value="audi2">Albania</option>
											  <option value="audi3">Bahrain</option>
											  <option value="audi4">Colombia</option>
											  <option value="audi5">Dominican Republic</option>
											</select> 										
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
										<div class="checkout-form-list">
											<label>Tên <span class="required">*</span></label>										
											<input type="text" placeholder="">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="checkout-form-list">
											<label>Họ <span class="required">*</span></label>										
											<input type="text" placeholder="">
										</div>
									</div>
									<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="checkout-form-list">
											<label>Tên công ty</label>
											<input type="text" placeholder="">
										</div>
									</div> -->
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="checkout-form-list">
											<label>Địa chỉ <span class="required">*</span></label>
											<input type="text" placeholder="Địa chỉ cụ thể">
										</div>
									</div>
									<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="checkout-form-list">									
											<input type="text" placeholder="Apartment, suite, unit etc. (optional)">
										</div>
									</div> -->
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="checkout-form-list">
											<label>Tỉnh/Thành phố <span class="required">*</span></label>
											<input type="text" placeholder="Tên Tỉnh/Thành phố">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="checkout-form-list">
											<label>Thị xã/Quận <span class="required">*</span></label>										
											<input type="text" placeholder="">
										</div>
									</div>
									<!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="checkout-form-list">
											<label>Postcode / Zip <span class="required">*</span></label>										
											<input type="text" placeholder="Postcode / Zip">
										</div>
									</div> -->
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="checkout-form-list">
											<label>Địa chỉ Email <span class="required">*</span></label>										
											<input type="email" placeholder="">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="checkout-form-list">
											<label>Số điện thoại  <span class="required">*</span></label>										
											<input type="text" placeholder="0898xxxxxx">
										</div>
									</div>
									<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="checkout-form-list create-acc">	
											<input type="checkbox" id="cbox">
											<label>Tạo tài khoản?</label>
										</div>
										<div class="checkout-form-list create-account" id="cbox_info" style="display: none;">
											<p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
											<label>Account password  <span class="required">*</span></label>
											<input type="password" placeholder="password">	
										</div>
									</div>								 -->
								</div>
								<div class="different-address">
										<div class="ship-different-title">
											<h3>
												<label>Vận chuyển đến địa chỉ khác</label>
												<input type="checkbox" id="ship-box">
											</h3>
										</div>
									<!-- <div class="row" id="ship-box-info" style="display: none;">
										<div class="col-lg-12">
											<div class="country-select">
												<label>Country <span class="required">*</span></label>
												<select>
												  <option value="volvo">bangladesh</option>
												  <option value="saab">Algeria</option>
												  <option value="mercedes">Afghanistan</option>
												  <option value="audi">Ghana</option>
												  <option value="audi2">Albania</option>
												  <option value="audi3">Bahrain</option>
												  <option value="audi4">Colombia</option>
												  <option value="audi5">Dominican Republic</option>
												</select> 										
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="checkout-form-list">
												<label>First Name <span class="required">*</span></label>										
												<input type="text" placeholder="">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="checkout-form-list">
												<label>Last Name <span class="required">*</span></label>										
												<input type="text" placeholder="">
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="checkout-form-list">
												<label>Company Name</label>
												<input type="text" placeholder="">
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="checkout-form-list">
												<label>Address <span class="required">*</span></label>
												<input type="text" placeholder="Street address">
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="checkout-form-list">									
												<input type="text" placeholder="Apartment, suite, unit etc. (optional)">
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="checkout-form-list">
												<label>Town / City <span class="required">*</span></label>
												<input type="text" placeholder="Town / City">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="checkout-form-list">
												<label>State / County <span class="required">*</span></label>										
												<input type="text" placeholder="">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="checkout-form-list">
												<label>Postcode / Zip <span class="required">*</span></label>										
												<input type="text" placeholder="Postcode / Zip">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="checkout-form-list">
												<label>Email Address <span class="required">*</span></label>										
												<input type="email" placeholder="">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="checkout-form-list">
												<label>Phone  <span class="required">*</span></label>										
												<input type="text" placeholder="Postcode / Zip">
											</div>
										</div>								
									</div> -->
									<div class="order-notes">
										<div class="checkout-form-list">
											<label>Ghi chú đơn hàng</label>
											<textarea placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ: lưu ý đặc biệt để giao hàng." rows="10" cols="30" id="checkout-mess"></textarea>
										</div>									
									</div>
								</div>													
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="your-order">
								<h3>Đơn đặt hàng của bạn</h3>
								<div class="your-order-table table-responsive">
									<table>
										<thead>
											<tr>
												<th class="product-name">Sản phẩm</th>
												<th class="product-total">Tổng</th>
											</tr>							
										</thead>
										<tbody>
											<tr class="cart_item">
												<td class="product-name">
													Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
												</td>
												<td class="product-total">
													<span class="amount">£165.00</span>
												</td>
											</tr>
											<tr class="cart_item">
												<td class="product-name">
													Vestibulum suscipit	<strong class="product-quantity"> × 1</strong>
												</td>
												<td class="product-total">
													<span class="amount">£50.00</span>
												</td>
											</tr>
										</tbody>
										<tfoot>
											<tr class="cart-subtotal">
												<th>Tổng giỏ hàng</th>
												<td><span class="amount">£215.00</span></td>
											</tr>
											<tr class="shipping">
												<th>Vận chuyển</th>
												<td>
													<ul>
														<li>
															<input type="radio">
															<label>
																Phí vận chuyển <span class="amount">£7.00</span>
															</label>
														</li>
														<li>
															<input type="radio">
															<label>Miễn phí vận chuyển</label>
														</li>
														<li></li>
													</ul>
												</td>
											</tr>
											<tr class="order-total">
												<th>Tổng đơn hàng</th>
												<td><strong><span class="amount">£215.00</span></strong>
												</td>
											</tr>								
										</tfoot>
									</table>
								</div>
								<div class="payment-method">
									<div class="payment-accordion">
										<div class="collapses-group">
											<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="headingOne">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            Chuyển tiền trực tiếp qua ngân hàng
															</a>
														</h4>
													</div>
													<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
														<div class="panel-body">
															<p>
Thực hiện thanh toán của bạn trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn đặt hàng của bạn làm tham chiếu thanh toán. Đơn đặt hàng của bạn sẽ không được giao cho đến khi tiền đã hết trong tài khoản của chúng tôi.</p>
														</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="headingTwo">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
															  Thanh toán thẻ
															</a>
														</h4>
													</div>
													<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
														<div class="panel-body">
															<p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
														</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="headingThree">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
															 Thanh toán khi nhận hàng
															</a>
														</h4>
													</div>
													<!-- <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
													  <div class="panel-body">
															<p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
													  </div> -->
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="order-button-payment">
										<input type="submit" value="Đặt hàng">
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- checkout-area-end -->
<?php include "includes/footer.php"?>