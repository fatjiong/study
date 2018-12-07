<?php

namespace app\controllers\api;

use yii\web\Controller;

class BaseController extends Controller
{

    public $enableCsrfValidation = false;

    public function init()
    {
        parent::init();
    }

    /**
     * [result 返回数据]
     * @author jonni 2018-12-05
     * @param  int    $code    [状态码]
     * @param  string $message [提示信息]
     * @param  array  $data    [返回数据]
     * @return json            [返回体]
     */
    protected function result(int $code, string $message, array $data = [])
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return [
            'code'    => $code,
            'message' => $message,
            'data'    => $data ? $data : (object) $data,
        ];
    }
}
