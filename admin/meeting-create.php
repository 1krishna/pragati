<!doctype html>
<html class="fixed">

<head>
    <?php
    include_once 'includes/head.php';
    ?>
    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="vendor/animate/animate.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="vendor/font-awesome/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.theme.css" />
    <link rel="stylesheet" href="vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="vendor/morris/morris.css" />
    <link rel="stylesheet" href="vendor/summernote/summernote.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.js"></script>

</head>

<body>
    <section class="body">

        <!-- start: header -->
        <?php include_once 'includes/header.php'; ?>
        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <?php include 'includes/nav-bar.php'; ?>


            </aside>
            <!-- end: sidebar -->

            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>Meetings</h2>
                </header>
                <!-- start: page -->
                <div class="row">
                    <div class="col">
                        <section class="card">
                            <header class="card-header">
                                <h2 class="card-title">Create Meeting</h2>
                            </header>
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label class="control-label text-lg-right pt-2" for="inputDefault">Meeting name :</label>
                                        <input type="text" class="form-control" id='name' value="" name="name">
                                        <div id="title_err" style="color:red"></div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="control-label text-lg-right pt-2" for="inputDefault">For Class</label>
                                        <select data-plugin-selecttwo="" class="form-control populate select2-hidden-accessible" id='class' name="checkbox" value="">
                                            <option value="1">I Class</option>
                                            <option value="2">II Class</option>
                                            <option value="3">III Class</option>
                                            <option value="4">IV Class</option>
                                            <option value="5">V Class</option>
                                            <option value="6">VI Class</option>
                                            <option value="7">VII Class</option>
                                            <option value="8">VIII Class</option>
                                            <option value="9">IX Class</option>
                                            <option value="10">X Class</option>
                                            <option value="11">XI Class</option>
                                            <option value="12">XII Class</option>
                                        </select>
                                        <div id="title_err" style="color:red"></div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="control-label text-lg-right pt-2" for="inputDefault">Subject</label>
                                        <select class="form-control" id='subject' value="" name="subject">
                                            <option value="Telugu">Telugu</option>
                                            <option value="Hindi">Hindi</option>
                                            <option value="English">English</option>
                                            <option value="Sanskrit">Sanskrit</option>
                                            <option value="Maths">Maths</option>
                                            <option value="Physics">Physics</option>
                                            <option value="Chemistry">Chemistry</option>
                                            <option value="Biology">Biology</option>
                                            <option value="Zoology">Zoology</option>
                                            <option value="Social">Social</option>
                                        </select>
                                        <div id="title_err" style="color:red"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label class="control-label text-lg-right pt-2" for="inputDefault">Record Class</label>
                                        <input style="text-align:center" class="switch switch-sm switch-primary" id="record" type="checkbox" name="switch" data-plugin-ios-switch />
                                        <div id="title_err" style="color:red"></div>
                                    </div>
                                    <div class="col-lg-8">
                                        <label class="control-label text-lg-right pt-2" for="inputDefault">Welcome Message</label>
                                        <input type="text" class="form-control" id='welcome' value="" name="welcome">
                                        <div id="title_err" style="color:red"></div>
                                    </div>
                                </div>

                                <hr>
                                <div class="form-group row">
                                    <div class="col-lg-8"></div>
                                    <div class="col-lg-4">
                                        <button class='btn btn-primary' id='update' style='width:100%;' onclick='add();'>Create Meeting</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- end: page -->
            </section>
        </div>
    </section>

    <!-- Vendor -->
    <script src="vendor/jquery/jquery.js"></script>
    <script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="vendor/popper/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.js"></script>
    <script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="vendor/common/common.js"></script>
    <script src="vendor/nanoscroller/nanoscroller.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="vendor/jquery-placeholder/jquery-placeholder.js"></script>

    <!-- Specific Page Vendor -->
    <script src="vendor/jquery-ui/jquery-ui.js"></script>
    <script src="vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>
    <script src="vendor/jquery-appear/jquery-appear.js"></script>
    <script src="vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    <script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="vendor/flot/jquery.flot.js"></script>
    <script src="vendor/flot.tooltip/flot.tooltip.js"></script>
    <script src="vendor/flot/jquery.flot.pie.js"></script>
    <script src="vendor/flot/jquery.flot.categories.js"></script>
    <script src="vendor/flot/jquery.flot.resize.js"></script>
    <script src="vendor/jquery-sparkline/jquery-sparkline.js"></script>
    <script src="vendor/raphael/raphael.js"></script>
    <script src="vendor/morris/morris.js"></script>
    <script src="vendor/gauge/gauge.js"></script>
    <script src="vendor/snap.svg/snap.svg.js"></script>
    <script src="vendor/liquid-meter/liquid.meter.js"></script>
    <script src="vendor/ios7-switch/ios7-switch.js"></script>

    <script src="vendor/summernote/summernote.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>

    <!-- Examples -->
    <script src="js/examples/examples.dashboard.js"></script>
    <script>
        function add() {
            // alert(window.location.href);
            var clas = $('#class').val();
            var subject = $('#subject').val();
            var welcome = $('#welcome').val();
            var name = $('#name').val();
            var record;
            if ($('#record').is(":checked")) {
                record = true;
            } else {
                record = false;
            }

            $.ajax({
                type: 'POST',
                dataType: 'text',
                url: 'queries/meetings.php',
                data: {
                    name: name,
                    class: clas,
                    subject: subject,
                    record: record,
                    welcome: welcome,
                    meeting_add: '',
                },
                success: function(data) {
                    console.log(data);
                    alert("Meeting Created.");
                    window.location = "meeting-view.php";
                },
                failure: function() {
                    alert("failed to Create Meeting");
                },
            });
        }
    </script>
    
</body>

</html>