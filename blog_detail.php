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
        <?php
        include("inc/inc_navbar.php");
        include("inc/inc_page_title.php");
        ?>

        <div class="container">
            <div class="row">
                <?php   
                include("inc/inc_sidebar.php");
                include("inc/inc_blog_details.php");
                ?>
            </div>
        </div>

        <?php include("inc/inc_footer.php"); ?>
    </div>
    <!-- end layout wrapper -->


    <?php include 'layouts/vendor-scripts.php'; ?>

</body>

</html>