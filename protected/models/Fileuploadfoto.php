<?php

/**
 * This is the model class for table "fileuploadfoto".
 *
 * The followings are the available columns in table 'fileuploadfoto':
 * @property integer $IDFILEFOTO
 * @property string $NIM
 * @property string $FILEFOTO
 *
 * The followings are the available model relations:
 * @property Mahasiswa $nIM
 */
class Fileuploadfoto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fileuploadfoto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('IDFILEFOTO', 'required'),
			array('IDFILEFOTO', 'numerical', 'integerOnly'=>true),
			array('NIM', 'length', 'max'=>10),
			//array('FILEFOTO', 'length', 'max'=>100),
                        array('FILEFOTO', 'length', 'max'=>100),
                            array('FILEFOTO', 'file', 'types'=>'jpg, png',
                            'maxSize'=>1024 * 1024 * 2,
                            'tooLarge'=>'Ukuran file melebihi 2MB',
                            'allowEmpty' => false),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDFILEFOTO, NIM, FILEFOTO', 'safe', 'on'=>'search'),
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
			'nIM' => array(self::BELONGS_TO, 'Mahasiswa', 'NIM'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDFILEFOTO' => 'Kode Foto',
			'NIM' => 'NIM',
			'FILEFOTO' => 'Foto',
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

		$criteria->compare('IDFILEFOTO',$this->IDFILEFOTO);
		$criteria->compare('NIM',$this->NIM,true);
		$criteria->compare('FILEFOTO',$this->FILEFOTO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Fileuploadfoto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
