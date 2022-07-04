<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "allergien".
 *
 * @property int $id
 * @property string $titel
 * @property string|null $symtomps
 * @property string|null $causes
 * @property string|null $further_informations
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 *
 * @property User $createdBy
 */
class Allergien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'allergien';
    }
    public function behaviors()
    {
        return[
            TimestampBehavior::class,
            [
                'class' => BlameableBehavior::class,
                'updatedByAttribute' => false
            ]
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titel'], 'required'],
            [['further_informations'], 'string'],
            [['created_at', 'created_by', 'updated_at'], 'integer'],
            [['titel', 'symtomps', 'causes'], 'string', 'max' => 55],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titel' => 'Titel',
            'symtomps' => 'Symtomps',
            'causes' => 'Causes',
            'further_informations' => 'Further Informations',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }
}
