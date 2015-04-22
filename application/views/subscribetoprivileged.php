<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Just Play</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="<?=base_url('bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url('bootstrap/css/freelancer.css')?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url('bootstrap/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script src="<?=base_url('bootstrap/js/jquery.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url('bootstrap/js/bootstrap.min.js')?>"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- <script src="<?=base_url('bootstrap/js/classie.js')?>"></script> -->
    <!-- <script src="<?=base_url('bootstrap/js/cbpAnimatedHeader.js')?>"></script> -->

    <!-- Contact Form JavaScript -->
    <!-- <script src="<?=base_url('bootstrap/js/jqBootstrapValidation.js')?>"></script> -->
    <!-- <script src="<?=base_url('bootstrap/js/contact_me.js')?>"></script> -->

    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url('bootstrap/js/freelancer.js')?>"></script>

</head>

<body id="page-top" class="index">

	<?php include 'header.php';?>

    <!-- Header -->
    <header>

    </header>

    <body>
        <!-- Contact Section -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <br><br>
                        <h2>สมัครเป็น privileged user</h2>
                        <hr class="star-primary">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <!-- <form name="sentMessage" id="contactForm" novalidate> -->

                        <?php echo form_open('user/subscribetoprivileged'); ?>

                            <script>
                                    function loadPic() {
                                        document.getElementById("image").src=document.getElementById("pictureurl").value;
                                    }
                            </script>

                            <center>
                                    <img class="img-responsive" src="http://static4.wikia.nocookie.net/__cb20131121214007/destinypedia/images/7/71/Information_Icon.svg" id="image" style="width:400px; height:300px;" alt=""><br>
                            </center>
                            

                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>สำเนาบัตรประชาชน</label>
                                    <input type="text" class="form-control" id="pictureurl"  onkeyup="loadPic();" placeholder="ใส่ url สำเนาบัตรประชาชน เช่น http://www.amulet2u.com/board/images/board/1_1325522925.jpg" 
                                        value="" 
                                        name="identification_picture" required data-validation-required-message="Please enter your event picture.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls" style="border-bottom:0px;">
                                    <label>ผู้สมัคร</label>
                                    <input type="hidden" class="form-control" value="<?= $sess; ?>" readonly placeholder="ผู้สมัคร" name="who_subscribe" required data-validation-required-message="Please enter your event who create.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <!-- <br> -->
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <input type="submit" class="btn btn-success btn-lg" name="btsave" value="ส่งเอกสาร"/>
                                </div>
                            </div>
                        <?php echo form_close(); ?>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </section>
    </body>


    <?php include 'footer.php';?>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>




</body>

</html>
