<?php
/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */

namespace yiijquerytoc;

use yii\web\AssetBundle;

class CoreAsset extends AssetBundle
{
    public $sourcePath = '@yiijquerytoc/assets';
    public $css = array(
      'css/jquery.tocify.css'
    );
    public $js = array(
        'js/jquery.tocify.min.js'
    );
    public $depends = array(
      'yii\jui\CoreAsset',
    );
}