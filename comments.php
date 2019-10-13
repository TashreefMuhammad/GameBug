<?phps
	function setComments(){
		if (isset($_POST['CommentSub'])) {
			$uid=$_POST["UserID"];
			$gid=$_POST["GameID"]
			$date=$_POST["Date"];
			$message=$_POST["Message"];

			$sql1="Insert into comments(UserID,GameID,Message,Date) 
					values('".$uid."','".$gid."','".$message."','".$date."')";
			$res = mysqli_query($connect,$sql1);
		}
	}
?>