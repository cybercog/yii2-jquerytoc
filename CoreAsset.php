<?php
/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */

namespace yii2jquerytoc;

use yii\web\AssetBundle;

class CoreAsset extends AssetBundle
{
    public $sourcePath = '@yii2jquerytoc/assets';
    public $css = array(
      'css/jquery.tocify.css'
    );
    public $js = array(
        'js/jquery.tocify.min.js'
    );
    public $depends = array(
        'yii\jui\JuiAsset',
    );
}
