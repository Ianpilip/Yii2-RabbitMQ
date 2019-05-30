<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

use app\models\Users;
use app\jobs\UserCreateJob;

class UserController extends Controller
{

    private $request;


    /**
     * New user create action.
     * RabbitMQ's Producer.
     * Receives new user data.
     * Pushes a job into the RabbitMQ queue and get a message ID.
     *
     * @return string message ID|error Exception
     */
    public function actionCreate()
    {

        $request = Yii::$app->request;
        $userData = Yii::$app->request->post('userData');
        
        $messageID = Yii::$app->queue->push(new UserCreateJob([
            'firstName' => $userData['firstName'],
            'lastName' => $userData['lastName'],
            'phoneNumbers' => serialize($userData['phoneNumbers'])
        ]));

        return $messageID;
    }

}
