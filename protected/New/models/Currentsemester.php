<?php

/**
 * This is the model class for table "currentsemester".
 *
 * The followings are the available columns in table 'currentsemester':
 * @property integer $IDTASEMESTER
 * @property string $TAHUNAKADEMIK
 * @property string $SEMESTER
 * @property string $KETTAHUNAKADEMIK
 * @property string $KETSEMESTER
 * @property integer $STATUSTASEMESTER
 *
 * The followings are the available model relations:
 * @property Surpermk[] $surpermks
 */
class Currentsemester extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'currentsemester';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('TAHUNAKADEMIK,KETTAHUNAKADEMIK,SEMESTER,KETSEMESTER,STATUSTASEMESTER', 'required'),
			array('SEMESTER', 'length', 'max'=>1),
                        array('TAHUNAKADEMIK', 'length', 'max'=>8),
                        array('KETTAHUNAKADEMIK', 'length', 'max'=>9),
                        array('KETSEMESTER', 'length', 'max'=>5),
                        array('STATUSTASEMESTER', 'length','max'=>1),
                        
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDTASEMESTER, TAHUNAKADEMIK,SEMESTER,KETTAHUNAKADEMIK,KETSEMESTER, STATUSTASEMESTER', 'safe', 'on'=>'search'),
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
			'surpermks' => array(self::HAS_MANY, 'Surpermk', 'IDTASEMESTER'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDTASEMESTER' => 'Kode Thn.Semester',
			'TAHUNAKADEMIK' => 'Tahun Akademik',
                        'SEMESTER'=>'Semester',
                        'KETTAHUNAKADEMIK'=>'Ket.Thn. Akademik',
                        'KETSEMESTER'=> 'Ket. Semester',
                        'STATUSTASEMESTER'=>'Status',
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

		$criteria->compare('IDTASEMESTER',$this->IDTASEMESTER);
		$criteria->compare('TAHUNAKADEMIK',$this->TAHUNAKADEMIK,true);
                $criteria->compare('SEMESTER',$this->SEMESTER,true);
                $criteria->compare('KETTAHUNAKADEMIK',$this->KETTAHUNAKADEMIK,true);
                $criteria->compare('KETSEMESTER',$this->KETSEMESTER,true);
                $criteria->compare('STATUSTASEMESTER',$this->STATUSTASEMESTER);
                
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Currentsemester the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
