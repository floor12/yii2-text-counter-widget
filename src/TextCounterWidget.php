<?php

namespace floor12\textcounter;

use yii\base\Widget;
use yii\helpers\Html;

class TextCounterWidget extends Widget
{
    public $min = 0;
    public $max = 0;
    public $targetId = '';

    public function run()
    {
        if (!$this->min && !$this->max) {
            return '';
        }
        TextCounterWidgetAsset::register($this->getView());
        $this->getView()->registerJs('f12counter.init()');
        return Html::tag('div', null, [
            'class' => 'text-counter-widget',
            'data-min' => $this->min,
            'data-max' => $this->max,
            'data-target_id' => $this->targetId,
        ]);
    }
}