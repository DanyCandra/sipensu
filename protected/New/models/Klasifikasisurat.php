<?php

/**
 * This is the model class for table "klasifikasisurat".
 *
 * The followings are the available columns in table 'klasifikasisurat':
 * @property string $IDKLASIFIKASI
 * @property string $NAMAKLASIFIKASI
 * @property string $KETERANGANKLASIFIKASISURAT
 * @property integer $NOURUTKLASIFIKASISURAT
 * @property string $IDKLASIFIKASIBARU
 *
 * The followings are the available model relations:
 * @property Jenissurat[] $jenissurats
 */
class Klasifikasisurat extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Klasifikasisurat the static model class
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
		return 'klasifikasisurat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IDKLASIFIKASI,NAMAKLASIFIKASI', 'required'),
			array('NOURUTKLASIFIKASISURAT', 'numerical', 'integerOnly'=>true),
			array('IDKLASIFIKASI', 'length', 'max'=>10),
			array('NAMAKLASIFIKASI, IDKLASIFIKASIBARU', 'length', 'max'=>200),
			array('KETERANGANKLASIFIKASISURAT', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IDKLASIFIKASI, NAMAKLASIFIKASI, KETERANGANKLASIFIKASISURAT, IDKLASIFIKASIBARU, NOURUTKLASIFIKASISURAT', 'safe', 'on'=>'search'),
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
			'jenissurats' => array(self::HAS_MANY, 'Jenissurat', 'IDKLASIFIKASI'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDKLASIFIKASI' => 'Kode Klasifikasi',
			'NAMAKLASIFIKASI' => 'Nama Klasifikasi',
			'KETERANGANKLASIFIKASISURAT' => 'Keterangan Klasifikasi Surat',
			'NOURUTKLASIFIKASISURAT' => 'No. Urut',
			'IDKLASIFIKASIBARU' => 'Id Baru',
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

		$criteria->compare('IDKLASIFIKASI',$this->IDKLASIFIKASI,true);
		$criteria->compare('NAMAKLASIFIKASI',$this->NAMAKLASIFIKASI,true);
		$criteria->compare('KETERANGANKLASIFIKASISURAT',$this->KETERANGANKLASIFIKASISURAT,true);
		$criteria->compare('NOURUTKLASIFIKASISURAT',$this->NOURUTKLASIFIKASISURAT);
		$criteria->compare('IDKLASIFIKASIBARU',$this->IDKLASIFIKASIBARU,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}