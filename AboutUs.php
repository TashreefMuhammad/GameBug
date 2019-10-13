<?php
    $connect = mysqli_connect("localhost","root","","gamebugs");
	$que2='Select * from info';
    $res3=mysqli_query($connect,$que2);
    if($res3){
        $info=mysqli_fetch_assoc($res3);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" media="screen" href="css/style.css">

    <title>About Us</title>
</head>
<!-- particles.js container -->

<body id="particles-js">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <!-- left -->
                <div class="card mb-3" style="max-width: 100%;">
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <a href="homepage.php"><img src="<?php echo $info['GBLogo'] ?>" class="card-img" alt="..."></a>
                        </div>
                        <div class="col-md-12">
                            <div class="card-body">
                                <h5 style="color:blueviolet;font-weight-bold; font-size:40px">GameBug</h5>
                                <p class="card-text">
                                    <?php echo $info['Des'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <!-- right -->
                <div class="card mb-3" style="max-width: 100%;">
                    <div class="row no-gutters">                        
                        <div class="col-md-5">
                            <div class="card-body">
                                <h2 class="card-title"><?php echo $info['Name1'] ?></h2>
                                <p class="card-text"><?php echo $info['Id1'] ?></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <img src="<?php echo $info['Img1'] ?>" class="card-img" alt="...">
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 100%;">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <div class="card-body">
                                <h2 class="card-title"><?php echo $info['Name2'] ?></h2>
                                <p class="card-text"><?php echo $info['Id2'] ?></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <img src="<?php echo $info['Img2'] ?>" class="card-img" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- scripts -->
    <script src="particles.js"></script>
    <script src="js/app.js"></script>
</body>

</html>