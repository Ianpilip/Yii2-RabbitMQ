<?php

use yii\helpers\Html;

$this->title = 'My Yii Application';
echo Html::csrfMetaTags();
$this->registerJsFile(
    'web/js/user.js',
    [
        'depends' => [\yii\web\JqueryAsset::className()], 
        'position' => \yii\web\View::POS_END
    ]
);
?>

<div class="ajax-result"></div>