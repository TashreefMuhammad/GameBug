
<?php 
session_start();
include("header.php");

if(isset($_SESSION['try-to-login-again'])) {
		echo '<script language="javascript">';
		echo 'var r =confirm("you are already logged in");';
		echo '</script>';
		unset($_SESSION['test']);
}

$connect = mysqli_connect("localhost","root","","gamebugs");
	$que5='Select * from category';
    $res5=mysqli_query($connect,$que5);
    if($res5){
		 $cate=mysqli_fetch_assoc($res5);
		//  print_r($cate);

?>


<div class="container mt-5">
	<div class="row">

		<div class="col-md-4">
				<div class="card" style="border: 1 px solid #333; background-color: #aeaeae; border-radius: 5px; padding: 10px; margin-bottom: 20px;">
					<img src="<?php echo $cate['Img'] ?>" alt="card-1" class="card-img-top">
					<div class="card-body"  style="color: white">
						<h5><?php echo $cate['CatName'] ?></h5>
						<a class="btn btn-info" href="catpro.php?cat=Action">Browse</a>
					</div>
				</div>
		</div>

<?php $cate=mysqli_fetch_assoc($res5); ?>

		<div class="col-md-4">
				<div class="card" style="border: 1 px solid #333; background-color: #aeaeae; border-radius: 5px; padding: 10px; margin-bottom: 20px;">
					<img src="<?php echo $cate['Img'] ?>" alt="card-1" class="card-img-top">
					<div class="card-body" style="color: white">
						<h5><?php echo $cate['CatName'] ?></h5>
						<a class="btn btn-info" href="catpro.php?cat=Adventure">Browse</a>
					</div>
				</div>
		</div>

		<?php $cate=mysqli_fetch_assoc($res5); ?>
		<div class="col-md-4">
				<div class="card" style="border: 1 px solid #333; background-color: #aeaeae; border-radius: 5px; padding: 10px; margin-bottom: 20px;">
					<img src="<?php echo $cate['Img'] ?>" alt="card-1" class="card-img-top">
					<div class="card-body" style="color: white">
						<h5><?php echo $cate['CatName'] ?></h5>
						<a class="btn btn-info" href="catpro.php?cat=Fighting">Browse</a>
					</div>
				</div>
		</div>
	</div>

	<div class="row">
	<?php $cate=mysqli_fetch_assoc($res5); ?>
		<div class="col-md-4" >
				<div class="card" style="border: 1 px solid #333; background-color: #aeaeae; border-radius: 5px; padding: 10px; margin-bottom: 20px;">
					<img src="<?php echo $cate['Img'] ?>" alt="card-1" class="card-img-top">
					<div class="card-body" style="color: white">
						<h5><?php echo $cate['CatName'] ?> </h5>
						<a class="btn btn-info" href="catpro.php?cat=Mystery">Browse</a>
					</div>
				</div>
		</div>

		<?php $cate=mysqli_fetch_assoc($res5); ?>
		<div class="col-md-4">
				<div class="card" style="border: 1 px solid #333; background-color: #aeaeae; border-radius: 5px; padding: 10px; margin-bottom: 20px;">
					<img src="<?php echo $cate['Img'] ?>" alt="card-1" class="card-img-top">
					<div class="card-body" style="color: white">
						<h5><?php echo $cate['CatName'] ?></h5>
						<a class="btn btn-info" href="catpro.php?cat=Racing">Browse</a>
					</div>
				</div>
		</div>
		<?php $cate=mysqli_fetch_assoc($res5); ?>
		<div class="col-md-4">
				<div class="card" style="border: 1 px solid #333; background-color: #aeaeae; border-radius: 5px; padding: 10px; margin-bottom: 20px;">
					<img src="<?php echo $cate['Img'] ?>" alt="card-1" class="card-img-top">
					<div class="card-body" style="color: white">
						<h5><?php echo $cate['CatName'] ?></h5>
						<a class="btn btn-info" href="catpro.php?cat=RPG">Browse</a>
					</div>
			</div>
		</div>
	</div>

	<div class="row">
	<?php $cate=mysqli_fetch_assoc($res5); ?>
		<div class="col-md-4">
				<div class="card " style="border: 1 px solid #333; background-color: #aeaeae; border-radius: 5px; padding: 10px; margin-bottom: 20px;">
					<img src="<?php echo $cate['Img'] ?>" alt="card-1" class="card-img-top">
					<div class="card-body" style="color: white">
						<h5><?php echo $cate['CatName'] ?></h5>
						<a class="btn btn-info" href="catpro.php?cat=SciFi">Browse</a>
					</div>
				</div>
		</div>

		<?php $cate=mysqli_fetch_assoc($res5); ?>
		<div class="col-md-4">
				<div class="card" style="border: 1 px solid #333; background-color: #aeaeae; border-radius: 5px; padding: 10px; margin-bottom: 20px;">
					<img src="<?php echo $cate['Img'] ?>" alt="card-1" class="card-img-top">
					<div class="card-body" style="color: white">
						<h5><?php echo $cate['CatName'] ?></h5>
						<a class="btn btn-info" href="catpro.php?cat=Shooting">Browse</a>
					</div>
				</div>
		</div>
		<?php $cate=mysqli_fetch_assoc($res5); ?>
		<div class="col-md-4">
				<div class="card" style="border: 1 px solid #333; background-color: #aeaeae; border-radius: 5px; padding: 10px; margin-bottom: 20px;">
					<img src="<?php echo $cate['Img'] ?>" alt="card-1" class="card-img-top">
					<div class="card-body" style="color: white">
						<h5>Spo<?php echo $cate['CatName'] ?>rts</h5>
						<a class="btn btn-info" href="catpro.php?cat=Sports">Browse</a>
					</div>
				</div>
		</div>
	</div>
	<div class="row">
	<?php $cate=mysqli_fetch_assoc($res5); ?>
		<div class="col-md-4">
				<div class="card" style="border: 1 px solid #333; background-color: #aeaeae; border-radius: 5px; padding: 10px; margin-bottom: 20px;">
					<img src="<?php echo $cate['Img'] ?>" alt="card-1" class="card-img-top">
					<div class="card-body" style="color: white">
						<h5><?php echo $cate['CatName'] ?></h5>
						<a class="btn btn-info" href="catpro.php?cat=Strategy">Browse</a>
					</div>
				</div>
		</div>

<!--
		<div class="col-md-4">
			<form method="post" action="catpro.php">
				<div class="card">
					<img src="images/Adventure/1.jpg" alt="card-1" class="card-img-top">
					<div class="card-body">
						<h5>Adventure</h5>
						<input type="submit" name='add_to_cart' class="btn btn-info" value="Browse" />
					</div>
				</div>
			</form>
		</div>

		<div class="col-md-4">
			<form method="post" action="catpro.php">
				<div class="card">
					<img src="images/Fighting/1.jpg" alt="card-1" class="card-img-top">
					<div class="card-body">
						<h5>Fighting</h5>
						<input type="submit" name='add_to_cart' class="btn btn-info" value="Browse"/>
					</div>
				</div>
			</form>
		</div>-->
	</div>
</div>
	<?php } ?>
<?php include("footer.php") ?>