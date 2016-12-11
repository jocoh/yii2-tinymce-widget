jocoh/yii2-tinymce-widget
=========================
TinyMCE Widget for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require jocoh/yii2-tinymce-widget "*"
```

or add

```
"jocoh/yii2-tinymce-widget": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

Possible [TinyMCE](http://www.tinymce.com/wiki.php/Configuration) options: 

```
use jocoh\tinymce\TinyMce;

     echo TinyMce::widget( [
               'name' => 'content',
               'options' => ['rows' => 6], 
               'clientOptions' => [        
                   'plugins' => [
                         "advlist autolink lists link charmap print preview anchor",
                         "searchreplace visualblocks code fullscreen",
                         "insertdatetime media table contextmenu paste"
                    ],
                    'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
               ],
          ]);
    ?>
```

ActiveForm

```
use jocoh\tinymce\TinyMce;

     echo $form->field($model, 'content')->widget(TinyMce::className(), [
          'options' => ['rows' => 6], 
          'clientOptions' => [ 
               'plugins' => [
                    "advlist autolink lists link charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
               ],
               'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
          ],
     ]);
```