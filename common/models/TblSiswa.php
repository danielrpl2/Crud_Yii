<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_siswa".
 *
 * @property int $id
 * @property string $nis
 * @property string $nama
 * @property int $jenis_kelamin_id
 */
class TblSiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_siswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nis', 'nama', 'jenis_kelamin_id'], 'required'],
            [['jenis_kelamin_id'], 'integer'],
            [['nis', 'nama'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nis' => 'Nis',
            'nama' => 'Nama',
            'jenis_kelamin_id' => 'Jenis Kelamin ID',
        ];
    }

    public function getJenisKelamin()
    {
        return $this->hasOne(TblJenisKelamin::className(), ['id' => 'jenis_kelamin_id']);
    }
}
