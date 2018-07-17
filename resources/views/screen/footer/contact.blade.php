@extends('screen.footer.master.index')
@section('content')
<div class="container about">
	<h2>Contact Us</h2><hr>
	<div class="row">
		<h4 style="font-size: 22px;">See our Office</h4>
			<h5 style="font-size: 18px;"><i class="fa fa-map-marker" aria-hidden="true"></i> <b>Head Office</b></h5>
			<p><b>Address:</b> 179 Nguyen Dinh Chinh Street, Ward 11, Phu Nhuan District, Ho Chi Minh City, Vietnam</p>
			<p><b>Email:</b> contact@applancer.net</p>
			<p><b>Tel:</b> +84-28 62733496 | +84-28 62733497</p>
		<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22171.086168237805!2d106.66956150952039!3d10.785883392501145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175292a5699872f%3A0xcf846723a63d0808!2sTOPDEV.VN!5e0!3m2!1svi!2s!4v1531673567979" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
			<h4 style="font-size: 22px;">Contact us now</h4>
			<form action="contact" method="post" enctype="multipart/form-data">
				<!--Kiem tra loi-->
		        @if(count($errors)>0)
		            <div class="alert alert-danger">
		                @foreach($errors->all() as $err)
		                    {{$err}}<br>
		                @endforeach
		            </div>
		        @endif
		        <!-- In thong bao -->
		        @if(session('notify'))
		            <div class="alert alert-success">
		                {{session('notify')}}
		            </div>
		        @endif
				<input type="hidden" name="_token" value="{{csrf_token()}}"/>
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Your Full Name">
				</div>
				<div class="form-group">
					<input type="text" name="company" class="form-control" placeholder="Your Company">
				</div>
				<div class="form-group">
					<input type="text" name="phone" class="form-control" placeholder="Your Phone Number">
				</div>
				<div class="form-group">
					<input type="email" name="email" class="form-control" placeholder="Your Email">
				</div>
				<div class="form-group">
					<textarea class="form-control" rows="4" placeholder="Write Your Message Here" type="text" name="content"></textarea>
				</div>
				<input type="submit" name="" class="btn btn-danger form-control" value="Submit" style="text-align: center;">
			</form>
		</div>
	</div>
</div>
@endsection