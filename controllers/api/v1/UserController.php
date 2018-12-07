<?php
namespace app\controllers\api\v1;

use app\models\Users;
use Yii;

class UserController extends \app\controllers\api\BaseController
{

    public function actionIndex()
    {
        $data = User::findAll();
        return $this->result(200, '', $data);
    }

    public function actionCreate()
    {
        $model = new Users();
        $data  = Yii::$app->request->post();
        $model->setAttributes($data);
        if ($model->validate() && $model->save()) {
            $token = Yii::$app->jwt->getBuilder()
                ->setIssuer('http://www.study.com') // 签发者
                ->setIssuedAt(time()) // 签发时间
                ->setExpiration(time() + 3600) // 过期时间
                ->set('uid', $model->id) // 用户id
                ->getToken();
            return $this->result(200, '添加成功', ['token' => (string) $token, 'user' => $model->getAttributes()]);
        } else {
            return $this->result(400, array_values($model->getFirstErrors())[0]);
        }
    }
}
