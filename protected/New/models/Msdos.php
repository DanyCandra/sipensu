<?php

/**
 * This is the model class for table "msdos".
 *
 * The followings are the available columns in table 'msdos':
 * @property string $NIP
 * @property string $IDFAKULTAS
 * @property integer $IDJURUSAN
 * @property string $IDJENDER
 * @property string $NIDN
 * @property string $NAMA2
 * @property string $TEMPATLAHIR
 * @property string $TGLLAHIR2
 *
 * The followings are the available model relations:
 * @property Groupsurtugpn[] $groupsurtugpns
 * @property Jabatanstruktural[] $jabatanstrukturals
 * @property Jurusan $iDJURUSAN
 * @property Jender $iDJENDER
 * @property Fakultas $iDFAKULTAS
 * @property Surtugns[] $surtugns
 * @property Surtugpm[] $surtugpms
 */
class Msdos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Msdos the static model class
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
		return 'msdos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NIP,NAMA2,IDJENDER', 'required'),
			array('IDJURUSAN', 'numerical', 'integerOnly'=>true),
			array('NIP', 'length', 'max'=>18),
			array('IDFAKULTAS', 'length', 'max'=>8),
			array('IDJENDER', 'length', 'max'=>1),
			array('NIDN', 'length', 'max'=>10),
			array('NAMA2', 'length', 'max'=>60),
			array('TEMPATLAHIR', 'length', 'max'=>80),
			array('TGLLAHIR2', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('NIP, IDFAKULTAS, IDJURUSAN, IDJENDER, NIDN, NAMA2, TEMPATLAHIR, TGLLAHIR2', 'safe', 'on'=>'search'),
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
			'groupsurtugpns' => array(self::HAS_MANY, 'Groupsurtugpn', 'NIP'),
			'jabatanstrukturals' => array(self::HAS_MANY, 'Jabatanstruktural', 'NIP'),
			'iDJURUSAN' => array(self::BELONGS_TO, 'Jurusan', 'IDJURUSAN'),
			'iDJENDER' => array(self::BELONGS_TO, 'Jender', 'IDJENDER'),
			'iDFAKULTAS' => array(self::BELONGS_TO, 'Fakultas', 'IDFAKULTAS'),
			'surtugns' => array(self::HAS_MANY, 'Surtugns', 'NIP'),
			'surtugpms' => array(self::HAS_MANY, 'Surtugpm', 'NIP'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NIP' => 'NIP/NIK',
			'IDFAKULTAS' => 'Kode Fakultas',
			'IDJURUSAN' => 'Kode Jurusan',
			'IDJENDER' => 'Kode Jender',
			'NIDN' => 'NIDN',
			'NAMA2' => 'Nama',
			'TEMPATLAHIR' => 'Tempat Lahir',
			'TGLLAHIR2' => 'Tgl. Lahir',
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

		$criteria->compare('NIP',$this->NIP,true);
		$criteria->compare('IDFAKULTAS',$this->IDFAKULTAS,true);
		$criteria->compare('IDJURUSAN',$this->IDJURUSAN);
		$criteria->compare('IDJENDER',$this->IDJENDER,true);
		$criteria->compare('NIDN',$this->NIDN,true);
		$criteria->compare('NAMA2',$this->NAMA2,true);
		$criteria->compare('TEMPATLAHIR',$this->TEMPATLAHIR,true);
		$criteria->compare('TGLLAHIR2',$this->TGLLAHIR2,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}