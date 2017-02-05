<?php
namespace humhub\modules\ide;
use yii\web\AssetBundle;
class Assets extends AssetBundle {
  public $publishOptions = [
    'forceCopy' => TRUE,
  ];
  
  public function init() {
    $this->sourcePath = dirname(__FILE__) . '/assets';
    parent::init();
  }
}