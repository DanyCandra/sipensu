<?php

/**
 * This is the model class for table "fakultas".
 *
 * The followings are the available columns in table 'fakultas':
 * @property string $IDFAKULTAS
 * @property string $FAKULTAS
 * @property string $ALAMATFAKULTAS
 * @property string $WEBSITE
 * @property string $EMAIL
 * @property string $TLPFAKULTAS
 * @property string $UNIVERSITAS
 *
 * The followings are the available model relations:
 * @property Msdos[] $msdoses
 */
class Fakultas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Fakultas the static model class
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
		return 'fakultas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('IDFAKULTAS', 'required'),
                        array('FAKULTAS,UNIVERSITAS', 'required'),
			array('IDFAKULTAS', 'length', 'max'=>8),
			array('FAKULTAS', 'length', 'max'=>200),
			array('ALAMATFAKULTAS', 'length', 'max'=>500),
			array('WEBSITE, EMAIL, TLPFAKULTAS', 'length', 'max'=>20),
                        array('UNIVERSITAS', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IDFAKULTAS, FAKULTAS, ALAMATFAKULTAS, WEBSITE, EMAIL, TLPFAKULTAS,UNIVERSITAS', 'safe', 'on'=>'search'),
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
			'msdoses' => array(self::HAS_MANY, 'Msdos', 'IDFAKULTAS'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDFAKULTAS' => 'Kode Fakultas',
			'FAKULTAS' => 'Nama Fakultas',
			'ALAMATFAKULTAS' => 'Alamat Fakultas',
			'WEBSITE' => 'Website',
			'EMAIL' => 'Email',
			'TLPFAKULTAS' => 'Tlp. Fakultas',
                        'UNIVERSITAS' => 'Nama Universitas',
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

		$criteria->compare('IDFAKULTAS',$this->IDFAKULTAS,true);
		$criteria->compare('FAKULTAS',$this->FAKULTAS,true);
		$criteria->compare('ALAMATFAKULTAS',$this->ALAMATFAKULTAS,true);
		$criteria->compare('WEBSITE',$this->WEBSITE,true);
		$criteria->compare('EMAIL',$this->EMAIL,true);
		$criteria->compare('TLPFAKULTAS',$this->TLPFAKULTAS,true);
                $criteria->compare('UNIVERSITAS',$this->UNIVERSITAS,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}