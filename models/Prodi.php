<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prodi".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property int $univ_id
 *
 * @property University $univ
 */
class Prodi extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prodi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'default', 'value' => null],
            [['description'], 'string'],
            [['univ_id'], 'required'],
            [['univ_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['univ_id'], 'exist', 'skipOnError' => true, 'targetClass' => University::class, 'targetAttribute' => ['univ_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'univ_id' => 'Univ ID',
        ];
    }

    /**
     * Gets query for [[Univ]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUniv()
    {
        return $this->hasOne(University::class, ['id' => 'univ_id']);
    }

}
