An example of using RabbitMQ with Yii2 framework

Description:
1. An extension called "yii2-queue" was installed (https://github.com/yiisoft/yii2-queue)
2. Consumer is in jobs/UserCreateJob
3. Producer is in the method of the UserController   
The better way is to create a different component for all procuders, but it's just a tiny example, so there was no need to do it

Testing:
1. Run migrations
1. Open in the browser the main page, the ajax query will be sent (which is in the web/js/user.js)
2. You will see either message ID from RabbitMQ or error on the page
3. An instruction to listen to messages for RabbitMQ: yii queue/listen --verbose=1
