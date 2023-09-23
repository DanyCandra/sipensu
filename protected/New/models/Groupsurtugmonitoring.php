<?php

/**
 * This is the model class for table "groupsurtugmonitoring".
 *
 * The followings are the available columns in table 'groupsurtugmonitoring':
 * @property integer $IDGROUPSURTUGMONITORING
 * @property integer $IDSURTUGMONITORING
 * @property string $NIM
 * @property integer $NOURUTSURTUGMONITORING
 *
 * The followings are the available model relations:
 * @property Surtugmonitoring $iDSURTUGMONITORING
 * @property Groupsurpelpk $nIM
 */
class Groupsurtugmonitoring extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
        public $carith;
	public $carismstr;
        
        public function tableName()
	{
		return 'groupsurtugmonitoring';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IDSURTUGMONITORING, NOURUTSURTUGMONITORING', 'numerical', 'integerOnly'=>true),
			array('NIM', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('carith,IDGROUPSURTUGMONITORING, IDSURTUGMONITORING, NIM, NOURUTSURTUGMONITORING', 'safe', 'on'=>'search'),
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
			'iDSURTUGMONITORING' => array(self::BELONGS_TO, 'Surtugmonitoring', 'IDSURTUGMONITORING'),
			'nIM' => array(self::BELONGS_TO, 'Groupsurpelpk', 'NIM'),
                        //tambah relasi untuk menampilkan data mahasiswa
                        'nIM' => array(self::BELONGS_TO, 'Mahasiswa', 'NIM'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDGROUPSURTUGMONITORING' => 'Kode Group Monitoring',
			'IDSURTUGMONITORING' => 'Kode Surat Monitoring',
			'NIM' => 'NIM',
			'NOURUTSURTUGMONITORING' => 'No. Urut',
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
        $criteria->with=array('iDSURTUGMONITORING.iDSUBDETAILSURPELPK.iDPK.iDTASEMESTER'=>array('alias'=>'x'));
		$criteria->compare('IDGROUPSURTUGMONITORING',$this->IDGROUPSURTUGMONITORING);
		$criteria->compare('IDSURTUGMONITORING',$this->IDSURTUGMONITORING);
		$criteria->compare('NIM',$this->NIM,true);
		$criteria->compare('KETTAHUNAKADEMIK',$this->carith,false);
                $criteria->compare('x.IDTASEMESTER',$this->carismstr,false);
		$criteria->compare('IDSURTUGMONITORING',$this->IDSURTUGMONITORING);
		$criteria->compare('NOURUTSURTUGMONITORING',$this->NOURUTSURTUGMONITORING);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>array(
                        'defaultOrder'=>'KETTAHUNAKADEMIK',
                        ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Groupsurtugmonitoring the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
