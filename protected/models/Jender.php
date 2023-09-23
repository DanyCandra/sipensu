<?php

/**
 * This is the model class for table "jender".
 *
 * The followings are the available columns in table 'jender':
 * @property string $IDJENDER
 * @property string $NAMAJENDER
 *
 * The followings are the available model relations:
 * @property Msdos[] $msdoses
 */
class Jender extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Jender the static model class
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
		return 'jender';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('IDJENDER', 'required'),
			array('IDJENDER', 'length', 'max'=>1),
			array('NAMAJENDER', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IDJENDER, NAMAJENDER', 'safe', 'on'=>'search'),
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
			'msdoses' => array(self::HAS_MANY, 'Msdos', 'IDJENDER'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDJENDER' => 'Kode Jenis Kelamin',
			'NAMAJENDER' => 'Nama Jenis Kelamin',
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

		$criteria->compare('IDJENDER',$this->IDJENDER,true);
		$criteria->compare('NAMAJENDER',$this->NAMAJENDER,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}