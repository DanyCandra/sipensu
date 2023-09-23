<?php

/**
 * This is the model class for table "surtugpm".
 *
 * The followings are the available columns in table 'surtugpm':
 * @property integer $IDPM
 * @property integer $IDJENISSURAT
 * @property string $NIP
 * @property integer $IDPANGGOL
 * @property integer $IDJABATANAKADEMIK
 * @property string $NOSURATPM
 * @property string $JUDULPM
 * @property string $TGLDILAKSANAKANPM
 * @property string $INSTANSIPM
 * @property string $ALAMATINSTANSIPM
 * @property string $KETERANGANPM
 * @property string $TGLCETAKSURAT
 * @property string $TGLSUBMITPM
 * @property string $ACCSURTUGPM
 * @property string $ACCSUBKOR
 * @property string $ACCDEKANAT
 * @property string $TANGGALACCSUBKOR
 * @property string $TANGGALACCDEKANAT
 * @property string $TANGGALACCSURTUGPM
 *
 * The followings are the available model relations:
 * @property Detailsurtugpm[] $detailsurtugpms
 * @property Jenissurat $iDJENISSURAT
 * @property Panggol $iDPANGGOL
 * @property Jabatanakademik $iDJABATANAKADEMIK
 * @property Msdos $nIP
 */
