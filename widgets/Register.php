<?php
namespace app\widgets;

use Yii;
use yii\base\Widget;

class Register extends Widget
{
    public $model;
    
    public function init()
    {

    }

    public function run()
    {
        return $this->render('register', [
            'model' => $this->model,
        ]);
    }

}