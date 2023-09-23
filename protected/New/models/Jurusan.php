<?php

/**
 * This is the model class for table "jurusan".
 *
 * The followings are the available columns in table 'jurusan':
 * @property integer $IDJURUSAN
 * @property string $NAMAJURUSAN
 *
 * The followings are the available model relations:
 * @property Msdos[] $msdoses
 */
class Jurusan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Jurusan the static model class
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
		return 'jurusan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('NAMAJURUSAN', 'required'),
			array('NAMAJURUSAN', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IDJURUSAN, NAMAJURUSAN', 'safe', 'on'=>'search'),
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
			'msdoses' => array(self::HAS_MANY, 'Msdos', 'IDJURUSAN'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDJURUSAN' => 'Kode Jurusan',
			'NAMAJURUSAN' => 'Nama Jurusan',
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

		$criteria->compare('IDJURUSAN',$this->IDJURUSAN);
		$criteria->compare('NAMAJURUSAN',$this->NAMAJURUSAN,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}