<?php

namespace app\jobs;

use app\models\Users;

class UserCreateJob extends \yii\base\BaseObject implements \yii\queue\JobInterface
{
    public $firstName;
    public $lastName;
    public $phoneNumbers;
    
    /**
     * RabbitMQ's Consumer.
     * Queue name 'userCreate'.
     * Receives new user's data and inserts it into MySQL DB.
     *
     * @return string message ID
     */
    public function execute($queue)
    {
		$user = new Users();
		$user->firstName = $this->firstName;
		$user->lastName = $this->lastName;
		$user->phoneNumbers = $this->phoneNumbers;
		$user->save();
    }
}