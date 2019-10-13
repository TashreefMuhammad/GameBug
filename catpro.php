<?php
	session_start();
	include("header.php");

	if(isset($_GET['cat'])){
		$catname=$_GET['cat'];
	}
	$cnt=0;
	$rows=0;
	$connect = mysqli_connect("localhost","root","","gamebugs");
	$que='Select * from games where Category="'.$catname.'" order by GameID asc';
	$res=mysqli_query($connect,$que);
?>
	<div class="container mt-5" style="height: 90vh;">
<?php
	if($res):
		$rows=mysqli_num_rows($res);
		if($rows>0):
			while($game=mysqli_fetch_assoc($res)):
				if($cnt==0):
					?>
					<div class="row">
						<?php
				endif;
			?>
				<div class="col-md-4">
					<div class="card" style="border: 1 px solid #333; background-color: #aeaeae; border-radius: 5px; padding: 10px; margin-bottom: 50px;margin-left: 0px;">
						<img src=" <?php echo $game['gIMG1']; ?>" class="img-responsive"/>
						<h4 style="color: white;padding-top: 5px;padding-bottom: 5px;"><?php echo $game['GameName']; ?></h4>
						<a class="btn btn-info" href="details.php?det=<?php echo $game['GameID'];?>">Details</a>
					</div>
				</div>

		<?php
			$cnt=$cnt+1;
			if($cnt==3):
				$cnt=0;
		?>
			</div>
		<?php
			endif;

			endwhile;
			
			if($cnt>0){?>
			</div>
			<?php
		}
		endif;
	endif;
?>
	</div>

<?php include("footer.php")?>