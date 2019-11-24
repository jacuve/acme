<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property int $id
 * @property string|null $code
 * @property string|null $name
 * @property int|null $phonecode
 * @property string $lat
 * @property string $lng
 *
 * @property PhoneNumber[] $phoneNumbers
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phonecode'], 'integer'],
            [['lat', 'lng'], 'required'],
            [['code'], 'string', 'max' => 2],
            [['name'], 'string', 'max' => 80],
            [['lat', 'lng'], 'string', 'max' => 45],
            [['code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'code' => Yii::t('app', 'Code'),
            'name' => Yii::t('app', 'Name'),
            'phonecode' => Yii::t('app', 'Phonecode'),
            'lat' => Yii::t('app', 'Lat'),
            'lng' => Yii::t('app', 'Lng'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhoneNumbers()
    {
        return $this->hasMany(PhoneNumber::className(), ['country_id' => 'id']);
    }
}
