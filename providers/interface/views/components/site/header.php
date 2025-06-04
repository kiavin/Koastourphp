<?php
use yii\helpers\Url;

?>
<header class="th-header header-layout1">
    <div class="sticky-wrapper">
        <div class="menu-area">
            <div class="container th-container">
                <div class="row align-items-center justify-content-between text-white" style="background-color: #113D48;">
                    <div class="col-auto">
                        <div class="header-logo" >
                            <a href="<?= Url::to(['site/index'])?>"><img
                                    src="<?= $basePath ?>assets/img/bg/logov3.png"
                                    alt="KOAS"
                                    class="m-0"
                                    style="height:100px"
                                    /></a>
                        </div>
                    </div>
                    <div class="col-auto me-xl-auto mx-lg-auto">
                        <nav class="main-menu d-none d-xl-inline-block ">
                            <ul>
                                <li>
                                    <a class="text-white" href="<?= Url::to(['site/index'])?>">Home</a>
                                </li>
                                <li>
                                    <a class="text-white" href="<?= Url::to(['site/about'])?>">About Us</a>
                                </li>
                                <li>
                                    <a class="text-white" href="<?= Url::to(['site/services'])?>">What We Do</a>
                                </li>
                                <li>
                                    <a class="text-white" href="<?= Url::to(['site/impact'])?>">Our Impact</a>
                                </li>
                                <li>
                                    <a class="text-white" href="<?= Url::to(['site/contact'])?>">Contact us</a>
                                </li>
                                <li>
                                    <a class="text-white" href="<?= Url::to(['site/support'])?>">Support Us</a>
                                </li>
                            </ul>
                        </nav>
                        <button type="button" class="th-menu-toggle d-block d-xl-none" data-bs-toggle="collapse"
                                data-bs-target="#mobileMenu" aria-controls="mobileMenu"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <i class="far fa-bars"></i>
                        </button>
                    </div>

                    <div class="collapse d-xl-none" id="mobileMenu">
    <nav class="mobile-menu text-center py-3">
        <ul class="list-unstyled text-white ">
            <li><a href="<?= Url::to(['site/index'])?>">Home</a></li>
            <li><a href="<?= Url::to(['site/about'])?>">About Us</a></li>
            <li><a href="<?= Url::to(['site/services'])?>">What We Do</a></li>
            <li><a href="<?= Url::to(['site/impact'])?>">Our Impact</a></li>
            <li><a href="<?= Url::to(['site/contact'])?>">Contact us</a></li>
            <li><a href="<?= Url::to(['site/support'])?>">Support Us</a></li>
        </ul>
    </nav>
</div>

                </div>
            </div>
            <!-- <div class="logo-bg" data-mask-src="<?= $basePath ?>assets/img/logo_bg_mask.png"></div> -->
        </div>
    </div>
</header>