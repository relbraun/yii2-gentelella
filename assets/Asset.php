<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace relbraun\gentelella\assets;

class Asset extends \yii\web\AssetBundle
{
    public $depends = [
        'relbraun\gentelella\assets\ThemeAsset',
        'relbraun\gentelella\assets\ExtensionAsset',
    ];
}
