<!DOCTYPE html>
<html lang="en">
<?php

//echo "DATE=".$dates = $_POST["dates"];
if(empty($dates)){
    $dates=date("Y-m-d");
   }

?>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Biogas Water Pumping System">
    <meta name="author" content="Biogas Water Pumping System">
    <meta name="keywords" content="Biogas Water Pumping System">

    <!-- Title Page-->
    <title>Biogas Water Pumping System</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <link rel="stylesheet" type="text/css" href="jquery.datetimepicker.css"/>
<style type="text/css">

.custom-date-style {
	background-color: red !important;
}

</style>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo-white.png" alt="Administrator" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="images/icon/avatar-big-01.jpg" alt="Administrator" />
                    </div>
                    <h4 class="name">Administrator</h4>
                    <a href="#">หน้าหลัก</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class=" has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>ข้อมูลการทำงาน
                                
                            </a>
                            
                        </li>
                        
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-trophy"></i>รายงาน
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="daily_report.php">
                                        <i class="fas fa-table"></i>รายงานประจำวัน</a>
                                </li>
                                <li>
                                    <a href="all_report.php">
                                        <i class="far fa-check-square"></i>รายงานสรุปย้อนหลัง</a>
                                </li>
                                
                            </ul>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <i class="zmdi zmdi-search"></i>
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="images/icon/logo-white.png" alt="" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img src="images/icon/avatar-big-01.jpg" alt="Administrator" />
                        </div>
                        <h4 class="name">Administraor</h4>
                        <a href="#">หน้าหลัก</a>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li class="active has-sub">
                                <a class="js-arrow" href="index.php">
                                    <i class="fas fa-tachometer-alt"></i>ข้อมูลการทำงาน
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                
                            </li>
                            <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-trophy"></i>รายงาน
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="daily_report.php">
                                        <i class="fas fa-table"></i>รายงานประจำวัน</a>
                                </li>
                                <li>
                                    <a href="all_report.php">
                                        <i class="far fa-check-square"></i>รายงานสรุปย้อนหลัง</a>
                                </li>
                                
                            </ul>
                        </li>

                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!--<div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Dashboard</li>
                                        </ul>
                                    </div>
                                    <button class="au-btn au-btn-icon au-btn--green">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
            <!-- เลือกวันที่-->
            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12">
                            
                                                       
                                <div class="card">
                                    <div class="card-header">
                                        <strong>รายงานประจำวัน</strong>
                                    </div>
                                    <form action="daily_report.php" method="post"   enctype="multipart/form-data"  name="form1" id="form1">
                                                    <div class="input-group">
                                                        <input type="text" name="dates" id="dates" placeholder="คลิกเลือกวันที่" class="form-control" value="<?php echo $dates; ?>" onChange="myFunction()">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-primary">Submit</button>
                                                            
                                                        </div>
                                                    </div>
                                                    </form>
                                                    
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- จบ-เลือกวันที่-->
            <!-- กราฟ-->
            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- RECENT REPORT 2-->
                                <div class="recent-report2">
                                    <h3 class="title-3">รายงานปริมาณน้ำ/ก๊าซ</h3>
                                    <div class="chart-info">
                                        <div class="chart-info__left">
                                            <div class="chart-note">
                                                <span class="dot dot--blue"></span>
                                                <span>ปริมาณน้ำ</span>
                                            </div>
                                            <div class="chart-note">
                                                <span class="dot dot--green"></span>
                                                <span>ก๊าซ</span>
                                            </div>
                                        </div>
                                        <div class="chart-info-right">
                                            
                                        </div>
                                    </div>
                                    <div class="recent-report__chart">
                                        <canvas id="recent-rep2-chart"></canvas>
                                    </div>
                                </div>
                                <!-- END RECENT REPORT 2             -->
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- END -->

            

            

            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>ระบบควบคุมการทำงานชุดทดลองและติดตามผลระยะใกล</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
    <script>

    function myFunction() {
     var x = document.form1.dates.value;
     console.log(x);
   }
    </script>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    
    <script src="jquery.js"></script>
    <script src="jquery.datetimepicker.js"></script>
    <script>
    window.onerror = function(errorMsg) {
        $('#console').html($('#console').html()+'<br>'+errorMsg)
    }
    
    $('#doc_leave_date').datetimepicker({
        
        lang:'th',
        timepicker:false,
        format:'Y-m-d',
        formatDate:'Y-m-d',
    
    });
    
    $('#dates').datetimepicker({
        
        lang:'th',
        timepicker:false,
        format:'Y-m-d',
        formatDate:'Y-m-d',
    
    });
    
    $('#datetimepicker').datetimepicker({
    dayOfWeekStart : 1,
    lang:'en',
    disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
    startDate:	'1986/01/05'
    });
    $('#datetimepicker').datetimepicker({value:'2015/04/15 05:03',step:10});
    
    $('.some_class').datetimepicker();
    
    $('#default_datetimepicker').datetimepicker({
        formatTime:'H:i',
        formatDate:'d.m.Y',
        //defaultDate:'8.12.1986', // it's my birthday
        defaultDate:'+03.01.1970', // it's my birthday
        defaultTime:'10:00',
        timepickerScrollbar:false
    });
    
    $('#datetimepicker10').datetimepicker({
        step:5,
        inline:true
    });
    $('#datetimepicker_mask').datetimepicker({
        mask:'9999/19/39 29:59'
    });
    
    $('#datetimepicker1').datetimepicker({
        datepicker:false,
        format:'H:i',
        step:5
    });
    $('#datetimepicker2').datetimepicker({
        yearOffset:222,
        lang:'ch',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d',
        minDate:'-1970/01/02', // yesterday is minimum date
        maxDate:'+1970/01/02' // and tommorow is maximum date calendar
    });
    $('#datetimepicker3').datetimepicker({
        inline:true
    });
    $('#datetimepicker4').datetimepicker();
    $('#open').click(function(){
        $('#datetimepicker4').datetimepicker('show');
    });
    $('#close').click(function(){
        $('#datetimepicker4').datetimepicker('hide');
    });
    $('#reset').click(function(){
        $('#datetimepicker4').datetimepicker('reset');
    });
    $('#datetimepicker5').datetimepicker({
        datepicker:false,
        allowTimes:['12:00','13:00','15:00','17:00','17:05','17:20','19:00','20:00'],
        step:5
    });
    $('#datetimepicker6').datetimepicker();
    $('#destroy').click(function(){
        if( $('#datetimepicker6').data('xdsoft_datetimepicker') ){
            $('#datetimepicker6').datetimepicker('destroy');
            this.value = 'create';
        }else{
            $('#datetimepicker6').datetimepicker();
            this.value = 'destroy';
        }
    });
    var logic = function( currentDateTime ){
        if (currentDateTime && currentDateTime.getDay() == 6){
            this.setOptions({
                minTime:'11:00'
            });
        }else
            this.setOptions({
                minTime:'8:00'
            });
    };
    $('#datetimepicker7').datetimepicker({
        onChangeDateTime:logic,
        onShow:logic
    });
    $('#datetimepicker8').datetimepicker({
        onGenerate:function( ct ){
            $(this).find('.xdsoft_date')
                .toggleClass('xdsoft_disabled');
        },
        minDate:'-1970/01/2',
        maxDate:'+1970/01/2',
        timepicker:false
    });
    $('#datetimepicker9').datetimepicker({
        onGenerate:function( ct ){
            $(this).find('.xdsoft_date.xdsoft_weekend')
                .addClass('xdsoft_disabled');
        },
        weekends:['01.01.2014','02.01.2014','03.01.2014','04.01.2014','05.01.2014','06.01.2014'],
        timepicker:false
    });
    var dateToDisable = new Date();
        dateToDisable.setDate(dateToDisable.getDate() + 2);
    $('#datetimepicker11').datetimepicker({
        beforeShowDay: function(date) {
            if (date.getMonth() == dateToDisable.getMonth() && date.getDate() == dateToDisable.getDate()) {
                return [false, ""]
            }
    
            return [true, ""];
        }
    });
    $('#datetimepicker12').datetimepicker({
        beforeShowDay: function(date) {
            if (date.getMonth() == dateToDisable.getMonth() && date.getDate() == dateToDisable.getDate()) {
                return [true, "custom-date-style"];
            }
    
            return [true, ""];
        }
    });
    $('#datetimepicker_dark').datetimepicker({theme:'dark'})
    
    
    </script>

</body>

</html>
<!-- end document-->
