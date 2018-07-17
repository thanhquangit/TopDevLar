<div class="ffootteerr">
	<div class="footer" >
		<div style="background: #e2e2e2;">
			<div class="container footerr">
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
						<h4><b>About TopDev</b></h4>
						<ul class="li-footer">
							<li><a href="about-us">About Us</a></li>
							<li><a href="contact">Contact Us</a></li>
							<li><a href="term-of-services">Terms of Service</a></li>
							<li><a href="privacy-policy">Chính sách bảo mật</a></li>
							<li><a href="operation-regulation">Quy chế hoạt động</a></li>
							<li><a href="resolve-complaints">Chính sách giải quyết khiếu nại</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
						<h4><b>For Jobseekers</b></h4>
						<ul class="li-footer">
							<li><a href="">My Resumes</a></li>
							<li><a href="">Browse jobs</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
						<h4><b>For Employers</b></h4>
						<ul class="li-footer">
							<li><a href="">Post a Job</a></li>
							<li><a href="">Talent solutions</a></li>
							<li><a href="">Join our Job Ad Network</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
						<h4><b>Subscribe to Us</b></h4>
							<a href="" id="iconf"><img src="front/image/logo/in.png" height="40" width="40"></a>
							<a href="" id="iconf"><img src="front/image/logo/googleplus.png" height="40" width="40"></a>
							<a href="" ><img src="front/image/logo/facebook.png" height="40" width="40"></a>
							<a href=""><img src="front/image/logo/ins.png" height="55" width="55"></a>
					</div>
				</div>
				<div class="copyright">
					<img src="front/image/logo/logo-bocongthuong.jpgx" class="img-responsive img-copy">
					<p>Copyright © CÔNG TY CỔ PHẦN APPLANCER</p> 
					<p>179 Nguyễn Đình Chính, Phường 11, Quận Phú Nhuận, Thành Phố Hồ Chí Minh, Việt Nam</p> 
					<p>ĐKKD: 031 303 2338 - Cấp ngày: 27/11/2014 | Liên hệ: 028 6264 5022 - contact@applancer.net</p>
				</div>
			</div>
		</div>
	</div>
	<div class="scroll-top-wrapper ">
	  	<span class="scroll-top-inner">
	    	<i class="fa fa-2x fa-arrow-circle-up"></i>
	  	</span>
	</div>
	<div class="msg_box" style="right:20px" rel="skp">
	    <div class="msg_head" style="padding-top: 15px;padding-bottom: 15px;">Offline
	        <div class="close">x</div>
	    </div>
	    <div class="msg_wrap">
		    <div class="msg_body">
		        <form method="post" action="offline" enctype="multipart/form-data">
					<!--Kiem tra loi-->
			        @if(count($errors)>0)
			            <div class="alert alert-danger">
			                @foreach($errors->all() as $err)
			                    {{$err}}<br>
			                @endforeach
			            </div>
			        @endif
			        <!-- In thong bao -->
			        @if(session('notify1'))
			            <div class="alert alert-success">
			                {{session('notify1')}}
			            </div>
			        @endif
					<input type="hidden" name="_token" value="{{csrf_token()}}"/>
		            <div id="offlineFormMessageContainer" class="formMessageField">Please fill out the form below and we will get back to you as soon as possible.</div>
		            <div class="form-group">
		                <input type="text" name="name" placeholder="Name..." class="form-control">
		            </div>
		            <div class="form-group">
		                <input type="text" name="email" placeholder="Email..." class="form-control">
		            </div>
		            <div class="form-group">
		                <input type="text" name="phone" placeholder="Phone..." class="form-control">
		            </div>
		            <div class="form-group">
		                <textarea type="text" rows="2" placeholder="Content...." class="form-control" name="content"></textarea>
		            </div>
		            <input type="submit" name="" class="btn btn-danger form-control" value="Submit">
		        </form>
		   	</div>
	    </div>
	</div>
</div>