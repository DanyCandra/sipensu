<?php

/**
 * This is the model class for table "suraktifcuti".
 *
 * The followings are the available columns in table 'suraktifcuti':
 * @property integer $IDAKTIFCUTI
 * @property integer $IDIJINCUTI
 * @property integer $IDIJENISSURAT
 * @property string $NOSURATIJINAKTIFCUTI
 * @property integer $iDTASEMESTER
 * @property string $THAKADEMIKAKTIFCUTI
 * @property string $SEMESTERAKTIFCUTI
 * @property string $KETERANGANAKTIFCUTI
 * @property string $STATUS
 * @property string $NIP
 * @property string $TGLCETAKSURATAKTIFCUTI
 * @property string $TGLSUBMITAKTIFCUTI
 * @property string $ACCSURAKTIFCUTI
 * @property string $PREVIEW
 * @property string $ACCSUBKOR
 * @property string $TANGGALACCSUBKOR
 * @property string $ACCDEKANAT
 * @property string $TANGGALACCDEKANAT
 * @property string $TANGGALACCSURAKTIFCUTI
 *
 * The followings are the available model relations:
 * @property Detailaktifcuti[] $detailaktifcutis
 * @property Surijincuti $iDIJINCUTI
 * @property Msdos $nIP
 * @property Jenissurat $iDJENISSURAT
 * @property Currentsemester $iDTASEMESTER
 */