class Surtugpm extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @return Surtugpm the static model class
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
        return 'surtugpm';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('IDPANGGOL,IDJABATANAKADEMIK, NIP,IDPANGGOL,JUDULPM,INSTANSIPM, TGLDILAKSANAKANPM, ALAMATINSTANSIPM', 'required'),
            array('IDJENISSURAT, IDPANGGOL, IDJABATANAKADEMIK', 'numerical', 'integerOnly'=>true),
            array('NIP', 'length', 'max'=>18),
            array('ACCSURTUGPM, ACCSUBKOR, ACCDEKANAT', 'length', 'max'=>15),
            array('NOSURATPM', 'length', 'max'=>50),
            array('JUDULPM', 'length', 'max'=>500),
            array('INSTANSIPM', 'length', 'max'=>80),
            array('KETERANGANPM', 'length', 'max'=>100),
            array('TGLDILAKSANAKANPM,TGLCETAKSURAT, ALAMATINSTANSIPM', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('IDPM, IDJENISSURAT, NIP, IDPANGGOL, ACCSURTUGPM, ACCSUBKOR, ACCDEKANAT, IDJABATANAKADEMIK,ACCSURTUGPM, NOSURATPM, JUDULPM, 
			TGLDILAKSANAKANPM, TGLCETAKSURAT,INSTANSIPM, ALAMATINSTANSIPM, KETERANGANPM, TGLSUBMITPM, TANGGALACCSUBKOR, TANGGALACCDEKANAT, TANGGALACCSURTUGPM'
            , 'safe', 'on'=>'search'),
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
            'detailsurtugpms' => array(self::HAS_MANY, 'Detailsurtugpm', 'IDPM'),
            'iDJENISSURAT' => array(self::BELONGS_TO, 'Jenissurat', 'IDJENISSURAT'),
            'iDPANGGOL' => array(self::BELONGS_TO, 'Panggol', 'IDPANGGOL'),
            'iDJABATANAKADEMIK' => array(self::BELONGS_TO, 'Jabatanakademik', 'IDJABATANAKADEMIK'),
            'nIP' => array(self::BELONGS_TO, 'Msdos', 'NIP'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'IDPM' => 'Kode Permintaan Srt.Pengabdian',
            'IDJENISSURAT' => 'Jenis Surat',
            'NIP' => 'NIP',
            'IDPANGGOL' => 'Kode Pangkat & Golongan',
            'IDJABATANAKADEMIK' => 'Kode Jabatan Akademik',
            'NOSURATPM' => 'No. Surat ',
            'JUDULPM' => 'Judul Pengabdian',
            'TGLDILAKSANAKANPM' => 'Tgl. Dilaksanakan',
            'INSTANSIPM' => 'Instansi/Dinas/Kantor',
            'ALAMATINSTANSIPM' => 'Alamat Instansi/Dinas/Kantor',
            'KETERANGANPM' => 'Keterangan',
            'TGLCETAKSURAT'=> 'Tgl.Surat/Cetak',
            'TGLSUBMITPM' => 'Tgl Submit',
            'ACCSURTUGPM' => 'Acc Surat',
            'ACCSUBKOR' => 'Subkor',
            'ACCDEKANAT' => 'Dekanat',
            'TANGGALACCSUBKOR' => 'Tgl Paraf Subkor',
            'TANGGALACCDEKANAT' => 'Tgl Paraf Dekanat',
            'TANGGALACCSURTUGPM' => 'Tgl Disetujui',
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

        $criteria->compare('IDPM',$this->IDPM);
        $criteria->compare('IDJENISSURAT',$this->IDJENISSURAT);
        $criteria->compare('NIP',$this->NIP,true);
        $criteria->compare('IDPANGGOL',$this->IDPANGGOL);
        $criteria->compare('IDJABATANAKADEMIK',$this->IDJABATANAKADEMIK);
        $criteria->compare('NOSURATPM',$this->NOSURATPM,true);
        $criteria->compare('JUDULPM',$this->JUDULPM,true);
        $criteria->compare('TGLDILAKSANAKANPM',$this->TGLDILAKSANAKANPM,true);
        $criteria->compare('INSTANSIPM',$this->INSTANSIPM,true);
        $criteria->compare('ALAMATINSTANSIPM',$this->ALAMATINSTANSIPM,true);
        $criteria->compare('KETERANGANPM',$this->KETERANGANPM,true);
        $criteria->compare('TGLCETAKSURAT',$this->TGLCETAKSURAT,true);
        $criteria->compare('TGLSUBMITPM',$this->TGLSUBMITPM,true);
        $criteria->compare('ACCSURTUGPM',$this->ACCSURTUGPM,true);
        $criteria->compare('ACCSUBKOR', $this->ACCSUBKOR, true);
        $criteria->compare('ACCDEKANAT', $this->ACCDEKANAT,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
            'sort'=>array (
                'defaultOrder'=>'IDPM DESC',
            )
        ));
    }
    public function getListbuatnosuratpm(){
        $hasil='';
        if (count($this->detailsurtugpms)>0) echo '<ul style="padding-left:15px">';
        foreach ($this->detailsurtugpms as $nosuratpm) {
            //echo CHtml::link('<li>No.Surat : '.$nosuratpm->iDPM->NOSURATPM.'&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp'.$nosuratpm->iDGROUPS->DIVISI.'',array('surtugpm/updatenosurtugpm','id'=>$nosuratpm->IDPM)).'</li>';
            echo CHtml::link('<li>No.Surat : '.$nosuratpm->iDPM->NOSURATPM.'&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp'.$nosuratpm->iDGROUPS->DIVISI.'').'</li>';


        }
        if (count($this->detailsurtugpms)>0) echo '</ul>';
        //echo CHtml::link('<i class="fa fa-tag"></i> Buat No.Surat',array('surtugpm/updatetglsurtugpm','id'=>$this->IDPM),array('class'=>'btn btn-sm green'));
        return $hasil;
    }
    public function getListsendsuratpm(){
        $hasil='';
        if (count($this->detailsurtugpms)>0) echo '<ul style="padding-left:15px">';
        foreach ($this->detailsurtugpms as $nosuratpm) {
            echo CHtml::link('<h4>Permintaan Surat PPM atas nama&nbsp;: '.$nosuratpm->iDPM->nIP->NAMA2.'&nbsp;<i class="fa fa-hand-o-right"></i> Telah Terkirim ke :&nbsp'.$nosuratpm->iDGROUPS->DIVISI).'</li></h4>';
        }
        return $hasil;
    }

    public function getCetakbytgl()
    {
        $a=$this->IDPM;
        $sql="select TGLCETAKSURAT from surtugpm where IDPM='$a'";
		//$sql="select TGLCETAKSURAT from surtugpm where IDPM='$a' and ACCDEKANAT='Approve'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        if ($b > 0) {
            echo CHtml::link('<i data-feather="printer"></i> QR',array('cetak/surtugpm','id'=>$this->IDPM, 'tipe'=>'1'),array('target'=>'_blank','class'=>'btn btn-gradient-primary'));
            echo CHtml::link('<i data-feather="printer"></i> No QR',array('cetak/surtugpm','id'=>$this->IDPM, 'tipe'=>'2'),array('target'=>'_blank','class'=>'btn btn-gradient-danger'));

        } else {
            echo "<font color='red'> Tgl.cetak belum di set atau surat belum di ACC</font>";
        }
    }

    public function getCetaksuratpenyusunanpmbytgl(){
        $a=$this->IDPM;
		$sql="select TGLCETAKSURAT from surtugpm where IDPM='$a'";
       // $sql="select TGLCETAKSURAT from surtugpm where IDPM='$a' and ACCDEKANAT='Approve'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        if ($b > 0) {
            echo CHtml::link('<i data-feather="printer"></i>QR',array('cetak/surtugpenyusunanpm','id'=>$this->IDPM, 'tipe'=>'1'),array('target'=>'_blank','class'=>'btn btn-gradient-primary'));
            echo CHtml::link('<i data-feather="printer"></i>No QR',array('cetak/surtugpenyusunanpm','id'=>$this->IDPM, 'tipe'=>'2'),array('target'=>'_blank','class'=>'btn btn-gradient-danger'));

        } else {
            echo "<font color='red'> Tgl.cetak belum di set atau surat belum di ACC</font>";
        }
    }

    public function getAccsurat(){
        $hasil='';

        if ($this->ACCSURTUGPM=='Approve')
        {
            $hasil='<label class="btn btn-warning waves-effect waves-float waves-light"><i data-feather="check-square"></i></label>';

        }
        else  if ($this->ACCSURTUGPM=='Not Approved'){
            $hasil='<label class="btn btn-primary waves-effect waves-float waves-light"><i data-feather="x-square"></i></label>';
        }
        else {
            $hasil='<label class="btn btn-danger waves-effect waves-float waves-light"><i data-feather="alert-circle"></i></label>';
        }
        {
            return $hasil;  }
    }

    public function getAccsubkor()
    {
        $hasil='';
        if($this->ACCSUBKOR=='Approve'){
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
        else{
            $hasil='<label class="btn btn-danger waves-effect waves-float waves-light"><i data-feather="alert-circle"></i></label>';
        }
        {
            return $hasil;
        }

    }
}




 
