<?php

/**
 * This is the model class for table "surijinpn".
 *
 * The followings are the available columns in table 'surijinpn':
 * @property integer $IDIJINPN
 * @property integer $IDJENISSURAT
 * @property string $NIM
 * @property string $NOSURATIJINPN
 * @property string $INSTANSIIJINPN
 * @property string $ALAMATINSTANSIIJINPN
 * @property string $KOTAINSTANSIIJINPN
 * @property integer $iDTASEMESTER
 * @property string $JUDULSKRIPSIIJINPN
 * @property string $KETERANGANIJINPN
 * @property string $TGLCETAKSURATIJINPN
 * @property string $TGLSUBMITIJINPN
 * @property string $ACCSURIJINPN
 * @property string $PREVIEW
 * @property string $ACCSUBKOR
 * @property string $TANGGALACCSUBKOR
 * @property string $ACCDEKANAT
 * @property string $TANGGALACCDEKANAT
 * @property string $TANGGALACCSURIJINPN
 *
 * The followings are the available model relations:
 * @property Detailsurijinpn[] $detailsurijinpns
 * @property Jenissurat $iDJENISSURAT
 * @property Mahasiswa $nIM
 * @property Currentsemester $iDTASEMESTER
 */
class Surijinpn extends CActiveRecord
{
    public $cariprodi;

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'surijinpn';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            //array('TGLSUBMITIJINPN', 'required'),
            array('NIM, INSTANSIIJINPN, JUDULSKRIPSIIJINPN, ALAMATINSTANSIIJINPN, KOTAINSTANSIIJINPN  ', 'required'),
            array('IDJENISSURAT,IDTASEMESTER', 'numerical', 'integerOnly' => true),
            array('NIM', 'length', 'max' => 18),
            array('NOSURATIJINPN', 'length', 'max' => 50),
            array('INSTANSIIJINPN', 'length', 'max' => 80),
            array('ALAMATINSTANSIIJINPN', 'length', 'max' => 250),
            array('KOTAINSTANSIIJINPN', 'length', 'max' => 100),
            array('JUDULSKRIPSIIJINPN', 'length', 'max' => 1000),
            array('ACCSURIJINPN', 'length', 'max' => 15),
            array('KETERANGANIJINPN, TGLCETAKSURATIJINPN, ACCSURIJINPN, PREVIEW', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('cariprodi,IDIJINPN, IDJENISSURAT, NIM, NOSURATIJINPN, ACCSURIJINPN,TGLCETAKSURATIJINPN ,JUDULSKRIPSIIJINPN, INSTANSIIJINPN, 
			ALAMATINSTANSIIJINPN, KOTAINSTANSIIJINPN, IDTASEMESTER, KETERANGANIJINPN, TGLSUBMITIJINPN, PREVIEW,
			ACCSUBKOR, ACCDEKANAT, TANGGALACCSUBKOR, TANGGALACCDEKANAT, TANGGALACCSURIJINPN', 'safe', 'on' => 'search'),
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
            'detailsurijinpns' => array(self::HAS_MANY, 'Detailsurijinpn', 'IDIJINPN'),
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
            'IDIJINPN' => 'Kode Permitaan Surat',
            'IDJENISSURAT' => 'Jenis Surat',
            'NIM' => 'NIM/Nama',
            'NOSURATIJINPN' => 'No. Surat',
            'INSTANSIIJINPN' => 'Tujuan/Instansi',
            'ALAMATINSTANSIIJINPN' => 'Alamat Tujuan/Instansi',
            'KOTAINSTANSIIJINPN' => 'Kota Tujuan/Instansi',
            'IDTASEMESTER' => 'Kode TA Semester ',
            'JUDULSKRIPSIIJINPN' => 'Judul Skripsi',
            'KETERANGANIJINPN' => 'Keterangan',
            'TGLCETAKSURATIJINPN' => 'Tgl. Cetak Surat',
            'TGLSUBMITIJINPN' => 'Tgl. Submit',
            'ACCSURIJINPN' => 'Acc. Surat',
            'PREVIEW' => 'Status Baca',
            'ACCSUBKOR' => 'Acc Subkor',
            'TANGGALACCSUBKOR' => 'Tgl Acc Subkor',
            'ACCDEKANAT' => 'Acc Dekanat',
            'TANGGALACCDEKANAT' => 'Tgl Acc Dekanat',
            'TANGGALACCSURIJINPN' => 'Tgl Acc Surat',
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
        $criteria->compare('IDIJINPN', $this->IDIJINPN);
        $criteria->compare('IDJENISSURAT', $this->IDJENISSURAT);
        $criteria->compare('t.NIM', $this->NIM, true);
        //$criteria->compare('NIM',$this->NIM,true);
        $criteria->compare('NOSURATIJINPN', $this->NOSURATIJINPN, true);
        $criteria->compare('INSTANSIIJINPN', $this->INSTANSIIJINPN, true);
        $criteria->compare('ALAMATINSTANSIIJINPN', $this->ALAMATINSTANSIIJINPN, true);
        $criteria->compare('KOTAINSTANSIIJINPN', $this->KOTAINSTANSIIJINPN, true);
        $criteria->compare('IDTASEMESTER', $this->IDTASEMESTER, true);
        $criteria->compare('JUDULSKRIPSIIJINPN', $this->JUDULSKRIPSIIJINPN, true);
        $criteria->compare('KETERANGANIJINPN', $this->KETERANGANIJINPN, true);
        $criteria->compare('TGLSUBMITIJINPN', $this->TGLSUBMITIJINPN, true);
        $criteria->compare('ACCSURIJINPN', $this->ACCSURIJINPN, true);
        $criteria->compare('PREVIEW', $this->PREVIEW, true);
        $criteria->compare('ACCSUBKOR', $this->ACCSUBKOR, true);
        $criteria->compare('TANGGALACCSUBKOR', $this->TANGGALACCSUBKOR, true);
        $criteria->compare('ACCDEKANAT', $this->ACCDEKANAT, true);
        $criteria->compare('TANGGALACCDEKANAT', $this->TANGGALACCDEKANAT, true);
        $criteria->compare('TANGGALACCSURIJINPN', $this->TANGGALACCSURIJINPN, true);

        $criteria->compare('IDPRODI', $this->cariprodi, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'sort' => array(
                'defaultOrder' => 'IDIJINPN DESC',
            )
        ));
    }


