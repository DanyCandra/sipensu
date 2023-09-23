<?php

/**
 * This is the model class for table "surtugmonitoring".
 *
 * The followings are the available columns in table 'surtugmonitoring':
 * @property integer $IDSURTUGMONITORING
 * @property integer $IDSUBDETAILSURPELPK
 * @property integer $IDJENISSURAT
 * @property string $NOSURTUGMONITORING
 * @property string $NIP
 * @property string $KETERANGANSURTUGMONITORING
 * @property string $TGLCETAKSURATMONITORING
 * @property string $TGLSUBMITSURTUGMONITORING
 * @property string $ACCSURTUGMONITORING
  * @property string $PREVIEW
 * @property string $TANGGALACCSURTUGMONITORING
 * @property string $ACCDEKANAT
 * @property string $ACCSUBKOR
 * @property string $TANGGALACCDEKANAT
 * @property string $TANGGALACCSUBKOR
 *
 * The followings are the available model relations:
 * @property Detailsurtugmonitoring[] $detailsurtugmonitorings
 * @property Groupsurtugmonitoring[] $groupsurtugmonitorings
 * @property Subdetailsurpelpk $iDSUBDETAILSURPELPK
 * @property Jenissurat $iDJENISSURAT
 * @property Msdos $nIP
 */
