<?php

/**
 * This is the model class for table "detailsurtugpn".
 *
 * The followings are the available columns in table 'detailsurtugpn':
 * @property integer $IDDETAILSURTUGPN
 * @property integer $IDPN
 * @property string $TGLSUBMITDETAILSURTUGPN
   * @property string $PREVIEW
 *
 * The followings are the available model relations:
 * @property Surtugpn $iDPN
 * 
 */
class Detailsurtugpn extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Detailsurtugpn the static model class
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
		return 'detailsurtugpn';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('TGLSUBMITDETAILSURTUGPN', 'required'),
			array('IDPN', 'numerical', 'integerOnly'=>true),
			
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IDDETAILSURTUGPN, IDPN,  TGLSUBMITDETAILSURTUGPN, PREVIEW', 'safe', 'on'=>'search'),
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
			'iDPN' => array(self::BELONGS_TO, 'Surtugpn', 'IDPN'),
                        'groupsurtugpns' => array(self::HAS_MANY, 'Groupsurtugpn', 'IDPN'),
                        'iDGROUPS' => array(self::BELONGS_TO, 'Groups', 'IDGROUPS'),
                    
                        'groupinstansisurtugpns' => array(self::HAS_MANY, 'Groupinstansisurtugpn', 'IDPN'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDDETAILSURTUGPN' => 'Kode Detail Permintaan/Permohonan',
			'IDPN' => 'Kode Srt. Tugas Ijin Penelitian',
                         'PREVIEW'=>'Status Baca',
			'TGLSUBMITDETAILSURTUGPN' => 'Tgl. Submit',
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

		$criteria->compare('IDDETAILSURTUGPN',$this->IDDETAILSURTUGPN);
		$criteria->compare('IDPN',$this->IDPN);
                $criteria->compare('PREVIEW',$this->PREVIEW,true);
		$criteria->compare('TGLSUBMITDETAILSURTUGPN',$this->TGLSUBMITDETAILSURTUGPN,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>array (
                               'defaultOrder'=>'IDDETAILSURTUGPN DESC',
                         )
		));
	}
       
       //membuat tombol action notifikasi
        public function getListactionnotifikasi(){
           
            $a = $this->PREVIEW;
            $sql = "select PREVIEW from detailsurtugpn where PREVIEW='$a'";
            $b = Yii::app()->db->createCommand($sql)->queryScalar();

            $g = $this->PREVIEW;
            $sqli = "select PREVIEW from detailsurtugpn where PREVIEW='$g'";
            $c = Yii::app()->db->createCommand($sqli)->queryScalar();


            if ($b == 'Y') {
                   
                echo CHtml::link('<i class="fa fa-search"></i>', array('detailsurtugpn/view', 'id' => $this->IDDETAILSURTUGPN), array('class' => 'btn btn-sm blue')),'&nbsp';
                echo CHtml::link('<i class="fa fa-edit"></i>', array('surtugpn/updatenosurtugpnoperator','id'=>$this->IDPN), array('class' => 'btn btn-sm green'));
               
            } else {
               
                if ($c == 'N') {
                   
                    echo CHtml::link('<i class="fa fa-search"></i>', array('detailsurtugpn/view', 'id' => $this->IDDETAILSURTUGPN), array('class' => 'btn btn-sm red')),'&nbsp';
                    echo CHtml::link('<i class="fa fa-edit"></i>', array('surtugpn/updatenosurtugpnoperator','id'=>$this->IDPN), array('class' => 'btn btn-sm green'));
                } 
        }
        
                }
                
        public function getListgroupdosenpn(){
            $hasil='';
            if (count($this->groupsurtugpns)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->groupsurtugpns as $grouppn) {
            echo CHtml::link('<li>'.$grouppn->NOURUTGROUPPN.'<i class="fa fa-caret-right"></i>'.$grouppn->nIP->NAMA2).'</li>';
            }
            return $hasil;
            }
        
        public function getListgroupinstansipn(){
            $hasil='';
            if (count($this->groupinstansisurtugpns)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->groupinstansisurtugpns as $groupinstansipn) {
            echo CHtml::link('<li>'.$groupinstansipn->INSTANSIPN.'<i class="fa fa-caret-right"></i>'.$groupinstansipn->ALAMATINSTANSIPN.'<i class="fa fa-caret-right"></i>'.$groupinstansipn->KOTAINSTANSIPN).'</li>';
            }
            return $hasil;
            }     
            
        
        
        public function getAccsrt($val)
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
        
        public function getCetakbytgl(){
         $a=$this->IDPN;
        $sql="select TGLCETAKSURATPN from surtugpn where IDPN='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

       if ($b > 0) {
            echo CHtml::link('<i class="fa fa-print"></i> Cetak',array('cetak/surtugpn','id'=>$this->IDPN),array('target'=>'_blank','class'=>'btn btn-sm yellow'));
       
        } else {
            echo "<font color='red'> Tgl.cetak belum di set..</font>";
        }
    }    
    
    public function getCetakbyinstansi(){
         $a=$this->IDPN;
        $sql="select TGLCETAKSURATPN from surtugpn where IDPN='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

       if ($b > 0) {
            echo CHtml::link('<i class="fa fa-print"></i> Cetak',array('cetak/surtugpnbyinstansi','id'=>$this->IDPN),array('target'=>'_blank','class'=>'btn btn-sm purple'));
       
        } else {
            echo "<font color='red'> Tgl.cetak belum di set..</font>";
        }
    }    
    
       
}