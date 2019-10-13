<?php
include("header.php");
session_start();

if(!isset($_SESSION['user_id'])){
	echo '<script language="javascript">';
    echo "window.location.href = 'logout.php';";
    echo '</script>';
}
$gid = 1;
date_default_timezone_set('Asia/Dhaka');
if(isset($_GET['det'])){
		$deta=$_GET['det'];
	}
	$rows=0;
	$connect = mysqli_connect("localhost","root","","gamebugs");
	$que='Select * from games where GameID='.$deta.' order by GameID asc';
	$res1=mysqli_query($connect,$que);
	
	if (isset($_POST['CommentSub'])) {
			$uid=$_POST["UserID"];
			$un =$_POST["UserName"];
			$gid=$_POST["GameID"];
			$dt =$_POST["Date"];
			$message=$_POST["Message"];

			$sql1="Insert into comments(UserID,UserName,GameID,Message,Date) 
					values('$uid','$un','$gid','$message','$dt')";
			$res = mysqli_query($connect,$sql1);

	}

	$id = $_SESSION['user_id'];
	$usern = $_SESSION['username'];
?>
<div class="container mt-5" >
	<?php
		if($res1):
			if(mysqli_num_rows($res1)>0):
				$game=mysqli_fetch_assoc($res1);
	?>
<div class="row">
 <div class="col-md-2"></div>
<div class="col-md-8" style="border: 1 px solid #333; background-color: #121212; border-radius: 5px; padding: 10px; margin-bottom: 50px;margin-left: 0px;">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
 <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo $game['gIMG1']?>" alt="First slide">
       <div class="carousel-caption d-none d-md-block">
       </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $game['gIMG2']?>" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
       </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $game['gIMG3']?>" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
       </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="col-md-2"></div>
</div>


<div class="row">
 <div class="col-md-2"></div>
<div class="col-md-8" style="border: 1 px solid #333; background-color: #121212; border-radius: 5px; padding: 10px; margin-bottom: 50px;margin-left: 0px;">
	<p style="font-size: 20px;font-weight: bold;color: white"><?php echo nl2br($game['Details']); ?> </p>
</div>
<div class="col-md-2"></div>
</div>

<div class="row">
 <div class="col-md-2"></div>
<div class="col-md-8" style="border: 1 px solid #333; background-color: #121212; border-radius: 5px; padding: 10px; margin-bottom: 50px;margin-left: 0px;">
	<form method="POST" action="">
		<input type="hidden" name="UserID" value="<?php echo $id; ?>">
		<input type="hidden" name="UserName" value="<?php echo $usern; ?>">
		<input type="hidden" name="GameID" value="<?php echo $game['GameID']; ?>">
		<input type="hidden" name="Date" value="<?php echo date('Y-m-d H:i:s');?>">
		<textarea name="Message" ></textarea>  <br>
		<button name="CommentSub" type="submit" style="width: 100%;height: 30px;background-color: green;border: none;
	color: #fff;font-weight: 400;cursor: pointer;">Comment</button>
	</form>
</div>
<div class="col-md-2"></div>
</div>



<?php
	$csql = 'Select * from comments where GameID="'.$deta.'" order by CommentID desc';
	$data = mysqli_query($connect,$csql);
	if($data){
		if(mysqli_num_rows($data)>0){
			while ($com= mysqli_fetch_assoc($data)) {
			echo '<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" style=" width: 100%; padding: 20px; margin-bottom: 4px; background-color: #1f1f1f; border-radius: 4px;"> 
			<p style="font-size: 14px; line-height: 16pxx; color: #f2f2f2;font-weight: 100;">';
				echo $com['UserName']." <br>";
				echo $com['Date']." <br>";
				echo nl2br($com['Message']);
			echo '</p></div>
			<div class="col-md-2"></div>
			</div>';
			}
		}
	}
?>


	<?php
			endif;
		endif;
	?>
	

</div>

<?php
include("footer.php");
?>

