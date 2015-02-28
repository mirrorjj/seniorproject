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

    <!-- <link href="<?=base_url('bootstrap/activity/css/1-col-portfolio.css')?>" rel="stylesheet"> -->

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


    <!-- Page Content -->
    <!-- <div class="container"> -->

        <!-- Page Heading -->
        <!-- <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Page Heading
                    <small>Secondary Text</small>
                </h1>
            </div>
        </div> -->
        <!-- /.row -->


    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                        <h2><br>ผลลัพธ์การค้นหา</h2>
                        <hr class="star-primary">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                </div>
            </div>
        </div>
    </section>

        <?php 
            if(count($query) == 0){
                echo "<div class=\"col-lg-12 text-center\">"."<h3>ไม่พบผลลัพธ์ กรุณาลองใหม่อีกครั้ง TT<br><br><br></h3>"."</div>";
            } else {
        ?>

        <!-- Project One -->
        <?php 
            $no = $this->uri->segment(3)+1;
            foreach($query as $item){
        ?>
        <div class="row" style="margin-left: 50px; margin-right: 50px; padding-left: 125px; padding-right: 125px; border:10px solid #ccc; background:#f5f5f5;-moz-border-radius:4px;-webkit-border-radius:10px;border-radius:10px;">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="<?= $item['event_picture'] ?>" style="width:400px; height:300px;" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>ชื่อกิจกรรม : <?= $item['event_name'] ?></h3>
                <h4>เจ้าของกิจกรรม : <?= $item['event_who_create'] ?></h4>
                <h4>วันที่และเวลา : <?= $item['event_newdatetime'] ?></h4>
                <h4>สถานที่ : <?= $item['event_where'] ?></h4>
                <p>รายละเอียด : <?= $item['event_detail'] ?></p>
                <a class="btn btn-info" href="#">0 ผู้เข้าร่วมกิจกรรม <span class="glyphicon glyphicon-user"></span></a>
                <a class="btn btn-success" href="#">เข้าร่วมกิจกรรม <span class="glyphicon glyphicon-ok"></span></a>
            </div>
        </div>
        
        <!-- /.row -->

        <hr>

        <?php 
                $no++;
                }
            }
        ?>

        <!-- Pagination -->
<!--         <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div> -->
        <!-- /.row -->

<!--         <?php 
            echo $this->pagination->create_links();
        ?> -->

        <hr>

        <!-- Footer -->
        <!-- <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        <!-- </footer> -->

    </div>
    <!-- /.container -->


    <?php include 'footer.php';?>


    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll">
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
