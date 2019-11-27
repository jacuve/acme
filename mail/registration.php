<?php

use yii\helpers\Html;
use yii\helpers\Url;

$activationUrl = Url::to(['/site/activate', 'user' => $user->id, 'token' => $user->uid], true );
echo Yii::t('app', 'Please click on {link}',
[
   'link' => Html::a(Yii::t('app' ,'activate_link'), $activationUrl)
]);
