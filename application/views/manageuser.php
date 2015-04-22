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

    </header>

    <body>
        <!-- Contact Section -->
        <section id="contact">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 text-center">
                        <br><br>
                        <h2>จัดการสมาชิก</h2>
                        <hr class="star-primary">
                    </div>
                </div>
                <!--
                <button type="button" class="btn btn-primary btn-lg" onclick="window.location='<?=base_url('user/addevent')?>'; ">สร้างกิจกรรม</button><br><br>
                -->
                <div class="table-responsive">
                    <table class="table" border="1">
                        <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>ชื่อสมาชิก</th>
                                <th>Link เอกสารยืนยันตน</th>
                                <th>ยืนยัน?</th>
                                <th>ลบ?</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                if(count($rs) == 0){
                                    echo "<tr><td colspan='5' align='center'>-- ไม่มีผู้สมัคร -- </td></tr>";
                                } else {
                                    $no = 1;
                                    foreach($rs as $r){
                                        echo "<tr>";
                                        echo "<td>$no</td>";
                                        echo "<td>".$r['who']."</td>";
                                        echo "<td>".$r['identification_picture']."</td>";

                                        echo "<td>";
                                        
                                        //echo anchor("user/deleteevent/".$r['event_id'],"ลบ",array("onclick"=>"javascript:return confirm('คุณต้องการลบหรือไม่?');") );
                                        
                                        // echo " <button type=\"button\" class=\"btn btn-danger\" 
                                        // onclick=\"window.location='user/deleteevent/$r[event_id]'; \">ลบ</button> ";

                            ?>
                                        <!-- Confirm Delete -->

                                        <div class="modal fade" id="confirm-user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="myModalLabel">Confirmed</h4>
                                                    </div>
                                                
                                                    <div class="modal-body">
                                                        <!-- <p>You are about to delete one track url, this procedure is irreversible.</p> -->
                                                        <p>Do you want to proceed?</p>
                                                        <!-- <p class="debug-url"></p> -->
                                                    </div>
                                                    
                                                    <div class="modal-footer">
                                                        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> -->
                                                        <a href="#" class="btn btn-success danger">ตกลง</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <a data-href="delete.php?id=54" data-toggle="modal" data-target="#confirm-delete" href="#">Delete record #54</a> -->

                                        <button type="button" class="btn btn-success" 
                                        data-href="confirmuser/<?=$r['who']?>"
                                        data-toggle="modal" data-target="#confirm-user" href="#">
                                        ยืนยัน <span class="fa fa-question"></span></button>


                                        <script>
                                            $('#confirm-user').on('show.bs.modal', function(e) {
                                                $(this).find('.danger').attr('href', $(e.relatedTarget).data('href'));
                                                
                                                $('.debug-url').html('URL: <strong>' + $(this).find('.danger').attr('href') + '</strong>');
                                            });
                                        </script>

                                        <!-- End Confirm Delete -->

                            <?php
                                        echo "</td>";
                                        echo "<td>";
                            ?>

                            <!-- Confirm Delete -->

                            <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                                        </div>
                                    
                                        <div class="modal-body">
                                            <!-- <p>You are about to delete one track url, this procedure is irreversible.</p> -->
                                            <p>Do you want to proceed?</p>
                                            <!-- <p class="debug-url"></p> -->
                                        </div>
                                        
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                            <a href="#" class="btn btn-danger danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <a data-href="delete.php?id=54" data-toggle="modal" data-target="#confirm-delete" href="#">Delete record #54</a> -->

                            <button type="button" class="btn btn-danger" 
                            data-href="delconfirmuser/<?=$r['identification_picture']?>"
                            data-toggle="modal" data-target="#confirm-delete" href="#">
                            <span class="fa fa-times"></span> ลบ</button>


                            <script>
                                $('#confirm-delete').on('show.bs.modal', function(e) {
                                    $(this).find('.danger').attr('href', $(e.relatedTarget).data('href'));
                                    
                                    $('.debug-url').html('Delete URL: <strong>' + $(this).find('.danger').attr('href') + '</strong>');
                                });
                            </script>

                            <!-- End Confirm Delete -->

                            <?php
                                        echo "</td>";
                                        echo "</tr>";
                                        $no++;
                                    }
                                }
                            ?>
                        </tbody>

                    </table>
                </div>

            </div>
        </section>
    </body>

    <br><br><br>
    <?php include 'footer.php';?>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>




</body>

</html>
