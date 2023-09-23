<?php

/**
 * This is the model class for table "groupinstansisurtugpn".
 *
 * The followings are the available columns in table 'groupinstansisurtugpn':
 * @property integer $IDGROUPINSTANSIPN
 * @property string $INSTANSIPN
 * @property string $ALAMATINSTANSIPN
 * @property string $KOTAINSTANSIPN
 * @property integer $NOURUTINSTANSIPN
 * @property integer $IDPN
 *
 * The followings are the available model relations:
 * @property Groupsurtugpn $iDGROUPPN
 * @property Surtugpn $iDPN
 */
class Groupinstansisurtugpn extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'groupinstansisurtugpn';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NOURUTINSTANSIPN, IDPN', 'numerical', 'integerOnly'=>true),
			array('INSTANSIPN', 'length', 'max'=>250),
			array('ALAMATINSTANSIPN', 'length', 'max'=>150),
			array('KOTAINSTANSIPN', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDGROUPINSTANSIPN, INSTANSIPN, ALAMATINSTANSIPN, KOTAINSTANSIPN, NOURUTINSTANSIPN, IDPN', 'safe', 'on'=>'search'),
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
			
			'iDPN' => array(self::BELONGS_TO, 'Surtugpn', 'IDPN'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDGROUPINSTANSIPN' => 'Kode Group Instansi',
			'INSTANSIPN' => 'Instansi Penelitian',
			'ALAMATINSTANSIPN' => 'Alamat',
			'KOTAINSTANSIPN' => 'Kota',
			'NOURUTINSTANSIPN' => 'No. Urut',
			'IDPN' => 'Kode Penelitian',
			
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

		$criteria->compare('IDGROUPINSTANSIPN',$this->IDGROUPINSTANSIPN);
		$criteria->compare('INSTANSIPN',$this->INSTANSIPN,true);
		$criteria->compare('ALAMATINSTANSIPN',$this->ALAMATINSTANSIPN,true);
		$criteria->compare('KOTAINSTANSIPN',$this->KOTAINSTANSIPN,true);
		$criteria->compare('NOURUTINSTANSIPN',$this->NOURUTINSTANSIPN);
		$criteria->compare('IDPN',$this->IDPN);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Groupinstansisurtugpn the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
