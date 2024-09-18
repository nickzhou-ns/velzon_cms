<?php include 'layouts/session.php'; ?>
<?php include 'layouts/main.php'; ?>

<head>
    <?php includeFileWithVariables('layouts/title-meta.php', array('title' => 'Job Landing')); ?>
    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
    <?php include 'layouts/head-css.php'; ?>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">

    <!-- Begin page -->
    <div class="layout-wrapper landing">
        <?php include("inc/inc_navbar.php"); ?>
        <div>
            <div>banner</div>>
            <div class="row">
                // apps-job-details.php (左右互换)
                <div class="col-4">
                    sidebar
                </div>
                <div class="col-8">content</div>
            </div>
        </div>
        <?php include("inc/inc_footer.php"); ?>
    </div>
    <!-- end layout wrapper -->


    <?php include 'layouts/vendor-scripts.php'; ?>

    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!--job landing init -->
    <script src="assets/js/pages/job-lading.init.js"></script>
</body>

</html>