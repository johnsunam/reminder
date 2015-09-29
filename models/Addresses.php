<?php

Class Addresses extends \yii\db\ActiveRecord
{
    public $id;
    public $address;
    public $event_id;

    public function rules()
    {
        return
            [
                [['address'],'required'],
                ['address','email'],
                ['event_id','number']
            ];
    }

}