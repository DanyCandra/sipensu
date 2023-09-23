<?php

/**
 * This is the model class for table "matakuliahsurisu".
 *
 * The followings are the available columns in table 'matakuliahsurisu':
 * @property integer $IDMATAKULIAHISU
 * @property string $NAMAMATAKULIAHISU
 * @property string $NIP
 * @property integer $IDTTD
 * @property string $AKTIF
 *
 * The followings are the available model relations:
 * @property Pemberiparaf $iDTTD
 * @property Msdos $nIP
 * @property Surisu[] $surisus
 */
class Matakuliahsurisu extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'matakuliahsurisu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                         array('NAMAMATAKULIAHISU,IDTTD,NIP', 'required'),
			array('IDTTD,IDMATAKULIAHISU', 'numerical', 'integerOnly'=>true),
			array('NAMAMATAKULIAHISU', 'length', 'max'=>100),
			array('NIP', 'length', 'max'=>18),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDMATAKULIAHISU, NAMAMATAKULIAHISU, NIP, IDTTD, AKTIF', 'safe', 'on'=>'search'),
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
			'iDTTD' => array(self::BELONGS_TO, 'Pemberiparaf', 'IDTTD'),
			'nIP' => array(self::BELONGS_TO, 'Msdos', 'NIP'),
			'surisus' => array(self::HAS_MANY, 'Surisu', 'IDMATAKULIAHISU'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDMATAKULIAHISU' => 'Kode Syarat Mata Kuliah Ijin Survei',
			'NAMAMATAKULIAHISU' => 'Mata Kuliah Syarat Ijin Survei',
			'NIP' => 'NIP',
			'IDTTD' => 'Penanggung Jawab Survei',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('IDMATAKULIAHISU',$this->IDMATAKULIAHISU);
		$criteria->compare('NAMAMATAKULIAHISU',$this->NAMAMATAKULIAHISU,true);
		$criteria->compare('NIP',$this->NIP,true);
		$criteria->compare('IDTTD',$this->IDTTD);
		$criteria->compare('AKTIF', $this->AKTIF);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Matakuliahsurisu the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
