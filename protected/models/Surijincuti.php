<?php

/**
 * This is the model class for table "surijincuti".
 *
 * The followings are the available columns in table 'surijincuti':
 * @property integer $IDIJINCUTI
 * @property integer $IDJENISSURAT
 * @property string $NOSURATIJINCUTI
 * @property string $NIM
 * @property string $LAMAIJINCUTI
 * @property string $THAKADEMIKCUTI
 * @property string $SEMESTERCUTI
 * @property integer $iDTASEMESTER
 * @property string $SKSCAPAI
 * @property string $IPKCAPAI
 * @property string $KETERANGANIJINCUTI
 * @property string $STATUSTERKINI
 * @property string $SETGENERATEAKTIF
 * @property string $NIP
 * @property string $TGLCETAKSURATIJINCUTI
 * @property string $TGLSUBMITIJINCUTI
 * @property string $ACCSURIJINCUTI
 * @property string $KETERANGAN
 * @property string $PREVIEW
 * @property string $ACCSUBKOR
 * @property string $TANGGALACCSUBKOR
 * @property string $ACCDEKANAT
 * @property string $TANGGALACCDEKANAT
 * @property string $TANGGALACCSURIJINCUTI
 *
 * The followings are the available model relations:
 * @property Detailsurijincuti[] $detailsurijincutis
 * @property Jenissurat $iDJENISSURAT
 * @property Mahasiswa $nIM
 * @property Mahasiswa $nIP
 * @property Currentsemester $iDTASEMESTER
 *
 */
