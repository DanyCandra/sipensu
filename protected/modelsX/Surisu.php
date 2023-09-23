<?php

/**
 * This is the model class for table "surisu".
 *
 * The followings are the available columns in table 'surisu':
 * @property integer $IDISU
 * @property integer $IDJENISSURAT
 * @property integer $iDTASEMESTER
 * @property string $NOISU
 * @property string $INSTANSIISU
 * @property string $ALAMATINSTANSIISU
 * @property string $KOTAINSTANSIISU
 * @property string $IDMATAKULIAHISU
 * @property string $KETERANGANISU
 * @property string $TGLCETAKSURATISU
 * @property string $TGLSUBMITISU
 * @property string $ACCSURISU
 * @property string $PREVIEW
 * @property string $ACCSUBKOR
 * @property string $TANGGALACCSUBKOR
 * @property string $ACCDEKANAT
 * @property string $TANGGALACCDEKANAT
 * @property string $TANGGALACCSURISU
 *
 * The followings are the available model relations:
 * @property Detailgroupisu[] $detailsurisus
 * @property Groupsurisu[] $groupsurisus
 * @property Jenissurat $iDJENISSURAT
 * @property Currentsemester $iDTASEMESTER
 *
 * @property Matakuliahsurisu $iDMATAKULIAHISU
 */
