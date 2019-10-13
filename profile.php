<?php 
session_start();
include("header.php");

if(!isset($_SESSION['user_id'])){
    echo '<script language="javascript">';
    echo "window.location.href = 'logout.php';";
    echo '</script>';
}

    $id = $_SESSION['user_id'];
    $connect = mysqli_connect("localhost","root","","gamebugs");
    $quer='Select * from users where ID='.$id;
    $res12=mysqli_query($connect,$quer);

    if($res12){
        if(mysqli_num_rows($res12)>0){
                $pro=mysqli_fetch_assoc($res12);
            }
    }
    

?>
<div class="container" style="height: 85vh;">
    <div class="row">
        <!--<div class="col-xs-12 col-sm-6 col-md-6">-->
            <div class="well well-sm">
                <div class="row" style="padding-top: 25px;">
                    <div class="col-md-9" style="float:left">
                        <img src="images/pro_logo.png" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-md-3" style="float:right; color: white;">
                        <h1><?php echo $pro['Name'] ?></h1>
                            <h3>
                            <?php echo $pro['Email'] ;?>
                            <br>
                            <br>
                            <?php echo $pro['SignupDate']; ?>
                            </h3>
                            <div>
                                <a href="logout.php" class="btn btn-info">Log Out</a>
                            </div>
                    </div>
                </div>
            </div>
        <!--</div>-->
    </div>
</div>
<?php 
include("footer.php")?>