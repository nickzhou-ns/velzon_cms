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
            <!-- start hero section -->
            <section class="section job-hero-section bg-light pb-0" id="hero">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6">
                            <div>
                                <h1 class="display-6 fw-semibold text-capitalize mb-3 lh-base">Find your next job and build your dream here</h1>
                                <p class="lead text-muted lh-base mb-4">Find jobs, create trackable resumes and enrich your applications. Carefully crafted after analyzing the needs of different industries.</p>
                                <form action="#" class="job-panel-filter">
                                    <div class="row g-md-0 g-2">
                                        <div class="col-md-4">
                                            <div>
                                                <input type="search" id="job-title" class="form-control filter-input-box" placeholder="Job, Company name...">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-4">
                                            <div>
                                                <select class="form-control" data-choices>
                                                    <option value="">Select job type</option>
                                                    <option value="Full Time">Full Time</option>
                                                    <option value="Part Time">Part Time</option>
                                                    <option value="Freelance">Freelance</option>
                                                    <option value="Internship">Internship</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-4">
                                            <div class="h-100">
                                                <button class="btn btn-primary submit-btn w-100 h-100" type="submit"><i class="ri-search-2-line align-bottom me-1"></i> Find Job</button>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>

                                <ul class="treding-keywords list-inline mb-0 mt-3 fs-13">
                                    <li class="list-inline-item text-danger fw-semibold"><i class="mdi mdi-tag-multiple-outline align-middle"></i> Trending Keywords:</li>
                                    <li class="list-inline-item"><a href="javascript:void(0)">Design,</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)">Development,</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)">Manager,</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)">Senior</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-4">
                            <div class="position-relative home-img text-center mt-5 mt-lg-0">
                                <div class="card p-3 rounded shadow-lg inquiry-box">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm flex-shrink-0 me-3">
                                            <div class="avatar-title bg-warning-subtle text-warning rounded fs-18">
                                                <i class="ri-mail-send-line"></i>
                                            </div>
                                        </div>
                                        <h5 class="fs-15 lh-base mb-0">Work Inquiry from velzon</h5>
                                    </div>
                                </div>

                                <div class="card p-3 rounded shadow-lg application-box">
                                    <h5 class="fs-15 lh-base mb-3">Applications</h5>
                                    <div class="avatar-group">
                                        <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Brent Gonzalez">
                                            <div class="avatar-xs">
                                                <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle img-fluid">
                                            </div>
                                        </a>
                                        <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Ellen Smith">
                                            <div class="avatar-xs">
                                                <div class="avatar-title rounded-circle bg-danger">
                                                    S
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Ellen Smith">
                                            <div class="avatar-xs">
                                                <img src="assets/images/users/avatar-10.jpg" alt="" class="rounded-circle img-fluid">
                                            </div>
                                        </a>
                                        <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top">
                                            <div class="avatar-xs">
                                                <div class="avatar-title rounded-circle bg-success">
                                                    Z
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Brent Gonzalez">
                                            <div class="avatar-xs">
                                                <img src="assets/images/users/avatar-9.jpg" alt="" class="rounded-circle img-fluid">
                                            </div>
                                        </a>
                                        <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="More Appliances">
                                            <div class="avatar-xs">
                                                <div class="avatar-title fs-13 rounded-circle bg-light border-dashed border text-primary">
                                                    2k+
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <img src="assets/images/job-profile2.png" alt="" class="user-img">

                                <div class="circle-effect">
                                    <div class="circle"></div>
                                    <div class="circle2"></div>
                                    <div class="circle3"></div>
                                    <div class="circle4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end hero section -->
            <!-- start find jobs -->
            <section class="section" id="findJob">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="text-center mb-5">
                                <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">Find Your <span class="text-primary">Career</span> You Deserve it</h1>
                                <p class="text-muted">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card shadow-lg">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Recent Transaction</h5>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex mb-3">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/svg/crypto-icons/btc.svg" alt="" class="avatar-xxs material-shadow">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Bitcoin (BTC)</h6>
                                            <p class="text-muted mb-0">Today</p>
                                        </div>
                                        <div>
                                            <h6 class="text-danger mb-0">- $422.89</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/svg/crypto-icons/ltc.svg" alt="" class="avatar-xxs material-shadow">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Litecoin (LTC)</h6>
                                            <p class="text-muted mb-0">Yesterday</p>
                                        </div>
                                        <div>
                                            <h6 class="text-success mb-0">+ $784.20</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/svg/crypto-icons/xmr.svg" alt="" class="avatar-xxs material-shadow">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Monero (XMR)</h6>
                                            <p class="text-muted mb-0">01 Jan, 2022</p>
                                        </div>
                                        <div>
                                            <h6 class="text-danger mb-0">- $356.74</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/svg/crypto-icons/fil.svg" alt="" class="avatar-xxs material-shadow">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Filecoin (FIL)</h6>
                                            <p class="text-muted mb-0">30 Dec, 2021</p>
                                        </div>
                                        <div>
                                            <h6 class="text-success mb-0">+ $1,247.00</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/svg/crypto-icons/dot.svg" alt="" class="avatar-xxs material-shadow">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Polkadot (DOT)</h6>
                                            <p class="text-muted mb-0">27 Dec, 2021</p>
                                        </div>
                                        <div>
                                            <h6 class="text-success mb-0">+ $7,365.80</h6>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="apps-crypto-transactions.php" class="btn btn-soft-info w-100">View All Transactions <i class="ri-arrow-right-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card shadow-lg">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Recent Transaction</h5>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex mb-3">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/svg/crypto-icons/btc.svg" alt="" class="avatar-xxs material-shadow">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Bitcoin (BTC)</h6>
                                            <p class="text-muted mb-0">Today</p>
                                        </div>
                                        <div>
                                            <h6 class="text-danger mb-0">- $422.89</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/svg/crypto-icons/ltc.svg" alt="" class="avatar-xxs material-shadow">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Litecoin (LTC)</h6>
                                            <p class="text-muted mb-0">Yesterday</p>
                                        </div>
                                        <div>
                                            <h6 class="text-success mb-0">+ $784.20</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Frank" data-bs-original-title="Frank">
                                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                                <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Anna" data-bs-original-title="Anna">
                                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Monero (XMR)</h6>
                                            <p class="text-muted mb-0">01 Jan, 2022</p>
                                        </div>
                                        <div>
                                            <h6 class="text-danger mb-0">- $356.74</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/svg/crypto-icons/fil.svg" alt="" class="avatar-xxs material-shadow">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Filecoin (FIL)</h6>
                                            <p class="text-muted mb-0">30 Dec, 2021</p>
                                        </div>
                                        <div>
                                            <h6 class="text-success mb-0">+ $1,247.00</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/svg/crypto-icons/dot.svg" alt="" class="avatar-xxs material-shadow">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Polkadot (DOT)</h6>
                                            <p class="text-muted mb-0">27 Dec, 2021</p>
                                        </div>
                                        <div>
                                            <h6 class="text-success mb-0">+ $7,365.80</h6>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="apps-crypto-transactions.php" class="btn btn-soft-info w-100">View All Transactions <i class="ri-arrow-right-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="text-center mt-4">
                                <a href="#!" class="btn btn-ghost-primary">View More Jobs <i class="ri-arrow-right-line align-bottom"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end find jobs -->
            <!-- start blog -->
            <section class="section" id="blog">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">Our Latest <span class="text-primary">News</span></h1>
                                <p class="text-muted mb-4">We thrive when coming up with innovative ideas but also understand that a smart concept should be supported with faucibus sapien odio measurable results.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <img src="assets/images/small/img-8.jpg" alt="" class="img-fluid rounded" />
                                </div>
                                <div class="card-body">
                                    <ul class="list-inline fs-14 text-muted">
                                        <li class="list-inline-item">
                                            <i class="ri-calendar-line align-bottom me-1"></i> 30 Oct, 2021
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="ri-message-2-line align-bottom me-1"></i> 364 Comment
                                        </li>
                                    </ul>
                                    <a href="javascript:void(0);">
                                        <h5>Design your apps in your own way ?</h5>
                                    </a>
                                    <p class="text-muted fs-14">One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others.</p>

                                    <div>
                                        <a href="#!" class="link-success">Learn More <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <img src="assets/images/small/img-6.jpg" alt="" class="img-fluid rounded" />
                                </div>
                                <div class="card-body">
                                    <ul class="list-inline fs-14 text-muted">
                                        <li class="list-inline-item">
                                            <i class="ri-calendar-line align-bottom me-1"></i> 02 Oct, 2021
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="ri-message-2-line align-bottom me-1"></i> 245 Comment
                                        </li>
                                    </ul>
                                    <a href="javascript:void(0);">
                                        <h5>Smartest Applications for Business ?</h5>
                                    </a>
                                    <p class="text-muted fs-14">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception.</p>

                                    <div>
                                        <a href="#!" class="link-success">Learn More <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <img src="assets/images/small/img-9.jpg" alt="" class="img-fluid rounded" />
                                </div>
                                <div class="card-body">
                                    <ul class="list-inline fs-14 text-muted">
                                        <li class="list-inline-item">
                                            <i class="ri-calendar-line align-bottom me-1"></i> 23 Sept, 2021
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="ri-message-2-line align-bottom me-1"></i> 354 Comment
                                        </li>
                                    </ul>
                                    <a href="javascript:void(0);">
                                        <h5>How apps is changing the IT world</h5>
                                    </a>
                                    <p class="text-muted fs-14">Intrinsically incubate intuitive opportunities and real-time potentialities Appropriately communicate one-to-one technology.</p>

                                    <div>
                                        <a href="#!" class="link-success">Learn More <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end container -->
            </section>
            <!-- end blog -->
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