    //membuat tombol action notifikasi
    public function getListactionnotifikasi()
    {

        $a = $this->PREVIEW;
        $sql = "select PREVIEW from surijinpn where PREVIEW='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        $g = $this->PREVIEW;
        $sqli = "select PREVIEW from surijinpn where PREVIEW='$g'";
        $c = Yii::app()->db->createCommand($sql)->queryScalar();

        if ($b == 'Y') {
            echo CHtml::link('<i data-feather="search"></i>', array('surijinpn/view', 'id' => $this->IDIJINPN), array('class' => 'btn btn-sm blue')), '&nbsp';
            echo CHtml::link('<i data-feather="edit"></i>', array('surijinpn/update', 'id' => $this->IDIJINPN), array('class' => 'btn btn-sm green'));
        } else {
            if ($c == 'N') {
                echo CHtml::link('<i data-feather="search"></i>', array('surijinpn/view', 'id' => $this->IDIJINPN), array('class' => 'btn btn-sm red')), '&nbsp';
                echo CHtml::link('<i data-feather="edit"></i>', array('surijinpn/update', 'id' => $this->IDIJINPN), array('class' => 'btn btn-sm green'));
            }
        }
    }


    public function getListbuatnosurijinpn()
    {
        $hasil = '';
        if (count($this->detailsurijinpns) > 0) echo '<ul style="padding-left:15px">';
        foreach ($this->detailsurijinpns as $nosuratijinpn) {
            echo CHtml::link('<li>No.Surat : ' . $nosuratijinpn->iDIJINPN->NOSURATIJINPN . '&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp' . $nosuratijinpn->iDGROUPS->DIVISI) . '</li>';
            //echo CHtml::link('<li>No.Surat : '.$nosuratijinpn->iDIJINPN->NOSURATIJINPN.'&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp'.$nosuratijinpn->iDGROUPS->DIVISI.'',array('surijinpn/updatenosurijinpn','id'=>$nosuratijinpn->IDIJINPN)).'</li>';
        }
        if (count($this->detailsurijinpns) > 0) echo '</ul>';
        //echo CHtml::link('<i class="fa fa-tag"></i> Buat No.Surat',array('surijinpn/updatenosurijinpn','id'=>$this->IDIJINPN),array('class'=>'btn btn-sm green'));
        return $hasil;
    }

    public function getListsendsurijinpn()
    {
        $hasil = '';
        if (count($this->detailsurijinpns) > 0) echo '<ul style="padding-left:15px">';
        foreach ($this->detailsurijinpns as $nosuratijinpn) {
            echo CHtml::link('<h4>Permintaan Surat Ijin Penelitian atas nama&nbsp;: ' . $nosuratijinpn->iDIJINPN->nIM->NAMA . '&nbsp;<i class="fa fa-hand-o-right"></i> Telah Terkirim ke :&nbsp' . $nosuratijinpn->iDGROUPS->DIVISI) . '</li></h4>';
        }
        return $hasil;
    }


    public function getStatuskirimsurat()
    {
        $a = $this->IDIJINPN;
        $sql = "select IDIJINPN from detailsurijinpn where IDIJINPN='$a'";
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

        if ($this->ACCSURIJINPN == 'Approve') {
            $hasil = '<label class="btn btn-warning waves-effect waves-float waves-light">
                        <i data-feather="check-square"></i>
                        </label>';
        } else if ($this->ACCSURIJINPN == 'Not Approved') {
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
        $a = $this->IDIJINPN;
        $sql = "select TGLCETAKSURATIJINPN from surijinpn where IDIJINPN='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        if ($b > 0) {
            echo CHtml::link('<i data-feather="printer"></i> Cetak', array('cetak/surijinpn', 'id' => $this->IDIJINPN), array('target' => '_blank', 'class' => 'btn btn-sm yellow'));

        } else {
            echo "<font color='red'> Tgl.cetak belum di set..</font>";
        }
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Surijinpn the static model class
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
