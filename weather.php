<?php 






require_once("src/MetarDecoder.inc.php");
include('util.php');
use MetarDecoder\MetarDecoder;
use utilphp\util;



?>


<!DOCTYPE html>


<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
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
            <div id="content">
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
                    <h3 class="text-dark mb-4">气象查询</h3>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="weather.php" method="post">
                                        <p>查询机场</p><input class="form-control" type="text" placeholder="请输入四位ICAO" name="jichang">
                                        <p>&nbsp;&nbsp;</p><button class="btn btn-primary" type="submit">查询</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" style="margin-top: 20px;">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">查询结果</h4>
                                    <div>

                                        <?php
                                        //检测数据是否提交
                                        if (isset($_POST["jichang"])) {
                                            $jichang = $_POST["jichang"];

                                            $url= "https://metar.vatsim.net/" . $jichang;
                                            $metar=file_get_contents($url);
                                            echo"<p>机场：" . $jichang . "</p>";
                                            echo"<p>气象：" . $metar . "</p>";
                                            echo"<br>";
                                            echo"<h5>解析：</h5>";
                                            
                                            
                                            
                                            $decoder = new MetarDecoder();
                                            $d = $decoder->parse($metar);

                                            //context information
                                            $d->isValid(); //true
                                            $d->getRawMetar(); //'METAR LFPO 231027Z AUTO 24004G09MPS 2500 1000NW R32/0400 R08C/0004D +FZRA VCSN //FEW015 17/10 Q1009 REFZRA WS R03'
                                            $d->getType(); //'METAR'
                                            $d->getIcao(); //'LFPO'
                                            $d->getDay(); //23
                                            $d->getTime(); //'10:27 UTC'
                                            $d->getStatus(); //'AUTO'
                                            
                                            //surface wind
                                            $sw = $d->getSurfaceWind(); //SurfaceWind object
                                            $sw->getMeanDirection()->getValue(); //240
                                            $sw->getMeanSpeed()->getValue(); //4
                                           
                                            $sw->getMeanSpeed()->getUnit(); //'m/s'
                                            
                                            //visibility
                                            //false
                                            
                                            //runway visual range
                                            
                                            
                                            //present weather
                                         
                                            
                                            // clouds
                                            
                                            // temperature
                                            $d->getAirTemperature()->getValue(); //17
                                            $d->getAirTemperature()->getUnit(); //'deg C'
                                            $d->getDewPointTemperature()->getValue(); //10
                                            
                                            // pressure
                                            $d->getPressure()->getValue(); //1009
                                            $d->getPressure()->getUnit(); //'hPa'
                                            
                                            // recent weather
                                             //array('RA')
                                            
                                            // windshears
                                            $d->getWindshearRunways(); //array('03')
                                            
                                            
                                            
                                            echo"<p>机场：" . $d->getIcao() . "</p>";
                                            
                                            echo"<p>当前气压：" . $d->getPressure()->getValue() . "hPa</p>";
                                            echo"<p>当前风向：" . $sw->getMeanDirection()->getValue() . "°</p>";
                                            echo"<p>当前风速：" . $sw->getMeanSpeed()->getValue() . "m/s</p>";
                                            
                                            echo"<p>当前温度：" . $d->getAirTemperature()->getValue() . "°C</p>";
                                            echo"<p>当前湿度：" . $d->getDewPointTemperature()->getValue() . "°C</p>";
                                            

                                        
                                            
                                         






                                        }else{
                                            echo"Sleep......";
                                        }

















                                        ?>












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