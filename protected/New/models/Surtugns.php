<?php

/**
* This is the model class for table "surtugns".
*
* The followings are the available columns in table 'surtugns':
* @property integer $IDSURTUGNS
* @property string $NIP
* @property integer $IDJABATANAKADEMIK
* @property integer $IDJENISSURAT
* @property integer $IDPANGGOL
* @property string $NOSURTUGNS
* @property string $ISISURTUGNS1
* @property string $ISISURTUGNS
* @property string $INSTANSINS
* @property string $ALAMATINSTANSINS
* @property string $TGLACARANS
* @property string $KETERANGANNS
* @property string $TGLCETAKSURATNS
* @property string $TGLSUBMITNS
* @property string $ACCSURTUGNS
* @property string $ACCSUBKOR
* @property string $ACCDEKANAT
* @property string $TANGGALACCSUBKOR
* @property string $TANGGALACCDEKANAT
* @property string $TANGGALACCSURTUGNS
*
* The followings are the available model relations:
* @property Detailsurtugns[] $detailsurtugns
* @property Msdos $nIP
* @property Panggol $iDPANGGOL
* @property Jabatanakademik $iDJABATANAKADEMIK
* @property Jenissurat $iDJENISSURAT
* @property Tembusansurtugns [] $tembusansurtugns
*/
class Surtugns extends CActiveRecord
{
/**
 * Returns the static model of the specified AR class.
 * @return Surtugns the static model class
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
    return 'surtugns';
}

/**
 * @return array validation rules for model attributes.
 */
public function rules()
{
    // NOTE: you should only define rules for those attributes that
    // will receive user inputs.
    return array(
        //array('TGLSUBMITNS', 'required'),
                    array('NIP,IDPANGGOL,IDJABATANAKADEMIK,ISISURTUGNS,INSTANSINS,ALAMATINSTANSINS', 'required'),
        array('IDJABATANAKADEMIK, IDJENISSURAT, IDPANGGOL', 'numerical', 'integerOnly'=>true),
        array('NIP', 'length', 'max'=>18),
        array('NOSURTUGNS', 'length', 'max'=>50),
        array('ISISURTUGNS,ISISURTUGNS1', 'length', 'max'=>500),
        array('INSTANSINS', 'length', 'max'=>100),
        array('TGLACARANS', 'length', 'max'=>100),
        array('ALAMATINSTANSINS', 'length', 'max'=>250),
        array('KETERANGANNS', 'length', 'max'=>150),
        array('ACCSURTUGNS, ACCSUBKOR, ACCDEKANAT', 'length', 'max'=>15),
        array('TGLACARANS,TGLCETAKSURATNS, ACCSURTUGNS, TANGGALACCSUBKOR, TANGGALACCDEKANAT, TANGGALACCSURTUGNS', 'safe'),
        // The following rule is used by search().
        // Please remove those attributes that should not be searched.
        array('IDSURTUGNS, NIP, IDJABATANAKADEMIK,ACCSURTUGNS, IDJENISSURAT, IDPANGGOL, NOSURTUGNS, ISISURTUGNS1,ISISURTUGNS, 
        INSTANSINS, ALAMATINSTANSINS, TGLACARANS, TGLCETAKSURATNS, KETERANGANNS, TGLSUBMITNS', 'safe', 'on'=>'search'),
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
        'detailsurtugns' => array(self::HAS_MANY, 'Detailsurtugns', 'IDSURTUGNS'),
        'nIP' => array(self::BELONGS_TO, 'Msdos', 'NIP'),
        'iDPANGGOL' => array(self::BELONGS_TO, 'Panggol', 'IDPANGGOL'),
        'iDJABATANAKADEMIK' => array(self::BELONGS_TO, 'Jabatanakademik', 'IDJABATANAKADEMIK'),
        'iDJENISSURAT' => array(self::BELONGS_TO, 'Jenissurat', 'IDJENISSURAT'),
        'tembusansurtugns' => array(self::HAS_MANY, 'Tembusansurtugns', 'IDSURTUGNS'),
    );
}

/**
 * @return array customized attribute labels (name=>label)
 */
public function attributeLabels()
{
    return array(
        'IDSURTUGNS' => 'Kode Surat Tugas',
        'NIP' => 'NIP',
        'IDJABATANAKADEMIK' => 'Kode Jabatan Akademik',
        'IDJENISSURAT' => 'Jenis Surat',
        'IDPANGGOL' => 'Kode Pangkat',
        'NOSURTUGNS' => 'No. Surat',
        'ISISURTUGNS1' => 'Dasar Surat Tugas',
        'ISISURTUGNS' => 'Detail Surat Tugas',
        'INSTANSINS' => 'Instansi',
        'ALAMATINSTANSINS' => 'Alamat Instansi/Dinas/Kantor',
        'TGLACARANS' => 'Tgl. Acara',
        'TGLCETAKSURATNS' => 'Tgl.Surat/Cetak ',
        'KETERANGANNS' => 'Keterangan',
        'TGLSUBMITNS' => 'Tgl. Submit',
        'ACCSURTUGNS' => 'Acc. Surat',
        'ACCSUBKOR' => 'Acc Sub Kordinator',
        'ACCDEKANAT' => 'Acc Dekanat',
        'TANGGALACCSUBKOR' => 'Tgl Acc Subkor',
        'TANGGALACCDEKANAT' => 'Tgl Acc Dekanat',
        'TANGGALACCSURTUGNS' => 'Tgl Acc Surat',
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

    $criteria->compare('IDSURTUGNS',$this->IDSURTUGNS);
    $criteria->compare('NIP',$this->NIP,true);
    $criteria->compare('IDJABATANAKADEMIK',$this->IDJABATANAKADEMIK);
    $criteria->compare('IDJENISSURAT',$this->IDJENISSURAT);
    $criteria->compare('IDPANGGOL',$this->IDPANGGOL);
    $criteria->compare('NOSURTUGNS',$this->NOSURTUGNS,true);
    $criteria->compare('ISISURTUGNS1',$this->ISISURTUGNS1,true);
    $criteria->compare('ISISURTUGNS',$this->ISISURTUGNS,true);
    $criteria->compare('INSTANSINS',$this->INSTANSINS,true);
    $criteria->compare('ALAMATINSTANSINS',$this->ALAMATINSTANSINS,true);
    $criteria->compare('TGLACARANS',$this->TGLACARANS,true);
    $criteria->compare('TGLCETAKSURATNS',$this->TGLCETAKSURATNS,true);
    $criteria->compare('KETERANGANNS',$this->KETERANGANNS,true);
    $criteria->compare('TGLSUBMITNS',$this->TGLSUBMITNS,true);
    $criteria->compare('ACCSURTUGNS',$this->ACCSURTUGNS,true);
    $criteria->compare('ACCSUBKOR', $this->ACCSUBKOR, true);
    $criteria->compare('ACCDEKANAT', $this->ACCDEKANAT, true);
    $criteria->compare('TANGGALACCSUBKOR', $this->TANGGALACCSUBKOR,true);
    $criteria->compare('TANGGALACCDEKANAT', $this->TANGGALACCDEKANAT, true);
    $criteria->compare('TANGGALACCSURTUGNS', $this->TANGGALACCSURTUGNS, true);

    return new CActiveDataProvider($this, array(
        'criteria'=>$criteria,
                     'sort'=>array (
                           'defaultOrder'=>'TGLSUBMITNS DESC',
                     )
    ));
}

public function beforeSave() {

if ($this->isNewRecord) {
    $this->TGLSUBMITNS = new CDbExpression('NOW()');
} else {
    $this->TGLSUBMITNS = new CDbExpression('NOW()');
}

return parent::beforeSave();
}

    public function getListbuatnosuratns(){
        $hasil='';
        if (count($this->detailsurtugns)>0) echo '<ul style="padding-left:15px">';
        foreach ($this->detailsurtugns as $nosuratns) {
        //echo CHtml::link('<li>No.Surat : '.$nosuratns->iDSURTUGNS->NOSURTUGNS.'&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp'.$nosuratns->iDGROUPS->DIVISI.'',array('surtugns/updatenosurtugns','id'=>$nosuratns->IDSURTUGNS)).'</li>';
       echo CHtml::link('<li>No.Surat : '.$nosuratns->iDSURTUGNS->NOSURTUGNS.'&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp'.$nosuratns->iDGROUPS->DIVISI.'').'</li>';

        }
        if (count($this->detailsurtugns)>0) echo '</ul>';
        //echo CHtml::link('<i class="fa fa-tag"></i> Buat No.Surat',array('surtugns/updatenosurtugns','id'=>$this->IDSURTUGNS),array('class'=>'btn btn-sm green'));
        return $hasil;
        }
   public function getListsendsuratns(){
        $hasil='';
        if (count($this->detailsurtugns)>0) echo '<ul style="padding-left:15px">';
        foreach ($this->detailsurtugns as $nosuratns) {
        echo CHtml::link('<h4>Permintaan Surat Pembicara/Narasumber atas nama&nbsp;: '.$nosuratns->iDSURTUGNS->nIP->NAMA2.'&nbsp;<i class="fa fa-hand-o-right"></i> Telah Terkirim ke :&nbsp'.$nosuratns->iDGROUPS->DIVISI).'</li></h4>';
        }
        return $hasil;
   }

    public function getAccsurat(){
         $hasil='';

                if ($this->ACCSURTUGNS=='Approve'){
                    $hasil='<label class="btn btn-warning waves-effect waves-float waves-light"><i data-feather="check-square"></i></label>';
                }
                 else if ($this->ACCSURTUGNS=='Not Approved'){
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
        else {
            $hasil='<label class="btn btn-danger waves-effect waves-float waves-light"><i data-feather="alert-circle"></i></label>';
        }
        {
            return $hasil;
        }

    }

         public function getCetakbytgl() {
    $a = $this->IDSURTUGNS;
    $sql = "select TGLCETAKSURATNS from surtugns where IDSURTUGNS='$a'";
    $b = Yii::app()->db->createCommand($sql)->queryScalar();

    if ($b > 0) {
        echo CHtml::link('<i data-feather="printer"></i>', array('cetak/surtugns', 'id' => $this->IDSURTUGNS), array('target' => '_blank', 'class' => 'btn btn-gradient-warning'));
    } else {
        echo "<font color='red'> Tgl.cetak belum di set..</font>";
    }
}



}