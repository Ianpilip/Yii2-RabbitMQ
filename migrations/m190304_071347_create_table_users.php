<?php

use yii\db\Migration;

/**
 * Class m190224_175422_create_table_users
 */
class m190224_175422_create_table_users extends Migration
{
    
    public function up()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'firstName' => $this->string(255)->notNull(),
            'lastName' => $this->string(255)->notNull(),
            'phoneNumbers' => $this->binary()
        ]);
    }

    public function down()
    {
        $this->dropTable('users');
    }
}