<?php

namespace ctala\ChartJS2;

use yii\web\AssetBundle;

/**
 * Description of ChartJSBundle
 *
 * @author Cristian Tala <yomismo@cristiantala.cl>
 */
class ChartJSBundle extends AssetBundle {

    public $sourcePath = __DIR__."/dist/";
    public $css = [
    ];
    public $js = [
        'Chart.min.js',
        'utils.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
