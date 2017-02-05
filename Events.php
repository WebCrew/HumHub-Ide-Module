<?php
namespace humhub\modules\ide;

use Yii;
use yii\helpers\Url;
use humhub\modules\ide\widgets\IdeFrame;
use humhub\models\Setting;

class Events extends \yii\base\Object
{

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => Yii::t('IdeModule.base', 'IDE Settings'),
            'url' => Url::toRoute('/ide/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-weixin"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'ide' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }
}
