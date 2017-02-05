<?php
namespace humhub\modules\ide;

return [
    'id' => 'ide',
    'class' => 'humhub\modules\ide\Module',
    'namespace' => 'humhub\modules\ide',
    'events' => [
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::className(),
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\ide\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
