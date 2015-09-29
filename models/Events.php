<?php
Class Events extends \yii\db\ActiveRecord
{
    public $id;
    public $name;
    public $event_date;
    public $description;

    public static function tableNames(){
        return 'events';
    }
public function rules()
{
        return
            [
              [['name','event_date','description'],'required'],
                ['name','string'],
                ['event_date', 'date', 'format' => 'Y-m-d'],
                ['description','safe']
            ];
}

}