<?php
/**
 * @license MIT
 * @author jocoh
 * @link https://github.com/jocoh/yii2-tinymce-widget
 */
namespace jocoh\tinymce;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

class TinyMce extends InputWidget {

     
     /**
     * @var array options for the TinyMCE plugin.
     * Please refer to the TinyMCE JS plugin Web page for possible options.
     * @link http://www.tinymce.com/wiki.php/Configuration
     */
     public $clientOptions = [];
     

     public function run() {
          if ($this->hasModel()) {
               echo Html::activeTextarea($this->model, $this->attribute, $this->options);
          } else {
               echo Html::textarea($this->name, $this->value, $this->options);
          }
          $this->registerClientScript();
     }

     /**
      * Register tinyMCE PlugIn
      */
     protected function registerClientScript() {
          $js = [];
          $view = $this->getView();
          TinyMceAsset::register($view);
          
          $id = $this->options['id'];
          
          $this->clientOptions['selector'] = "#$id";
          
          $options = Json::encode($this->clientOptions);
          
          $js[] = "tinymce.init($options);";
          
          $view->registerJs(implode("\n", $js));
          
     }

}
