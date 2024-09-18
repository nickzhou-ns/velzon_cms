<?php include 'layouts/session.php'; ?>
<?php include 'layouts/main.php'; ?>

<head>
    <?php includeFileWithVariables('layouts/title-meta.php', array('title' => 'Job Landing')); ?>
    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
    <?php include 'layouts/head-css.php'; ?>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">
<?php include 'inc/svg.php';?>
    <!-- Begin page -->
    <div class="layout-wrapper landing">
        <?php 
            include("inc/inc_navbar.php"); 
            include("inc/inc_start_hero_section.php");
            include("inc/inc_start_find_jobs.php");
            include("inc/inc_blog.php");
            include("inc/inc_footer.php");
        ?>
    </div>
    <!-- end layout wrapper -->
    <?php include 'layouts/vendor-scripts.php'; ?>

</body>

</html>