class Surijincuti extends CActiveRecord
{
    public $cariprodi;

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'surijincuti';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            //array('TGLSUBMITIJINCUTI', 'required'),
            array('NIM,LAMAIJINCUTI, SKSCAPAI, IPKCAPAI, KETERANGANIJINCUTI, THAKADEMIKCUTI, SEMESTERCUTI', 'required'),
            array('IDJENISSURAT,IDTASEMESTER', 'numerical', 'integerOnly' => true),
            array('NOSURATIJINCUTI', 'length', 'max' => 50),
            array('NIM', 'length', 'max' => 10),
            array('NIP', 'length', 'max' => 18),
            array('THAKADEMIKCUTI', 'length', 'max' => 9),
            array('SEMESTERCUTI', 'length', 'max' => 5),
            array('LAMAIJINCUTI, SKSCAPAI, IPKCAPAI', 'length', 'max' => 20),
            array('KETERANGANIJINCUTI,KETERANGAN', 'length', 'max' => 100),
            array('ACCSURIJINCUTI', 'length', 'max' => 15),
            array('STATUSTERKINI, SETGENERATEAKTIF, ACCSURIJINCUTI,KETERANGAN,TGLCETAKSURATIJINCUTI, PREVIEW, 
			ACCSUBKOR, ACCDEKANAT, TANGGALACCSUBKOR, TANGGALACCDEKANAT, TANGGALACCSURIJINCUTI', 'length', 'max' => 155),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('cariprodi,IDIJINCUTI, IDJENISSURAT, NOSURATIJINCUTI, NIM, ACCSURIJINCUTI,KETERANGAN,TGLCETAKSURATIJINCUTI,NIP, LAMAIJINCUTI, 
			IDTASEMESTER, SKSCAPAI, IPKCAPAI, KETERANGANIJINCUTI, STATUSTERKINI,SETGENERATEAKTIF , TGLSUBMITIJINCUTI,TAAKADEMIKCUTI, 
			SEMESTERCUTI, PREVIEW, ACCSUBKOR, ACCDEKANAT, TANGGALACCSUBKOR, TANGGALACCDEKANAT, TANGGALACCSURIJINCUTI', 'safe', 'on' => 'search'),
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
            'detailsurijincutis' => array(self::HAS_MANY, 'Detailsurijincuti', 'IDIJINCUTI'),
            'iDJENISSURAT' => array(self::BELONGS_TO, 'Jenissurat', 'IDJENISSURAT'),
            'nIM' => array(self::BELONGS_TO, 'Mahasiswa', 'NIM'),
            'nIP' => array(self::BELONGS_TO, 'Msdos', 'NIP'),
            'iDTASEMESTER' => array(self::BELONGS_TO, 'Currentsemester', 'IDTASEMESTER'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'IDIJINCUTI' => 'Kode Izin Cuti',
            'IDJENISSURAT' => 'Jenis Surat',
            'NOSURATIJINCUTI' => 'No. Surat Izin Cuti',
            'NIM' => 'NIM/Nama',
            'LAMAIJINCUTI' => 'Lama Cuti Semester',
            'THAKADEMIKCUTI' => 'Tahun Akademik Cuti',
            'SEMESTERCUTI' => 'Semester Cuti',
            'IDTASEMESTER' => 'Kode TA Semester ',
            'SKSCAPAI' => 'SKS Capaian',
            'IPKCAPAI' => 'IPK Capaian',
            'KETERANGANIJINCUTI' => 'Keterangan/Perihal Izin Cuti',
            'STATUSTERKINI' => 'Status',
            'SETGENERATEAKTIF' => 'Set Generate Aktif Cuti',
            'NIP' => 'Nama Ketua Jurusan/Ketua Program Studi',
            'TGLCETAKSURATIJINCUTI' => 'Tgl. Cetak Surat',
            'TGLSUBMITIJINCUTI' => 'Tgl. Submit',
            'ACCSURIJINCUTI' => 'Acc. Surat',
            'KETERANGAN' => 'Keterangan',
            'PREVIEW' => 'Status Baca',
            'ACCSUBKOR' => 'Acc Subkor',
            'TANGGALACCSUBKOR' => 'Tgl Acc Subkor',
            'ACCDEKANAT' => 'Acc Dekanat',
            'TANGGALACCDEKANAT' => 'Tgl Acc Dekanat',
            'TANGGALACCSURIJINCUTI' => 'Tgl Acc Surat',
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

        $criteria = new CDbCriteria;
        $criteria->with = 'nIM';
        $criteria->compare('IDIJINCUTI', $this->IDIJINCUTI);
        $criteria->compare('IDJENISSURAT', $this->IDJENISSURAT);
        $criteria->compare('NOSURATIJINCUTI', $this->NOSURATIJINCUTI, true);
        $criteria->compare('t.NIM', $this->NIM, true);
        //$criteria->compare('NIM',$this->NIM,true);
        $criteria->compare('LAMAIJINCUTI', $this->LAMAIJINCUTI, true);
        $criteria->compare('THAKADEMIKCUTI', $this->THAKADEMIKCUTI, true);
        $criteria->compare('SEMESTERCUTI', $this->SEMESTERCUTI, true);
        $criteria->compare('IDTASEMESTER', $this->IDTASEMESTER, true);
        $criteria->compare('SKSCAPAI', $this->SKSCAPAI, true);
        $criteria->compare('IPKCAPAI', $this->IPKCAPAI, true);
        $criteria->compare('KETERANGANIJINCUTI', $this->KETERANGANIJINCUTI, true);
        $criteria->compare('STATUSTERKINI', $this->STATUSTERKINI, true);
        $criteria->compare('SETGENERATEAKTIF', $this->SETGENERATEAKTIF, true);
        $criteria->compare('NIP', $this->NIP, true);
        $criteria->compare('TGLCETAKSURATIJINCUTI', $this->TGLCETAKSURATIJINCUTI, true);
        $criteria->compare('TGLSUBMITIJINCUTI', $this->TGLSUBMITIJINCUTI, true);
        $criteria->compare('ACCSURIJINCUTI', $this->ACCSURIJINCUTI, true);
        $criteria->compare('KETERANGAN', $this->KETERANGAN, true);
        $criteria->compare('PREVIEW', $this->PREVIEW, true);
        $criteria->compare('ACCSUBKOR', $this->ACCSUBKOR, true);
        $criteria->compare('TANGGALACCSUBKOR', $this->TANGGALACCSUBKOR, true);
        $criteria->compare('ACCDEKANAT', $this->ACCDEKANAT, true);
        $criteria->compare('TANGGALACCDEKANAT', $this->TANGGALACCDEKANAT, true);
        $criteria->compare('TANGGALACCSURIJINCUTI', $this->TANGGALACCSURIJINCUTI, true);
        $criteria->compare('IDPRODI', $this->cariprodi, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'sort' => array(
                'defaultOrder' => 'IDIJINCUTI DESC',
            )
        ));
    }

