<?php

/**
 * This is the model class for table "detailaktifcuti".
 *
 * The followings are the available columns in table 'detailaktifcuti':
 * @property integer $IDDETAILSURAKTIFCUTI
 * @property integer $IDAKTIFCUTI
 * @property string $IDGROUPS
 * @property string $TGLSUBMITDETAILSURAKTIFCUTI
 * @property string $PREVIEW 
 *
 * The followings are the available model relations:
 * @property Groups $iDGROUPS
 * @property Suraktifcuti $iDAKTIFCUTI
 */
class Detailaktifcuti extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detailaktifcuti';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('TGLSUBMITDETAILSURAKTIFCUTI', 'required'),
			array('IDAKTIFCUTI', 'numerical', 'integerOnly'=>true),
			array('IDGROUPS', 'length', 'max'=>1),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDDETAILSURAKTIFCUTI, IDAKTIFCUTI, IDGROUPS, TGLSUBMITDETAILSURAKTIFCUTI, PREVIEW', 'safe', 'on'=>'search'),
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
			'iDGROUPS' => array(self::BELONGS_TO, 'Groups', 'IDGROUPS'),
			'iDAKTIFCUTI' => array(self::BELONGS_TO, 'Suraktifcuti', 'IDAKTIFCUTI'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDDETAILSURAKTIFCUTI' => 'Kode Detail Aktif Kembali Cuti',
			'IDAKTIFCUTI' => 'Kode Izin Cuti Akademik',
			'IDGROUPS' => 'Sub. Bagian/Divisi/Operator',
			'TGLSUBMITDETAILSURAKTIFCUTI' => 'Tgl Submit',
                        'PREVIEW'=>'Status Baca',
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

		$criteria->compare('IDDETAILSURAKTIFCUTI',$this->IDDETAILSURAKTIFCUTI);
		$criteria->compare('IDAKTIFCUTI',$this->IDAKTIFCUTI);
		$criteria->compare('IDGROUPS',$this->IDGROUPS,true);
		$criteria->compare('TGLSUBMITDETAILSURAKTIFCUTI',$this->TGLSUBMITDETAILSURAKTIFCUTI,true);
                 $criteria->compare('PREVIEW',$this->PREVIEW,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                         'sort'=>array (
                               'defaultOrder'=>'IDDETAILSURAKTIFCUTI DESC',
                         )
		));
	}
        //membuat tombol action notifikasi
        public function getListactionnotifikasi(){
           
            $a = $this->PREVIEW;
            $sql = "select PREVIEW from detailaktifcuti where PREVIEW='$a'";
            $b = Yii::app()->db->createCommand($sql)->queryScalar();

            $g = $this->PREVIEW;
            $sqli = "select PREVIEW from detailaktifcuti where PREVIEW='$g'";
            $c = Yii::app()->db->createCommand($sqli)->queryScalar();


            if ($b == 'Y') {
                   
                echo CHtml::link('<i data-feather="search"></i>', array('detailaktifcuti/view', 'id' => $this->IDDETAILSURAKTIFCUTI), array('class' => 'btn btn-info')),'&nbsp';
                echo CHtml::link('<i data-feather="edit"></i>', array('suraktifcuti/updatenosuraktifcutioperator','id'=>$this->IDAKTIFCUTI), array('class' => 'btn btn-success'));
               
            } else {
               
                if ($c == 'N') {
                   
                    echo CHtml::link('<i data-feather="search"></i>', array('detailaktifcuti/view', 'id' => $this->IDDETAILSURAKTIFCUTI), array('class' => 'btn btn-warning')),'&nbsp';
                    echo CHtml::link('<i data-feather="edit"></i>', array('suraktifcuti/updatenosuraktifcutioperator','id'=>$this->IDAKTIFCUTI), array('class' => 'btn btn-primary'));
                } 
        }
        
                }
        

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Detailaktifcuti the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
