<?php
use yii\helpers\Url;
$basePath = \Yii::$app->request->baseUrl . '/providers/interface/assets/site/'; 

?>
<footer
      class="footer-wrapper bg-title footer-layout2 footer-layout5 "
      data-bg-src="<?= $basePath ?>assets/img/bg/footer_bg-2.png"
    >
     
      <div class="widget-area">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-md-6 col-xl-3 ms-xl-5">
              <div class="widget footer-widget">
                <div class="th-widget-about">
                  <div class="about-logo">
                    <a href="home-travel.html"
                      ><img src="<?= $basePath ?>assets/img/bg/logo.svg" style="width:60px; height:60px;" alt="Koas"
                    /></a>
                  </div>
                  <p class="about-text">
                    Rapidiously myocardinate cross-platform intellectual capital
                    model. Appropriately create interactive infrastructures
                  </p>
                  <div class="th-social">
                    <!-- <a href="https://www.facebook.com/"
                      ><i class="fab fa-facebook-f"></i
                    ></a> -->
                    <a href="https://youtube.com/@kifaruoutdooradventuressociety?si=CKaUfjLl-1jIggbP"
                      ><i class="fab fa-youtube"></i
                    ></a>
                    <a href="https://www.linkedin.com/in/kifaru-outdooradventures-19a62b362?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                      ><i class="fab fa-linkedin-in"></i
                    ></a>
                    <!-- <a href="https://www.whatsapp.com/"
                      ><i class="fab fa-twitter"></i
                    ></a> -->
                    <a href="https://www.instagram.com/kifaru_koas?igsh=MWF0ZDh1bnZqb2tzbQ=="
                      ><i class="fab fa-instagram"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-auto">
              <div class="widget widget_nav_menu footer-widget">
                <h3 class="widget_title">Quick Links</h3>
                <div class="menu-all-pages-container">
                  <ul class="menu">
                    <li> <a href="<?= Url::to(['site/index'])?>">Home</a></li>
                    <li> <a href="<?= Url::to(['site/about'])?>">About us</a></li>
                    <li> <a href="<?= Url::to(['site/services'])?>">Our Service</a></li>
                    <li> <a href="<?= Url::to(['site/contact'])?>">Contact us</a></li>
                    <li> <a href="<?= Url::to(['site/support'])?>">Support Us</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-auto">
              <div class="widget footer-widget">
                <h3 class="widget_title">Get In Touch</h3>
                <div class="th-widget-contact">
                  <div class="info-box_text">
                    <div class="icon">
                      <img src="<?= $basePath ?>assets/img/icon/phone.svg" alt="img" />
                    </div>
                    <div class="details">
                      <p>
                        <a href="tel:+01234567890" class="info-box_link"
                          >+01 234 567 890</a
                        >
                      </p>
                      <p>
                        <a href="tel:+09876543210" class="info-box_link"
                          >+09 876 543 210</a
                        >
                      </p>
                    </div>
                  </div>
                  <div class="info-box_text">
                    <div class="icon">
                      <img src="<?= $basePath ?>assets/img/icon/envelope.svg" alt="img" />
                    </div>
                    <div class="details">
                      <p>
                        <a
                          href="mailto:mailinfo00@tourm.com"
                          class="info-box_link"
                          >mailinfo00@tourm.com</a
                        >
                      </p>
                      <p>
                        <a
                          href="mailto:support24@tourm.com"
                          class="info-box_link"
                          >support24@tourm.com</a
                        >
                      </p>
                    </div>
                  </div>
                  <div class="info-box_text">
                    <div class="icon">
                      <img src="<?= $basePath ?>assets/img/icon/location-dot.svg" alt="img" />
                    </div>
                    <div class="details">
                      <p>789 Inner Lane, Holy park, California, USA</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         
          </div>
        </div>
      </div>
      <div class="copyright-wrap">
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="col-md-6">
              <p class="copyright-text">
                Copyright 2025 <a href="">koas</a>. All Rights
                Reserved.
              </p>
            </div>
          
          </div>
        </div>
      </div>
      <!-- <div
        class="shape-mockup spin d-none d-xxl-block"
        data-top="10%"
        data-left="4%"
      >
        <img src="<?= $basePath ?>assets/img/shape/shape_2_11.png" alt="shape" />
      </div>
      <div
        class="shape-mockup movingX d-none d-xxl-block"
        data-top="20%"
        data-right="5%"
      >
        <img src="<?= $basePath ?>assets/img/shape/shape_2_2.png" alt="shape" />
      </div> -->
    </footer>