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

</head>

<body id="page-top" class="index">

	<?php include 'header.php';?>

    

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="<?=base_url('bootstrap/img/sports_icon.png')?>" width="400" height="400" alt="">
                    <div class="intro-text">
                        <span class="name">Meet & Do Activity Together</span>
                        <span class="name">พบปะและทำกิจกรรมร่วมกัน</span>
                        <hr class="star-light">
                        <span class="skills">Find New Friend - Find New Community - Exchange New Experience</span><br>
                        <span class="skills">พบเพื่อนใหม่ - พบสังคมใหม่ - แลกเปลี่ยนประสบการณ์ใหม่ๆ</span>

                    </div>
                </div>
            </div>
        </div>
    </header>
    

    <section style="padding:70px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>
                        <!--
                        <img src="<?=base_url('bootstrap/img/exclamation_mark.gif')?>" width="10" height="10" class="img-responsive" alt="" style="display: inline;">
                        <img src="<?=base_url('bootstrap/img/exclamation_mark.gif')?>" width="10" height="10" class="img-responsive" alt="" style="display: inline;">
                        <img src="<?=base_url('bootstrap/img/exclamation_mark.gif')?>" width="10" height="10" class="img-responsive" alt="" style="display: inline;">
                        -->
                        5 กิจกรรมใหม่ล่าสุด
                        <!--
                        <img src="<?=base_url('bootstrap/img/exclamation_mark.gif')?>" width="10" height="10" class="img-responsive" alt="" style="display: inline;">
                        <img src="<?=base_url('bootstrap/img/exclamation_mark.gif')?>" width="10" height="10" class="img-responsive" alt="" style="display: inline;">
                        <img src="<?=base_url('bootstrap/img/exclamation_mark.gif')?>" width="10" height="10" class="img-responsive" alt="" style="display: inline;">
                        -->
                    </h2>
                    <hr class="star-primary">
                </div>
            </div>
        </div>
    </section>


        <!-- Project One -->
        <?php
            $counter = 0; 
            foreach($query as $item){
        ?>
        <div class="row" style="margin-left: 50px; margin-right: 50px; padding-left: 125px; padding-right: 125px; border:10px solid #ccc; background:#f5f5f5;-moz-border-radius:4px;-webkit-border-radius:10px;border-radius:10px;">
            <div class="col-md-7">
                <!-- <a href="#"> -->
                    <img class="img-responsive" src="<?= $item->event_picture ?>" style="width:400px; height:300px;" alt="">
                <!-- </a> -->
            </div>
            <div class="col-md-5">
                <h3>ชื่อกิจกรรม : <?= $item->event_name ?></h3>
                <h4>เจ้าของกิจกรรม : <?= $item->event_who_create ?></h4>
                <h4>วันที่และเวลา <?= $item->event_newdatetime ?></h4>
                <h4>สถานที่ : <?= $item->event_where ?></h4>
                <p>รายละเอียด : <?= $item->event_detail ?></p>
                
                <!-- <a class="btn btn-info" href="#">0 ผู้เข้าร่วมกิจกรรม <span class="glyphicon glyphicon-user"></span></a> -->
                <!-- <a class="btn btn-success" href="#">เข้าร่วมกิจกรรม <span class="glyphicon glyphicon-ok"></span></a> -->
                
                <!-- Who Join Event -->

                <div class="modal fade" id="whojoinevent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">รายชื่อผู้เข้าร่วมกิจกรรม</h4>
                            </div>
                        
                            <div class="modal-body">
                                <!-- <p>You are about to delete one track url, this procedure is irreversible.</p> -->
                                <?php
                                    foreach($querysql2 as $whojoin){
                                        //for($i=0;$i<$numrows;$i++){
                                            if($item->event_id == $whojoin['eventid']){
                                                echo "<p>".$whojoin['who_join']."</p>";
                                                
                                                $counter++;
                                                //$item['event_id']++;
                                            }
                                        //}

                                    }
                                    //$item['event_id'] = 0;
                                    //$whojoin['eventid']++;
                                ?>
                                <!-- <p class="debug-url"></p> -->
                            </div>
                            
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> -->
                                <!-- <a href="#"  class="btn btn-success danger">ปิด</a> -->
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> ปิด</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <a data-href="delete.php?id=54" data-toggle="modal" data-target="#whojoinevent" href="#">Delete record #54</a> -->

                <button type="button" class="btn btn-info" 
                data-href="<?=base_url('user/joinevent')?><?php echo "/".$item->event_id ?>"
                data-toggle="modal" data-target="#whojoinevent" href="#">
                <?= $counter; ?> ผู้เข้าร่วมกิจกรรม <span class="glyphicon glyphicon-user"></span></button>


                <script>
                    $('#whojoinevent').on('show.bs.modal', function(e) {
                        $(this).find('.danger').attr('href', $(e.relatedTarget).data('href'));
                        
                        $('.debug-url').html('URL: <strong>' + $(this).find('.danger').attr('href') + '</strong>');
                    });
                </script>

                <!-- End Who Join Event -->

                <!-- Confirm Join Event -->

                <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">ยืนยันการเข้าร่วมกิจกรรม</h4>
                            </div>
                        
                            <div class="modal-body">
                                <!-- <p>You are about to delete one track url, this procedure is irreversible.</p> -->
                                <p>กดปุ่ม "ตกลง" เพื่อยืนยันการเข้าร่วมกิจกรรม?</p>
                                <!-- <p class="debug-url"></p> -->
                            </div>
                            
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> -->
                                <a href="#"  class="btn btn-success danger">ตกลง</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <a data-href="delete.php?id=54" data-toggle="modal" data-target="#confirm-delete" href="#">Delete record #54</a> -->

                <button type="button" class="btn btn-success" 
                data-href="<?=base_url('user/joinevent')?><?php echo "/".$item->event_id ?>"
                data-toggle="modal" data-target="#confirm-delete" href="#">
                เข้าร่วมกิจกรรม <span class="glyphicon glyphicon-ok"></span></button>


                <script>
                    $('#confirm-delete').on('show.bs.modal', function(e) {
                        $(this).find('.danger').attr('href', $(e.relatedTarget).data('href'));
                        
                        $('.debug-url').html('URL: <strong>' + $(this).find('.danger').attr('href') + '</strong>');
                    });
                </script>

                <!-- End Confirm Join Event -->


            </div>
        </div>
        
        <!-- /.row -->

        <hr>

        <?php
                $counter = 0; 
            } //end foreach
        ?>


    <!-- Portfolio Grid Section -->
    <!--
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>กลุ่มที่น่าสนใจ</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                                แบดมินตัน
                            </div>
                        </div>
                        <img src="<?=base_url('bootstrap/img/portfolio/badminton_icon.png')?>" width="200" height="200" style="display: block; margin-left: auto; margin-right: auto" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                                วอลเลย์บอล
                            </div>
                        </div>
                        <img src="<?=base_url('bootstrap/img/portfolio/volleyball_icon.png')?>" width="200" height="200" style="display: block; margin-left: auto; margin-right: auto" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                                บาสเกตบอล
                            </div>
                        </div>
                        <img src="<?=base_url('bootstrap/img/portfolio/basketball_icon.png')?>" width="200" height="200" style="display: block; margin-left: auto; margin-right: auto" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                                ฟุตซอล
                            </div>
                        </div>
                        <img src="<?=base_url('bootstrap/img/portfolio/futsal_icon.png')?>" width="200" height="200" style="display: block; margin-left: auto; margin-right: auto" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                                ตะกร้อ
                            </div>
                        </div>
                        <img src="<?=base_url('bootstrap/img/portfolio/rattanball_icon.png')?>" width="200" height="200" style="display: block; margin-left: auto; margin-right: auto" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                                เทเบิลเทนนิส
                            </div>
                        </div>
                        <img src="<?=base_url('bootstrap/img/portfolio/tabletennis_icon.png')?>" width="200" height="200" style="display: block; margin-left: auto; margin-right: auto" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                                กอล์ฟ
                            </div>
                        </div>
                        <img src="<?=base_url('bootstrap/img/portfolio/golf_icon.png')?>" width="200" height="200" style="display: block; margin-left: auto; margin-right: auto" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                                วอลเลย์บอลชายหาด
                            </div>
                        </div>
                        <img src="<?=base_url('bootstrap/img/portfolio/beachvolley_icon.png')?>" width="200" height="200" style="display: block; margin-left: auto; margin-right: auto" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                                เทนนิส
                            </div>
                        </div>
                        <img src="<?=base_url('bootstrap/img/portfolio/tennis_icon.png')?>" width="200" height="200" style="display: block; margin-left: auto; margin-right: auto" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                                ว่ายน้ำ
                            </div>
                        </div>
                        <img src="<?=base_url('bootstrap/img/portfolio/swim_icon.png')?>" width="200" height="200" style="display: block; margin-left: auto; margin-right: auto" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <iframe src="https://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fcuscpage&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=true&amp;header=true&amp;height=700" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:800px; height:570px; background: white; float:none; " allowTransparency="true" class="fb-like-box"></iframe><br/><br/>
                </center>
            </div>
        </div>
    </div>


    

    <?php include 'footer.php';?>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <!--
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>แบดมินตัน</h2>
                            <hr class="star-primary">
                            <img src="<?=base_url('bootstrap/img/portfolio/badminton_icon.png')?>" class="img-responsive img-centered" alt="">
                            <p>แบดมินตัน (อังกฤษ: Badminton) เป็นกีฬาชนิดหนึ่ง ที่ใช้ไม้ตีลูก ลูกสำหรับใช้ตีนั้น เรียกกันมาช้านานว่า "ลูกขนไก่" เพราะสมัยก่อนกีฬานี้ใช้ขนของไก่มาติดกับลูกบอลทรงกลมขนาดเล็ก ปัจจุบันลูกขนไก่ผลิดจากขนเป็ดที่คัดแล้ว ลูกบอลทรงกลมขนาดเล็กที่ทำเป็นหัวลูกขนไก่ทำด้วยไม้คอร์ก [ขอบคุณข้อมูลจาก : th.wikipedia.org]</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default"><i class="fa fa-search"></i><a style="text-decoration:none; color:white;" href="<?=base_url('event/viewevent')?>" style="color:white"> ดูกิจกรรม</a> </button>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> ปิด</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="<?=base_url('bootstrap/img/portfolio/cake.png')?>" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="<?=base_url('bootstrap/img/portfolio/circus.png')?>" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="<?=base_url('bootstrap/img/portfolio/game.png')?>" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="<?=base_url('bootstrap/img/portfolio/safe.png')?>" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="<?=base_url('bootstrap/img/portfolio/submarine.png')?>" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <!--
    <div class="scroll-top page-scroll">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
-->

    

</body>

</html>