class Suraktifcuti extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'suraktifcuti';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            //array('TGLSUBMITAKTIFCUTI', 'required'),
            array('NIP, THAKADEMIKAKTIFCUTI, SEMESTERAKTIFCUTI', 'required'),
            array('IDIJINCUTI,IDJENISSURAT,IDTASEMESTER', 'numerical', 'integerOnly' => true),
            array('NOSURATIJINAKTIFCUTI', 'length', 'max' => 50),
            array(' TGLCETAKSURATAKTIFCUTI', 'length', 'max' => 20),
            array('KETERANGANAKTIFCUTI', 'length', 'max' => 100),
            array('THAKADEMIKAKTIFCUTI', 'length', 'max' => 9),
            array('SEMESTERAKTIFCUTI', 'length', 'max' => 5),
            array('STATUS', 'length', 'max' => 15),
            array('NIP', 'length', 'max' => 18),
            array('ACCSURAKTIFCUTI,PREVIEW,ACCDEKANAT', 'length', 'max' => 15),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('IDAKTIFCUTI, IDIJINCUTI, IDJENISSURAT,NOSURATIJINAKTIFCUTI, 
                        ACCSURAKTIFCUTI,IDTASEMESTER, KETERANGANAKTIFCUTI, 
                        STATUS, NIP, TGLSUBMITAKTIFCUTI,TGLCETAKSURATAKTIFCUTI, 
                        SEMESTERAKTIFCUTI, THAKADEMIKAKTIFCUTI, PREVIEW, 
                         ACCSUBKOR, ACCDEKANAT, TANGGALACCSUBKOR, TANGGALACCDEKANAT, TANGGALACCSURAKTIFCUTI', 'safe', 'on' => 'search'),
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
            'detailaktifcutis' => array(self::HAS_MANY, 'Detailaktifcuti', 'IDAKTIFCUTI'),
            'iDIJINCUTI' => array(self::BELONGS_TO, 'Surijincuti', 'IDIJINCUTI'),
            'nIP' => array(self::BELONGS_TO, 'Msdos', 'NIP'),
            'iDJENISSURAT' => array(self::BELONGS_TO, 'Jenissurat', 'IDJENISSURAT'),
            'iDTASEMESTER' => array(self::BELONGS_TO, 'Currentsemester', 'IDTASEMESTER'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'IDAKTIFCUTI' => 'Kode Aktif Cuti',
            'IDIJINCUTI' => 'Kode Cuti',
            'IDJENISSURAT' => 'Jenis Surat',
            'NOSURATIJINAKTIFCUTI' => 'No. Surat Aktif Kembali Cuti',
            'IDTASEMESTER' => 'Kode TA Semester ',
            'THAKADEMIKAKTIFCUTI' => 'Thn. Akademik Aktif Kembali Cuti',
            'SEMESTERAKTIFCUTI' => 'Semester Aktif Kembali Cuti',
            'KETERANGANAKTIFCUTI' => 'Keterangan Aktif Cuti',
            'STATUS' => 'Status Terkini',
            'NIP' => 'Ketua Jurusan/Ketua Program Studi',
            'TGLCETAKSURATAKTIFCUTI' => 'Tgl.Cetak Surat',
            'TGLSUBMITAKTIFCUTI' => 'Tgl. Submit',
            'ACCSURAKTIFCUTI' => 'Acc. Surat',
            'PREVIEW' => 'Status Baca',
            'ACCSUBKOR' => 'Acc Subkor',
            'TANGGALACCSUBKOR' => 'Tgl Acc Subkor',
            'ACCDEKANAT' => 'Acc Dekanat',
            'TANGGALACCDEKANAT' => 'Tgl Acc Dekanat',
            'TANGGALACCSURAKTIFCUTI' => 'Tgl Acc Surat',
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

        $criteria->compare('IDAKTIFCUTI', $this->IDAKTIFCUTI);
        $criteria->compare('IDIJINCUTI', $this->IDIJINCUTI);
        $criteria->compare('IDJENISSURAT', $this->IDJENISSURAT);
        $criteria->compare('NOSURATIJINAKTIFCUTI', $this->NOSURATIJINAKTIFCUTI, true);
        $criteria->compare('IDTASEMESTER', $this->IDTASEMESTER, true);
        $criteria->compare('THAKADEMIKAKTIFCUTI', $this->THAKADEMIKAKTIFCUTI, true);
        $criteria->compare('SEMESTERAKTIFCUTI', $this->SEMESTERAKTIFCUTI, true);
        $criteria->compare('KETERANGANAKTIFCUTI', $this->KETERANGANAKTIFCUTI, true);
        $criteria->compare('STATUS', $this->STATUS, true);
        $criteria->compare('NIP', $this->NIP, true);
        $criteria->compare('TGLCETAKSURATAKTIFCUTI', $this->TGLCETAKSURATAKTIFCUTI, true);
        $criteria->compare('TGLSUBMITAKTIFCUTI', $this->TGLSUBMITAKTIFCUTI, true);
        $criteria->compare('ACCSURAKTIFCUTI', $this->ACCSURAKTIFCUTI, true);
        $criteria->compare('PREVIEW', $this->PREVIEW, true);
        $criteria->compare('ACCSUBKOR', $this->ACCSUBKOR, true);
        $criteria->compare('TANGGALACCSUBKOR', $this->TANGGALACCSUBKOR, true);
        $criteria->compare('ACCDEKANAT', $this->ACCDEKANAT, true);
        $criteria->compare('TANGGALACCDEKANAT', $this->TANGGALACCDEKANAT, true);
        $criteria->compare('TANGGALACCSURAKTIFCUTI', $this->TANGGALACCSURAKTIFCUTI, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'sort' => array(
                'defaultOrder' => 'IDAKTIFCUTI DESC',
            )
        ));
    }

    //membuat tombol action notifikasi
    public function getListactionnotifikasi()
    {

        $a = $this->PREVIEW;
        $sql = "select PREVIEW from suraktifcuti where PREVIEW='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        $g = $this->PREVIEW;
        $sqli = "select PREVIEW from suraktifcuti where PREVIEW='$g'";
        $c = Yii::app()->db->createCommand($sqli)->queryScalar();


        if ($b == 'Y') {

            echo CHtml::link('<i data-feather="search"></i>', array('suraktifcuti/view', 'id' => $this->IDAKTIFCUTI), array('class' => 'btn btn-warning')), '&nbsp';
            echo CHtml::link('<i data-feather="edit"></i>', array('suraktifcuti/update', 'id' => $this->IDAKTIFCUTI), array('class' => 'btn btn-danger')), '&nbsp';
            //echo CHtml::link('<i class="fa fa-times fa fa-white"></i>', array('suraktifcuti/deletebyowner', 'id' => $this->IDAKTIFCUTI), array('class' => 'btn btn-sm red'));
        } else {


            if ($c == 'N') {

                echo CHtml::link('<i data-feather="search"></i>', array('suraktifcuti/view', 'id' => $this->IDAKTIFCUTI), array('class' => 'btn btn-sm red')), '&nbsp';
                echo CHtml::link('<i data-feather="edit"></i>', array('suraktifcuti/update', 'id' => $this->IDAKTIFCUTI), array('class' => 'btn btn-sm green')), '&nbsp';
                // echo CHtml::link('<i class="fa fa-times"></i>', array('suraktifcuti/deletebyowner', 'id' => $this->IDAKTIFCUTI), array('class' => 'btn btn-sm red'));
            }
        }

    }

    public function getListsendsuraktifcuti()
    {
        $hasil = '';
        if (count($this->detailaktifcutis) > 0) echo '<ul style="padding-left:15px">';
        foreach ($this->detailaktifcutis as $nosuraktifcuti) {
            echo CHtml::link('<h4>Permintaan Surat Aktif Kembali Cuti atas nama&nbsp;: ' . $nosuraktifcuti->iDAKTIFCUTI->iDIJINCUTI->nIM->NAMA . '&nbsp;<i class="fa fa-hand-o-right"></i> Telah Terkirim ke :&nbsp' . $nosuraktifcuti->iDGROUPS->DIVISI) . '</li></h4>';
        }
        return $hasil;
    }

    public function getListbuatnosuraktifcuti()
    {
        $hasil = '';
        if (count($this->detailaktifcutis) > 0) echo '<ul style="padding-left:15px">';
        foreach ($this->detailaktifcutis as $nosuraktifcuti) {
            echo CHtml::link('<li>No.Surat : ' . $nosuraktifcuti->iDAKTIFCUTI->NOSURATIJINAKTIFCUTI . '&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp' . $nosuraktifcuti->iDGROUPS->DIVISI) . '</li>';
            //echo CHtml::link('<li>No.Surat : '.$nosuraktifcuti->iDAKTIFCUTI->NOSURATIJINAKTIFCUTI.'&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp'.$nosuraktifcuti->iDGROUPS->DIVISI.'',array('suraktifcuti/updatenosuraktifcuti','id'=>$nosuraktifcuti->IDAKTIFCUTI)).'</li>';
        }
        if (count($this->detailaktifcutis) > 0) echo '</ul>';
        //echo CHtml::link('<i class="fa fa-tag"></i> Buat No.Surat',array('suraktifcuti/updatenosuraktifcuti','id'=>$this->IDAKTIFCUTI),array('class'=>'btn btn-sm green'));
        return $hasil;
    }

    public function getStatusaktifcuti()
    {
        $hasil = '';
        if ($this->STATUS == 'Aktif') {
            $hasil = '<i data-feather="check"> </i>';
        }
        {
            return $hasil;
        }
    }

    public function getStatuskirimsurat()
    {
        $a = $this->IDAKTIFCUTI;
        $sql = "select IDAKTIFCUTI from detailaktifcuti where IDAKTIFCUTI='$a'";
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

        if ($this->ACCSURAKTIFCUTI == 'Approve') {
            $hasil = '<label class="btn btn-warning waves-effect waves-float waves-light"><i data-feather="check-square"></i></label>';
        } elseif ($this->ACCSURAKTIFCUTI == 'Not Approved') {
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
        } elseif ($this->ACCSUBKOR == 'Not Approved') {
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
        {
            return $hasil;
        }

    }


    public function getCetakbytgl()
    {
        $a = $this->IDAKTIFCUTI;
        $sql = "select TGLCETAKSURATAKTIFCUTI from suraktifcuti where IDAKTIFCUTI='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        if ($b > 0) {
            echo CHtml::link('<i data-feather="printer"></i> QR', array('cetak/suraktifcuti', 'id' => $this->IDAKTIFCUTI,'tipe'=>'1'), array('target' => '_blank', 'class' => 'btn btn-gradient-primary'));
            echo CHtml::link('<i data-feather="printer"></i> No QR', array('cetak/suraktifcuti', 'id' => $this->IDAKTIFCUTI,'tipe'=>'2'), array('target' => '_blank', 'class' => 'btn btn-gradient-danger'));

        } else {
            echo "<font color='red'> Tgl.cetak belum di set..</font>";
        }
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Suraktifcuti the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