class Surisu extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'surisu';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            //array('TGLSUBMITISU', 'required'),
            array('INSTANSIISU,ALAMATINSTANSIISU,KOTAINSTANSIISU, IDMATAKULIAHISU', 'required'),
            array('IDJENISSURAT, IDMATAKULIAHISU,IDTASEMESTER', 'numerical', 'integerOnly' => true),
            array('NOISU', 'length', 'max' => 50),
            array('INSTANSIISU, KOTAINSTANSIISU', 'length', 'max' => 100),
            array('ALAMATINSTANSIISU', 'length', 'max' => 200),
            array('TGLCETAKSURATISU', 'length', 'max' => 20),
            array('ACCSURISU', 'length', 'max' => 15),
            array('KETERANGANISU,IDMATAKULIAHISU, ACCSURISU,TGLCETAKSURATISU, PREVIEW', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('IDISU, IDJENISSURAT, NOISU, IDMATAKULIAHISU,INSTANSIISU, TGLCETAKSURATISU ,ALAMATINSTANSIISU, KOTAINSTANSIISU, 
			IDTASEMESTER, KETERANGANISU, TGLSUBMITISU, ACCSURISU, PREVIEW,
			ACCSUBKOR, ACCDEKANAT, TANGGALACCSUBKOR, TANGGALACCDEKANAT, TANGGALACCSURISU', 'safe', 'on' => 'search'),
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
            'detailsurisus' => array(self::HAS_MANY, 'Detailsurisu', 'IDISU'),
            'groupsurisus' => array(self::HAS_MANY, 'Groupsurisu', 'IDISU'),
            'iDJENISSURAT' => array(self::BELONGS_TO, 'Jenissurat', 'IDJENISSURAT'),
            'iDMATAKULIAHISU' => array(self::BELONGS_TO, 'Matakuliahsurisu', 'IDMATAKULIAHISU'),
            'iDTASEMESTER' => array(self::BELONGS_TO, 'Currentsemester', 'IDTASEMESTER'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'IDISU' => 'Kode Surat Ijin Survei',
            'IDJENISSURAT' => 'Jenis Surat',
            'NOISU' => 'No. Surat',
            'INSTANSIISU' => 'Tujuan/Instansi/Sub.Bagian',
            'ALAMATINSTANSIISU' => 'Alamat Instansi',
            'KOTAINSTANSIISU' => 'Kota Instansi',
            'IDTASEMESTER' => 'Kode TA Semester ',
            'KETERANGANISU' => 'Keterangan',
            'TGLCETAKSURATISU' => 'Tgl. Cetak Surat',
            'TGLSUBMITISU' => 'Tgl. Submit',
            'ACCSURISU' => 'Acc. Surat',
            'IDMATAKULIAHISU' => 'Syarat Mata Kuliah',
            'PREVIEW' => 'Status Baca',
            'ACCSUBKOR' => 'Acc Subkor',
            'TANGGALACCSUBKOR' => 'Tgl Acc Subkor',
            'ACCDEKANAT' => 'Acc Dekanat',
            'TANGGALACCDEKANAT' => 'Tgl Acc Dekanat',
            'TANGGALACCSURISU' => 'Tgl Acc Surat',
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

        $criteria->compare('IDISU', $this->IDISU);
        $criteria->compare('IDJENISSURAT', $this->IDJENISSURAT);
        $criteria->compare('NOISU', $this->NOISU, true);
        $criteria->compare('INSTANSIISU', $this->INSTANSIISU, true);
        $criteria->compare('ALAMATINSTANSIISU', $this->ALAMATINSTANSIISU, true);
        $criteria->compare('KOTAINSTANSIISU', $this->KOTAINSTANSIISU, true);
        $criteria->compare('IDTASEMESTER', $this->IDTASEMESTER, true);
        $criteria->compare('KETERANGANISU', $this->KETERANGANISU, true);
        $criteria->compare('TGLCETAKSURATISU', $this->TGLCETAKSURATISU, true);
        $criteria->compare('TGLSUBMITISU', $this->TGLSUBMITISU, true);
        $criteria->compare('ACCSURISU', $this->ACCSURISU, true);
        $criteria->compare('IDMATAKULIAHISU', $this->IDMATAKULIAHISU, true);
        $criteria->compare('PREVIEW', $this->PREVIEW, true);
        $criteria->compare('ACCSUBKOR', $this->ACCSUBKOR, true);
        $criteria->compare('TANGGALACCSUBKOR', $this->TANGGALACCSUBKOR, true);
        $criteria->compare('ACCDEKANAT', $this->ACCDEKANAT, true);
        $criteria->compare('TANGGALACCDEKANAT', $this->TANGGALACCDEKANAT, true);
        $criteria->compare('TANGGALACCSURISU', $this->TANGGALACCSURISU, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'sort' => array(
                'defaultOrder' => 'IDISU DESC',
            )
        ));
    }

    //membuat tombol action notifikasi
    public function getListactionnotifikasi()
    {

        $a = $this->PREVIEW;
        $sql = "select PREVIEW from surisu where PREVIEW='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        $g = $this->PREVIEW;
        $sqli = "select PREVIEW from surisu where PREVIEW='$g'";
        $c = Yii::app()->db->createCommand($sqli)->queryScalar();


        if ($b == 'Y') {

            echo CHtml::link('<i data-feather="search"></i>', array('surisu/view', 'id' => $this->IDISU), array('class' => 'btn btn-sm blue')), '&nbsp';
            echo CHtml::link('<i data-feather="edit"></i>', array('surisu/update', 'id' => $this->IDISU), array('class' => 'btn btn-sm green'));

        } else {


            if ($c == 'N') {

                echo CHtml::link('<i data-feather="search"></i>', array('surisu/view', 'id' => $this->IDISU), array('class' => 'btn btn-sm red')), '&nbsp';
                echo CHtml::link('<i data-feather="edit"></i>', array('surisu/update', 'id' => $this->IDISU), array('class' => 'btn btn-sm green'));
            }
        }

    }

    public function getListsendsurisu()
    {
        $hasil = '';
        if (count($this->detailsurisus) > 0) echo '<ul style="padding-left:15px">';
        foreach ($this->detailsurisus as $nosuratisu) {
            echo CHtml::link('<h4>Permohonan Ijin Survei di Instansi&nbsp;: ' . $nosuratisu->iDISU->INSTANSIISU . '&nbsp;<i class="fa fa-hand-o-right"></i> Telah Terkirim ke :&nbsp' . $nosuratisu->iDGROUPS->DIVISI) . '</li></h4>';
        }
        return $hasil;
    }

    public function getListbuatnosurisu()
    {
        $hasil = '';
        if (count($this->detailsurisus) > 0) echo '<ul style="padding-left:15px">';
        foreach ($this->detailsurisus as $nosuratisu) {
            echo CHtml::link('<li>No.Surat : ' . $nosuratisu->iDISU->NOISU . '&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp' . $nosuratisu->iDGROUPS->DIVISI) . '</li>';
            //echo CHtml::link('<li>No.Surat : '.$nosuratisu->iDISU->NOISU.'&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp'.$nosuratisu->iDGROUPS->DIVISI.'',array('surisu/updatenosurisu','id'=>$nosuratisu->IDISU)).'</li>';
        }
        if (count($this->detailsurisus) > 0) echo '</ul>';
        //echo CHtml::link('<i class="fa fa-tag"></i> Buat No.Surat',array('surisu/updatenosurisu','id'=>$this->IDISU),array('class'=>'btn btn-sm green'));
        return $hasil;
    }

    public function getListtambahmahasiswasurisu()
    {
        $hasil = '';
        if (count($this->groupsurisus) > 0) echo '<ul style="padding-left:15px">';
        foreach ($this->groupsurisus as $groupsurisu) {
            echo CHtml::link('<li>' . $groupsurisu->nIM->NAMA . '<i class="fa fa-caret-right"></i>' . $groupsurisu->NOURUTGROUPSURISU, array('groupsurisu/update', 'id' => $groupsurisu->IDGROUPSURISU)) . '</li>';
        }
        if (count($this->groupsurisus) > 0) echo '</ul>';
        //echo CHtml::link('<i class="fa fa-tag"></i> Tambah Mahasiswa',array('groupsurisu/create','IDISU'=>$this->IDISU),array('class'=>'btn btn-sm green'));
        return $hasil;
    }

    public function getMahasiswasurisu()
    {
        $hasil = '';
        if (count($this->groupsurisus) > 0) echo '<ul style="padding-left:15px">';
        foreach ($this->groupsurisus as $groupsurisu) {
            echo CHtml::link('<li>' . $groupsurisu->nIM->NAMA . '<i class="fa fa-caret-right"></i>' . $groupsurisu->NOURUTGROUPSURISU) . '</li>';
        }
        if (count($this->groupsurisus) > 0) echo '</ul>';
        return $hasil;
    }

    public function getStatuskirimsurat()
    {
        $a = $this->IDISU;
        $sql = "select IDISU from detailsurisu where IDISU='$a'";
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

        if ($this->ACCSURISU == 'Approve') {
            $hasil = '<label class="btn btn-warning waves-effect waves-float waves-light">
                        <i data-feather="check-square"></i>
                        </label>';
        } else if ($this->ACCSURISU == 'Not Approved') {
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

    public function getViewkirimsurat()
    {
        $a = $this->IDISU;
        $sql = "select IDISU from detailsurisu where IDISU='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        if ($b > 0) {
            echo CHtml::link('<i class="fa fa-check"></i> View', array('surisu/sendisisurat', 'id' => $this->primaryKey), array('class' => 'btn btn-sm purple'));
        } else {
            echo CHtml::link('<i class="fa fa-tag"></i> View', array('surisu/isisurat', 'id' => $this->primaryKey), array('class' => 'btn btn-sm purple'));
        }
    }

    public function getCetakbytgl()
    {
        $a = $this->IDISU;
        $sql = "select TGLCETAKSURATISU from surisu where IDISU='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        if ($b > 0) {
            echo CHtml::link('<i class="fa fa-print"></i> Cetak', array('cetak/surisu', 'id' => $this->IDISU), array('target' => '_blank', 'class' => 'btn btn-sm yellow'));

        } else {
            echo "<font color='red'> Tgl.cetak belum di set..</font>";
        }
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Surisu the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
