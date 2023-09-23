<?php

/**
 * This is the model class for table "mahasiswa".
 *
 * The followings are the available columns in table 'mahasiswa':
 * @property string $NIM
 * @property string $NAMA
 * @property string $TEMPATLAHIR
 * @property string $TGLLAHIR
 * @property string $NOHP
 * @property string $EMAIL
 * @property string $ALAMATASAL
 * @property string $NAMAAYAH
 * @property string $NAMAIBU
 * @property string $PENGHASILANAYAH
 * @property string $PENGHASILANIBU
 * @property string $JMLTANGGUNGAN
 * @property string $NAMAKABUPATEN
 * @property string $NAMAPROPINSI
 * @property string $TAHUNANGKATAN
 * @property integer $IDAGAMA
 * @property string $IDPRODI
 * @property integer $IDGOLDAR
 * @property string $IDJENDER
 *
 * The followings are the available model relations:
 * @property Fileuploadfoto[] $fileuploadfotos
 * @property Agama $iDAGAMA
 * @property Prodi $iDPRODI
 * @property Goldarah $iDGOLDAR
 * @property Jender $iDJENDER
 * @property Surpermk[] $surpermks
 */
class Mahasiswa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mahasiswa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NIM, IDPRODI, IDJENDER, IDGOLDAR, IDAGAMA', 'required'),
			array('IDAGAMA, IDGOLDAR', 'numerical', 'integerOnly'=>true),
			array('NIM', 'length', 'max'=>10),
			array('NAMA, TEMPATLAHIR, EMAIL', 'length', 'max'=>100),
			array('TGLLAHIR, NOHP, NAMAAYAH, NAMAIBU', 'length', 'max'=>50),
			array('PENGHASILANAYAH, PENGHASILANIBU, JMLTANGGUNGAN', 'length', 'max'=>15),
			array('NAMAKABUPATEN, NAMAPROPINSI', 'length', 'max'=>30),
			array('TAHUNANGKATAN, IDPRODI', 'length', 'max'=>4),
			array('IDJENDER', 'length', 'max'=>1),
			array('ALAMATASAL', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('NIM, NAMA, TEMPATLAHIR, TGLLAHIR, NOHP, EMAIL, ALAMATASAL, NAMAAYAH, NAMAIBU, PENGHASILANAYAH, PENGHASILANIBU, JMLTANGGUNGAN, NAMAKABUPATEN, NAMAPROPINSI, TAHUNANGKATAN, IDAGAMA, IDPRODI, IDGOLDAR, IDJENDER', 'safe', 'on'=>'search'),
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
			'fileuploadfotos' => array(self::HAS_MANY, 'Fileuploadfoto', 'NIM'),
			'iDAGAMA' => array(self::BELONGS_TO, 'Agama', 'IDAGAMA'),
			'iDPRODI' => array(self::BELONGS_TO, 'Prodi', 'IDPRODI'),
			'iDGOLDAR' => array(self::BELONGS_TO, 'Goldarah', 'IDGOLDAR'),
			'iDJENDER' => array(self::BELONGS_TO, 'Jender', 'IDJENDER'),
			'surpermks' => array(self::HAS_MANY, 'Surpermk', 'NIM'),
                        'groupsurperpks' => array(self::HAS_MANY, 'Groupsurperpk', 'NIM'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NIM' => 'NIM',
			'NAMA' => 'Nama',
			'TEMPATLAHIR' => 'Tempat Lahir',
			'TGLLAHIR' => 'Tgl. Lahir',
			'NOHP' => 'No. HP',
			'EMAIL' => 'Email',
			'ALAMATASAL' => 'Alamat asal',
			'NAMAAYAH' => 'Nama Ayah',
			'NAMAIBU' => 'Nama Ibu',
			'PENGHASILANAYAH' => 'Penghasilan Ayah',
			'PENGHASILANIBU' => 'Penghasilan Ibu',
			'JMLTANGGUNGAN' => 'Jml. Tanggungan',
			'NAMAKABUPATEN' => 'Kabupaten',
			'NAMAPROPINSI' => 'Propinsi',
			'TAHUNANGKATAN' => 'Tahun Angkatan',
			'IDAGAMA' => 'Kode Agama',
			'IDPRODI' => 'Kode Prodi',
			'IDGOLDAR' => 'Kode Golongan Darah',
			'IDJENDER' => 'Kode Jender',
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

		$criteria->compare('NIM',$this->NIM,true);
		$criteria->compare('NAMA',$this->NAMA,true);
		$criteria->compare('TEMPATLAHIR',$this->TEMPATLAHIR,true);
		$criteria->compare('TGLLAHIR',$this->TGLLAHIR,true);
		$criteria->compare('NOHP',$this->NOHP,true);
		$criteria->compare('EMAIL',$this->EMAIL,true);
		$criteria->compare('ALAMATASAL',$this->ALAMATASAL,true);
		$criteria->compare('NAMAAYAH',$this->NAMAAYAH,true);
		$criteria->compare('NAMAIBU',$this->NAMAIBU,true);
		$criteria->compare('PENGHASILANAYAH',$this->PENGHASILANAYAH,true);
		$criteria->compare('PENGHASILANIBU',$this->PENGHASILANIBU,true);
		$criteria->compare('JMLTANGGUNGAN',$this->JMLTANGGUNGAN,true);
		$criteria->compare('NAMAKABUPATEN',$this->NAMAKABUPATEN,true);
		$criteria->compare('NAMAPROPINSI',$this->NAMAPROPINSI,true);
		$criteria->compare('TAHUNANGKATAN',$this->TAHUNANGKATAN,true);
		$criteria->compare('IDAGAMA',$this->IDAGAMA);
		$criteria->compare('IDPRODI',$this->IDPRODI,true);
		$criteria->compare('IDGOLDAR',$this->IDGOLDAR);
		$criteria->compare('IDJENDER',$this->IDJENDER,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        //menambahkan perintah ungah file foto
        public function getFileuploadfoto(){
            $hasil='';
            if (count($this->fileuploadfotos)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->fileuploadfotos as $fileupload) {
                echo '<li>'.CHtml::link($fileupload->FILEFOTO,array('fileuploadfoto/update','id'=>$fileupload->IDFILEFOTO)).'</li>';
            }
            if (count($this->fileuploadfotos)>0) echo '</ul>';
            echo CHtml::link('<i class="fa fa-upload"></i> Unggah',array('fileuploadfoto/create','id'=>$this->NIM),array('class'=>'btn btn-sm purple'));
            return $hasil;
        }
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mahasiswa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
