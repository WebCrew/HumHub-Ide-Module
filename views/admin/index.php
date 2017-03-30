<?php

use yii\bootstrap\ActiveForm;
use yii\helper\Html;
use humhub\models\Setting;
use humhub\modules\ide\controllers\AdminController;
?>

<div class="panel panel-default">
	<div class="panel-heading" style="display: none;"></div>
	<div class="panel-body">
        <iframe style=" 
            border: 0; 
            display: flex;
            flex-direction: column;
            width: 100%;
            min-height: 90vh;
            flex-grow: 1;" 
            src="http://your_domain.com/your_HumHub/ide_app/index.php" allowfullscreen>
        </iframe>
	</div>
</div>
