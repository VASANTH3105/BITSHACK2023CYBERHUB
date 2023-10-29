<?php
require 'config.php';
if(!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}
else{
    header("Location: login.php");
}
?>

<?php
$conne = mysqli_connect("localhost","root","","tb_user");
$query="SELECT * FROM `images`";
$result=mysqli_query($conne , $query);


?>

<?php



require_once ("php/CreateDb.php");
require_once ("php/component.php");

$db = new CreateDb("Productdb", "Producttb");

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Your course has been Removed from your learning path...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Account Settings UI Design</title>
	<link rel="icon" type="image/x-icon" href="./imgs/logochicon.png">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" type="text/css"
		href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="userprofile\css\style.css"> -->
	

	<style>
		@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap");

		body {
			background:linear-gradient(180deg, #a7a7ff, #c4fcff);
			font-family: "Roboto", sans-serif;
		}

		.shadow {
			box-shadow: 0 1px 10px rgba(0, 0, 0, 0.5) !important;
		}

		.profile-tab-nav {
			min-width: 350px;
		}

		.tab-content {
			flex: 1;
		}

		.form-group {
			margin-bottom: 1.5rem;
		}

		.nav-pills a.nav-link {
			padding: 15px 20px;
			border-bottom: 1px solid #ddd;
			border-radius: 0;
			color: #333;
		}

		.nav-pills a.nav-link i {
			width: 20px;
		}

		.img-circle img {
			height: 100px;
			width: 100px;
			border-radius: 100%;
			border: 5px solid #fff;
		}

		.card img {
			height: 50%;

		}

		.card .card-body {
			object-fit: 100%;
		}

		#containercolor{
			background: #ffffff;	
		}

		
	</style>
</head>

<body>

	


	<section class="py-5 my-5">
		<div class="container">

			<div id="containercolor" class=" shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHoAAAB6CAMAAABHh7fWAAAAZlBMVEX///8rLzIiJypkZmcAAAAlKSwWHCD6+voTGR0oLC8aHyPx8fGjo6QbISSnqKh/gIJUVljU1NUAAAdAQ0UABw/f39+MjY4MFBnl5ebKy8tsbnBeYGI2Ojx2eHlHSkyFh4iXmJm4uLnxVhhVAAADCElEQVRoge2ZXZuqIBRGBUtFwvxGsiz//58czTrTzGSxcZMXh3XTRRfrAfZGePE8h8PhcDgcNgkblewPvn/YJ6oJPyiu6pTJSNABEUmW1tWHxKotgy15YBuUrfqAOEvzH96bPU8zy+Jw/0w8yfdW17w6xs/FI/HR4pJn0cyQbwOPrE26CtgrMyEssFRtGX1jHtzUyrj58eVs3+b8yC2oW/HeTIho8c2J1DETIhNsM2dvF3qCMewpP2tN93XKz7hmHumahynHHfYu0FcHO1R1obnSI6zANFcbfTMhG8y9HDLfyDN+ohA1PeGZww6w1MNid3hfbq65k91BbC8OqrKhzvDUsAJHLfH/U73iWkM+HiMRnnrFvl5xN/MS0IxHmGekBvblahDVK36v1zylQNoLsbWurHci9fj7C9cEo+hXn/VuH553eHGr/yY+4Ju9ptDY0miB2tN31rtfe57K36UKubUMK9u8zlI2FgMsXrzYWqLCRqLwj7CWM8VGZW07K83aZ3IqW9tp4Yhq6e+MlH4kIx2pLh2Ng3hMhsef7vKpZPhKo5J6zMPrRFnZRBxXQnU4zVRydjooe90V9mkgRNwmv187wiZpYyGitLckV2l57amtjNtzX3EeDnBe9ec2ltM/ZWejyRr/If/fCpnnrOi6guW5FA9/5D56wSflnz2MXfmzr5W4x5TQB0Qa0kdc8arQPo+OiAJtd1MMdNsbJp0gVZuiGvH/T7YUxa0E6HI9wQSCu5IG5sEdLW4ybmYe3OXSOk+BFfYNTZeZL8CI8hF5WWLOgNHRT5a8M4bm0z1CU/PlTsolZkLMt3NODKv7DiOml4Ia9OzwjKA2HLTugx7+sHdad/nXxGZp0nHxoMdHZRNztrC8J0qT3q5Bx4M5hEmhLe2sCUbgZuijwxwGWS0sh57HIKGGpe/zwHP5MAUfyJ6zBX9DoC8t88TQDa3JsdQ5tM4UyoYyUkLPpj2eugeqdTPo94BTaqy2NmjsHZ4a+t106k+rS4pECVX3rY9EC+1rh8PhcDgcv/gCSXwvmKpnryMAAAAASUVORK5CYII="
								alt="Image" class="shadow">
						</div>
						<h4 class="text-center">
							<?php echo $row["name"]; ?>
						</h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<!--<a class="nav-link active" id="account-tab" data-toggle="pill" href="#Profile" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i> 
							Profile
						</a>
						-->
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#Profile" role="tab"
							aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i>
							Profile
						</a>

						<a class="nav-link" id="achivements-tab" data-toggle="pill" href="#achivements" role="tab"
							aria-controls="achivements" aria-selected="false">
							<i class="fa fa-user text-center mr-1"></i>
							Terms & Conditions
						</a>

						<a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab"
							aria-controls="security" aria-selected="false">
							<i class="fa fa-user text-center mr-1"></i>
							My Achivements
						</a>

						<a class="nav-link" href="index.php">Home</a>
						<a class="nav-link" href="logout.php">Logout</a>
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade" id="Profile" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4 text-center">My Account</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<h6 style="color:#000;">Welcome,</h6>
									<h3 class="form-control">
										<?php echo $row["name"]; ?>
									</h3>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<h6>Authorized by CyberHub via,</h6>
									<h3 class="form-control">
										<?php echo $row["email"]; ?>
									</h3>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<h6>Username</h6>
									<h3 class="form-control">
										<?php echo $row["username"]; ?>
									</h3>
								</div>
							</div>
						</div>

					</div>
					<div class="tab-pane fade" id="Profile" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4 text-center">My Account</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<h6 style="color:#000;">Welcome,</h6>
									<h3 class="form-control">
										<?php echo $row["name"]; ?>
									</h3>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<h6>Authorized by,</h6>
									<h3 class="form-control">
										<?php echo $row["email"]; ?>
									</h3>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<h6>Username</h6>
									<h3 class="form-control">
										<?php echo $row["username"]; ?>
									</h3>
								</div>
							</div>
						</div>

					</div>

					<div class="tab-pane fade" id="achivements" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4 text-center">Terms and Conditions</h3>
						<div class="row">
							<div class="col-10 ">
								<p>You are granted a limited license to access and use the content on this website for personal, non-commercial purposes only.
									You may not modify or copy the materials, use them for any commercial purpose, or attempt to reverse-engineer any software contained on this website.

								</p>
								
							</div>
						</div>

					</div>



					<div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
						<h3 class="mb-4">My Achivements</h3>
						<div class="row">
							<div class="col-md-12">
							<?php

								$total = 0;
									if (isset($_SESSION['cart'])){
										$product_id = array_column($_SESSION['cart'], 'product_id');

										$result = $db->getData();
										while ($row = mysqli_fetch_assoc($result)){
											foreach ($product_id as $id){
												if ($row['id'] == $id){
													profileElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
													$total = $total + (int)$row['product_price'];
												}
											}
										}
									}else{
										echo "<h5>Your Learning path is empty is Empty</h5>";
									}

								?>
							</div>
						</div>
						<!--<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>-->
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>