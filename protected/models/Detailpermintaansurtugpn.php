<?php

/**
 * This is the model class for table "detailpermintaansurtugpn".
 *
 * The followings are the available columns in table 'detailpermintaansurtugpn':
 * @property integer $IDDETAILPERMINTAANSURTUGPN
 * @property integer $IDPN
 * @property integer $IDGROUPPN
 * @property integer $IDGROUPINSTANSIPN
 *
 * The followings are the available model relations:
 * @property Groupinstansisurtugpn $iDGROUPINSTANSIPN
 * @property Surtugpn $iDPN
 * @property Groupsurtugpn $iDGROUPPN
 */
class Detailpermintaansurtugpn extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detailpermintaansurtugpn';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IDPN, IDGROUPPN, IDGROUPINSTANSIPN', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDDETAILPERMINTAANSURTUGPN, IDPN, IDGROUPPN, IDGROUPINSTANSIPN', 'safe', 'on'=>'search'),
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
			'iDGROUPINSTANSIPN' => array(self::BELONGS_TO, 'Groupinstansisurtugpn', 'IDGROUPINSTANSIPN'),
			'iDPN' => array(self::BELONGS_TO, 'Surtugpn', 'IDPN'),
			'iDGROUPPN' => array(self::BELONGS_TO, 'Groupsurtugpn', 'IDGROUPPN'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDDETAILPERMINTAANSURTUGPN' => 'Iddetailpermintaansurtugpn',
			'IDPN' => 'Idpn',
			'IDGROUPPN' => 'Idgrouppn',
			'IDGROUPINSTANSIPN' => 'Idgroupinstansipn',
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

		$criteria->compare('IDDETAILPERMINTAANSURTUGPN',$this->IDDETAILPERMINTAANSURTUGPN);
		$criteria->compare('IDPN',$this->IDPN);
		$criteria->compare('IDGROUPPN',$this->IDGROUPPN);
		$criteria->compare('IDGROUPINSTANSIPN',$this->IDGROUPINSTANSIPN);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Detailpermintaansurtugpn the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
