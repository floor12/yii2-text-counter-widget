<?php

namespace floor12\textcounter;

use yii\web\AssetBundle;

class TextCounterWidgetAsset extends AssetBundle
{
    public $sourcePath = '@vendor/floor12/yii2-text-counter-widget/assets';

    public $css = [
        'f12-counter.css'
    ];

    public $js = [
        'f12-counter.js',
    ];
}