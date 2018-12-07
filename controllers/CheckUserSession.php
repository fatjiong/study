<?php

namespace app\controllers;

use Yii;
use yii\base\Behavior;

class CheckUserSession extends Behavior
{

    public function events()
    {
        return [
            \yii\web\Application::EVENT_BEFORE_ACTION => 'checkUserSession',
        ];
    }

    public function checkUserSession()
    {
        $route = Yii::$app->controller->getRoute();
        if (Yii::$app->user->isGuest && $route != 'site/login') {
            echo 'No permission!<br />route:' . $route;
            #todo
            return false;
        }

        return true;
    }
}
