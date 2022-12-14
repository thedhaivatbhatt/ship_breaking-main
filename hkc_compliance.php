<?php
require_once("inc/header.php")
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
            <h1 class="display-3 text-white mb-3 animated slideInDown">HKC COMPLIANCE</h1>
            <!-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">404</li>
                </ol>
            </nav> -->
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container feature py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">hkc management </h6>
                    <h1 class="mb-5">Oily water </h1>

                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="ms-4">
                            <p class="mb-0" align="justify"> This page refers exclusively to oily water separators aboard marine vessels. They are found on board ships where they are used to separate oil from oily waste water such as bilge water before the waste water is discharged into the environment</p>
                            <br>
                            <p class="mb-0" align="justify">The separation of both emulsified and immiscible oil/water mixtures using materials with special wetting behavior (hydrophobic-oleophilic or hydrophilic-oleophobic and switchable wettability) has attracted significant research attention in recent years. Among various materials with special wetting behavior, waste material-mediated surfaces have gained more interest because of their various advantages such as fluorine-free and specific surface structural properties, vast availability, flexibility in chemical/structural modification to improve the desired surface properties and eco-friendly nature. This review article describes the oil/water separation application by the waste materials-based special wettable surfaces from different resources. The special wettable surfaces preparation method, treatment effect, efficiency and oil/water separation mechanism are discussed. Moreover, unresolved issues and potential challenges associated with all waste-derived special wettable materials have been highlighted for future development.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="images/ship1.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
    <!-- 404 Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="images/concrete.jpeg" style="object-fit: cover; height:573px; width:650px " alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">hkc management </h6>
                    <h1 class="mb-5">Concrete </h1>
                    <p class="mb-5" align="justify">The successful placement of concrete is dependent upon careful mixing, the proper equipment, and adequate transportation. This site will define, analyze, and demonstrate the importance of each in the overall process of placing concrete.
                    </p>
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