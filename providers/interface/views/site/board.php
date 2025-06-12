<?php

use yii\helpers\Url;
use yii\helpers\Html;

$basePath = \Yii::$app->request->baseUrl . '/providers/interface/assets/site/'; 
use app\providers\components\widgets\site\BreadcrumbWidget;

?>

<?= BreadcrumbWidget::widget([
    'title' => 'Every youth deserves the chance to thrive',
    'subtitle' => 'Meet our Board'
]) ?>

<style>
    .team-section {
        padding: 60px 0;
        background-color: #f9f9f9;
    }
    .team-member {
        text-align: center;
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
        padding: 30px 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
    }
    .team-member:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 32px rgba(0, 0, 0, 0.1);
    }
    .team-img img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 20px;
    }
    .team-name {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 5px;
    }
    .team-role {
        color: #777;
        font-size: 14px;
        margin-bottom: 15px;
    }
    .team-social a {
        display: inline-block;
        margin: 0 6px;
        color: #333;
        font-size: 16px;
        transition: color 0.3s ease;
    }
    .team-social a:hover {
        color: #0077b5; /* LinkedIn Blue */
    }
</style>

<section class="team-section">
    <div class="container">
        <div class="row g-4">
            <?php
            $members = [
                ['name' => 'Michel Smith', 'img' => 'team_1_1.jpg'],
                ['name' => 'Janny Willson', 'img' => 'team_1_2.jpg'],
                ['name' => 'Jacob Jones', 'img' => 'team_1_3.jpg'],
                ['name' => 'Maria Prova', 'img' => 'team_1_4.jpg'],
                ['name' => 'Rebeka Maliha', 'img' => 'team_1_5.jpg'],
                ['name' => 'Alif Mahmud', 'img' => 'team_1_6.jpg'],
            ];
            foreach ($members as $member): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="team-member">
                        <div class="team-img">
                            <img src="<?= $basePath ?>assets/img/team/<?= $member['img'] ?>" alt="<?= Html::encode($member['name']) ?>">
                        </div>
                        <div class="team-info">
                            <div class="team-name"><?= Html::encode($member['name']) ?></div>
                            <div class="team-role">Board Member</div>
                            <div class="team-social">
                                <a href="https://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
