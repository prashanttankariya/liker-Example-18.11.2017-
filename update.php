<?php 


		include 'db.php';

		if (isset($_POST['id'])) {
			
			$likedid = $_POST['id'];
			//$likedvalue = $_GET['value'];
			$likesend = $_POST['liked'];
			//
			echo "likes Value = ".$likesend." & like index Id ".$likedid;
			
			// update
			$updt = "UPDATE test_liker set liked ='$likesend' WHERE id='$likedid'";
			$runupdt =mysqli_query($con,$updt);


		//echo "Hello";

		}
		
 ?>