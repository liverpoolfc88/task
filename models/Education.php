<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%education}}".
 *
 * @property integer $id
 * @property string $university
 * @property string $location
 * @property string $from_date
 * @property string $to_date
 * @property integer $user_id
// * @property integer $name_file
 */
class Education extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%education}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
       
        
        return [
            [['university', 'location', 'from_date', 'to_date', 'user_id'], 'required'],
            [['user_id'], 'integer'],
            [['university', 'location', 'from_date', 'to_date'], 'string', 'max' => 128],
            [['name_file'],'file']
//            [['name_file'],'file', 'extensions'=>'jpg','png','gif']
        ];

    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        
        return [
            'id' => 'ID',
            'university' => 'Education',
            'location' => 'Location',
            'from_date' => 'From Date',
            'to_date' => 'To Date',
            'user_id' => 'User ID',
        ];
    }
}
