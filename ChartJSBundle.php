<?php

namespace ctala\ChartJS2;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Description of ChartJSBundle
 *
 * @author Cristian Tala <yomismo@cristiantala.cl>
 */
class ChartJSBundle extends AssetBundle {

    public function init() {
        $this->jsOptions['position'] = View::POS_BEGIN;
        parent::init();
    }

    public $sourcePath = __DIR__;
    public $css = [
        "css/canvas.css"
    ];
    public $js = [
        'dist/Chart.min.js',
        'js/utils.js',
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
