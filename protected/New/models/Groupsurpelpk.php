<?php

/**
 * This is the model class for table "groupsurpelpk".
 *
 * The followings are the available columns in table 'groupsurpelpk':
 * @property integer $IDGROUPSURPELPK
 * @property integer $IDSUBDETAILSURPELPK
 * @property string $NIM
 * @property integer $NOURUTSURPELPK
 *
 * The followings are the available model relations:
 * @property Groupsurperpk $nIM
 * @property Subdetailsurpelpk $iDSUBDETAILSURPELPK
 * @property Groupsurtugmonitoring[] $groupsurtugmonitorings
 * 
 */
class Groupsurpelpk extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'groupsurpelpk';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IDSUBDETAILSURPELPK, NOURUTSURPELPK', 'numerical', 'integerOnly'=>true),
			array('NIM', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDGROUPSURPELPK, IDSUBDETAILSURPELPK, NIM, NOURUTSURPELPK', 'safe', 'on'=>'search'),
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
			'nIM' => array(self::BELONGS_TO, 'Groupsurperpk', 'NIM'),
			'iDSUBDETAILSURPELPK' => array(self::BELONGS_TO, 'Subdetailsurpelpk', 'IDSUBDETAILSURPELPK'),
                        'nIM' => array(self::BELONGS_TO, 'Mahasiswa', 'NIM'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDGROUPSURPELPK' => 'Kode Group Mahasiswa Pelaksanaan',
			'IDSUBDETAILSURPELPK' => 'Kode Detail Surat Pelaksanaan',
			'NIM' => 'NIM',
			'NOURUTSURPELPK' => 'No. Urut',
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

		$criteria->compare('IDGROUPSURPELPK',$this->IDGROUPSURPELPK);
		$criteria->compare('IDSUBDETAILSURPELPK',$this->IDSUBDETAILSURPELPK);
		$criteria->compare('NIM',$this->NIM,true);
		$criteria->compare('NOURUTSURPELPK',$this->NOURUTSURPELPK);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Groupsurpelpk the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
