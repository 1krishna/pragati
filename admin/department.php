<!doctype html>
<html class="fixed">

<head>
    <?php
    include_once 'includes/head.php';
    ?>
    <?php
    if ($_SESSION['fac_role'] == 3)
        header('Location: dashboard.php?lo');
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
        <!-- end: header -->
        <?php
        if ($_SESSION['fac_role'] != 1) {
            header('Location: dashboard.php?lo');
        }
        $dept_q = "SELECT * from `department` where dept_id=" . $fac['dept_id'];
        $dept_q = mysqli_query($conn, $dept_q);
        $dept_q = mysqli_fetch_assoc($dept_q);
        ?>
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
                    <h2>Departments</h2>
                </header>
                <!-- start: page -->
                <div class="row">
                    <div class="col">
                        <section class="card">
                            <header class="card-header">
                                <h2 class="card-title">Update Department</h2>
                            </header>
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="control-label text-lg-right pt-2" for="inputDefault">Department Title :</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" id='dept_name' value="<?php echo $dept_q['dept_name']; ?>">
                                        <div id="title_err" style="color:red"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label class="control-label text-lg-right pt-2">About Department</label>
                                        <div class="summernote" id="dept_about" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'><?php echo $dept_q['dept_about'];
                                                                                                                                                                                        ?></div>
                                        <div id="about_err" style="color:red"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label class="control-label text-lg-right pt-2">Programs Of Study</label>
                                        <div class="summernote" id="dept_study" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'><?php echo $dept_q['dept_study'];
                                                                                                                                                                                        ?></div>
                                        <div id="study_err" style="color:red"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label class="control-label text-lg-right pt-2">Entrance Examinations</label>
                                        <div class="summernote" id="dept_exams" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'><?php echo $dept_q['dept_exams'];
                                                                                                                                                                                        ?></div>
                                        <div id="exams_err" style="color:red"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label class="control-label text-lg-right pt-2">Infrastructure</label>
                                        <div class="summernote" id="dept_infra" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'><?php echo $dept_q['dept_infra'];
                                                                                                                                                                                        ?></div>

                                        <div id="infra_err" style="color:red"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label class="control-label text-lg-right pt-2">Contact</label>
                                        <div class="summernote" id="dept_contact" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'><?php echo $dept_q['dept_contact'];
                                                                                                                                                                                        ?></div>
                                        <div id="contact_err" style="color:red"></div>
                                    </div>
                                </div>

                                <hr>
                                <div class="form-group row">
                                    <div class="col-lg-8"></div>
                                    <div class="col-lg-4">
                                        <button class='btn btn-primary' id='update' style='width:100%;' onclick='add();'>Update Department</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <input type="hidden" value="<?php echo $fac['dept_id']; ?>" id='dept_id'>
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
    <script src="vendor/jqvmap/jquery.vmap.js"></script>
    <script src="vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
    <script src="vendor/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
    <script src="vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
    <script src="vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
    <script src="vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
    <script src="vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
    <script src="vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
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
            var dept_name = $('#dept_name').val();
            var dept_about = $('#dept_about').summernote('code');
            var dept_study = $('#dept_study').summernote('code');
            var dept_exams = $('#dept_exams').summernote('code');
            var dept_infra = $('#dept_infra').summernote('code');
            var dept_contact = $('#dept_contact').summernote('code');
            var dept_id = $('#dept_id').val();

            var ret = true;
            document.getElementById("title_err").innerHTML = "";
            document.getElementById("about_err").innerHTML = "";
            document.getElementById("contact_err").innerHTML = "";

            if (dept_name == "") {
                document.getElementById("title_err").innerHTML = "Department Name Cannot Be Empty!";
                ret = false;
            }

            if (dept_about == "") {
                document.getElementById("about_err").innerHTML = "About Department Cannot Be Empty!";
                ret = false;
            }
            if (dept_contact == "") {
                document.getElementById("contact_err").innerHTML = "Contact Cannot Be Empty!";
                ret = false;
            }

            if (ret == false) {
                return false;
            }


            dept_name = (dept_name);
            dept_about = encodeURIComponent(dept_about);
            dept_study = encodeURIComponent(dept_study);
            dept_exams = encodeURIComponent(dept_exams);
            dept_infra = encodeURIComponent(dept_infra);
            dept_contact = encodeURIComponent(dept_contact);
            data = {
                dept_name: dept_name,
                dept_about: dept_about,
                dept_study: dept_study,
                dept_exams: dept_exams,
                dept_infra: dept_infra,
                dept_contact: dept_contact,
                dept_id: dept_id,
                dept_upd: '',
            };
            getrequest("queries/dept.php", data, "department.php");


            // $.ajax({
            //     type: 'POST',
            //     dataType: 'text',
            //     url: 'queries/dept.php',
            //     data: {
            //         dept_name: dept_name,
            //         dept_about: dept_about,
            //         dept_study: dept_study,
            //         dept_exams: dept_exams,
            //         dept_infra: dept_infra,
            //         dept_contact: dept_contact,
            //         dept_id: dept_id,
            //         dept_upd: '',
            //     },
            //     success: function(data) {
            //         console.log(data);
            //         alert(data);
            //     },
            //     failure: function() {
            //         alert("Department Details Updation failed");
            //     },
            // });
        }
    </script>

</body>

</html>