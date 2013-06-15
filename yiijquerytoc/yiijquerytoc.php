<?php
 
 /**
 * This class is merely used to publish a TOC based upon the headings within a defined container
 * @copyright Frenzel GmbH - www.frenzel.net
 * @link http://www.frenzel.net
 * @author Philipp Frenzel <philipp@frenzel.net>
 *
 *
 * Jquery Script from
 * @author Doug Neiner
 * @link http://fuelyourcoding.com/scripts/toc/
 * @license Open Sourced under the MIT License
 */

namespace yiijquerytoc;

use Yii;
use yii\base\View;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\base\Widget as BaseWidget;

class yiijquerytoc extends BaseWidget
{
	/**
	 * @var array the HTML attributes for the widget container tag.
	 */
	public $options = array();

	/**
	 * @var array the HTML attributes for the widget container tag.
	 */
	public $clientOptions = array();


	/**
	 * Initializes the widget.
	 * If you override this method, make sure you call the parent implementation first.
	 */
	public function init()
	{
		parent::init();
		
		//checks for the element id
		if (!isset($this->options['id'])) {
			$this->options['id'] = $this->getId();
		}

		/**
		* @param scope the DOM element to check for headings, default is document.body
		*/
		if (!isset($this->clientOptions['scope'])) {
			$this->clientOptions['scope'] = 'document.body';
		}

		/**
		* @param startLevel the heading to start with, default is 1
		*/
		if (!isset($this->clientOptions['startLevel'])) {
			$this->clientOptions['startLevel'] = '1';
		}

		/**
		* @param depth on how deep the heading will be cared about, default is 3
		*/
		if (!isset($this->clientOptions['depth'])) {
			$this->clientOptions['depth'] = '3';
		}
		
		/**
		* @param topLinks on how deep the heading will be cared about, default is true
		*/
		if (!isset($this->clientOptions['topLinks'])) {
			$this->clientOptions['topLinks'] = true;
		}

	}

	/**
	 * Renders the widget.
	 */
	public function run()
	{
		echo Html::beginTag('div', $this->options) . "\n";
		echo Html::endTag('div')."\n";
		$this->registerPlugin();
	}

	/**
	* Registers a specific dhtmlx widget and the related events
	* @param string $name the name of the dhtmlx plugin
	*/
	protected function registerPlugin()
	{		
		$id = $this->options['id'];
		
		//get the displayed view and register the needed assets
		$view = $this->getView();
		$view->registerAssetBundle("yiijquerytoc/core");

		$js = array();
		
		$cleanOptions = Json::encode($this->clientOptions);
		$js[] = "$('#$id').tableOfContents(null,$cleanOptions)";
		
		$view->registerJs(implode("\n", $js),View::POS_READY);
	}

}

