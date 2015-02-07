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
                        <h2>แก้ไขกิจกรรม</h2>
                        <hr class="star-primary">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <!-- <form name="sentMessage" id="contactForm" novalidate> -->

                        <?php echo form_open('user/editevent/'.$rs['event_id']); ?>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>ชื่อกิจกรรม</label>
                                    <input type="text" class="form-control" placeholder="ชื่อกิจกรรม" name="event_name" required data-validation-required-message="Please enter your event name." value="<?php echo $rs['event_name']; ?>">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>วัน/เวลาที่จัดกิจกรรม YYYY-MM-DD HH:MM:SS</label>
                                    <input type="datetime" class="form-control" placeholder="วัน/เวลาที่จัดกิจกรรม YYYY-MM-DD HH:MM:SS" name="event_datetime" required data-validation-required-message="Please enter your event datetime." value="<?php echo $rs['event_datetime']; ?>">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>สถานที่จัดกิจกรรม</label>
                                    <input type="text" class="form-control" placeholder="สถานที่จัดกิจกรรม" name="event_where" required data-validation-required-message="Please enter your event place." value="<?php echo $rs['event_where']; ?>">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>รายละเอียดกิจกรรม</label>
                                    <textarea rows="5" class="form-control" placeholder="รายละเอียดกิจกรรม" name="event_detail" required data-validation-required-message="Please enter a message."><?php echo $rs['event_detail']; ?></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>ผู้จัดกิจกรรม</label>
                                    <input type="text" class="form-control" placeholder="ผู้จัดกิจกรรม" name="event_who_create" required data-validation-required-message="Please enter your event who create." value="<?php echo $rs['event_who_create']; ?>">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <input type="submit" class="btn btn-success btn-lg" name="btsave" value="บันทึก"/>
                                    <button type="button" class="btn btn-danger btn-lg" onclick="window.location='<?=base_url('user/manageevent')?>'; ">ย้อนกลับ</button>
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


    <!-- jQuery -->
    <script src="<?=base_url('bootstrap/js/jquery.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url('bootstrap/js/bootstrap.min.js')?>"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?=base_url('bootstrap/js/classie.js')?>"></script>
    <script src="<?=base_url('bootstrap/js/cbpAnimatedHeader.js')?>"></script>

    <!-- Contact Form JavaScript -->
    <!-- <script src="<?=base_url('bootstrap/js/jqBootstrapValidation.js')?>"></script> -->
    <!-- <script src="<?=base_url('bootstrap/js/contact_me.js')?>"></script> -->

    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url('bootstrap/js/freelancer.js')?>"></script>

</body>

</html>
