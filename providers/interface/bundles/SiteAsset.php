<?php

namespace ui\bundles;

use yii\web\AssetBundle;


class SiteAsset extends AssetBundle
{
    public $basePath = '@ui/assets';
    public $baseUrl = '@web/providers/interface/assets';
    public $css = [
        [
            'href' => 'oneui/logov3.png',
            'rel' => 'icon',
            'sizes' => '64x64',
        ],
        // 'peafowl/css/theme.css',
        // 'peafowl/css/style.css',
        'site/assets/css/bootstrap.min.css',
        'site/assets/css/fontawesome.min.css',
        'site/assets/css/magnific-popup.min.css',
        'site/assets/css/swiper-bundle.min.css',
        'site/assets/css/style.css',
    ];
    public $js = [
        'site/assets/js/vendor/jquery-3.6.0.min.js',
        'site/assets/js/swiper-bundle.min.js',
        'site/assets/js/bootstrap.min.js',
        'site/assets/js/jquery.magnific-popup.min.js',
        'site/assets/js/jquery.counterup.min.js',
        'site/assets/js/jquery-ui.min.js',
        'site/assets/js/imagesloaded.pkgd.min.js',
        'site/assets/js/isotope.pkgd.min.js',
        'site/assets/js/gsap.min.js',
        'site/assets/js/circle-progress.js',
        'site/assets/js/matter.min.js',
        'site/assets/js/matterjs-custom.js',
        'site/assets/js/nice-select.min.js',
        'site/assets/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
