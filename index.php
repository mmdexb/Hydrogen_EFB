<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>XNATC EFB电子飞行包</title>
    <link rel="icon" type="image/png" sizes="4000x4000" href="/assets/img/avatars/lloogg.png">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-passport"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>XNATC</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-route"></i><span>航路查询</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/eaip.html"><i class="fas fa-book-open"></i><span>航图查询</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="weather.php"><i class="fas fa-cloud-sun-rain"></i><span>气象查询</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="https://map.xnatc.ink"><i class="fas fa-map-marked-alt"></i><span>连飞地图</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://fly.xnatc.ink/time"><i class="far fa-hourglass"></i><span>数据中心</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/about.html"><i class="fas fa-window-maximize"></i><span>关于</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content" style="text-shadow: 0px 0px;box-shadow: 0px 0px, 0px 0px;">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="/assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="/assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="/assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="/assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">XNATC电子飞行包</span><img class="border rounded-circle img-profile" src="/assets/img/avatars/lloogg.png"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">航路查询</h3><code>数据周期:2207</code>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12" style="margin: 0px;height: 272px;">
                            <div class="card">
                                <div class="card-body">
                                    <form style="margin: 0px;height: 241px;" action="index.php" method="post">
                                        <p>出发机场</p><input class="form-control" type="text" placeholder="填写机场四位ICAO" name="id1">
                                        <p>到达机场</p><input class="form-control" type="text" name="id2" placeholder="填写机场四位ICAO">
                                        <p>&nbsp;</p><button class="btn btn-primary" type="submit" style="text-align: left;">查询</button>
                                        <p></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card"></div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" style="margin-top: 20px;">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">查询结果</h4>
                                    <h6 class="text-muted card-subtitle mb-2">&nbsp;</h6>
                                    <div>
                                        <?php
                                        //检测是否有数据输入
                                        if (isset($_POST["id1"]) && isset($_POST["id2"])) {
                                            //获取数据
                                            $id11 =$_POST["id1"];
                                            $id21 =$_POST["id2"];
                                            $id1 =strtoupper($id11);
                                            $id2 =strtoupper($id21);
                                            
                                            
                                            echo '<div class="col-md-12">
                <div class="card">

                    <div class="card-block">
                        <br />
                        
                        <br /><br />';
                                            $time = time();
                                            $abi = (string)$time;
                                            $abi = substr($abi, 0, 7);
                                            //echo $abi;
                                            $pwd = md5($abi . "xnatcloveyushi666imhcz");
                                            //echo $pwd;
                                            //$data = file_get_contents("https://route.xnatc.ink/getRoute?from=" . $_POST['id1'] . "&dest=" . $_POST['id2'] . "&valid=" . $pwd);
                                            $data = file_get_contents("https://rapi.xnatc.ink/getRoute?from=" . $id1 . "&dest=" . $id2 . "&valid=" . $pwd);
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
                                           
                                       echo'
                                        <h2>#导航数据</h2>
                                        <code>';
                                        echo $json["data_version"];
                                        echo"</code>
                                        <hr>
                                        <h2>#查询用时</h2>
                                        <code>";
                                        echo $json["total_time"];
                                        echo "</code>
                                        <hr>
                                        <h2>#航路</h2>
                                        <code>";
                                        echo $json["route"];
                                        echo"</code>
                                        <hr>
                                        <h2>#航路距离</h2>
                                        <code>";
                                        echo $json["distance"];
                                        echo "</code>
                                        <hr>
                                        <h2>#建议航高</h2>"."中国RVSM：<code>";
                                            if ($start_lng - $end_lng < 0) {
                                            echo "建议 FL301 FL321 FL341 FL361";
                                            } else {
                                            echo "建议 FL311 FL331 FL351 FL371";
                                            }
                                        echo "</code><br />
                                        国际RVSM：<code>";
                                            if ($start_lng - $end_lng < 0) {
                                            echo "建议 FL360、FL380、FL400";
                                            } else {
                                            echo "建议 FL370 FL390 FL410";
                                            }
                                        echo "</code>
                                        <hr>
                                        <h2>#报文</h2>";
                                        function get_m($icao)
                                        {
                                          $jichang1 = $icao;
                                          $jichang = strtoupper($jichang1);

                                          $url = 'https://metar.vatsim.net/' . $jichang ;

                                          $metar = file_get_contents($url);




                                          $n = '<b>'. $jichang . "</b><br>";
                                          $n = "<code>" . $metar . "</code><br>";
                                        


                                          return $n;
                                        }
                                        echo get_m($_POST['id1']);
                                        echo "<br/>";
                                        echo get_m($_POST['id2']);
                                        echo "<hr>";
                                        echo " <h2>#航路</h2> ";
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
                                        echo "

                                    </div>
                                </div>
                            </div>
";







                            } else {
                                                echo "Sleep....";
}?>





























                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © XNATC Develop Group 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/script.min.js"></script>
</body>

</html>