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
    );
    public $js = array(
        'js/jquery.tableofcontents.js'
    );
    public $depends = array(
    );
}
