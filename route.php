<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>XNATC EFB电子飞行包</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css?h=0f3857026b8508c6f79f421fc631cf40">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.1.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.1.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/fontawesome5-overrides.min.css?h=b077f3d66f4dd45a76529f02462151f3">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
    <div class="sidebar-brand-icon rotate-n-15"></div>
    <div class="sidebar-brand-text mx-3"><span>XNATC模拟飞行俱乐部</span></div>
</a>

                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="/index.php"><i class="fas fa-tachometer-alt"></i><span><h8>首页<h8></span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="/doc.php"><i class="fa fa-files-o" aria-hidden="true"></i><span>航图查询</span></a><a class="nav-link" href="/map.php"><i class="fa fa-map-o" aria-hidden="true"></i><span>连飞地图</span></a><a class="nav-link active" href="/blank.html"><i class="fa fa-paper-plane" aria-hidden="true"></i><span>导航数据</span></a>
                        <a
                            class="nav-link active" href="/blank.html"><i class="fa fa-user-circle" aria-hidden="true"></i><span>关于</span></a>
                    </li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button><h3>欢迎使用 XNATC EFB 电子飞行包</h3>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="/assets/img/avatars/avatar4.jpeg?h=fefb30b61c8459a66bd338b7d790c3d5">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="/assets/img/avatars/avatar2.jpeg?h=5d142be9441885f0935b84cf739d4112">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="/assets/img/avatars/avatar3.jpeg?h=c5166867f10a4e454b5b2ae8d63268b3">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="/assets/img/avatars/avatar5.jpeg?h=35dc45edbcda6b3fc752dab2b0f082ea">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">XNATC&nbsp;</span><img class="border rounded-circle img-profile" src="/assets/img/avatars/avatar1.jpeg?h=0ecc82101fb9a10ca459432faa8c0656"></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <a
                                            class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                    </div>
                    </li>
                    </ul>
            </div>
            </nav>
            



            
            <div class="row">

<!-- Column -->


