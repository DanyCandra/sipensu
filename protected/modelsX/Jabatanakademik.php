<?php

/**
 * This is the model class for table "jabatanakademik".
 *
 * The followings are the available columns in table 'jabatanakademik':
 * @property integer $IDJABATANAKADEMIK
 * @property string $NAMAJABATANAKADEMIK
 *
 * The followings are the available model relations:
 * @property Groupsurtugpn[] $groupsurtugpns
 * @property Surtugns[] $surtugns
 * @property Surtugpm[] $surtugpms
 * @property Jabatanstruktural[] $jabatanstrukturals
 */
class Jabatanakademik extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Jabatanakademik the static model class
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
		return 'jabatanakademik';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('NAMAJABATANAKADEMIK', 'required'),
			array('NAMAJABATANAKADEMIK', 'length', 'max'=>80),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IDJABATANAKADEMIK, NAMAJABATANAKADEMIK', 'safe', 'on'=>'search'),
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
			'groupsurtugpns' => array(self::HAS_MANY, 'Groupsurtugpn', 'IDJABATANAKADEMIK'),
			'surtugns' => array(self::HAS_MANY, 'Surtugns', 'IDJABATANAKADEMIK'),
			'surtugpms' => array(self::HAS_MANY, 'Surtugpm', 'IDJABATANAKADEMIK'),
                        'jabatanstrukturals' => array(self::HAS_MANY, 'Jabatanstruktural', 'IDJABATANSTRUKTURAL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDJABATANAKADEMIK' => 'Kode Jabatan Akademik',
			'NAMAJABATANAKADEMIK' => 'Nama Jabatan Akademik',
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

		$criteria->compare('IDJABATANAKADEMIK',$this->IDJABATANAKADEMIK);
		$criteria->compare('NAMAJABATANAKADEMIK',$this->NAMAJABATANAKADEMIK,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}