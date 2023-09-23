<?php

/**
 * This is the model class for table "jabatanstruktural".
 *
 * The followings are the available columns in table 'jabatanstruktural':
 * @property string $IDJABATANSTRUKTURAL
 * @property string $IDJABATANSURAT
 * @property string $NIP
 * @property string $NAMAJABATANSTRUKTURAL
 * @property string $TAHUN
 * @property string $IDPANGGOL
 * @property string $IDJABATANAKADEMIK
 * @property integer $NOURUTJABATANSTRUKTURAL
 *
 * The followings are the available model relations:
 * @property Msdos $nIP
 * @property Jenissurat[] $jenissurats
 * @property Panggol[] $iDPANGGOL
 * @property Jabatanakademik[] $iDJABATANAKADEMIK
 */
class Jabatanstruktural extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Jabatanstruktural the static model class
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
		return 'jabatanstruktural';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IDJABATANSURAT,NIP,NAMAJABATANSTRUKTURAL', 'required'),
			array('NOURUTJABATANSTRUKTURAL', 'numerical', 'integerOnly'=>true),
                        array('IDJABATANSTRUKTURAL', 'length', 'max'=>11),
			array('IDJABATANSURAT,IDPANGGOL,IDJABATANAKADEMIK', 'length', 'max'=>20),
			array('NIP', 'length', 'max'=>18),
			array('NAMAJABATANSTRUKTURAL', 'length', 'max'=>100),
			array('TAHUN', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IDJABATANSTRUKTURAL, IDJABATANAKADEMIK,IDJABATANSURAT, IDPANGGOL, NIP, NAMAJABATANSTRUKTURAL, TAHUN, NOURUTJABATANSTRUKTURAL', 'safe', 'on'=>'search'),
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
			'nIP' => array(self::BELONGS_TO, 'Msdos', 'NIP'),
			'jenissurats' => array(self::HAS_MANY, 'Jenissurat', 'IDJABATANSTRUKTURAL'),
                        'iDPANGGOL' => array(self::BELONGS_TO, 'Panggol', 'IDPANGGOL'),
                        'iDJABATANAKADEMIK' => array(self::BELONGS_TO, 'Jabatanakademik', 'IDJABATANAKADEMIK'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDJABATANSTRUKTURAL' => 'Kode Jabatan Struktural',
                        'IDJABATANSURAT'=>'Kode Surat Pejabat',
			'NIP' => 'NIP',
			'NAMAJABATANSTRUKTURAL' => 'Jabatan Struktural',
			'TAHUN' => 'Tahun Jabatan',
                        'IDPANGGOL'=>'Pangkat & Golongan',
                        'IDJABATANAKADEMIK'=>'Jabatan Akademik',
			'NOURUTJABATANSTRUKTURAL' => 'No. Urut',
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

		$criteria->compare('IDJABATANSTRUKTURAL',$this->IDJABATANSTRUKTURAL,true);
                $criteria->compare('IDJABATANSURAT',$this->IDJABATANSURAT,true);
		$criteria->compare('NIP',$this->NIP,true);
		$criteria->compare('NAMAJABATANSTRUKTURAL',$this->NAMAJABATANSTRUKTURAL,true);
		$criteria->compare('TAHUN',$this->TAHUN,true);
                $criteria->compare('IDPANGGOL',$this->IDPANGGOL,true);
                $criteria->compare('IDJABATANAKADEMIK',$this->IDJABATANAKADEMIK,true);
		$criteria->compare('NOURUTJABATANSTRUKTURAL',$this->NOURUTJABATANSTRUKTURAL);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}