<div class="col-md-12" style="padding:10px">
    <div class="card" >

        <div class="card-block"   style="padding-left:30px">
            <br />
            
            <br /><br />
            <?php
            $time = time();
            $abi = (string)$time;
            $abi = substr($abi, 0, 7);
            //echo $abi;
            $pwd = md5($abi . "xzz");
            //echo $pwd;
            $data = file_get_contents("https://route.xnatc.ink/getRoute?from=" . $_POST['id1'] . "&dest=" . $_POST['id2'] . "&valid=" . $pwd);
            $json = json_decode($data, true);
            //print_r($json);
            $main = $json["nodeinformation"];
            $num = count($main);
            $main_aa = array();
            for ($i = 0; $i < $num; ++$i) {
                $main_a = array();
                if ($i == 0) {
                    $start_lng = (float)$main[$i][2];
                }
                if ($i ==  $num - 1) {
                    $end_lng = (float)$main[$i][2];
                }
                $main_a["lat"] = (float)$main[$i][1];
                $main_a["lng"] = (float)$main[$i][2];
                $main_aa[] = $main_a;
            }
            $mapd = json_encode($main_aa);
            ?>
            
            <h2>#导航数据</h2>
            <code><?php echo $json["data_version"]; ?></code>
            <hr>
            <h2>#查询用时</h2>
            <code><?php echo $json["total_time"]; ?></code>
            <hr>
            <h2>#航路</h2>
            <code><?php echo $json["route"]; ?></code>
            <hr>
            <h2>#航路距离</h2>
            <code><?php echo $json["distance"]; ?></code>
            <hr>
            <h2>#建议航高</h2>
            中国RVSM：<code><?php
                            if ($start_lng - $end_lng < 0) {
                                echo "建议 FL301 FL321 FL341 FL361";
                            } else {
                                echo "建议 FL311 FL331 FL351 FL371";
                            }
                            ?></code><br />
            国际RVSM：<code><?php
                            if ($start_lng - $end_lng < 0) {
                                echo "建议 FL360、FL380、FL400";
                            } else {
                                echo "建议 FL370 FL390 FL410";
                            }
                            ?></code>
            <hr>
            <h2>#报文</h2>

            <?php
            function get_m($icao)
            {
                $jichang1 = $icao;
                $jichang = strtoupper($jichang1);
                $huancun = rand(5415645, 787421154);
                $url = "http://avt7.xiamenair.com.cn/Home/AirportMetarInfo?airport4Code=" . $jichang . "&_=" . $huancun;

                $jsondata = file_get_contents($url);
                $json = json_decode($jsondata, true);



                $n = "<b> " . $jichang . "</b> <br>";
                $n .= "<code>" . $json['metarContentList']['rows'][0]['content'] . "</code><br>";
                $n .= "<code>" . $json['tafContentList']['rows'][0]['content'] . "</code><br>";
                return $n;
            }
            echo get_m($_POST['id1']);
            echo "<br/>";
            echo get_m($_POST['id2']);
            ?>
            <hr>
            <h2>#燃油</h2>
            <?php

            function request_post($url = '', $post_data = array())
            {
                if (empty($url) || empty($post_data)) {
                    return false;
                }


                $postUrl = $url;
                $curlPost = $post_data;
                $ch = curl_init(); //初始化curl
                curl_setopt($ch, CURLOPT_URL, $postUrl); //抓取指定网页
                curl_setopt($ch, CURLOPT_HEADER, 0); //设置header
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //要求结果为字符串且输出到屏幕上
                curl_setopt($ch, CURLOPT_POST, 1); //post提交方式
                curl_setopt($ch, CURLOPT_ENCODING, ""); //解压
                //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept-Encoding: gzip, deflate,flate'));
                curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //不验证证书下同
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); //不验证证书下同
                $data = curl_exec($ch); //运行curl
                curl_close($ch);
                //$res=json_decode($data,true);
                // $data= strip_tags($data);

                //$data = substr($data,0,strpos($data, '-STAR'));//截取 .htm 前面的内容
                // $data = trim(strrchr($data, '-SID->'),'-SID->');//截取 com/i 后面的内容



                return $data;
            }


            function testAction($a, $b, $c, $e, $f, $g)
            {

                //$url = 'http://fuelplanner.com/index.php';
                $post_data['okstart']      = 1;
                $post_data['EQPT']      = $e;
                $post_data['ORIG']      = $a;
                $post_data['DEST']      = $b;
                $post_data['submit']      = 'PLANNER';
                $post_data['RULES']      = 'FARDOM';
                $post_data['TANKER']      = NULL;
                $post_data['UNITS']      = $c;
                $post_data['OEW']      = $f;
                $post_data['TTL']      = $g;



                //$post_data = array();
                //$post_data =$p;
                $res = request_post($url, $post_data);
                return $res;
            }
            $fuel = testAction($_POST['id1'], $_POST['id2'], $_POST['c'], $_POST['e'], $_POST['oew'], $_POST['ttl']);
            echo $fuel;
            ?>


            <hr>
            <h2>#航路详细</h2>
            <?php


            $output_main = "<table class='table' >" . "<thead><th>航点名</th><th>经度</th><th>纬度</th></thead><tbody>";
            $num = count($main);
            for ($i = 0; $i < $num; ++$i) {
                $output_main .= "<tr>";
                $output_main .= "<td>" . $main[$i][0] . '</td>';
                $output_main .= "<td>" . $main[$i][2] . '</td>';
                $output_main .= "<td>" . $main[$i][1] . '</td>';
                $output_main .= "</tr>";
            }
            $output_main .= "</tbody></table>";
            echo $output_main;
            ?>


        </div>
    </div>
</div>



</div>


            

        </div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><footer class="footer"><a href="http://beian.miit.gov.cn/" target="_blank"> 鲁ICP备2021029425号</a>Copyright © 2019-2022.XNATC All rights reserved.

</footer></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="/assets/js/script.min.js?h=823eb1733a0a81fa385a52d2e8e60900"></script>

</html>