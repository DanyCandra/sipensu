<?php

/**
 * This is the model class for table "panggol".
 *
 * The followings are the available columns in table 'panggol':
 * @property integer $IDPANGGOL
 * @property string $PANGKAT
 * @property string $GOL
 *
 * The followings are the available model relations:
 * @property Groupsurtugpn[] $groupsurtugpns
 * @property Surtugns[] $surtugns
 * @property Surtugpm[] $surtugpms
 */
class Panggol extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Panggol the static model class
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
		return 'panggol';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('PANGKAT,GOL', 'required'),
			array('PANGKAT', 'length', 'max'=>50),
			array('GOL', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IDPANGGOL, PANGKAT, GOL', 'safe', 'on'=>'search'),
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
			'groupsurtugpns' => array(self::HAS_MANY, 'Groupsurtugpn', 'IDPANGGOL'),
			'surtugns' => array(self::HAS_MANY, 'Surtugns', 'IDPANGGOL'),
			'surtugpms' => array(self::HAS_MANY, 'Surtugpm', 'IDPANGGOL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDPANGGOL' => 'Kode Pangkat & Golongan',
			'PANGKAT' => 'Pangkat',
			'GOL' => 'Golongan',
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

		$criteria->compare('IDPANGGOL',$this->IDPANGGOL);
		$criteria->compare('PANGKAT',$this->PANGKAT,true);
		$criteria->compare('GOL',$this->GOL,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}