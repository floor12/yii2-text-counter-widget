<?php

namespace floor12\textcounter;

use yii\base\Widget;
use yii\helpers\Html;

class TextCounterWidget extends Widget
{

    public function run()
    {
        return Html::tag('div', 'Кол-во символов: 100', ['class' => 'text-counter-widget']);
    }
}