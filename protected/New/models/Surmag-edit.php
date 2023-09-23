<?php

/**
 * This is the model class for table "surmag".
 *
 * The followings are the available columns in table 'surmag':
 * @property integer $IDSURMAG
 * @property integer $IDJENISSURAT
 * @property string $NOSURMAG
 * @property string $INSTANSISURMAG
 * @property string $ALAMATINSTANSISURMAG
 * @property string $KOTAINSTANSISURMAG
 * @property integer $iDTASEMESTER
 * @property string $TGLMULAISURMAG
 * @property string $TGLAKHIRSURMAG
 * @property string $KETERANGANSURMAG
 * @property string $TGLCETAKSURATSURMAG
 * @property string $TGLSUBMITSURMAG
 * @property string $ACCSURMAG
 * @property string $PREVIEW
 * @property string $ACCSUBKOR
 * @property string $TANGGALACCSUBKOR
 * @property string $ACCDEKANAT
 * @property string $TANGGALACCDEKANAT
 * @property string $TANGGALACCSURMAG
 *
 * The followings are the available model relations:
 * @property Detailsurmag[] $detailsurmags
 * @property Groupsurmag[] $groupsurmags
 * @property Jenissurat $iDJENISSURAT
 * @property Currentsemester $iDTASEMESTER
 */
