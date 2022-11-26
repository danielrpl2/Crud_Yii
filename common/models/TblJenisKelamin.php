<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_jenis_kelamin".
 *
 * @property int $id
 * @property string $jenis_kelamin
 */
class TblJenisKelamin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_jenis_kelamin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_kelamin'], 'required'],
            [['jenis_kelamin'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenis_kelamin' => 'Jenis Kelamin',
        ];
    }
}
