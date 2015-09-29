<?php

use yii\db\Schema;
use yii\db\Migration;

class m150925_075321_addresses extends Migration
{
    public function up()
    {
            $this->createTable('addresses',[
                'id'=>'pk',
                'address'=>'string UNIQUE',
                'event_id'=>'integer'
            ]);
        $this->addForeignKey('event_address_name','addresses','event_id','events','id');
    }

    public function down()
    {
        $this->dropTable('addresses');
        $this->dropForeignKey('event_address_name','addresses');

    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
