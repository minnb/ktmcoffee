<footer id="footer" class="dark">
	<div class="container">
		<div class="footer-widgets-wrap clearfix">
			<div class="col_two_third">
				<div class="col_one_third">
					<div class="widget clearfix">
						<img src="{{ asset('public/ktmcoffee/images/footer-widget-logo.png')}}" alt="" class="footer-logo">
						<p><i>Giữ <strong>trọn</strong>, <strong>tâm </strong> <strong>huyết</strong> trong từng gói cà phê</i></p>
						<div style="background: url('public/images/world-map.png') no-repeat center center; background-size: 100%;">
							<address>
								<strong>Địa chỉ:</strong> 1339 tỉnh lộ 43 <br>P.Bình chiểu, Thủ Đức, TP HCM<br>
								<br>
								<strong>Chi nhánh:</strong><br>
								9/27 Cù Chính Lan<br>
								P.Trường Thi, TP Thanh Hóa<br>
							</address>
							<abbr title="Điện thoại"><strong>Tel:</strong></abbr> 0379.115.000<br>
							<abbr title="Địa chỉ email:"><strong>E:</strong></abbr> khanhtrinhmoc2014@gmail.com
						</div>
					</div>
				</div>
				<div class="col_one_third">
					<div class="widget widget_links clearfix">
						<h4>Sản phẩm</h4>
						<ul>
							<li><a href="https://codex.wordpress.org/">Documentation</a></li>
							<li><a href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
							<li><a href="https://wordpress.org/extend/plugins/">Plugins</a></li>
							<li><a href="https://wordpress.org/support/">Support Forums</a></li>
							<li><a href="https://wordpress.org/extend/themes/">Themes</a></li>
							<li><a href="https://wordpress.org/news/">WordPress Blog</a></li>
							<li><a href="https://planet.wordpress.org/">WordPress Planet</a></li>
						</ul>
					</div>
				</div>

				<div class="col_one_third col_last">
					<div class="widget clearfix">
						<h4>Blog</h4>
						<div id="post-list-footer">
							<div class="spost clearfix">
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
									</div>
									<ul class="entry-meta">
										<li>10th July 2014</li>
									</ul>
								</div>
							</div>
							<div class="spost clearfix">
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
									</div>
									<ul class="entry-meta">
										<li>10th July 2014</li>
									</ul>
								</div>
							</div>
							<div class="spost clearfix">
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
									</div>
									<ul class="entry-meta">
										<li>10th July 2014</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col_one_third col_last">
				<div class="widget clearfix" style="margin-bottom: -20px;">
					<div class="row">
						<div class="fb-page" data-href="https://www.facebook.com/DaNgoai.CuoiTuan.CungCon" data-tabs="timeline,events" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-lazy="true">
						                <blockquote cite="https://www.facebook.com/DaNgoai.CuoiTuan.CungCon" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/DaNgoai.CuoiTuan.CungCon">Vị nguyên chất, sảng khoái thật</a></blockquote></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #footer end -->
</div><!-- #wrapper end -->
<div id="gotoTop" class="icon-angle-up"></div>
<script src="{{ asset('public/ktmcoffee/js/jquery.js') }}"></script>
<script src="{{ asset('public/ktmcoffee/js/plugins.js') }}"></script>
<script src="{{ asset('public/ktmcoffee/js/functions.js') }}"></script>
<script src="{{ asset('public/ktmcoffee/include/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('public/ktmcoffee/include/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('public/ktmcoffee/include/rs-plugin/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('public/ktmcoffee/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('public/ktmcoffee/include/rs-plugin/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('public/ktmcoffee/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('public/ktmcoffee/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('public/ktmcoffee/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('public/ktmcoffee/include/rs-plugin/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('public/ktmcoffee/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script>
var tpj=jQuery;
tpj.noConflict();
tpj(document).ready(function() {
	var apiRevoSlider = tpj('#rev_slider_ishop').show().revolution(
	{
		sliderType:"standard",
		jsFileLocation:"{{ asset('public/ktmcoffee/include/rs-plugin/js/') }}",
		sliderLayout:"fullwidth",
		dottedOverlay:"none",
		delay:9000,
		navigation: {},
		responsiveLevels:[1200,992,768,480,320],
		gridwidth:1140,
		gridheight:500,
		lazyType:"none",
		shadow:0,
		spinner:"off",
		autoHeight:"off",
		disableProgressBar:"on",
		hideThumbsOnMobile:"off",
		hideSliderAtLimit:0,
		hideCaptionAtLimit:0,
		hideAllCaptionAtLilmit:0,
		debugMode:false,
		fallbacks: {
			simplifyAll:"off",
			disableFocusListener:false,
		},
		navigation: {
			keyboardNavigation:"off",
			keyboard_direction: "horizontal",
			mouseScrollNavigation:"off",
			onHoverStop:"off",
			touch:{
				touchenabled:"on",
				swipe_threshold: 75,
				swipe_min_touches: 1,
				swipe_direction: "horizontal",
				drag_block_vertical: false
			},
			arrows: {
				style: "ares",
				enable: true,
				hide_onmobile: false,
				hide_onleave: false,
				tmp: '<div class="tp-title-wrap">	<span class="tp-arr-titleholder"></span> </div>',
				left: {
					h_align: "left",
					v_align: "center",
					h_offset: 10,
					v_offset: 0
				},
				right: {
					h_align: "right",
					v_align: "center",
					h_offset: 10,
					v_offset: 0
				}
			}
		}
	});

	apiRevoSlider.bind("revolution.slide.onloaded",function (e) {
		SEMICOLON.slider.sliderParallaxDimensions();
	});

}); //ready
</script>
</body>
</html>