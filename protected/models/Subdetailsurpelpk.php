<?php

/**
 * This is the model class for table "subdetailsurpelpk".
 *
 * The followings are the available columns in table 'subdetailsurpelpk':
 * @property integer $IDSUBDETAILSURPELPK
 * @property integer $IDPK
 * @property integer $IDJENISSURAT
 * @property string $NOSURPELPK
 * @property string $TGLMULAISURPELPK
 * @property string $TGLAKHIRSURPELPK
 * @property string $KETERANGANSUBDETAILSURPELPK
 * @property string $TGLCETAKSURATSURPELPK
 * @property string $TGLSUBMITSUBDETAILSURPELPK
 * @property string $ACCSURPELPK
 * @property string $TANGGALACCSURPELPK
 * @property string $ACCSUBKOR
 * @property string $TANGGALACCSUBKOR
 * @property string $ACCDEKANAT
 * @property string $TANGGALACCDEKANAT
 * @property string $PREVIEW
 *
 * The followings are the available model relations:
 * @property Detailsurpelpk[] $detailsurpelpks
 * @property Groupsurpelpk[] $groupsurpelpks
 * @property Jenissurat $iDJENISSURAT
 * @property Surperpk $iDPK
 * @property Surtugmonitoring[] $surtugmonitorings
 */
