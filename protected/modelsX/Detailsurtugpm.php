<?php

/**
 * This is the model class for table "detailsurtugpm".
 *
 * The followings are the available columns in table 'detailsurtugpm':
 * @property integer $IDDETAILSURTUGPM
 * @property integer $IDPM
 * @property string $IDGROUPS
  * @property string $PREVIEW

 * @property string $TGLSUBMITDETAILSURTUGPM
 *
 * The followings are the available model relations:
 * @property Surtugpm $iDPM
 * @property Surtugpm $iDGROUPS
 * 
 */
class Detailsurtugpm extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Detailsurtugpm the static model class
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
		return 'detailsurtugpm';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('TGLSUBMITDETAILSURTUGPM', 'required'),
			array('IDPM', 'numerical', 'integerOnly'=>true),
                        array('IDGROUPS', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IDDETAILSURTUGPM, IDPM,IDGROUPS,  TGLSUBMITDETAILSURTUGPM ,PREVIEW', 'safe', 'on'=>'search'),
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
			'iDPM' => array(self::BELONGS_TO, 'Surtugpm', 'IDPM'),
                        'iDGROUPS' => array(self::BELONGS_TO, 'Groups', 'IDGROUPS'),
                    
                        
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDDETAILSURTUGPM' => 'Kode Detail Permintaan/Permohonan',
			'IDPM' => 'Peminta/Pemohon Surat',
                        'IDGROUPS' => 'Sub. Bagian/Divisi/Operator',
                        'PREVIEW'=>'Status Baca',
			
			'TGLSUBMITDETAILSURTUGPM' => 'Tgl. Submit',
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

		$criteria->compare('IDDETAILSURTUGPM',$this->IDDETAILSURTUGPM);
		$criteria->compare('IDPM',$this->IDPM);
                $criteria->compare('IDGROUPS',$this->IDGROUPS);        
                
		$criteria->compare('TGLSUBMITDETAILSURTUGPM',$this->TGLSUBMITDETAILSURTUGPM,true);
                $criteria->compare('PREVIEW',$this->PREVIEW,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                         'sort'=>array (
                               'defaultOrder'=>'IDDETAILSURTUGPM DESC',
                         )
		));
	}
      
        
       
        
        //sampel
        /*  public function getListsendsurtugmonitoring(){
            $hasil='';
            if (count($this->detailsurtugmonitorings)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->detailsurtugmonitorings as $sendsuratmonitoring) {
            echo CHtml::link('<h4>Permintaan Srt.Tugas Monitoring atas nama Dosen Supervisi&nbsp;: '.$sendsuratmonitoring->iDSURTUGMONITORING->nIP->NAMA2.'&nbsp;<i class="fa fa-hand-o-right"></i> Telah Terkirim ke :&nbsp'.$sendsuratmonitoring->iDGROUPS->DIVISI).'</li></h4>';
            }  
            return $hasil;
            }*/
        
        //membuat tombol action notifikasi
        public function getListactionnotifikasi(){
           
            $a = $this->PREVIEW;
            $sql = "select PREVIEW from detailsurtugpm where PREVIEW='$a'";
            $b = Yii::app()->db->createCommand($sql)->queryScalar();

            $g = $this->PREVIEW;
            $sqli = "select PREVIEW from detailsurtugpm where PREVIEW='$g'";
            $c = Yii::app()->db->createCommand($sqli)->queryScalar();


            if ($b == 'Y') {
                   
                echo CHtml::link('<i class="fa fa-search"></i>', array('detailsurtugpm/view', 'id' => $this->IDDETAILSURTUGPM), array('class' => 'btn btn-sm blue')),'&nbsp';
                echo CHtml::link('<i class="fa fa-edit"></i>', array('surtugpm/updatenosurtugpmoperator','id'=>$this->IDPM), array('class' => 'btn btn-sm green'));
               
            } else {
               
                if ($c == 'N') {
                   
                    echo CHtml::link('<i class="fa fa-search"></i>', array('detailsurtugpm/view', 'id' => $this->IDDETAILSURTUGPM), array('class' => 'btn btn-sm red')),'&nbsp';
                    echo CHtml::link('<i class="fa fa-edit"></i>', array('surtugpm/updatenosurtugpmoperator','id'=>$this->IDPM), array('class' => 'btn btn-sm green'));
                } 
        }
        
                }
        
        public function getCetakbytgl(){
         $a=$this->IDPM;
        $sql="select TGLCETAKSURAT from surtugpm where IDPM='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

       if ($b > 0) {
            echo CHtml::link('<i class="fa fa-print"></i> Cetak',array('cetak/surtugpm','id'=>$this->IDPM),array('target'=>'_blank','class'=>'btn btn-sm yellow'));
       
        } else {
            echo "<font color='red'> Tgl.cetak belum di set..</font>";
        }
    }    
    
        public function getCetaksuratpenyusunanpmbytgl(){
         $a=$this->IDPM;
        $sql="select TGLCETAKSURAT from surtugpm where IDPM='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

       if ($b > 0) {
            echo CHtml::link('<i class="fa fa-print"></i> Cetak',array('cetak/surtugpenyusunanpm','id'=>$this->IDPM),array('target'=>'_blank','class'=>'btn btn-sm purple'));
       
        } else {
            echo "<font color='red'> Tgl.cetak belum di set..</font>";
        }
    }   
   
       
}