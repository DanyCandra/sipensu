<?php

/**
 * This is the model class for table "surketnobeswa".
 *
 * The followings are the available columns in table 'surketnobeswa':
 * @property integer $IDSURKETNOBESWA
 * @property integer $IDJENISSURAT
 * @property string $NOSURKETNOBESWA
 * @property string $NIM
 * @property integer $iDTASEMESTER
 * @property string $KEPERLUANSURKETNOBESWA
 * @property string $KETERANGANSURKETNOBESWA
 * @property string $TGLCETAKSURATNOBESWA
 * @property string $TGLSUBMITSURKETNOBESWA
 * @property string $ACCSURKETNOBESWA
 * @property string $PREVIEW
 * @property string $ACCSUBKOR
 * @property string $TANGGALACCSUBKOR
 * @property string $ACCDEKANAT
 * @property string $TANGGALACCDEKANAT
 * @property string $TANGGALACCSURKETNO
 *
 * The followings are the available model relations:
 * @property Detailsurketnobeswa[] $detailsurketnobeswas
 * @property Jenissurat $iDJENISSURAT
 * @property Mahasiswa $nIM
 * @property Currentsemester $iDTASEMESTER
 *
 */
class Surketnobeswa extends CActiveRecord
{

    public $cariprodi;

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'surketnobeswa';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            //array('TGLSUBMITSURKETNOBESWA', 'required'),
            array('NIM, KEPERLUANSURKETNOBESWA', 'required'),
            array('IDJENISSURAT,IDTASEMESTER', 'numerical', 'integerOnly' => true),
            array('NOSURKETNOBESWA', 'length', 'max' => 50),
            array('NIM', 'length', 'max' => 10),
            array('KEPERLUANSURKETNOBESWA', 'length', 'max' => 250),
            array('ACCSURKETNOBESWA', 'length', 'max' => 15),
            array('KETERANGANSURKETNOBESWA, TGLCETAKSURATNOBESWA, PREVIEW, ACCSUBKOR, ACCDEKANAT, TANGGALACCSUBKOR, TANGGALACCDEKANAT, TANGGALACCSURKETNO', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('cariprodi,IDSURKETNOBESWA, IDJENISSURAT, NOSURKETNOBESWA, ACCSURKETNOBESWA,KEPERLUANSURKETNOBESWA,
			TGLCETAKSURATNOBESWA, NIM, IDTASEMESTER, KETERANGANSURKETNOBESWA, TGLSUBMITSURKETNOBESWA, PREVIEW
			, ACCSUBKOR, ACCDEKANAT, TANGGALACCSUBKOR, TANGGALACCDEKANAT, TANGGALACCSURKETNO', 'safe', 'on' => 'search'),
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
            'detailsurketnobeswas' => array(self::HAS_MANY, 'Detailsurketnobeswa', 'IDSURKETNOBESWA'),
            'iDJENISSURAT' => array(self::BELONGS_TO, 'Jenissurat', 'IDJENISSURAT'),
            'nIM' => array(self::BELONGS_TO, 'Mahasiswa', 'NIM'),
            'iDTASEMESTER' => array(self::BELONGS_TO, 'Currentsemester', 'IDTASEMESTER'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'IDSURKETNOBESWA' => 'Kode Surat',
            'IDJENISSURAT' => 'Jenis Surat',
            'NOSURKETNOBESWA' => 'No. Surat',
            'NIM' => 'NIM/Nama',
            'IDTASEMESTER' => 'Kode TA Semester',
            'KEPERLUANSURKETNOBESWA' => 'Keperluan Surat',
            'KETERANGANSURKETNOBESWA' => 'Keterangan',
            'TGLCETAKSURATNOBESWA' => 'Tgl. Surat/Cetak',
            'TGLSUBMITSURKETNOBESWA' => 'Tgl. Submit',
            'ACCSURKETNOBESWA' => 'Acc. Surat',
            'PREVIEW' => 'Status Baca',
            'ACCSUBKOR' => 'Acc Subkor',
            'TANGGALACCSUBKOR' => 'Tgl Acc Subkor',
            'ACCDEKANAT' => 'Acc Dekanat',
            'TANGGALACCDEKANAT' => 'Tgl Acc Dekanat',
            'TANGGALACCSURKETNO' => 'Tgl Acc Surat',
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
        $criteria->compare('IDSURKETNOBESWA', $this->IDSURKETNOBESWA);
        $criteria->compare('IDJENISSURAT', $this->IDJENISSURAT);
        $criteria->compare('NOSURKETNOBESWA', $this->NOSURKETNOBESWA, true);
        $criteria->compare('t.NIM', $this->NIM, true);
        //$criteria->compare('NIM',$this->NIM,true);
        $criteria->compare('IDTASEMESTER', $this->IDTASEMESTER, true);
        $criteria->compare('KEPERLUANSURKETNOBESWA', $this->KEPERLUANSURKETNOBESWA, true);
        $criteria->compare('KETERANGANSURKETNOBESWA', $this->KETERANGANSURKETNOBESWA, true);
        $criteria->compare('TGLCETAKSURATNOBESWA', $this->TGLCETAKSURATNOBESWA, true);
        $criteria->compare('TGLSUBMITSURKETNOBESWA', $this->TGLSUBMITSURKETNOBESWA, true);
        $criteria->compare('ACCSURKETNOBESWA', $this->ACCSURKETNOBESWA, true);
        $criteria->compare('PREVIEW', $this->PREVIEW, true);
        $criteria->compare('IDPRODI', $this->cariprodi, true);
        $criteria->compare('ACCSUBKOR', $this->ACCSUBKOR, true);
        $criteria->compare('TANGGALACCSUBKOR', $this->TANGGALACCSUBKOR, true);
        $criteria->compare('ACCDEKANAT', $this->ACCDEKANAT, true);
        $criteria->compare('TANGGALACCDEKANAT', $this->TANGGALACCDEKANAT, true);
        $criteria->compare('TANGGALACCSURKETNO', $this->TANGGALACCSURKETNO, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'sort' => array(
                'defaultOrder' => 'IDSURKETNOBESWA DESC',
            )
        ));
    }

    //membuat tombol action notifikasi
    public function getListactionnotifikasi()
    {

        $a = $this->PREVIEW;
        $sql = "select PREVIEW from surketnobeswa where PREVIEW='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        $g = $this->PREVIEW;
        $sqli = "select PREVIEW from surketnobeswa where PREVIEW='$g'";
        $c = Yii::app()->db->createCommand($sqli)->queryScalar();


        if ($b == 'Y') {

            echo CHtml::link('<i data-feather="search"></i>', array('surketnobeswa/view', 'id' => $this->IDSURKETNOBESWA), array('class' => 'btn btn-sm blue')), '&nbsp';
            echo CHtml::link('<i data-feather="edit"></i>', array('surketnobeswa/update', 'id' => $this->IDSURKETNOBESWA), array('class' => 'btn btn-sm green'));

        } else {


            if ($c == 'N') {

                echo CHtml::link('<i data-feather="search"></i>', array('surketnobeswa/view', 'id' => $this->IDSURKETNOBESWA), array('class' => 'btn btn-sm red')), '&nbsp';
                echo CHtml::link('<i data-feather="edit"></i>', array('surketnobeswa/update', 'id' => $this->IDSURKETNOBESWA), array('class' => 'btn btn-sm green'));
            }
        }

    }

    public function getListsendsurketnobeswa()
    {
        $hasil = '';
        if (count($this->detailsurketnobeswas) > 0) echo '<ul style="padding-left:15px">';
        foreach ($this->detailsurketnobeswas as $nosuratnobeswa) {
            echo CHtml::link('<h4>Permintaan Surat Keterangan Tidak Menerima Beasiswa atas nama&nbsp;: ' . $nosuratnobeswa->iDSURKETNOBESWA->nIM->NAMA . '&nbsp;<i class="fa fa-hand-o-right"></i> Telah Terkirim ke :&nbsp' . $nosuratnobeswa->iDGROUPS->DIVISI) . '</li></h4>';
        }
        return $hasil;
    }

    public function getListbuatnosuratnobeswa()
    {
        $hasil = '';
        if (count($this->detailsurketnobeswas) > 0) echo '<ul style="padding-left:15px">';
        foreach ($this->detailsurketnobeswas as $nosuratnobeswa) {
            echo CHtml::link('<li>No.Surat : ' . $nosuratnobeswa->iDSURKETNOBESWA->NOSURKETNOBESWA . '&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp' . $nosuratnobeswa->iDGROUPS->DIVISI) . '</li>';
            //echo CHtml::link('<li>No.Surat : '.$nosuratnobeswa->iDSURKETNOBESWA->NOSURKETNOBESWA.'&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp'.$nosuratnobeswa->iDGROUPS->DIVISI.'',array('surketnobeswa/updatenosurketnobeswa','id'=>$nosuratnobeswa->IDSURKETNOBESWA)).'</li>';
        }
        if (count($this->detailsurketnobeswas) > 0) echo '</ul>';
        //echo CHtml::link('<i class="fa fa-tag"></i> Buat No.Surat',array('surketnobeswa/updatenosurketnobeswa','id'=>$this->IDSURKETNOBESWA),array('class'=>'btn btn-sm green'));
        return $hasil;
    }


    public function getStatuskirimsurat()
    {
        $a = $this->IDSURKETNOBESWA;
        $sql = "select IDSURKETNOBESWA from detailsurketnobeswa where IDSURKETNOBESWA='$a'";
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

        if ($this->ACCSURKETNOBESWA == 'Approve') {
            $hasil = '<label class="btn btn-warning waves-effect waves-float waves-light"><i data-feather="check-square"></i></label>';
        } else if ($this->ACCSURKETNOBESWA == 'Not Approved') {
            $hasil = '<label class="btn btn-primary waves-effect waves-float waves-light"><i data-feather="x-square"></i></label>';
        } else {
            $hasil = '<label class="btn btn-danger waves-effect waves-float waves-light"><i data-feather="alert-circle"></i></label>';
        }
        {
            return $hasil;
        }
    }
    public function getAccsurat()
    {
        $hasil = '';
        if ($this->ACCSURKETNOBESWA == 'Approve') {
            $hasil = '<label class="btn btn-warning waves-effect waves-float waves-light"><i data-feather="check-square"></i></label>';
        } else if ($this->ACCSURKETNOBESWA == 'Not Approved') {
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
        $a = $this->IDSURKETNOBESWA;
        $sql = "select TGLCETAKSURATNOBESWA from surketnobeswa where IDSURKETNOBESWA='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        if ($b > 0) {
            echo CHtml::link('<i data-feather="printer"></i> QR', array('cetak/surketnobeswa', 'id' => $this->IDSURKETNOBESWA,'tipe'=>'1'), array('target' => '_blank', 'class' => 'btn btn-gradient-primary'));
            echo CHtml::link('<i data-feather="printer"></i> No QR', array('cetak/surketnobeswa', 'id' => $this->IDSURKETNOBESWA,'tipe'=>'2'), array('target' => '_blank', 'class' => 'btn btn-gradient-danger'));

        } else {
            echo "<font color='red'> Tgl.cetak belum di set..</font>";
        }
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Surketnobeswa the static model class
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
