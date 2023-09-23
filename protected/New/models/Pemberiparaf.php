<?php

/**
 * This is the model class for table "pemberiparaf".
 *
 * The followings are the available columns in table 'pemberiparaf':
 * @property integer $IDTTD
 * @property string $NIPTTD
 * @property string $NAMATTD
 * @property string $JABATANSTRUKTURALTTD
 *
 * The followings are the available model relations:
 * @property Jenissurat[] $jenissurats
 */
class Pemberiparaf extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pemberiparaf';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NIPTTD', 'length', 'max'=>18),
			array('NAMATTD, JABATANSTRUKTURALTTD', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDTTD, NIPTTD, NAMATTD, JABATANSTRUKTURALTTD', 'safe', 'on'=>'search'),
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
			'jenissurats' => array(self::HAS_MANY, 'Jenissurat', 'IDTTD'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDTTD' => 'ID Pemberi Paraf',
			'NIPTTD' => 'NIP Pemberi Paraf',
			'NAMATTD' => 'Nama Pemberi Paraf',
			'JABATANSTRUKTURALTTD' => 'Jabatan Struktural ',
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

		$criteria->compare('IDTTD',$this->IDTTD);
		$criteria->compare('NIPTTD',$this->NIPTTD,true);
		$criteria->compare('NAMATTD',$this->NAMATTD,true);
		$criteria->compare('JABATANSTRUKTURALTTD',$this->JABATANSTRUKTURALTTD,true);
	
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pemberiparaf the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
