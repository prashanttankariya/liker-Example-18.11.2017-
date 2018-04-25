<?php 

		session_start();
		
		// time 
		// like for timeago :: http://timeago.yarp.com/
		//$tm = time();
		$current_timestamp = time();
		//echo $current_timestamp;

		$current_timestamp_by_mktime = mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("Y"));
		//echo $current_timestamp_by_mktime;
		$current_timestamp = strtotime("now");
		//echo $current_timestamp;

		$current_timestamp_string = microtime();
		//echo $current_timestamp_string;
		$current_timestamp_float = microtime(TRUE);
		//echo $current_timestamp_float;

		$current_timestamp_fndate = date("U");
		//echo $current_timestamp_fndate;

		$date_from_timestamp = date("d-m-Y h:i:s",$current_timestamp);
		echo "Formatted date from timestamp:" . $date_from_timestamp;

		// differ
		$_SESSION['name'] = "prashant";
		$username = $_SESSION['name'];
		include 'db.php';
		
		// grab the data
		$sel 	= "SELECT * FROM test_liker";
		$runsel = mysqli_query($con,$sel);

		// fetch in while
		while ($row = mysqli_fetch_array($runsel)) {
			
				$records[]  = $row;
		}

		

   
  
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>18.11</title>
 	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery.timeago.js"></script>
<script type="text/javascript" src="edited-new.js"></script>



<style type="text/css">
	#username{
	
	display: none;
}
</style>
 </head>
 <body>
 
 <div class="container">
 <div class="jumbotron">
 <div class="row">
 <div class="col-md-2">
 </div>
 		<!-- fetch the data from db -->
 		<div class="col-md-8">	
 			<div class="card">
 					<div class="card-block">
 		<?php
 			$index =1;
 			foreach ($records as $record) {
 		?>	
			<div class="">
				<div class="card-title">

					<h3 class="text-center title">POST #<?php echo $index; ?>
						<span > (ID:<?php echo $record['id']; ?>)</span>
						<span id='username'><?php echo $username; ?></span>
						
					</h3>
					
				</div>
				<div class="card-body">
					<div class="img-space">
						<img src="data:image;base64,<?php echo $record['image']; ?>" width="100%" id="img<?php echo $index; ?>">
					</div>
					
				</div>
				<div class="card-footer">
						<div class="below-area">
							
								<h4 class="lk">
									<i class="fa fa-heart-o"
									 data-id="<?php echo $index; ?>">
									 </i>
								 </h4>
							
								<h5>
								<span class="lk-space<?php echo $index; ?>" 
								id="<?php echo $record['id']; ?>">
								<?php echo $record['liked']; ?></span>
								 Likes
								</h5>
								<p>
									<b><span id="get-id<?php echo $index; ?>"><?php echo $record['id']; ?></span></b>:
									<?php echo $record['caption']; ?>
								</p>
								<p class="text-muted"><time class="timeago" datetime="<?php echo $record['uploaded_at']; ?>">
								</time>
									
								</p>
							
						</div><!-- below area ends -->
				</div><!-- card footer ends -->
			</div>
		
 		<?php
 			$index++;
 			}// foreach ends	
 		?>
 		<!-- fetch the data from db ends -->
 					</div>	

 					<!-- msgs -->
 						<div id="add">

 						</div>
 						<div id="msg">
 							
 						</div>
 					<!-- msgs ends -->	
 			</div><!-- main card ends -->
 		</div>	<!-- col md 8 ends -->
 </div>
 </div><!-- jumbotron ends -->
 </div><!-- container ends -->
 </body>
 </html>