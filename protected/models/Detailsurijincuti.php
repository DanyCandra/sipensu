<?php

/**
 * This is the model class for table "detailsurijincuti".
 *
 * The followings are the available columns in table 'detailsurijincuti':
 * @property integer $IDDETAILSURIJINCUTI
 * @property integer $IDIJINCUTI
 * @property string $IDGROUPS
 * @property string $TGLSUBMITDETAILSURIJINCUTI
 * @property string $PREVIEW 
 *
 * The followings are the available model relations:
 * @property Surijincuti $iDIJINCUTI
 * @property Groups $iDGROUPS
 */
class Detailsurijincuti extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detailsurijincuti';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('TGLSUBMITDETAILSURIJINCUTI', 'required'),
			array('IDIJINCUTI', 'numerical', 'integerOnly'=>true),
			array('IDGROUPS', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDDETAILSURIJINCUTI, IDIJINCUTI, IDGROUPS, TGLSUBMITDETAILSURIJINCUTI, PREVIEW', 'safe', 'on'=>'search'),
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
			'iDIJINCUTI' => array(self::BELONGS_TO, 'Surijincuti', 'IDIJINCUTI'),
			'iDGROUPS' => array(self::BELONGS_TO, 'Groups', 'IDGROUPS'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDDETAILSURIJINCUTI' => 'Kode Detail Ijin Cuti',
			'IDIJINCUTI' => 'Kode Cuti',
			'IDGROUPS' => 'Sub. Bagian/Divisi/Operator',
			'TGLSUBMITDETAILSURIJINCUTI' => 'Tgl. Submit',
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

		$criteria->compare('IDDETAILSURIJINCUTI',$this->IDDETAILSURIJINCUTI);
		$criteria->compare('IDIJINCUTI',$this->IDIJINCUTI);
		$criteria->compare('IDGROUPS',$this->IDGROUPS,true);
		$criteria->compare('TGLSUBMITDETAILSURIJINCUTI',$this->TGLSUBMITDETAILSURIJINCUTI,true);
                $criteria->compare('PREVIEW',$this->PREVIEW,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>array (
                               'defaultOrder'=>'IDDETAILSURIJINCUTI DESC',
                         )
		));
	}
       
        //membuat tombol action notifikasi
        public function getListactionnotifikasi(){
           
            $a = $this->PREVIEW;
            $sql = "select PREVIEW from detailsurijincuti where PREVIEW='$a'";
            $b = Yii::app()->db->createCommand($sql)->queryScalar();

            $g = $this->PREVIEW;
            $sqli = "select PREVIEW from detailsurijincuti where PREVIEW='$g'";
            $c = Yii::app()->db->createCommand($sqli)->queryScalar();


            if ($b == 'Y') {
                   
                echo CHtml::link('<i data-feather="search"></i>', array('detailsurijincuti/view', 'id' => $this->IDDETAILSURIJINCUTI), array('class' => 'btn btn-info')),'&nbsp';
                echo CHtml::link('<i data-feather="edit"></i>', array('surijincuti/updatenosurijincuti','id'=>$this->IDIJINCUTI), array('class' => 'btn btn-success'));
               
            } else {
               
                if ($c == 'N') {
                   
                    echo CHtml::link('<i data-feather="search"></i>', array('detailsurijincuti/view', 'id' => $this->IDDETAILSURIJINCUTI), array('class' => 'btn btn-warning')),'&nbsp';
                    echo CHtml::link('<i data-feather="edit"></i>', array('surijincuti/updatenosurijincuti','id'=>$this->IDIJINCUTI), array('class' => 'btn btn-primary'));
                } 
        }
        
                }
                
        public function getAccsrtcuti($val)
        {
            if($val=='Approve')
            {
                return 'Setujui';
            }
            else if($val=='Not Approved')
            {
                return 'Belum Disetujui';
            }
            
            
        }
        

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Detailsurijincuti the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
