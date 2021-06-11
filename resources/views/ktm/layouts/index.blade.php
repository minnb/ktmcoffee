@extends('ktm.app')
@section('title', 'KTM Coffee')
@section('content')
@include('ktm.layouts.slide')
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="row">
				<div class="col-lg-8">

					<div class="row">
						<div class="col-lg-6 norightpadding" style="margin-bottom: 15px;">
							<a href="#"><img src="{{ asset('ktmcoffee/images/shop/banners/2.jpg')}}" alt="Image"></a>
						</div>

						<div class="col-lg-6 norightpadding" style="margin-bottom: 15px;">
							<a href="#"><img src="{{ asset('ktmcoffee/images/shop/banners/8.jpg')}}" alt="Image"></a>
						</div>

						<div class="w-100"></div>

						<div class="col-lg-12 norightpadding">
							<a href="#"><img src="{{ asset('ktmcoffee/images/shop/banners/4.jpg')}}" alt="Image"></a>
						</div>
					</div>

				</div>

				<div class="col-lg-4">
					<a href="#"><img src="{{ asset('ktmcoffee/images/shop/banners/9.jpg')}}" alt="Image"></a>
				</div>
			</div>
			<div class="clear"></div>
			<div class="tabs topmargin-lg clearfix" id="tab-3">
				<ul class="tab-nav clearfix">
					<li><a href="#tabs-9">New Arrivals</a></li>
					<li><a href="#tabs-10">Best sellers</a></li>
					<li><a href="#tabs-11">You may like</a></li>
				</ul>

				<div class="tab-container">

					<div class="tab-content clearfix" id="tabs-9">

						<div id="shop" class="shop clearfix">

							<div class="product clearfix">
								<div class="product-image">
									<a href="#"><img src="{{ asset('ktmcoffee/images/shop/dress/1.jpg')}}" alt="Checked Short Dress"></a>
									<a href="#"><img src="{{ asset('ktmcoffee/images/shop/dress/1-1.jpg')}}" alt="Checked Short Dress"></a>
									<div class="sale-flash">50% Off*</div>
									<div class="product-overlay">
										<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
										<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Checked Short Dress</a></h3></div>
									<div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>
									<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-half-full"></i>
									</div>
								</div>
							</div>

							<div class="product clearfix">
								<div class="product-image">
									<a href="#"><img src="{{ asset('ktmcoffee/images/shop/pants/1-1.jpg')}}" alt="Slim Fit Chinos"></a>
									<a href="#"><img src="{{ asset('ktmcoffee/images/shop/pants/1.jpg')}}" alt="Slim Fit Chinos"></a>
									<div class="product-overlay">
										<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
										<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Slim Fit Chinos</a></h3></div>
									<div class="product-price">$39.99</div>
									<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-half-full"></i>
										<i class="icon-star-empty"></i>
									</div>
								</div>
							</div>

							<div class="product clearfix">
								<div class="product-image">
									<div class="fslider" data-arrows="false">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="#"><img src="{{ asset('ktmcoffee/images/shop/shoes/1.jpg')}}" alt="Dark Brown Boots"></a></div>
												<div class="slide"><a href="#"><img src="{{ asset('ktmcoffee/images/shop/shoes/1-1.jpg')}}" alt="Dark Brown Boots"></a></div>
												<div class="slide"><a href="#"><img src="{{ asset('ktmcoffee/images/shop/shoes/1-2.jpg')}}" alt="Dark Brown Boots"></a></div>
											</div>
										</div>
									</div>
									<div class="product-overlay">
										<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
										<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Dark Brown Boots</a></h3></div>
									<div class="product-price">$49</div>
									<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-empty"></i>
										<i class="icon-star-empty"></i>
									</div>
								</div>
							</div>

							<div class="product clearfix">
								<div class="product-image">
									<a href="#"><img src="{{ asset('ktmcoffee/images/shop/dress/2.jpg')}}" alt="Light Blue Denim Dress"></a>
									<a href="#"><img src="{{ asset('ktmcoffee/images/shop/dress/2-2.jpg')}}" alt="Light Blue Denim Dress"></a>
									<div class="product-overlay">
										<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
										<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Light Blue Denim Dress</a></h3></div>
									<div class="product-price">$19.95</div>
									<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-empty"></i>
									</div>
								</div>
							</div>

						</div>

					</div>

					<div class="tab-content clearfix" id="tabs-10">

						<div id="shop" class="shop clearfix">

							<div class="product clearfix">
								<div class="product-image">
									<a href="#"><img src="{{ asset('ktmcoffee/images/shop/sunglasses/1.jpg')}}" alt="Unisex Sunglasses"></a>
									<a href="#"><img src="{{ asset('ktmcoffee/images/shop/sunglasses/1-1.jpg')}}" alt="Unisex Sunglasses"></a>
									<div class="sale-flash">Sale!</div>
									<div class="product-overlay">
										<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
										<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Unisex Sunglasses</a></h3></div>
									<div class="product-price"><del>$19.99</del> <ins>$11.99</ins></div>
									<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-empty"></i>
										<i class="icon-star-empty"></i>
									</div>
								</div>
							</div>

							<div class="product clearfix">
								<div class="product-image">
									<a href="#"><img src="{{ asset('ktmcoffee/images/shop/tshirts/1.jpg')}}" alt="Blue Round-Neck Tshirt"></a>
									<a href="#"><img src="{{ asset('ktmcoffee/images/shop/tshirts/1-1.jpg')}}" alt="Blue Round-Neck Tshirt"></a>
									<div class="product-overlay">
										<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
										<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Blue Round-Neck Tshirt</a></h3></div>
									<div class="product-price">$9.99</div>
									<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-half-full"></i>
										<i class="icon-star-empty"></i>
									</div>
								</div>
							</div>

							<div class="product clearfix">
								<div class="product-image">
									<a href="#"><img src="{{ asset('ktmcoffee/images/shop/watches/1.jpg')}}" alt="Silver Chrome Watch"></a>
									<a href="#"><img src="{{ asset('ktmcoffee/images/shop/watches/1-1.jpg')}}" alt="Silver Chrome Watch"></a>
									<div class="product-overlay">
										<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
										<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Silver Chrome Watch</a></h3></div>
									<div class="product-price">$129.99</div>
									<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-half-full"></i>
									</div>
								</div>
							</div>

							<div class="product clearfix">
								<div class="product-image">
									<a href="#"><img src="{{ asset('ktmcoffee/images/shop/shoes/2.jpg')}}" alt="Men Grey Casual Shoes"></a>
									<a href="#"><img src="{{ asset('ktmcoffee/images/shop/shoes/2-1.jpg')}}" alt="Men Grey Casual Shoes"></a>
									<div class="sale-flash">Sale!</div>
									<div class="product-overlay">
										<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
										<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Men Grey Casual Shoes</a></h3></div>
									<div class="product-price"><del>$45.99</del> <ins>$39.49</ins></div>
									<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-half-full"></i>
										<i class="icon-star-empty"></i>
										<i class="icon-star-empty"></i>
									</div>
								</div>
							</div>

						</div>
					</div>

					<div class="tab-content clearfix" id="tabs-11">

						<div id="shop" class="shop clearfix">

							<div class="product clearfix">
								<div class="product-image">
									<div class="fslider" data-arrows="false">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="#"><img src="{{ asset('ktmcoffee/images/shop/dress/3.jpg')}}" alt="Pink Printed Dress"></a></div>
												<div class="slide"><a href="#"><img src="{{ asset('ktmcoffee/images/shop/dress/3-1.jpg')}}" alt="Pink Printed Dress"></a></div>
												<div class="slide"><a href="#"><img src="{{ asset('ktmcoffee/images/shop/dress/3-2.jpg')}}" alt="Pink Printed Dress"></a></div>
											</div>
										</div>
									</div>
									<div class="product-overlay">
										<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
										<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Pink Printed Dress</a></h3></div>
									<div class="product-price">$39.49</div>
									<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-empty"></i>
										<i class="icon-star-empty"></i>
									</div>
								</div>
							</div>

							<div class="product clearfix">
								<div class="product-image">
									<a href="#"><img src="{{ asset('ktmcoffee/images/shop/pants/5.jpg')}}" alt="Green Trousers"></a>
									<a href="#"><img src="{{ asset('ktmcoffee/images/shop/pants/5-1.jpg')}}" alt="Green Trousers"></a>
									<div class="sale-flash">Sale!</div>
									<div class="product-overlay">
										<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
										<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Green Trousers</a></h3></div>
									<div class="product-price"><del>$24.99</del> <ins>$21.99</ins></div>
									<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-half-full"></i>
										<i class="icon-star-empty"></i>
									</div>
								</div>
							</div>

							<div class="product clearfix">
								<div class="product-image">
									<a href="#"><img src="{{ asset('ktmcoffee/images/shop/sunglasses/2.jpg')}}" alt="Men Aviator Sunglasses"></a>
									<a href="#"><img src="{{ asset('ktmcoffee/images/shop/sunglasses/2-1.jpg')}}" alt="Men Aviator Sunglasses"></a>
									<div class="product-overlay">
										<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
										<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Men Aviator Sunglasses</a></h3></div>
									<div class="product-price">$13.49</div>
									<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-empty"></i>
									</div>
								</div>
							</div>

							<div class="product clearfix">
								<div class="product-image">
									<a href="#"><img src="{{ asset('ktmcoffee/images/shop/tshirts/4.jpg')}}" alt="Black Polo Tshirt"></a>
									<a href="#"><img src="{{ asset('ktmcoffee/images/shop/tshirts/4-1.jpg')}}" alt="Black Polo Tshirt"></a>
									<div class="product-overlay">
										<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
										<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Black Polo Tshirt</a></h3></div>
									<div class="product-price">$11.49</div>
									<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>

			</div>

			<div class="clear bottommargin-sm"></div>

			<div class="col_one_third">
				<div class="fancy-title title-border">
					<h4>Về chúng tôi</h4>
				</div>
				<p>Thường những người đơn giản lại là những người mất lâu thời gian để hiểu nhất, nhạy cảm nhất NHƯNG cũng sâu sắc nhất, đàng hoàng nhất, chỉnh chuẩn chân thành nhất. Thế nên để phục vụ các anh chị khách hàng của KTM 6 năm qua, chỉ có 1 phương châm thôi : <strong>"MỘC.CHÂN THÀNH.CHUẨN"</strong></p>
			</div>

			<div class="col_one_third subscribe-widget">
				<div class="fancy-title title-border">
					<h4>Gu cà phê</h4>
				</div>
				<p>Cà phê: Ngon hay không ngon! <strong>KHÔNG CÓ 1 ĐỊNH NGHĨA CHUNG VỀ VIỆC NGON HAY KO NGON</strong>. Mà chỉ có: Gu đó (gu nào) hợp với bạn hay ko hợp với bạn mà thôi. Gu nào là xu thế của tương lai, là có lợi copy-right sức khỏe, và gu nào là gu có độn, trộn, tẩm... không nên dùng.</p>
				<div class="widget-subscribe-form-result"></div>
			</div>

			<div class="col_one_third col_last">
				<div class="fancy-title title-border">
					<h4>Liên hệ</h4>
				</div>
				<a href="#" class="social-icon si-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
					<i class="icon-facebook"></i>
					<i class="icon-facebook"></i>
				</a>
				<a href="#" class="social-icon si-gplus" data-toggle="tooltip" data-placement="top" title="Google+">
					<i class="icon-gplus"></i>
					<i class="icon-gplus"></i>
				</a>
				<a href="#" class="social-icon si-call" data-toggle="tooltip" data-placement="top" title="Call">
					<i class="icon-call"></i>
					<i class="icon-call"></i>
				</a>
			</div>
		</div>

		<div class="section nobottommargin">
			<div class="container clearfix">
				<div class="col_one_fourth nobottommargin">
					<div class="feature-box fbox-plain fbox-dark fbox-small">
						<div class="fbox-icon">
							<i class="icon-thumbs-up2"></i>
						</div>
						<h3>100% Cà phê thật</h3>
						<p class="notopmargin">Cam kết cà phê nguyên chất 100%</p>
					</div>
				</div>

				<div class="col_one_fourth nobottommargin">
					<div class="feature-box fbox-plain fbox-dark fbox-small">
						<div class="fbox-icon">
							<i class="icon-credit-cards"></i>
						</div>
						<h3>Thanh toán</h3>
						<p class="notopmargin">Chuyển khoản & thu tiền COD</p>
					</div>
				</div>

				<div class="col_one_fourth nobottommargin">
					<div class="feature-box fbox-plain fbox-dark fbox-small">
						<div class="fbox-icon">
							<i class="icon-truck2"></i>
						</div>
						<h3>Giao hàng</h3>
						<p class="notopmargin">Giao hàng miễn phí</p>
					</div>
				</div>

				<div class="col_one_fourth nobottommargin col_last">
					<div class="feature-box fbox-plain fbox-dark fbox-small">
						<div class="fbox-icon">
							<i class="icon-undo"></i>
						</div>
						<h3>Dịch vụ</h3>
						<p class="notopmargin">Chuyên nghiệp & tận tâm</p>
					</div>
				</div>

			</div>
		</div>

		<div class="section notopborder nobottomborder nomargin nopadding nobg footer-stick">
			<div class="container clearfix">

				<div class="col_half nobottommargin topmargin">
					<img src="{{ asset('ktmcoffee/images/services/4.jpg')}}" alt="Image" class="nobottommargin">
				</div>

				<div class="col_half subscribe-widget nobottommargin col_last">

					<div class="heading-block topmargin-lg">
						<h3><strong>Cộng tác viên</strong></h3>
						<p>Phù hợp với các bạn bán hàng online, không cần nhập hàng, không cần ship. Hoa hồng cao trên mỗi sản phẩm. <strong>Gọi ngay: 0379.115.000</strong></p>
					</div>

					<p>Hãy để lại email hoặc số điện thoại, chúng tôi sẽ liên hệ</p>

					<div class="widget-subscribe-form-result"></div>
					<form id="widget-subscribe-form3" action="include/subscribe.php" method="post" class="nobottommargin">
						<div class="input-group" style="max-width:400px;">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="icon-email2"></i></div>
							</div>
							<input type="email" name="widget-subscribe-form-email" class="form-control required email" placeholder="số điện thoại hoặc email">
							<div class="input-group-append">
								<button class="btn btn-danger" type="submit">Xác nhận</button>
							</div>
						</div>
					</form>

				</div>

			</div>
		</div>

	</div>
</section>
@endsection