<?php
include("csvmake.php");

$message = "";

$all_value = CSV_read_contact($csvPath);

$check_array = array("id", 'userEmail', 'userName', 'userName');
if (!array_diff($check_array, array_keys($_POST))) {
    $message = "Thank You";

    $list = array(
        input_validation($_POST['id']),
        input_validation($_POST['userEmail']),
        input_validation($_POST['userName']),
        input_validation($_POST['userMessage'])
    );
    CSV_write_contact($csvPath, $list);
} else {
    $message = "please give all input field value properly.";
}

$connect = mysqli_connect("localhost","root","","gamebugs");
	$que3='Select * from info';
    $res4=mysqli_query($connect,$que3);
    if($res4){
        $info2=mysqli_fetch_assoc($res4);
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" media="screen" href="css/contactstyle.css">

    <title>Contact Us</title>
</head>
<!-- particles.js container -->

<body id="particles-js">

    <div class="container">
    	<div class="row">
    		<div class="col-md">
        <h1 style="font-size: 60px;"><b><center>Contact Us</center></b></h1>
        </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <!-- left -->
                <div class="card border-0 mb-3" style="max-width: 100%; padding: 0px; padding-top: 60px;">
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <a href="homepage.php"><img src="<?php echo $info2['GBLogo'] ?>" class="card-img" alt="..."></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <!-- right -->
                <div class="card  border-0 mb-3" style="max-width: 100%;">
                <form action="" method="post" style="margin-top: 40px;">
                        <div class="form-group form-border">
                            <label class="text-left" for="exampleInputEmail1">Email address</label>
                            <input type="email" name="userEmail" class="form-control input-blank-border" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                        <div class="form-group form-border">
                            <label class="text-left" for="exampleInputPassword1"> Enter Your Name</label>
                            <input type="text" name="userName" class="form-control input-blank-border" id="exampleInputPassword1" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group form-border">
                            <label class="text-left" for="exampleInputPassword1">Message</label>
                            <textarea class="form-control input-blank-border" name="userMessage" id="exampleFormControlTextarea1" rows="3" required></textarea>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <input type="hidden" name="id" value="<?php echo uniqid(); ?>">
                            <button type="submit" class="btn btn-dark w-25 text-center" style="margin-right: 10px;">Submit</button>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <?php if (!empty($_POST)) {
                                echo $message;
                            } ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- scripts -->
    <script src="particles.js"></script>
    <script src="js/app.js"></script>
</body>

</html>