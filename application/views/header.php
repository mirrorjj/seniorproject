    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="#page-top">Just Play</a> -->
                <a class="navbar-brand" href="<?=base_url('welcome/index')?>">Just Play</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <form class="navbar-form navbar-left" role="search" method="post" accept-charset="utf-8" action="<?=base_url('event/searchevent')?>">
                            <div class="form-group">
                                <input type="text" class="form-control" name="event_search" placeholder="Search">
                            </div>
                            <input type="submit" name="btsave" class="btn btn-default" value="ค้นหา">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            </input>
                        </form>
                    </li>

                     <?php
                        if(!isset($sess)||empty($sess)){
                    ?>
                        <li class="page-scroll">
                            <a href="<?=base_url('welcome/login')?>">เข้าสู่ระบบ</a>
                        </li>
                    <?php
                        } else {
                        echo "<li class='page-scroll' style='padding-top: 19.5px; padding-bottom: 19.5px; color:white;'>ยินดีต้อนรับคุณ ".$sess."</li>";
                        echo "<li class='page-scroll'><a href=".base_url('user/signout').">ออกจากระบบ</a></li>";
                        }
                    ?>

                    <li class="dropdown-responsive">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">เมนู <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li class="page-scroll">
                                <a target = '_blank' href="https://docs.google.com/spreadsheet/ccc?key=0AssdgRUsKGQqdGVvcEduejNKWkRpVmtGZ3NDUnpUb1E&usp=sharing#gid=9">ตารางการใช้สนามศูนย์กีฬา จุฬาฯ</a>
                            </li>

                            <!-- manage event-->
                            <?php
                                //error_reporting(E_WARNING);
                                if(isset($sess)||!empty($sess)||isset($user_info)||!empty($user_info)){
                                    foreach((array)$user_info as $r){
                                        if($r['user_status'] == "privileged user"){
                            ?>
                                <li class="page-scroll">
                                    <a href="<?=base_url('user/manageevent')?>">จัดการกิจกรรม</a>
                                </li>
                            <?php
                                        }
                                    }
                                }
                            ?>
                            <!-- manage event-->

                            <!-- register be privileged user-->
                            <?php
                                if(isset($sess)||!empty($sess)||isset($user_info)||!empty($user_info)){
                                    foreach((array)$user_info as $r){
                                        if($r['user_status'] == "user"){
                            ?>
                                <li class="page-scroll">
                                    <a href="<?=base_url('user/subscribetoprivileged')?>">สมัครเป็น privileged user</a>
                                </li>
                            <?php
                                        }
                                    }
                                }
                            ?>
                            <!-- register be privileged user-->

                            <!--
                            <li class="page-scroll">
                                <a href="<?=base_url('#portfolio')?>">กลุ่ม</a>
                            </li>
                            -->
                            <li class="divider"></li>
                            <li class="page-scroll">
                                <a href="<?=base_url('welcome/aboutus')?>">เกี่ยวกับเรา</a>
                            </li>
                            <li class="page-scroll">
                                <a href="<?=base_url('welcome/contactus')?>">ติดต่อเรา</a>
                            </li>
                      </ul>
                    </li>
                    
                            
                        

                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>