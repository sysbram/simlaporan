<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "laporan".
 *
 * @property integer $Kd_laporan
 * @property string $Tgl
 * @property string $Nm_Tim
 * @property string $Isi_Laporan
 */
class Laporan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'laporan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Tgl', 'Nm_Tim', 'Isi_Laporan'], 'required'],
            [['Tgl'], 'safe'],
            [['Nm_Tim'], 'string', 'max' => 25],
            [['Isi_Laporan'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Kd_laporan' => 'Kd Laporan',
            'Tgl' => 'Tanggal',
            'Nm_Tim' => 'Nama Tim',
            'Isi_Laporan' => 'Laporan Kegiatan Harian',
        ];
    }

    /**
     * @inheritdoc
     * @return \app\models\query\LaporanQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\LaporanQuery(get_called_class());
    }
}