class Surmag extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'surmag';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            //array('TGLSUBMITSURMAG', 'required'),
            array('INSTANSISURMAG,TGLAKHIRSURMAG,TGLMULAISURMAG, KOTAINSTANSISURMAG, ALAMATINSTANSISURMAG ', 'required'),
            array('IDJENISSURAT,IDTASEMESTER', 'numerical', 'integerOnly' => true),
            array('NOSURMAG', 'length', 'max' => 50),
            array('INSTANSISURMAG', 'length', 'max' => 100),
            array('ALAMATINSTANSISURMAG', 'length', 'max' => 250),
            array('KOTAINSTANSISURMAG', 'length', 'max' => 100),
            array('TGLMULAISURMAG', 'length', 'max' => 20),
            array('TGLAKHIRSURMAG', 'length', 'max' => 20),
            array('TGLCETAKSURATSURMAG', 'length', 'max' => 20),
            array('ACCSURMAG', 'length', 'max' => 15),
            array('KETERANGANSURMAG,TGLCETAKSURATSURMAG, ACCSURMAG, PREVIEW,  ACCSUBKOR, ACCDEKANAT, TANGGALACCSUBKOR, TANGGALACCDEKANAT, TANGGALACCSURMAG', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('IDSURMAG, KOTAINSTANSISURMAG, IDJENISSURAT,ACCSURMAG,TGLCETAKSURATSURMAG, TGLMULAISURMAG, TGLAKHIRSURMAG NOSURMAG, 
			INSTANSISURMAG, ALAMATINSTANSISURMAG, IDTASEMESTER, KETERANGANSURMAG, TGLSUBMITSURMAG, PREVIEW, 
			ACCSUBKOR, ACCDEKANAT, TANGGALACCSUBKOR, TANGGALACCDEKANAT, TANGGALACCSURMAG', 'safe', 'on' => 'search'),
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
            'detailsurmags' => array(self::HAS_MANY, 'Detailsurmag', 'IDSURMAG'),
            'groupsurmags' => array(self::HAS_MANY, 'Groupsurmag', 'IDSURMAG'),
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
            'IDSURMAG' => 'Kode Surat Magang',
            'IDJENISSURAT' => 'Jenis Surat',
            'NOSURMAG' => 'No. Surat',
            'INSTANSISURMAG' => 'Tujuan Surat/Instansi/Sub.Bagian',
            'ALAMATINSTANSISURMAG' => 'Alamat Instansi ',
            'KOTAINSTANSISURMAG' => 'Kota Intansi',
            'IDTASEMESTER' => 'Kode TA Semester',
            'TGLMULAISURMAG' => 'Tgl. Mulai Magang',
            'TGLAKHIRSURMAG' => 'Tgl. Akhir Magang',
            'KETERANGANSURMAG' => 'Keterangan',
            'TGLCETAKSURATSURMAG' => 'Tgl. Surat/Cetak',
            'TGLSUBMITSURMAG' => 'Tgl. Submit',
            'ACCSURMAG' => 'Acc. Surat',
            'PREVIEW' => 'Status Baca',
            'ACCSUBKOR' => 'Acc Subkor',
            'TANGGALACCSUBKOR' => 'Tgl Acc Subkor',
            'ACCDEKANAT' => 'Acc Dekanat',
            'TANGGALACCDEKANAT' => 'Tgl Acc Dekanat',
            'TANGGALACCSURMAG' => 'Tgl Acc Surat',
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

        $criteria->compare('IDSURMAG', $this->IDSURMAG);
        $criteria->compare('IDJENISSURAT', $this->IDJENISSURAT);
        $criteria->compare('NOSURMAG', $this->NOSURMAG, true);
        $criteria->compare('INSTANSISURMAG', $this->INSTANSISURMAG, true);
        $criteria->compare('ALAMATINSTANSISURMAG', $this->ALAMATINSTANSISURMAG, true);
        $criteria->compare('KOTAINSTANSISURMAG', $this->KOTAINSTANSISURMAG, true);
        $criteria->compare('IDTASEMESTER', $this->IDTASEMESTER, true);
        $criteria->compare('TGLMULAISURMAG', $this->TGLMULAISURMAG, true);
        $criteria->compare('TGLAKHIRSURMAG', $this->TGLAKHIRSURMAG, true);
        $criteria->compare('KETERANGANSURMAG', $this->KETERANGANSURMAG, true);
        $criteria->compare('TGLCETAKSURATSURMAG', $this->TGLCETAKSURATSURMAG, true);
        $criteria->compare('TGLSUBMITSURMAG', $this->TGLSUBMITSURMAG, true);
        $criteria->compare('ACCSURMAG', $this->ACCSURMAG, true);
        $criteria->compare('PREVIEW', $this->PREVIEW, true);
        $criteria->compare('ACCSUBKOR', $this->ACCSUBKOR, true);
        $criteria->compare('TANGGALACCSUBKOR', $this->TANGGALACCSUBKOR, true);
        $criteria->compare('ACCDEKANAT', $this->ACCDEKANAT, true);
        $criteria->compare('TANGGALACCDEKANAT', $this->TANGGALACCDEKANAT, true);
        $criteria->compare('TANGGALACCSURMAG', $this->TANGGALACCSURMAG, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'sort' => array(
                'defaultOrder' => 'IDSURMAG DESC',
            )
        ));
    }

    //membuat tombol action notifikasi
    public function getListactionnotifikasi()
    {

        $a = $this->PREVIEW;
        $sql = "select PREVIEW from surmag where PREVIEW='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        $g = $this->PREVIEW;
        $sqli = "select PREVIEW from surmag where PREVIEW='$g'";
        $c = Yii::app()->db->createCommand($sqli)->queryScalar();


        if ($b == 'Y') {

            echo CHtml::link('<i data-feather="search"></i>', array('surmag/view', 'id' => $this->IDSURMAG), array('class' => 'btn btn-sm blue')), '&nbsp';
            echo CHtml::link('<i data-feather="edit"></i>', array('surmag/update', 'id' => $this->IDSURMAG), array('class' => 'btn btn-sm green'));
        } else {
            if ($c == 'N') {
                echo CHtml::link('<i data-feather="search"></i>', array('surmag/view', 'id' => $this->IDSURMAG), array('class' => 'btn btn-sm red')), '&nbsp';
                echo CHtml::link('<i data-feather="edit"></i>', array('surmag/update', 'id' => $this->IDSURMAG), array('class' => 'btn btn-sm green'));
            }
        }

    }


    public function getListsendsurmag()
    {
        $hasil = '';
        if (count($this->detailsurmags) > 0) echo '<ul style="padding-left:15px">';
        foreach ($this->detailsurmags as $nosuratmag) {
            echo CHtml::link('<h4>Permohonan Magang di Instansi&nbsp;: ' . $nosuratmag->iDSURMAG->INSTANSISURMAG . '&nbsp;<i data-feather="fa fa-hand-o-right"></i> Telah Terkirim ke :&nbsp' . $nosuratmag->iDGROUPS->DIVISI) . '</li></h4>';
        }
        return $hasil;
    }

    public function getListbuatnosurmag()
    {
        $hasil = '';
        if (count($this->detailsurmags) > 0) echo '<ul style="padding-left:15px">';
        foreach ($this->detailsurmags as $nosuratmag) {
            echo CHtml::link('<li>No.Surat : ' . $nosuratmag->iDSURMAG->NOSURMAG . '&nbsp;<i data-feather="fa fa-hand-o-right"></i> Send :&nbsp' . $nosuratmag->iDGROUPS->DIVISI) . '</li>';
            //echo CHtml::link('<li>No.Surat : '.$nosuratmag->iDSURMAG->NOSURMAG.'&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp'.$nosuratmag->iDGROUPS->DIVISI.'',array('surmag/updatenosurmag','id'=>$nosuratmag->IDSURMAG)).'</li>';
        }
        if (count($this->detailsurmags) > 0) echo '</ul>';
        //echo CHtml::link('<i class="fa fa-tag"></i> Buat No.Surat',array('surmag/updatenosurmag','id'=>$this->IDSURMAG),array('class'=>'btn btn-sm green'));
        return $hasil;
    }

    public function getListtambahmahasiswasurmag()
    {
        $hasil = '';
        if (count($this->groupsurmags) > 0) echo '<ul style="padding-left:15px">';
        foreach ($this->groupsurmags as $groupsurmag) {
            echo CHtml::link('<li>' . $groupsurmag->nIM->NAMA . '<i data-feather="fa fa-caret-right"></i>' . $groupsurmag->NOURUTGROUPSURMAG, array('groupsurmag/update', 'id' => $groupsurmag->IDGROUPSURMAG)) . '</li>';
        }
        if (count($this->groupsurmags) > 0) echo '</ul>';
        //echo CHtml::link('<i class="fa fa-tag"></i> Tambah Mahasiswa',array('groupsurmag/create','IDSURMAG'=>$this->IDSURMAG),array('class'=>'btn btn-sm green'));
        return $hasil;
    }

    public function getMahasiswasurmag()
    {
        $hasil = '';
        if (count($this->groupsurmags) > 0) echo '<ul style="padding-left:15px">';
        foreach ($this->groupsurmags as $groupsurmag) {
            echo CHtml::link('<li>' . $groupsurmag->nIM->NAMA . '<i data-feather="fa fa-caret-right"></i>' . $groupsurmag->NOURUTGROUPSURMAG) . '</li>';
        }
        if (count($this->groupsurmags) > 0) echo '</ul>';
        return $hasil;
    }

    public function getStatuskirimsurat()
    {
        $a = $this->IDSURMAG;
        $sql = "select IDSURMAG from detailsurmag where IDSURMAG='$a'";
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

        if ($this->ACCSURMAG == 'Approve') {
            $hasil = '<label class="btn btn-warning waves-effect waves-float waves-light"><i data-feather="check-square"></i></label>';
        } else if ($this->ACCSURMAG == 'Not Approved') {
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

    public function getViewkirimsurat()
    {
        $a = $this->IDSURMAG;
        $sql = "select IDSURMAG from detailsurmag where IDSURMAG='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        if ($b > 0) {
            echo CHtml::link('<i data-feather="fa fa-check"></i> View', array('surmag/sendisisurat', 'id' => $this->primaryKey), array('class' => 'btn btn-sm purple'));
        } else {
            echo CHtml::link('<i data-feather="fa fa-tag"></i> View', array('surmag/isisurat', 'id' => $this->primaryKey), array('class' => 'btn btn-sm purple'));
        }
    }

    public function getCetakbytgl()
    {
        $a = $this->IDSURMAG;
        $sql = "select TGLCETAKSURATSURMAG from surmag where IDSURMAG='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        if ($b > 0) {
            echo CHtml::link('<i data-feather="printer"></i> Cetak', array('cetak/surmag', 'id' => $this->IDSURMAG), array('target' => '_blank', 'class' => 'btn btn-gradient-warning'));

        } else {
            echo "<font color='red'> Tgl.cetak belum di set..</font>";
        }
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Surmag the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
