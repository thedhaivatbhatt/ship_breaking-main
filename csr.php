<?php
require_once("inc/header.php")
?>
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
            <h1 class="display-3 text-white mb-3 animated slideInDown">CORPORATE SOCIAL RESPONSIBILITY</h1>
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
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-95" src="images/crx.png"
                            style="object-fit: cover; height:550px; width:650px " alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">CSR management </h6>
                    <h1 class="mb-5">CSR management</h1>
                    <p class="mb-5" align="justify">Corporate Social Responsibility (CSR) is the idea that a company should play a positive role in the community and consider the environmental and social impact of business decisions.
                    </p>
                    <p class="mb-5" align="justify">CSR has multiples approaches and understanding and its implementation usually follows an international recognized framework. Therefore, THINK&SELL generally uses as reference the international standard ISO 26000-Social Responsibility Management, although the use of other references is justified after an analysis of alternatives in specific cases.</p>
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