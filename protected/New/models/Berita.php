<?php

/**
 * This is the model class for table "berita".
 *
 * The followings are the available columns in table 'berita':
 * @property integer $IDBERITA
 * @property integer $IDKATEGORI
 * @property string $JUDUL
 * @property string $ISI
 * @property string $ISPUBLISH
 * @property string $FILEIMAGE
 * @property string $HIT
 * @property string $TGLSUBMIT
 * @property string $SUMMARY
 *
 * The followings are the available model relations:
 * @property Kategoriberita $iDKATEGORI
 */
class Berita extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'berita';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('TGLSUBMIT', 'required'),
			array('IDKATEGORI', 'numerical', 'integerOnly'=>true),
			array('JUDUL', 'length', 'max'=>100),
			array('ISPUBLISH', 'length', 'max'=>2),
			array('FILEIMAGE', 'length', 'max'=>50),
			array('HIT', 'length', 'max'=>10),
			array('ISI, SUMMARY', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDBERITA, IDKATEGORI, JUDUL, ISI, ISPUBLISH, FILEIMAGE, HIT, TGLSUBMIT, SUMMARY', 'safe', 'on'=>'search'),
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
			'iDKATEGORI' => array(self::BELONGS_TO, 'Kategoriberita', 'IDKATEGORI'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDBERITA' => 'Kode Berita',
			'IDKATEGORI' => 'Kategori Berita/Informasi',
			'JUDUL' => 'Judul Berita/Informasi',
			'ISI' => 'Isi Berita/Informasi',
			'ISPUBLISH' => 'Publishing options',
			'FILEIMAGE' => 'Fileimage',
			'HIT' => 'Hit',
			'TGLSUBMIT' => 'Tgl. Submit',
			'SUMMARY' => 'Summary',
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

		$criteria->compare('IDBERITA',$this->IDBERITA);
		$criteria->compare('IDKATEGORI',$this->IDKATEGORI);
		$criteria->compare('JUDUL',$this->JUDUL,true);
		$criteria->compare('ISI',$this->ISI,true);
		$criteria->compare('ISPUBLISH',$this->ISPUBLISH,true);
		$criteria->compare('FILEIMAGE',$this->FILEIMAGE,true);
		$criteria->compare('HIT',$this->HIT,true);
		$criteria->compare('TGLSUBMIT',$this->TGLSUBMIT,true);
		$criteria->compare('SUMMARY',$this->SUMMARY,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Berita the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
