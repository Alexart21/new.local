<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <h1 style="text-align: center"><?= Html::encode($this->title) ?></h1>

    <div>
        <h2 style="color: #000;text-shadow: 1px 1px 1px red;text-align: center;"><?= nl2br(Html::encode($message)) ?></h2>
    </div>

    <!--<p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>-->

</div>
