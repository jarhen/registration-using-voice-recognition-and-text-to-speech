<html>
<head>
	<title></title>
	     <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.min.css">
		<script src="assets/js/jquery-3.2.0.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.dataTables.min.js"></script>
		
		<script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/SpeechKITT/0.3.0/speechkitt.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
		<script type="text/javascript" src="mespeak.js"></script>
		<script type="text/javascript" src="assets/js/myscript.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/css/mystyle.css">
	
					<!--Start of Zendesk Chat Script-->
			<script type="text/javascript">
				window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
				d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
				_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
				$.src="https://v2.zopim.com/?4k5avEtu2eUTgGJecHix8rKkpxAm5GGW";z.t=+new Date;$.
				type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
			</script>
<!--End of Zendesk Chat Script-->
		<script>
		
							 						var parts = [
								{ text: ' Welcome to hai me wra mos junior Demo page  ',      voice: "en/en-us", variant: "m2" },
								{ text: ' What is your name',      voice: "en/en-us", variant: "m2" }
							];
							meSpeak.speakMultipart(parts);
						
</script>

</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container" style="margin-top:100px;">
	<div class="container">
		<div class="col-lg-6">
			<img src="images/op.png" width="250px" height="250px">

		</div>
		<div  class="col-lg-6">
			<h1 id="greet">
				Robot: Welcome to Jaime Ramos jr Demo page
			</h1>
		</div>
	</div>
</body>
</html>