class Subdetailsurpelpk extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'subdetailsurpelpk';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            //array('TGLSUBMITSUBDETAILSURPELPK', 'required'),
            array('IDPK, IDJENISSURAT', 'numerical', 'integerOnly' => true),
            array('NOSURPELPK', 'length', 'max' => 10),
            array('TGLMULAISURPELPK, TGLAKHIRSURPELPK, TGLCETAKSURATSURPELPK, TANGGALACCSURPELPK, TANGGALACCSUBKOR, TANGGALACCDEKANAT', 'length', 'max' => 20),
            array('ACCSURPELPK', 'length', 'max' => 15),
            array('KETERANGANSUBDETAILSURPELPK, ACCSURPELPK,ACCSUBKOR, ACCDEKANAT, GLCETAKSURATSURPELPK, PREVIEW', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('IDSUBDETAILSURPELPK, IDPK, IDJENISSURAT, ACCSURPELPK,TGLCETAKSURATSURPELPK, NOSURPELPK, TGLMULAISURPELPK, TGLAKHIRSURPELPK, 
			ACCSUBKOR, ACCDEKANAT, KETERANGANSUBDETAILSURPELPK, TGLSUBMITSUBDETAILSURPELPK, PREVIEW', 'safe', 'on' => 'search'),
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
            'detailsurpelpks' => array(self::HAS_MANY, 'Detailsurpelpk', 'IDSUBDETAILSURPELPK'),
            'groupsurpelpks' => array(self::HAS_MANY, 'Groupsurpelpk', 'IDSUBDETAILSURPELPK'),
            'iDJENISSURAT' => array(self::BELONGS_TO, 'Jenissurat', 'IDJENISSURAT'),
            'iDPK' => array(self::BELONGS_TO, 'Surperpk', 'IDPK'),
            'surtugmonitorings' => array(self::HAS_MANY, 'Surtugmonitoring', 'IDSUBDETAILSURPELPK'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'IDSUBDETAILSURPELPK' => 'Kode Surat Pelaksanaan',
            'IDPK' => 'Kode Surat Permohonan',
            'IDJENISSURAT' => 'Jenis Surat',
            'NOSURPELPK' => 'No. Surat',
            'TGLMULAISURPELPK' => 'Tgl. Mulai Praktik Kerja',
            'TGLAKHIRSURPELPK' => 'Tgl. Akhir Praktik Kerja',
            'KETERANGANSUBDETAILSURPELPK' => 'Keterangan',
            'TGLCETAKSURATSURPELPK' => 'Tgl. Cetak Surat',
            'TGLSUBMITSUBDETAILSURPELPK' => 'Tgl. Submit',
            'ACCSURPELPK' => 'Acc. Surat',
            'TANGGALACCSURPELPK' => 'Tgl Acc',
            'PREVIEW' => 'Status Baca',
            'ACCSUBKOR' => 'Acc Subkor',
            'TANGGALACCSUBKOR' => 'Tgl Acc Subkor',
            'ACCDEKANAT' => 'Acc Dekanat',
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

        $criteria = new CDbCriteria;

        $criteria->compare('IDSUBDETAILSURPELPK', $this->IDSUBDETAILSURPELPK);
        $criteria->compare('IDPK', $this->IDPK);
        $criteria->compare('IDJENISSURAT', $this->IDJENISSURAT);
        $criteria->compare('NOSURPELPK', $this->NOSURPELPK, true);
        $criteria->compare('TGLMULAISURPELPK', $this->TGLMULAISURPELPK, true);
        $criteria->compare('TGLAKHIRSURPELPK', $this->TGLAKHIRSURPELPK, true);
        $criteria->compare('KETERANGANSUBDETAILSURPELPK', $this->KETERANGANSUBDETAILSURPELPK, true);
        $criteria->compare('TGLCETAKSURATSURPELPK', $this->TGLCETAKSURATSURPELPK, true);
        $criteria->compare('TGLSUBMITSUBDETAILSURPELPK', $this->TGLSUBMITSUBDETAILSURPELPK, true);
        $criteria->compare('ACCSURPELPK', $this->ACCSURPELPK, true);
        $criteria->compare('PREVIEW', $this->PREVIEW, true);
        $criteria->compare('TANGGALACCSURPELPK', $this->TANGGALACCSURPELPK, true);
        $criteria->compare('ACCSUBKOR', $this->ACCSUBKOR, true);
        $criteria->compare('TANGGALACCSUBKOR', $this->TANGGALACCSUBKOR, true);
        $criteria->compare('ACCDEKANAT', $this->ACCDEKANAT, true);
        $criteria->compare('TANGGALACCDEKANAT', $this->TANGGALACCDEKANAT, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'sort' => array(
                'defaultOrder' => 'IDSUBDETAILSURPELPK DESC',
            )
        ));
    }

    //membuat tombol action notifikasi
    public function getListactionnotifikasi()
    {

        $a = $this->PREVIEW;
        $sql = "select PREVIEW from subdetailsurpelpk where PREVIEW='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        $g = $this->PREVIEW;
        $sqli = "select PREVIEW from subdetailsurpelpk where PREVIEW='$g'";
        $c = Yii::app()->db->createCommand($sqli)->queryScalar();


        if ($b == 'Y') {

            echo CHtml::link('<i data-feather="search"></i>', array('subdetailsurpelpk/view', 'id' => $this->IDSUBDETAILSURPELPK), array('class' => 'btn btn-sm blue')), '&nbsp';
            echo CHtml::link('<i data-feather="edit"></i>', array('subdetailsurpelpk/update', 'id' => $this->IDSUBDETAILSURPELPK), array('class' => 'btn btn-sm green'));

        } else {

            if ($c == 'N') {

                echo CHtml::link('<i data-feather="search"></i>', array('subdetailsurpelpk/view', 'id' => $this->IDSUBDETAILSURPELPK), array('class' => 'btn btn-sm red')), '&nbsp';
                echo CHtml::link('<i data-feather="edit"></i>', array('subdetailsurpelpk/update', 'id' => $this->IDSUBDETAILSURPELPK), array('class' => 'btn btn-sm green'));
            }
        }

    }

    public function getListtambahmahasiswasurpelpk()
    {

        $hasil = '';
        if (count($this->groupsurpelpks) > 0) echo '<ul style="padding-left:15px">';
        foreach ($this->groupsurpelpks as $groupelpk) {
            echo CHtml::link('<li>' . $groupelpk->nIM->NAMA . '<i class="fa fa-caret-right"></i>' . $groupelpk->NOURUTSURPELPK, array('groupsurpelpk/updatemhs', 'id' => $groupelpk->IDGROUPSURPELPK, 'IDSUBDETAILSURPELPK' => $groupelpk->IDSUBDETAILSURPELPK)) . '</li>';
        }
        if (count($this->groupsurpelpks) > 0) echo '</ul>';
        //echo CHtml::link('<i class="fa fa-tag"></i> Tambah Group Mahasiswa',array('groupsurpelpk/create','IDSUBDETAILSURPELPK'=>$this->IDSUBDETAILSURPELPK),array('class'=>'btn btn-sm green'));
        return $hasil;
    }

    public function getmahasiswasurpelpk()
    {
        $hasil = '';
        if (count($this->groupsurpelpks) > 0) echo '<ul style="padding-left:15px">';
        foreach ($this->groupsurpelpks as $groupelpk) {
            echo CHtml::link('<li>' . $groupelpk->nIM->NAMA . '<i class="fa fa-caret-right"></i>' . $groupelpk->NOURUTSURPELPK) . '</li>';
        }
        if (count($this->groupsurpelpks) > 0) echo '</ul>';
        //echo CHtml::link('<i class="fa fa-tag"></i> Tambah Group Mahasiswa',array('groupsurpelpk/create','IDSUBDETAILSURPELPK'=>$this->IDSUBDETAILSURPELPK),array('class'=>'btn btn-sm green'));
        return $hasil;
    }


    public function getListbuatnosuratpelpk()
    {
        $hasil = '';
        if (count($this->detailsurpelpks) > 0) echo '<ul style="padding-left:15px">';
        foreach ($this->detailsurpelpks as $nosuratpelpk) {
            echo CHtml::link('<li>No.Surat : ' . $this->NOSURPELPK . ' &nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp' . $nosuratpelpk->iDGROUPS->DIVISI) . '</li>';
            //echo CHtml::link('<li>No.Surat : '.$this->NOSURPELPK.'&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp'.$nosuratpelpk->iDGROUPS->DIVISI.'',array('subdetailsurpelpk/updatenosurpelpk','id'=>$nosuratpk->IDPK)).'</li>';
        }
        if (count($this->detailsurpelpks) > 0) echo '</ul>';
        //echo CHtml::link('<i class="fa fa-tag"></i> Buat No.Surat',array('subdetailsurpelpk/updatenosurpelpk','id'=>$this->IDPK),array('class'=>'btn btn-sm green'));
        return $hasil;
    }

    public function getListsendsuratpelpk()
    {
        $hasil = '';
        if (count($this->detailsurpelpks) > 0) echo '<ul style="padding-left:15px">';
        foreach ($this->detailsurpelpks as $nosuratpelpk) {
            echo CHtml::link('<h4>Permintaan Surat Penelitian di Instansi&nbsp;: ' . $nosuratpelpk->iDSUBDETAILSURPELPK->iDPK->INSTANSIPK . '&nbsp;<i class="fa fa-hand-o-right"></i> Telah Terkirim ke :&nbsp' . $nosuratpelpk->iDGROUPS->DIVISI) . '</li></h4>';
        }
        return $hasil;
    }

    //membuat fungsi GENERATE SURAT TUGAS DOSEN MONITORING

    public function getGeneratemonitoring()
    {
        $id = $this->IDSUBDETAILSURPELPK;
        $hasil = '';
        $sql = "select IDSUBDETAILSURPELPK from surtugmonitoring where IDSUBDETAILSURPELPK='$id'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        if (($this->TGLCETAKSURATSURPELPK) > 0) {
            $hasil = CHtml::link('<i data-feather="arrow-right-circle"></i> Generate', array('surtugmonitoring/create', 'IDSUBDETAILSURPELPK' => $id), array('class' => 'btn btn-outline-warning waves-effect')) . '</li>';
        } else if ($this->TGLCETAKSURATSURPELPK == '') {
            $hasil = CHtml::link('<font color="red"><i class="icon-emoticon-smile"> Pending..</font></i>');
        }
        if ($b > 0) {
            $hasil = CHtml::link('<i class="fa fa-check"> </i>');
        }
        {
            return $hasil;
        }
    }

    public function getStatussurat()
    {
        $hasil = '';

        if ($this->ACCSURPELPK == 'Approve') {
            $hasil = '<label class="btn btn-warning waves-effect waves-float waves-light">
                        <i data-feather="check-square"></i>
                        </label>';
        } else if ($this->ACCSURPELPK == 'Not Approved') {
            $hasil = '<label class="btn btn-primary waves-effect waves-float waves-light">
                        <i data-feather="x-square"></i>
                        </label>';
        } else {
            $hasil = '<label class="btn btn-danger waves-effect waves-float waves-light">
                        <i data-feather="alert-circle"></i>
                        </label>';
        }
        {
            return $hasil;
        }
    }

    public function getAccsubkor()
    {
        $hasil = '';
        if ($this->ACCSUBKOR == 'Approve') {
            $hasil = '<label class="btn btn-warning waves-effect waves-float waves-light">
                        <i data-feather="check-square"></i>
                        </label>';
        } elseif ($this->ACCSUBKOR == 'Not Approved') {
            $hasil = '<label class="btn btn-primary waves-effect waves-float waves-light">
                        <i data-feather="x-square"></i>
                        </label>';
        } else {
            $hasil = '<label class="btn btn-danger waves-effect waves-float waves-light">
                        <i data-feather="alert-circle"></i>
                        </label>';
        }
        return $hasil;
    }

    public function getAccdekanat()
    {
        $hasil = '';
        if ($this->ACCDEKANAT == 'Approve') {
            $hasil = '<label class="btn btn-warning waves-effect waves-float waves-light">
                        <i data-feather="check-square"></i>
                        </label>';
        } elseif ($this->ACCDEKANAT == 'Not Approved') {
            $hasil = '<label class="btn btn-primary waves-effect waves-float waves-light">
                        <i data-feather="x-square"></i>
                        </label>';
        } else {
            $hasil = '<label class="btn btn-danger waves-effect waves-float waves-light">
                        <i data-feather="alert-circle"></i>
                        </label>';
        }
        return $hasil;

    }

    public function getCetakbytgl()
    {
        $a = $this->IDSUBDETAILSURPELPK;
        $sql = "select TGLCETAKSURATSURPELPK from subdetailsurpelpk where IDSUBDETAILSURPELPK='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        if ($b > 0) {
            echo CHtml::link('<i data-feather="printer"></i> Cetak', array('cetak/subdetailsurpelpk', 'id' => $this->IDSUBDETAILSURPELPK, 'tipe'=>'1'), array('target' => '_blank', 'class' => 'btn btn-gradient-primary'));
            echo CHtml::link('<i data-feather="printer"></i> Cetak', array('cetak/subdetailsurpelpk', 'id' => $this->IDSUBDETAILSURPELPK, 'tipe'=>'2'), array('target' => '_blank', 'class' => 'btn btn-gradient-danger'));

        } else {
            echo "<font color='red'> Tgl.cetak belum di set..</font>";
        }
    }


    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Subdetailsurpelpk the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
