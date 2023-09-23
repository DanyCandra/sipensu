<?php

/**
 * This is the model class for table "kategoriberita".
 *
 * The followings are the available columns in table 'kategoriberita':
 * @property integer $IDKATEGORI
 * @property string $NAMAKATEGORI
 *
 * The followings are the available model relations:
 * @property Berita[] $beritas
 */
class Kategoriberita extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kategoriberita';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NAMAKATEGORI', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDKATEGORI, NAMAKATEGORI', 'safe', 'on'=>'search'),
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
			'beritas' => array(self::HAS_MANY, 'Berita', 'IDKATEGORI'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDKATEGORI' => 'Kode Kategori Berita/Informasi',
			'NAMAKATEGORI' => 'Kategori',
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

		$criteria->compare('IDKATEGORI',$this->IDKATEGORI);
		$criteria->compare('NAMAKATEGORI',$this->NAMAKATEGORI,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kategoriberita the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
