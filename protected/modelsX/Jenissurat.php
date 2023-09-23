<?php

/**
 * This is the model class for table "jenissurat".
 *
 * The followings are the available columns in table 'jenissurat':
 * @property integer $IDJENISSURAT
 * @property string $IDJABATANSTRUKTURAL
 * @property string $IDKLASIFIKASI
 * @property string $NAMAJENISSURAT
 *
 * The followings are the available model relations:
 * @property Klasifikasisurat $iDKLASIFIKASI
 * @property Jabatanstruktural $iDJABATANSTRUKTURAL
 * @property Surtugns[] $surtugns
 * @property Surtugpm[] $surtugpms
 * @property Surtugpn[] $surtugpns
 * 
 * @property Pemberiparaf $iDTTD
 */
class Jenissurat extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Jenissurat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jenissurat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('NAMAJENISSURAT,IDKLASIFIKASI,IDJABATANSTRUKTURAL, IDTTD','required'),
			array('IDJABATANSTRUKTURAL', 'length', 'max'=>11),
			array('IDKLASIFIKASI', 'length', 'max'=>10),
			array('NAMAJENISSURAT', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IDJENISSURAT, IDTTD,IDJABATANSTRUKTURAL, IDKLASIFIKASI, NAMAJENISSURAT', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'iDKLASIFIKASI' => array(self::BELONGS_TO, 'Klasifikasisurat', 'IDKLASIFIKASI'),
			'iDJABATANSTRUKTURAL' => array(self::BELONGS_TO, 'Jabatanstruktural', 'IDJABATANSTRUKTURAL'),
			'surtugns' => array(self::HAS_MANY, 'Surtugns', 'IDJENISSURAT'),
			'surtugpms' => array(self::HAS_MANY, 'Surtugpm', 'IDJENISSURAT'),
			'surtugpns' => array(self::HAS_MANY, 'Surtugpn', 'IDJENISSURAT'),
                    
                        //tambahan
                        'iDTTD' => array(self::BELONGS_TO, 'Pemberiparaf', 'IDTTD'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDJENISSURAT' => 'Kode Jenis Surat',
			'IDJABATANSTRUKTURAL' => 'Kode Jabatan Struktural',
			'IDKLASIFIKASI' => 'Kode Klasifikasi Surat',
			'NAMAJENISSURAT' => 'Nama Jenis Surat',
                        'IDTTD'=>'ID Pemberi Paraf'
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('IDJENISSURAT',$this->IDJENISSURAT);
		$criteria->compare('IDJABATANSTRUKTURAL',$this->IDJABATANSTRUKTURAL,true);
		$criteria->compare('IDKLASIFIKASI',$this->IDKLASIFIKASI,true);
		$criteria->compare('NAMAJENISSURAT',$this->NAMAJENISSURAT,true);
                $criteria->compare('IDTTD',$this->IDTTD,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}