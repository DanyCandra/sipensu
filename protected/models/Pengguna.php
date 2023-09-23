<?php

/**
 * This is the model class for table "pengguna".
 *
 * The followings are the available columns in table 'pengguna':
 * @property string $IDPENGGUNA
 * @property string $IDGROUPS
 * @property string $USERNAME
 * @property string $PASS
 *
 * The followings are the available model relations:
 * @property Groups $iDGROUPS
 */
class Pengguna extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Pengguna the static model class
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
		return 'pengguna';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('IDPENGGUNA', 'required'),
			array('IDPENGGUNA, IDGROUPS', 'length', 'max'=>10),
			array('USERNAME, PASS', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IDPENGGUNA, IDGROUPS, USERNAME, PASS', 'safe', 'on'=>'search'),
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
			'iDGROUPS' => array(self::BELONGS_TO, 'Groups', 'IDGROUPS'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDPENGGUNA' => 'Kode User',
			'IDGROUPS' => 'Group User',
			'USERNAME' => 'Operator',
			'PASS' => 'Password',
                        
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

		$criteria->compare('IDPENGGUNA',$this->IDPENGGUNA,true);
		$criteria->compare('IDGROUPS',$this->IDGROUPS,true);
		$criteria->compare('USERNAME',$this->USERNAME,true);
		$criteria->compare('PASS',$this->PASS,true);
                
                
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}