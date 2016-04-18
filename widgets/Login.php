<?php
namespace app\widgets;

use Yii;
use yii\base\Widget;

class Login extends Widget
{

    public function init()
    {

    }

    public function run()
    {
        return $this->render('login');
    }

}
