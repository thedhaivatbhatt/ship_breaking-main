<?php
require_once("inc/header.php");
?>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <!-- Navbar Start -->
    <?php
    require_once("inc/menu.php")
    ?>
    <!-- Navbar End -->
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">EU SHIP RECYCLING REGULATION <br>(EU SRR)</h1>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container feature py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">EU SRR</h6>
                    <h1 class="mb-5">EU SHIP RECYCLING REGULATION</h1>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">

                        <!-- <i class="fa fa-sailboat text-primary fa-3x flex-shrink-0"></i> -->
                        <div class="ms-4">

                            <p class="mb-0" align="justify">Overview. The EU Ship Recycling Regulation (EU SRR) aims to reduce the negative impacts linked to the recycling of ships by ensuring that proper vessel dismantling methods are used to achieve safe disposal or recycling of all ship components, including hazardous materials.</p> <br>
                             <p class="mb-0" align="justify">   Our certified IHM inspectors are ready to have your ship class approved for IHM. Receive an IHM certificate for your new or existing vessel through Metizoft. 10+ years in business. 24/7 Service. Global Presence. Services: IHM Certificate, IHM Software, HazMat Survey.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeInRight " data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-85" src="images/gallary_6.png" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    require_once("inc/footer.php");
    ?>
    <?php
    require_once("inc/script.php");
    ?>
</body>

</html>