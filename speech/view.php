<html>
<head>
	<title></title>
	     <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.min.css">
		<script src="assets/js/jquery-3.2.0.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<style>
h6{
  color: #000; 
  font-family: "Courier";
  font-size: 20px;
  margin: 10px 0 0 10px;
  white-space: nowrap;
  overflow: hidden;
  width: 30em;
  animation: type 4s steps(60, end); 
}

h6:nth-child(2){
  animation: type2 8s steps(60, end);
}

h6 a{
  color: lime;
  text-decoration: none;
}



@keyframes type{ 
  from { width: 0; } 
} 

@keyframes type2{
  0%{width: 0;}
  50%{width: 0;}
  100%{ width: 100; } 
} 

@keyframes blink{
  to{opacity: .0;}
}
</style>
</head>

<body>		

<?php 
if(isset($_POST['firstname'])){
  $firstname = $_POST["firstname"];
  $lastname  = $_POST["lastname"];
  $address   = $_POST["address"];
  $password  = $_POST["password"];
?>
<div class="container" style="margin-top:100px;">
        <div class="row">
			<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
				<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">Information</h3>
						</div>
						<div class="panel-body">
							<p><strong>Fullname: </strong> <?= $firstname.' ,'.$lastname?></p>
							<p><strong>Address: </strong> <?= $address?></p>
							<p><strong>Password: </strong> <?= $password?> </p>
						</div>
						<div class="panel-footer ">
							<h6><small>jaimeframosjr 2017</small></h6>
						</div>
				</div>
			</div>
		</div>
</div>
<?php }?>
</body>
</html>