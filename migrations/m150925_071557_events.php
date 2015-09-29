<?php

use yii\db\Schema;
use yii\db\Migration;

class m150925_071557_events extends Migration
{
    public function up()
    {
      $this->createTable('events',[
          'id'=>'pk',
          'name'=>'string',
          'event_date'=>'date',
          'descrition'=>'text'

      ]);
    }

    public function down()
    {
        $this->dropTable('events');
        
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
