<?php

/**
 * This is the model class for table "groupsurperpk".
 *
 * The followings are the available columns in table 'groupsurperpk':
 * @property integer $IDGROUPSURPERPK
 * @property integer $IDPK
 * @property string $NIM
 * @property integer $NOURUTSURPERPK
 *
 * The followings are the available model relations:
 * @property Surperpk $iDPK
 * @property Mahasiswa $nIM
 */
class Groupsurperpk extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'groupsurperpk';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IDPK, NOURUTSURPERPK', 'numerical', 'integerOnly'=>true),
			array('NIM', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDGROUPSURPERPK, IDPK, NIM, NOURUTSURPERPK', 'safe', 'on'=>'search'),
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
			'iDPK' => array(self::BELONGS_TO, 'Surperpk', 'IDPK'),
			'nIM' => array(self::BELONGS_TO, 'Mahasiswa', 'NIM'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDGROUPSURPERPK' => 'Kode Group Pemohon',
			'IDPK' => 'Kode Surat Permohonan',
			'NIM' => 'NIM',
			'NOURUTSURPERPK' => 'No. Urut',
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

		$criteria->compare('IDGROUPSURPERPK',$this->IDGROUPSURPERPK);
		$criteria->compare('IDPK',$this->IDPK);
		$criteria->compare('NIM',$this->NIM,true);
		$criteria->compare('NOURUTSURPERPK',$this->NOURUTSURPERPK);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Groupsurperpk the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
