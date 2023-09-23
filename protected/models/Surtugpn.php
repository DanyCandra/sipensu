<?php

/**
 * This is the model class for table "surtugpn".
 *
 * The followings are the available columns in table 'surtugpn':
 * @property integer $IDPN
 * @property integer $IDJENISSURAT
 * @property string $NOSURATPN
 * @property string $JUDULPN
 * @property string $WAKTUDATAPN
 * @property string $KETERANGANSURTUGPN
 * @property string $TGLCETAKSURATPN
 * @property string $TGLSUBMITPN
 * @property string $ACCSURTUGPN
 * @property string $ACCSUBKOR
 * @property string $TANGGALACCSUBKOR
 * @property string $ACCDEKANAT
 * @property string $TANGGALACCDEKANAT
 * @property string $TANGGALACCSURTUGPN
 *
 * The followings are the available model relations:
 * @property Detailsurtugpn[] $detailsurtugpns
 * @property Groupsurtugpn[] $groupsurtugpns
 * @property Jenissurat $iDJENISSURAT
 * 
 * @property Groupinstansisurtugpn[] $groupinstansisurtugpns
 */
class Surtugpn extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Surtugpn the static model class
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
		return 'surtugpn';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('TGLSUBMITPN', 'required'),
                        array('JUDULPN,WAKTUDATAPN,', 'required'),
			array('IDJENISSURAT', 'numerical', 'integerOnly'=>true),
			array('NOSURATPN', 'length', 'max'=>50),
			array('JUDULPN', 'length', 'max'=>500),
			array('WAKTUDATAPN', 'length', 'max'=>50),
                        array('KETERANGANSURTUGPN', 'length', 'max'=>100),
                        array(',TGLCETAKSURATPN, ACCSURTUGPN, ACCSUBKOR, TANGGALACCSUBKOR, ACCDEKANAT, TANGGALACCDEKANAT, TANGGALACCSURTUGPN', 'safe'),
                        array('ACCSURTUGPN, ACCSUBKOR, ACCDEKANAT', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IDPN, IDJENISSURAT, NOSURATPN,ACCSURTUGPN, ACCSUBKOR, ACCDEKANAT, JUDULPN, WAKTUDATAPN, 
			TGLSUBMITPN, TGLCETAKSURATPN, TANGGALACCDEKANAT, TANGGALACCSURTUGPN', 'safe', 'on'=>'search'),
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
			'detailsurtugpns' => array(self::HAS_MANY, 'Detailsurtugpn', 'IDPN'),
			'groupsurtugpns' => array(self::HAS_MANY, 'Groupsurtugpn', 'IDPN'),
			'iDJENISSURAT' => array(self::BELONGS_TO, 'Jenissurat', 'IDJENISSURAT'),
                    
                         //relation menampilkan groupinstansi
                        'groupinstansisurtugpns'=>array(self::HAS_MANY,'Groupinstansisurtugpn','IDPN'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDPN' => 'Kode Permintaan Srt.Ijin Penelitian',
			'IDJENISSURAT' => 'Jenis Surat',
			'NOSURATPN' => 'No. Surat',
			'JUDULPN' => 'Judul Penelitian',
                       	'WAKTUDATAPN' => 'Waktu Perolehan data Penelitian',
                        'KETERANGANSURTUGPN' => 'Keterangan',
                        'TGLCETAKSURATPN'=>'Tgl.Surat/Cetak',
			'TGLSUBMITPN' => 'Tgl. Submit',
                        'ACCSURTUGPN' => 'Acc. Surat',
                        'ACCSUBKOR'=>'Acc Subkor', 
                        'TANGGALACCSUBKOR'=>'Tgl Acc Subkor', 
                        'ACCDEKANAT'=>'Acc Dekanat', 
                        'TANGGALACCDEKANAT'=>'Tgl Acc Dekanat', 
                        'TANGGALACCSURTUGPN'=> 'Tgl Acc Surat',

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

		$criteria->compare('IDPN',$this->IDPN);
		$criteria->compare('IDJENISSURAT',$this->IDJENISSURAT);
		$criteria->compare('NOSURATPN',$this->NOSURATPN,true);
		$criteria->compare('JUDULPN',$this->JUDULPN,true);
                $criteria->compare('WAKTUDATAPN',$this->WAKTUDATAPN,true);
                $criteria->compare('KETERANGANSURTUGPN',$this->KETERANGANSURTUGPN,true);
                $criteria->compare('TGLCETAKSURATPN',$this->TGLCETAKSURATPN,true);
		$criteria->compare('TGLSUBMITPN',$this->TGLSUBMITPN,true);
                $criteria->compare('ACCSURTUGPN',$this->ACCSURTUGPN,true);
                $criteria->compare('ACCSUBKOR', $this->ACCSUBKOR, true);
                $criteria->compare('TANGGALACCSUBKOR', $this->TANGGALACCSUBKOR, true);
                $criteria->compare('ACCDEKANAT', $this->ACCDEKANAT, true);
                $criteria->compare('TANGGALACCDEKANAT', $this->TANGGALACCDEKANAT, true);
                $criteria->compare('TANGGALACCSURTUGPN', $this->TANGGALACCSURTUGPN, true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                         'sort'=>array (
                               'defaultOrder'=>'TGLSUBMITPN DESC',
                         )
		));
	}
      
           public function getListbuatnosuratpn(){
            $hasil='';
            if (count($this->detailsurtugpns)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->detailsurtugpns as $nosuratpn) {
            //echo CHtml::link('<li>No.Surat : '.$nosuratpn->iDPN->NOSURATPN.'&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp'.$nosuratpn->iDGROUPS->DIVISI.'',array('surtugpn/updatenosurtugpn','id'=>$nosuratpn->IDPN)).'</li>';
            echo CHtml::link('<li>No.Surat : '.$nosuratpn->iDPN->NOSURATPN.'&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp'.$nosuratpn->iDGROUPS->DIVISI.'').'</li>';
            
     
            }
            if (count($this->detailsurtugpns)>0) echo '</ul>';
            //echo CHtml::link('<i class="fa fa-tag"></i> Buat No.Surat',array('surtugpn/updatenosurtugpn','id'=>$this->IDPN),array('class'=>'btn btn-sm green'));
            return $hasil;
            }
            
            public function getListsendsuratpn(){
            $hasil='';
            if (count($this->detailsurtugpns)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->detailsurtugpns as $nosuratpn) {
            echo CHtml::link('<h4>Permintaan Surat Penelitian dengan judul&nbsp;: '.$nosuratpn->iDPN->JUDULPN.'&nbsp;<i class="fa fa-hand-o-right"></i> Telah Terkirim ke :&nbsp'.$nosuratpn->iDGROUPS->DIVISI).'</li></h4>';
            }  
            return $hasil;
       }
       
       public function getListtambahdosenpn(){
            $hasil='';
            if (count($this->groupsurtugpns)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->groupsurtugpns as $grouppn) {
            echo CHtml::link('<li>'.$grouppn->nIP->NAMA2.'<i class="fa fa-caret-right"></i>'.$grouppn->NOURUTGROUPPN,array('groupsurtugpn/update','id'=>$grouppn->IDGROUPPN)).'</li>';
            }
            if (count($this->groupsurtugpns)>0) echo '</ul>';
            //echo CHtml::link('<i class="fa fa-tag"></i> Tambah Group Dosen',array('groupsurtugpn/create','IDPN'=>$this->IDPN),array('class'=>'btn btn-sm green'));
            return $hasil;
            }
            
       public function getDosenpn(){
            $hasil='';
            if (count($this->groupsurtugpns)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->groupsurtugpns as $grouppn) {
            echo CHtml::link('<li>'.$grouppn->nIP->NAMA2.'<i class="fa fa-caret-right"></i>'.$grouppn->NOURUTGROUPPN).'</li>';
            }
            if (count($this->groupsurtugpns)>0) echo '</ul>';
            //echo CHtml::link('<i class="fa fa-tag"></i> Tambah Group Dosen',array('groupsurtugpn/create','IDPN'=>$this->IDPN),array('class'=>'btn btn-sm green'));
            return $hasil;
            }  
            
       public function getListinstansipn(){
            $a=$this->IDPN;
            $sql="select TGLCETAKSURATPN from surtugpn where IDPN='$a'";
            $b = Yii::app()->db->createCommand($sql)->queryScalar();
            
            $hasil='';
            if (count ($this->groupinstansisurtugpns)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->groupinstansisurtugpns as $groupinstansipn) {
            echo CHtml::link('<li>'.$groupinstansipn->INSTANSIPN.'<i class="fa fa-caret-right"></i>'.$groupinstansipn->NOURUTINSTANSIPN,array('groupinstansisurtugpn/update','id'=>$groupinstansipn->IDGROUPINSTANSIPN)).'<i class="fa fa-caret-right"></i>'.'</li>';
            //tombol cetak by instansi
            if ($b > 0) {
            echo CHtml::link('<i data-feather="printer"></i> Cetak QR',array('cetak/groupinstansisurtugpn','id'=>$groupinstansipn->IDGROUPINSTANSIPN, 'tipe'=>'1'),array('target'=>'_blank','class'=>'btn btn-primary'));
            echo CHtml::link('<i data-feather="printer"></i> Cetak ',array('cetak/groupinstansisurtugpn','id'=>$groupinstansipn->IDGROUPINSTANSIPN, 'tipe'=>'2'),array('target'=>'_blank','class'=>'btn btn-warning'));
            }
             else {
            echo "<font color='red'> Tgl.cetak belum di set..</font>";
            }
            }
            
            }
            
        public function getGroupinstansipn(){
           
            
            $hasil='';
            if (count ($this->groupinstansisurtugpns)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->groupinstansisurtugpns as $groupinstansipn) {
            echo CHtml::link('<li>'.$groupinstansipn->INSTANSIPN.'<i class="fa fa-caret-right"></i>'.$groupinstansipn->NOURUTINSTANSIPN,array('groupinstansisurtugpn/update','id'=>$groupinstansipn->IDGROUPINSTANSIPN)).'<i class="fa fa-caret-right"></i>'.'</li>';
             }
            if (count($this->groupinstansisurtugpns)>0) echo '</ul>';
            //echo CHtml::link('<i class="fa fa-tag"></i> Tambah Group Dosen',array('groupsurtugpn/create','IDPN'=>$this->IDPN),array('class'=>'btn btn-sm green'));
            return $hasil;
            }   
     
        
         public function getCetakbytgl() {
        $a = $this->IDPN;
        $sql = "select TGLCETAKSURATPN from surtugpn where IDPN='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        if ($b > 0) {
            echo CHtml::link('<i data-feather="printer"></i> QR', array('cetak/surtugpn', 'id' => $this->IDPN, 'tipe'=>'1'), array('target' => '_blank', 'class' => 'btn btn-gradient-primary'));
            echo CHtml::link('<i data-feather="printer"></i> No QR', array('cetak/surtugpn', 'id' => $this->IDPN, 'tipe'=>'2'), array('target' => '_blank', 'class' => 'btn btn-gradient-warning'));
        } else {
            echo "<font color='red'> Tgl.cetak belum di set..</font>";
        }
        }

    public function getCetakbyinstansi(){
         $a=$this->IDPN;
        $sql="select TGLCETAKSURATPN from surtugpn where IDPN='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

       if ($b > 0) {
            echo CHtml::link('<i data-feather="printer"></i>',array('cetak/surtugpnbyinstansi','id'=>$this->IDPN),array('target'=>'_blank','class'=>'btn btn-gradient-warning'));

        } else {
            echo "<font color='red'> Tgl.cetak belum di set..</font>";
        }
    } 
    
     public function getAccsurat(){
             $hasil='';
             
                    if ($this->ACCSURTUGPN=='Approve'){
                        $hasil='<label class="btn btn-warning waves-effect waves-float waves-light"><i data-feather="check-square"></i></label>';
                    }
                     else  if ($this->ACCSURTUGPN=='Not Approved')
                     {
                         $hasil='<label class="btn btn-primary waves-effect waves-float waves-light"><i data-feather="x-square"></i></label>';
                     }
                   else {
                       $hasil='<label class="btn btn-danger waves-effect waves-float waves-light"><i data-feather="alert-circle"></i></label>';
                   }
                     {
                        return $hasil;
                     }
             }

             public function getAccsubkor()
             {
                 $hasil='';
                 if($this->ACCSUBKOR=='Approve')
                 {
                     $hasil='<label class="btn btn-warning waves-effect waves-float waves-light"><i data-feather="check-square"></i></label>';
                 }
                 elseif($this->ACCSUBKOR=='Not Approved')
                 {
                     $hasil='<label class="btn btn-primary waves-effect waves-float waves-light"><i data-feather="x-square"></i></label>';
                 }
                 else{
                     $hasil='<label class="btn btn-danger waves-effect waves-float waves-light"><i data-feather="alert-circle"></i></label>';
                 }
                 {
                     return $hasil;
                 }
                 
             }
         
             public function getAccdekanat()
             {
                 $hasil='';
                 if($this->ACCDEKANAT=='Approve'){
                     $hasil='<label class="btn btn-warning waves-effect waves-float waves-light"><i data-feather="check-square"></i></label>';
                 }
                 elseif($this->ACCDEKANAT=='Not Approved')
                 {
                     $hasil='<label class="btn btn-primary waves-effect waves-float waves-light"><i data-feather="x-square"></i></label>';
                 }
                 else
                 {
                     $hasil='<label class="btn btn-danger waves-effect waves-float waves-light"><i data-feather="alert-circle"></i></label>';
                 }
                 {
                     return $hasil;
                 }
             }
            
           
}