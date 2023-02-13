<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header class="main-header header-style-one" style="border-bottom 1px solid white;margin-bottom:20px;">
        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">
                    <div class="pull-left logo-box">
                        <div class="logo"><b><a href="<?php echo $dir; ?>app/"><img style="width:200px !important;" src="<?php echo $dir; ?>h_files/h_img/logo/logo-white.png" alt="" title=""></a></b></div>
                    </div>

                    <div class="pull-right clearfix">
                        <!--Info Box-->
                        <div class="upper-column info-box" style="margin-top:15px;">
                            <span class="alert-success" style="background-color:white !important;border:1px solid #6bb829;color:#000;padding:20px;border-radius:20px;float:left;font-weight:bold;">
                                <b>Today </b> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; <?php echo date("h:i:s") ?> &nbsp;&nbsp;&nbsp; <?php echo date("D"); ?>
                                <h5 style="display:inline-block;font-size:25px !important;color:red;"><?php echo date("j"); ?> </h5>&nbsp; &nbsp; <?php echo date("M"); ?> <?php echo date("Y"); ?>
                            </span>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--End Header Upper-->
    </header>
</body>

</html>