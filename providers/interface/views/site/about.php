<?php
use app\providers\components\widgets\site\BreadcrumbWidget;
use yii\helpers\Url;
use yii\helpers\Html;
$basePath = \Yii::$app->request->baseUrl . '/providers/interface/assets/site/';

?>

<?= BreadcrumbWidget::widget([
  'title' => 'About Us',
  'subtitle' => 'Learn more about our mission'
])

?>
<div class="overflow-hidden space">
  <div class="container">
    <div class="row gy-3 justify-content-between align-items-center">
      <div class="col-lg-6">
        <div class="title-area">
          <span class="sub-title style1">Why Choose KOAS</span>
          <h2 class="sec-title">Our Core Areas </h2>
        </div>
      </div>
      <div class="col-lg-5">
        <p class="mb-60">
          To create a space for immigrant and underprivileged youth
          to enhance their holistic development, foster community
          cohesion and promote a love for nature and adventure.
        </p>
      </div>
    </div>
    <div class="row gy-80">
      <div class="col-md-6 col-xl-4">
        <div class="choose-item">
          <div class="box-icon">
            <img src="<?= $basePath ?>assets/img/icon/choose_3_1.svg" alt="image" />
          </div>
          <div class="media-body">
            <h3 class="box-title">Integration and Socialization</h3>
            <p class="box-text">
              Outdoor activities provide a platform for immigrant youth
              to connect with their peers, build friendships, and integrate
              into the local community. These experiences foster a
              sense of belonging and help combat feelings of isolation.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-4">
        <div class="choose-item">
          <div class="box-icon">
            <img src="<?= $basePath ?>assets/img/icon/choose_3_2.svg" alt="image" />
          </div>
          <div class="media-body">
            <h3 class="box-title"> Physical and Mental Well-being</h3>
            <p class="box-text">
              Engaging in outdoor activities promotes physical fitness,
              mental well-being, and stress reduction. For immigrant youth,
              who may face additional stressors related to cultural adaptation,
              these activities offer a healthy outlet and a chance to
              unwind and encourage the youth to pursue healthy lifestyles.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-4">
        <div class="choose-item">
          <div class="box-icon">
            <img src="<?= $basePath ?>assets/img/icon/choose_3_3.svg" alt="image" />
          </div>
          <div class="media-body">
            <h3 class="box-title">Skill Development</h3>
            <p class="box-text">
              We integrate mentorship opportunities with the outdoor activities
              to impart knowledge and enhance various skills, such as teamwork,
              leadership, problem-solving, and communication. By participating
              in group hikes, sports, or environmental conservation projects,
              immigrant youth can develop valuable life skills.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-4">
        <div class="choose-item">
          <div class="box-icon">
            <img src="<?= $basePath ?>assets/img/icon/choose_3_4.svg" alt="image" />
          </div>
          <div class="media-body">
            <h3 class="box-title">Cultural Exchange</h3>
            <p class="box-text">
              Outdoor events create opportunities for cultural exchange. Immigrant youth can share their traditions, languages, and customs with others, fostering mutual understanding and appreciation.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-4">
        <div class="choose-item">
          <div class="box-icon">
            <img src="<?= $basePath ?>assets/img/icon/choose_3_5.svg" alt="image" />
          </div>
          <div class="media-body">
            <h3 class="box-title">Empowerment and Confidence</h3>
            <p class="box-text">
              Successfully participating in outdoor activities boosts self-confidence and empowers youth. Overcoming challenges like rock climbing, camping, or kayaking instills a sense of achievement and resilience.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-4">
        <div class="choose-item">
          <div class="box-icon">
            <img src="<?= $basePath ?>assets/img/icon/choose_3_6.svg" alt="image" />
          </div>
          <div class="media-body">
            <h3 class="box-title">Environmental Stewardship</h3>
            <p class="box-text">
              Organizing outdoor events encourages environmental awareness and stewardship. Immigrant youth can learn about local ecosystems, wildlife, and sustainable practices while enjoying nature.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div
  class="about-area position-relative overflow-hidden space overflow-hidden"
  id="about-sec">
  <div class="container">
    <div class="row gy-4">
      <div class="col-xl-6">
        <div class="img-box15 pe-xl-4">
          <div class="img1 global-img">
            <img src="<?= $basePath ?>assets/img/bg/68.jpg" alt="About" />
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="ps-xl-4">
          <div class="title-area mb-20">
            <span class="sub-title style1"> Mandate/ Purpose</span>
            <h2 class="sec-title mb-20">
              Learn More About our Mission
            </h2>
            <p class="sec-text2 mb-50">
              Kifaru Outdoor Adventures exists to create opportunities for immigrant and underprivileged youth to develop holistically in their social, physical, and mental well-being while developing their leadership skills through participation in outdoor nature and nature-based activities. Our activities provide an environment that fosters community cohesion, breaks barriers of access to nature, and promote a love for nature and adventure.
            </p>

          </div>
          <!-- <div class="about-item-wrap style2">
            <div class="about-item style4">
              <div class="about-item_img">
                <img src="<?= $basePath ?>assets/img/icon/about_2_1.svg" alt="" />
              </div>
              <div class="about-item_centent">
                <h5 class="box-title">Secure Booking</h5>
                <p class="about-item_text">
                  Have a valid credit card or preferred payment method ready
                  to complete the booking process.
                </p>
              </div>
            </div>
            <div class="about-item style4">
              <div class="about-item_img">
                <img src="<?= $basePath ?>assets/img/icon/about_2_2.svg" alt="" />
              </div>
              <div class="about-item_centent">
                <h5 class="box-title">Cultural Tours</h5>
                <p class="about-item_text">
                  Have a valid credit card or preferred payment method ready
                  to complete the booking process.
                </p>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</div>

