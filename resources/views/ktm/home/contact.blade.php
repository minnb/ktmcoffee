@extends('ktm.app')
@section('title', 'KTM Coffee')
@section('content')
<div class="wrap">
	<div class="content">
  	 	<div class="contact_desc">
  	 		<h2>Liên hệ</h2>
  	 		<div class="company_address">
  	 			<h4 style="font-weight: bold;">KTM COFFEE</h4>
				<p><strong style="font-weight: bold;">1339 tỉnh lộ 43 phường Bình chiểu, Thủ Đức, Hồ Chí Minh</strong></p>
				<p>Văn phòng tại Thanh Hóa</p>
				<p>9/27 Cù Chính Lan, Phường Trường Thi, TP Thanh Hóa</p>
		   		<p>Phone:(+84) 0379.115.000</p>
		 	 	<p>Email: <span><a href="mailto:khanhtrinhmoc2014@gmail.com">khanhtrinhmoc2014@gmail.com</a></span></p>
		   		<p>Mạng xã hội: <span><a href="https://www.facebook.com/nhung.hoang.395669">Facebook</a></span></p>
		   	</div>
		   	<div class="clear"></div>
		   	<br>
	   		
		   	<div class="contact-form">
			    <form method="post" action="#">
			    	<div class="left_form">
				    	<div>
					    	<span><label>Họ tên</label></span>
					    	<span><input name="userName" type="text" class="textbox"></span>
					    </div>
					    <div>
					    	<span><label>Địa chỉ email</label></span>
					    	<span><input name="userEmail" type="text" class="textbox"></span>
					    </div>
					    <div>
					     	<span><label>Số điện thoại</label></span>
					    	<span><input name="userPhone" type="text" class="textbox"></span>
					    </div>
			    	</div>
				    <div class="right_form">
				        <div>					    	
					    	<span><label>Nội dung</label></span>
					    	<span><textarea name="userMsg"> </textarea></span>
					    </div>
					   <div>
					   		<span><input type="submit" value="Gửi liên hệ" class="myButton"></span>
					  </div>
					 </div>
				</form>
			</div>
				<div class="clear"></div>
  		</div>
	</div>
</div>    	  
@endsection