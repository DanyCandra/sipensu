<?php

/**
 * This is the model class for table "groupsurisu".
 *
 * The followings are the available columns in table 'groupsurisu':
 * @property integer $IDGROUPSURISU
 * @property integer $IDISU
 * @property string $NIM
 * @property integer $NOURUTGROUPSURISU
 *
 * The followings are the available model relations:
 * @property Surisu $iDISU
 * @property Mahasiswa $nIM
 */
class Groupsurisu extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'groupsurisu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('NIM', 'required'),
			array('IDISU, NOURUTGROUPSURISU', 'numerical', 'integerOnly'=>true),
			array('NIM', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDGROUPSURISU, IDISU, NIM, NOURUTGROUPSURISU', 'safe', 'on'=>'search'),
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
			'iDISU' => array(self::BELONGS_TO, 'Surisu', 'IDISU'),
			'nIM' => array(self::BELONGS_TO, 'Mahasiswa', 'NIM'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDGROUPSURISU' => 'Kode Group Ijin Survei',
			'IDISU' => 'Kode Surat Ijin Survei',
			'NIM' => 'NIM',
			'NOURUTGROUPSURISU' => 'No. Urut',
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

		$criteria->compare('IDGROUPSURISU',$this->IDGROUPSURISU);
		$criteria->compare('IDISU',$this->IDISU);
		$criteria->compare('NIM',$this->NIM,true);
		$criteria->compare('NOURUTGROUPSURISU',$this->NOURUTGROUPSURISU);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Groupsurisu the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