    //membuat tombol action notifikasi
    public function getListactionnotifikasi()
    {

        $a = $this->PREVIEW;
        $sql = "select PREVIEW from surijincuti where PREVIEW='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        $g = $this->PREVIEW;
        $sqli = "select PREVIEW from surijincuti where PREVIEW='$g'";
        $c = Yii::app()->db->createCommand($sqli)->queryScalar();


        if ($b == 'Y') {

            echo CHtml::link('<i data-feather="search"></i>', array('surijincuti/view', 'id' => $this->IDIJINCUTI), array('class' => 'btn btn-sm blue')), '&nbsp';
            echo CHtml::link('<i data-feather="edit"></i>', array('surijincuti/update', 'id' => $this->IDIJINCUTI), array('class' => 'btn btn-sm green')), '&nbsp';
            //echo CHtml::link('<i class="fa fa-times fa fa-white"></i>', array('surijincuti/deletebyowner', 'id' => $this->IDIJINCUTI), array('class' => 'btn btn-sm red'));
        } else {


            if ($c == 'N') {

                echo CHtml::link('<i data-feather="search"></i>', array('surijincuti/view', 'id' => $this->IDIJINCUTI), array('class' => 'btn btn-sm red')), '&nbsp';
                echo CHtml::link('<i data-feather="edit"></i>', array('surijincuti/update', 'id' => $this->IDIJINCUTI), array('class' => 'btn btn-sm green')), '&nbsp';
              //  echo CHtml::link('<i class="fa fa-times"></i>', array('surijincuti/deletebyowner', 'id' => $this->IDIJINCUTI), array('class' => 'btn btn-sm red'));
            }
        }

    }

    public function getListsendsuratijincuti()
    {
        $hasil = '';
        if (count($this->detailsurijincutis) > 0) echo '<ul style="padding-left:15px">';
        foreach ($this->detailsurijincutis as $nosuratcuti) {
            echo CHtml::link('<h4>Permintaan Surat Izin Cuti Akademik atas nama&nbsp;: ' . $nosuratcuti->iDIJINCUTI->nIM->NAMA . '&nbsp;<i class="fa fa-hand-o-right"></i> Telah Terkirim ke :&nbsp' . $nosuratcuti->iDGROUPS->DIVISI) . '</li></h4>';
        }
        return $hasil;
    }

    public function getListbuatnosuratijincuti()
    {
        $hasil = '';
        if (count($this->detailsurijincutis) > 0) echo '<ul style="padding-left:15px">';
        foreach ($this->detailsurijincutis as $nosuratcuti) {
            echo CHtml::link('<li>No.Surat : ' . $nosuratcuti->iDIJINCUTI->NOSURATIJINCUTI . '&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp' . $nosuratcuti->iDGROUPS->DIVISI) . '</li>';
            //echo CHtml::link('<li>No.Surat : '.$nosuratcuti->iDIJINCUTI->NOSURATIJINCUTI.'&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp'.$nosuratcuti->iDGROUPS->DIVISI.'',array('surijincuti/updatenosurijincuti','id'=>$nosuratcuti->IDIJINCUTI)).'</li>';
        }
        if (count($this->detailsurijincutis) > 0) echo '</ul>';
        //echo CHtml::link('<i class="fa fa-tag"></i> Buat No.Surat',array('surijincuti/updatenosurijincuti','id'=>$this->IDIJINCUTI),array('class'=>'btn btn-sm green'));
        return $hasil;
    }

    public function getStatuscuti()
    {
        $hasil = '';
        if ($this->STATUSTERKINI == 'Cuti') {
            $hasil = '<i class="fa fa-check"> </i>';
        }
        {
            return $hasil;
        }
    }