class Surtugmonitoring extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'surtugmonitoring';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('TGLSUBMITSURTUGMONITORING', 'required'),
            array('NIP', 'required'),
			array('IDSUBDETAILSURPELPK, IDJENISSURAT', 'numerical', 'integerOnly'=>true),
			array('NOSURTUGMONITORING', 'length', 'max'=>10),
			array('NIP', 'length', 'max'=>18),
            array('TGLCETAKSURATMONITORING, TANGGALACCSURTUGMONITORING, TANGGALACCDEKANAT, TANGGALACCSUBKOR', 'length', 'max'=>20),
            array('ACCSURTUGMONITORING', 'length', 'max'=>15),
			array('KETERANGANSURTUGMONITORING, ACCSURTUGMONITORING,TGLCETAKSURATMONITORING, PREVIEW', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDSURTUGMONITORING, IDSUBDETAILSURPELPK, IDJENISSURAT,ACCSURTUGMONITORING, ACCSUBKOR, ACCDEKANAT, 
			TANGGALACCSUBKOR, TANGGALACCDEKANAT, TANGGALACCSURTUGMONITORING, TGLCETAKSURATMONITORING ,NOSURTUGMONITORING, NIP, 
			KETERANGANSURTUGMONITORING, TGLSUBMITSURTUGMONITORING, PREVIEW', 'safe', 'on'=>'search'),
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
			'detailsurtugmonitorings' => array(self::HAS_MANY, 'Detailsurtugmonitoring', 'IDSURTUGMONITORING'),
			'groupsurtugmonitorings' => array(self::HAS_MANY, 'Groupsurtugmonitoring', 'IDSURTUGMONITORING'),
			'iDSUBDETAILSURPELPK' => array(self::BELONGS_TO, 'Subdetailsurpelpk', 'IDSUBDETAILSURPELPK'),
			'iDJENISSURAT' => array(self::BELONGS_TO, 'Jenissurat', 'IDJENISSURAT'),
			'nIP' => array(self::BELONGS_TO, 'Msdos', 'NIP'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDSURTUGMONITORING' => 'Kode Surat Monitoring ',
			'IDSUBDETAILSURPELPK' => 'Kode Surat Pelaksanaan',
			'IDJENISSURAT' => 'Jenis Surat',
			'NOSURTUGMONITORING' => 'No. Surat',
			'NIP' => 'Dosen Monitoring',
			'KETERANGANSURTUGMONITORING' => 'Keterangan',
             'TGLCETAKSURATMONITORING'=>'Tgl. Cetak Surat',
			'TGLSUBMITSURTUGMONITORING' => 'Tgl. Submit',
             'ACCSURTUGMONITORING' => 'Acc. Surat',
             'PREVIEW'=>'Status Baca',
            'TANGGALACCSURTUGMONITORING' => 'Tgl Acc',
            'ACCSUBKOR'=>'Acc Sub Koordinaotr',
            'TANGGALACCSUBKOR'=>'Tgl Acc Subkor',
            'ACCDEKANAT'=>'Acc Dekanat',
            'TANGGALACCDEKANAT' => 'Tgl Acc Dekanat',
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

		$criteria->compare('IDSURTUGMONITORING',$this->IDSURTUGMONITORING);
		$criteria->compare('IDSUBDETAILSURPELPK',$this->IDSUBDETAILSURPELPK);
		$criteria->compare('IDJENISSURAT',$this->IDJENISSURAT);
		$criteria->compare('NOSURTUGMONITORING',$this->NOSURTUGMONITORING,true);
		$criteria->compare('NIP',$this->NIP,true);
		$criteria->compare('KETERANGANSURTUGMONITORING',$this->KETERANGANSURTUGMONITORING,true);
                $criteria->compare('TGLCETAKSURATMONITORING',$this->TGLCETAKSURATMONITORING,true);
		$criteria->compare('TGLSUBMITSURTUGMONITORING',$this->TGLSUBMITSURTUGMONITORING,true);
                $criteria->compare('ACCSURTUGMONITORING',$this->ACCSURTUGMONITORING,true);
                 $criteria->compare('PREVIEW',$this->PREVIEW,true);
        $criteria->compare('TANGGALACCSURTUGMONITORING',$this->TANGGALACCSURTUGMONITORING,true);
        $criteria->compare('ACCSUBKOR',$this->ACCSUBKOR,true);
        $criteria->compare('TANGGALACCSUBKOR',$this->TANGGALACCSUBKOR,true);
        $criteria->compare('ACCDEKANAT',$this->ACCDEKANAT,true);
        $criteria->compare('TANGGALACCDEKANAT',$this->TANGGALACCDEKANAT,true);


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                         'sort'=>array (
                               'defaultOrder'=>'IDSURTUGMONITORING DESC',
                         )
                       
		));
	}
        
        //membuat tombol action notifikasi
        public function getListactionnotifikasi(){
           
            $a = $this->PREVIEW;
            $sql = "select PREVIEW from surtugmonitoring where PREVIEW='$a'";
            $b = Yii::app()->db->createCommand($sql)->queryScalar();

            $g = $this->PREVIEW;
            $sqli = "select PREVIEW from surtugmonitoring where PREVIEW='$g'";
            $c = Yii::app()->db->createCommand($sqli)->queryScalar();


            if ($b == 'Y') {
                   
                echo CHtml::link('<i data-feather="search"></i>', array('surtugmonitoring/view', 'id' => $this->IDSURTUGMONITORING), array('class' => 'btn btn-sm blue')),'&nbsp';
                echo CHtml::link('<i data-feather="edit"></i>', array('surtugmonitoring/update', 'id' => $this->IDSURTUGMONITORING), array('class' => 'btn btn-sm green'));
               
            } else {
               
                if ($c == 'N') {
                   
                    echo CHtml::link('<i data-feather="search"></i>', array('surtugmonitoring/view', 'id' => $this->IDSURTUGMONITORING), array('class' => 'btn btn-sm red')),'&nbsp';
                    echo CHtml::link('<i data-feather="edit"></i>', array('surtugmonitoring/update', 'id' => $this->IDSURTUGMONITORING), array('class' => 'btn btn-sm green'));
                } 
        }
        
                }
        
             public function getListsendsurtugmonitoring(){
            $hasil='';
            if (count($this->detailsurtugmonitorings)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->detailsurtugmonitorings as $sendsuratmonitoring) {
            echo CHtml::link('<h4>Permintaan Srt.Tugas Monitoring atas nama Dosen Supervisi&nbsp;: '.$sendsuratmonitoring->iDSURTUGMONITORING->nIP->NAMA2.'&nbsp;<i class="fa fa-hand-o-right"></i> Telah Terkirim ke :&nbsp'.$sendsuratmonitoring->iDGROUPS->DIVISI).'</li></h4>';
            }  
            return $hasil;
            }
            
            public function getListbuatnosurtugmonitoring(){
            $hasil='';
            if (count($this->detailsurtugmonitorings)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->detailsurtugmonitorings as $nosurattugmonitoring) {
            echo CHtml::link('<li>No.Surat : '.$this->NOSURTUGMONITORING.' &nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp'.$nosurattugmonitoring->iDGROUPS->DIVISI).'</li>';
            //echo CHtml::link('<li>No.Surat : '.$this->NOSURTUGMONITORING.'&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp'.$nosurattugmonitoring->iDGROUPS->DIVISI.'',array('surtugmonitoring/updatenosurtugmonitoring','id'=>$nosuratpk->IDSUBDETAILSURPELPK)).'</li>';
            }
            if (count($this->detailsurtugmonitorings)>0) echo '</ul>';
            //echo CHtml::link('<i class="fa fa-tag"></i> Buat No.Surat',array('subdetailsurpelpk/updatenosurpelpk','id'=>$this->IDSUBDETAILSURPELPK),array('class'=>'btn btn-sm green'));
            return $hasil;
            }
        
            public function getListtambahmahasiswasurtugmonitoring(){
            $hasil='';
            if (count($this->groupsurtugmonitorings)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->groupsurtugmonitorings as $groupelpk) {
            echo CHtml::link('<li>'.$groupelpk->nIM->NAMA.'<i class="fa fa-caret-right"></i>'.$groupelpk->NOURUTSURTUGMONITORING,array('groupsurtugmonitoring/update','id'=>$groupelpk->IDGROUPSURTUGMONITORING,'IDSURTUGMONITORING'=>$groupelpk->IDSURTUGMONITORING)).'</li>';
            }
            if (count($this->groupsurtugmonitorings)>0) echo '</ul>';
            //echo CHtml::link('<i class="fa fa-tag"></i> Tambah Group Mahasiswa',array('groupsurtugmonitoring/create','IDSURTUGMONITORING'=>$this->IDSURTUGMONITORING),array('class'=>'btn btn-sm green'));
            return $hasil;
            }   
            
             public function getListekstrakdatamonitoring(){
            $hasil='';
            if (count($this->groupsurtugmonitorings)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->groupsurtugmonitorings as $groupelpk) {
            echo CHtml::link('<li>'.$groupelpk->nIM->NAMA,array('groupsurtugmonitoring/update','id'=>$groupelpk->IDGROUPSURTUGMONITORING)).'</li>';
            }
            if (count($this->groupsurtugmonitorings)>0) echo '</ul>';
            //echo CHtml::link('<i class="fa fa-tag"></i> Tambah Group Mahasiswa',array('groupsurtugmonitoring/create','IDSURTUGMONITORING'=>$this->IDSURTUGMONITORING),array('class'=>'btn btn-sm green'));
            return $hasil;
            }   
            
             public function getMahasiswasurtugmonitoring(){
            $hasil='';
            if (count($this->groupsurtugmonitorings)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->groupsurtugmonitorings as $groupelpk) {
            echo CHtml::link('<li>'.$groupelpk->nIM->NAMA.'<i class="fa fa-caret-right"></i>'.$groupelpk->NOURUTSURTUGMONITORING).'</li>';
            }
            if (count($this->groupsurtugmonitorings)>0) echo '</ul>';
            //echo CHtml::link('<i class="fa fa-tag"></i> Tambah Group Mahasiswa',array('groupsurtugmonitoring/create','IDSURTUGMONITORING'=>$this->IDSURTUGMONITORING),array('class'=>'btn btn-sm green'));
            return $hasil;
            }   
            
             public function getStatussurat() {
       $hasil='';
             
                    if ($this->ACCSURTUGMONITORING=='Approve'){
                        $hasil = '<label class="btn btn-warning waves-effect waves-float waves-light">
                        <i data-feather="check-square"></i>
                        </label>';
                    }
                     else  if ($this->ACCSURTUGMONITORING=='Not Approved'){
                         $hasil = '<label class="btn btn-primary waves-effect waves-float waves-light">
                        <i data-feather="x-square"></i>
                        </label>';
                     }
                   else {
                       $hasil = '<label class="btn btn-danger waves-effect waves-float waves-light">
                        <i data-feather="alert-circle"></i>
                        </label>';
                   }

                  return $hasil;
             }

    public function getAccsubkor()
    {
        $hasil='';
        if($this->ACCSUBKOR=='Approve'){
            $hasil = '<label class="btn btn-warning waves-effect waves-float waves-light">
                        <i data-feather="check-square"></i>
                        </label>';
        }
        elseif($this->ACCSUBKOR=='Not Approved')
        {
            $hasil = '<label class="btn btn-primary waves-effect waves-float waves-light">
                        <i data-feather="x-square"></i>
                        </label>';
        }
        else{
            $hasil = '<label class="btn btn-danger waves-effect waves-float waves-light">
                        <i data-feather="alert-circle"></i>
                        </label>';
        }
        return $hasil;

    }

    public function getAccdekanat()
    {
        $hasil='';
        if($this->ACCDEKANAT=='Approve'){
            $hasil = '<label class="btn btn-warning waves-effect waves-float waves-light">
                        <i data-feather="check-square"></i>
                        </label>';
        }
        elseif($this->ACCDEKANAT=='Not Approved')
        {
            $hasil = '<label class="btn btn-primary waves-effect waves-float waves-light">
                        <i data-feather="x-square"></i>
                        </label>';
        }
        else{
            $hasil = '<label class="btn btn-danger waves-effect waves-float waves-light">
                        <i data-feather="alert-circle"></i>
                        </label>';
        }
        return $hasil;

    }
    
     public function getCetakbytgl(){
         $a=$this->IDSURTUGMONITORING;
        $sql="select TGLCETAKSURATMONITORING from surtugmonitoring where IDSURTUGMONITORING='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

       if ($b > 0) {
            echo CHtml::link('<i class="fa fa-print"></i> Cetak',array('cetak/surtugmonitoring','id'=>$this->IDSURTUGMONITORING),array('target'=>'_blank','class'=>'btn btn-sm yellow'));
       
        } else {
            echo "<font color='red'> Tgl.cetak belum di set..</font>";
        }
    }       
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Surtugmonitoring the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
