<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang chủ Toidicode</title>
    <base href="{{asset(' ')}}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'> 
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="front/bootstrap/css/bootstrap.min.css">
    <script src = "front/bootstrap/js/jquery.min.js"></script>
    <script src = "front/bootstrap/js/bootstrap.min.js "></script>
    <script src = "front/js/btn-top.js"></script>
    <link href="front/css/chat.css" rel="stylesheet">
	<link href="front/css/btn_top.css" rel="stylesheet">
    <script src="front/js/chat.js"></script>
    <link rel="stylesheet" type="text/css" href="front/css/header.css">
</head>
<body>
	<div class="content" style="background-color: #eee">
		@include('screen.footer.master.header')
		@yield('content')
		@include('screen.footer.master.footer')

</body>
</html>