    //tombol untuk men generate permohonan aktif kembali
    public function getGeneratestatus()
    {
        $hasil = '';
        $id = $this->IDIJINCUTI;
        $sql = "select IDIJINCUTI from suraktifcuti where IDIJINCUTI='$id'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        if ($this->SETGENERATEAKTIF == 'Approve') {
            $hasil = CHtml::link('<i class="fa fa-sign-in"></i> Generate', array('suraktifcuti/create', 'IDIJINCUTI' => $id), array('class' => 'btn btn-sm green'));
        } else if ($this->SETGENERATEAKTIF == 'Not Approved') {
            $hasil = CHtml::link('<i class="fa fa-times"> </i>');
        } else if ($this->SETGENERATEAKTIF == '') {
            $hasil = CHtml::link('<font color="red"><i class="icon-settings"></i> Set dulu Generate Aktif Kembali...</font>', array('surijincuti/updategenerateaktif', 'id' => $this->IDIJINCUTI));
        }
        if ($b > 0) {
            $hasil = ('<i class="fa fa-check"> </i>');
        }
        {
            return $hasil;

        }

    }

    public function getGeneratestatusbymhs()
    {
        $hasil = '';
        $id = $this->IDIJINCUTI;
        $sql = "select IDIJINCUTI from suraktifcuti where IDIJINCUTI='$id'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        if ($this->SETGENERATEAKTIF == 'Approve') {
            $hasil = CHtml::link('<i class="fa fa-sign-in"></i> Generate', array('suraktifcuti/createaktifcutibymhs', 'IDIJINCUTI' => $id), array('class' => 'btn btn-sm green'));
        } else if ($this->SETGENERATEAKTIF == 'Not Approved') {
            $hasil = CHtml::link('<i class="fa fa-times"> </i>');
        } else if ($this->SETGENERATEAKTIF == '') {
            $hasil = ('<font color="red"><i class="icon-emoticon-smile"> ssss..</font></i>');
        }
        if ($b > 0) {
            $hasil = ('<i class="fa fa-check"> </i>');
        }
        {
            return $hasil;

        }

    }


    /* public function getGeneratestatus(){
         $id=$this->IDIJINCUTI;
         $hasil='';
                if (($this->NOSURATIJINCUTI)>0) {
                    echo CHtml::link('Generate <i class="fa fa-arrow-circle-right"></i>',array('suraktifcuti/create','IDIJINCUTI'=> $id),array('class'=>'btn btn-sm green')).'</li>';
         }
                {
              return $hasil;  }
         }  */

    public function getStatuskirimsurat()
    {
        $a = $this->IDIJINCUTI;
        $sql = "select IDIJINCUTI from detailsurijincuti where IDIJINCUTI='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        if ($b > 0) {
            echo('<i class="fa fa-check"> </i>');
        } else {
            echo "Belum Dikirim...";
        }
    }

    public function getStatussurat()
    {
        $hasil = '';

        if ($this->ACCSURIJINCUTI == 'Approve') {
            $hasil = '<label class="btn btn-warning waves-effect waves-float waves-light"><i data-feather="check-square"></i></label>';
        } else if ($this->ACCSURIJINCUTI == 'Not Approved') {
            $hasil = '<label class="btn btn-primary waves-effect waves-float waves-light"><i data-feather="x-square"></i></label>';
        } else {
            $hasil = '<label class="btn btn-danger waves-effect waves-float waves-light"><i data-feather="alert-circle"></i></label>';
        }
        {
            return $hasil;
        }
    }

    public function getAccsubkor()
    {
        $hasil = '';
        if ($this->ACCSUBKOR == 'Approve') {
            $hasil = '<label class="btn btn-warning waves-effect waves-float waves-light"><i data-feather="check-square"></i></label>';
        } else if ($this->ACCSUBKOR == 'Not Approved') {
            $hasil = '<label class="btn btn-primary waves-effect waves-float waves-light"><i data-feather="x-square"></i></label>';
        } else {
            $hasil = '<label class="btn btn-danger waves-effect waves-float waves-light"><i data-feather="alert-circle"></i></label>';
        }
        {
            return $hasil;
        }
    }

    public function getAccdekanat()
    {
        $hasil = '';
        if ($this->ACCDEKANAT == 'Approve') {
            $hasil = '<label class="btn btn-warning waves-effect waves-float waves-light"><i data-feather="check-square"></i></label>';
        } else if ($this->ACCDEKANAT == 'Not Approved') {
            $hasil = '<label class="btn btn-primary waves-effect waves-float waves-light"><i data-feather="x-square"></i></label>';
        } else {
            $hasil = '<label class="btn btn-danger waves-effect waves-float waves-light"><i data-feather="alert-circle"></i></label>';
        }
        {
            return $hasil;
        }
    }

    public function getCetakbytgl()
    {
        $a = $this->IDIJINCUTI;
        $sql = "select TGLCETAKSURATIJINCUTI from surijincuti where IDIJINCUTI='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        if ($b > 0) {
            echo CHtml::link('<i data-feather="printer"></i> QR', array('cetak/surijincuti', 'id' => $this->IDIJINCUTI,'tipe'=>'1'), array('target' => '_blank', 'class' => 'btn btn-gradient-primary'));
            echo CHtml::link('<i data-feather="printer"></i> No QR', array('cetak/surijincuti', 'id' => $this->IDIJINCUTI,'tipe'=>'2'), array('target' => '_blank', 'class' => 'btn btn-gradient-danger'));
        } else {
            echo "<font color='red'> Tgl.cetak belum di set..</font>";
        }
    }


    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Surijincuti the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function getCariprodi()
    {
        return $this->cariprodi;
    }
}
