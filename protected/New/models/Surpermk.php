<?php

/**
 * This is the model class for table "surpermk".
 *
 * The followings are the available columns in table 'surpermk':
 * @property integer $IDMK
 * @property integer $IDJENISSURAT
 * @property string  $NOSURATMK
 * @property string  $NIM
 * @property integer $iDTASEMESTER
 * @property string  $NAMAWALIMK
 * @property string  $NIPWALIMK
 * @property integer $PANGGOL
 * @property string $INSTANSIWALIMK
 * @property string $KETERANGANSURPERMK
 * @property string $TGLCETAKSURATMK
 * @property string $TGLSUBMITMK
 * @property string $ACCSURPERMK
  * @property string $PREVIEW
 * @property string $ACCSUBKOR
 * @property string $TANGGALACCSUBKOR
 * @property string $ACCDEKANAT
 * @property string $TANGGALACCDEKANAT
 * @property string $TANGGALACCSURPERMK
 *
 *
 * The followings are the available model relations:
 * @property Detailsurpermk[] $detailsurpermks
 * @property Jenissurat $iDJENISSURAT
 * @property Mahasiswa $nIM
 * @property Currentsemester $iDTASEMESTER
 *
 */
class Surpermk extends CActiveRecord
{
     public $cariprodi;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'surpermk';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('INSTANSIWALIMK, NIPWALIMK, NAMAWALIMK, NIM, PANGGOL', 'required'),
			array('IDJENISSURAT,IDTASEMESTER', 'numerical', 'integerOnly'=>true),
			array('NOSURATMK, NAMAWALIMK', 'length', 'max'=>50),
			array('NIM', 'length', 'max'=>10),
			array('NIPWALIMK', 'length', 'max'=>500),
			array('INSTANSIWALIMK', 'length', 'max'=>100),
                        array('ACCSURPERMK, ACCDEKANAT, ACCSUBKOR', 'length', 'max'=>15),
                        array('PANGGOL', 'length', 'max'=>100),
			array('TGLSUBMITMK, KETERANGANSURPERMK, TGLCETAKSURATMK, PREVIEW, ACCSUBKOR, ACCDEKANAT, TANGGALACCSUBKOR, TANGGALACCDEKANAT, TANGGALACCSURPERMK', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cariprodi,IDMK, IDJENISSURAT, NOSURATMK, NIM, KETERANGANSURPERMK, ACCSURPERMK,TGLCETAKSURATMK, NAMAWALIMK, NIPWALIMK, PANGGOL, INSTANSIWALIMK, TGLSUBMITMK, IDTASEMESTER,PREVIEW', 'safe', 'on'=>'search'),
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
			'detailsurpermks' => array(self::HAS_MANY, 'Detailsurpermk', 'IDMK'),
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
			'IDMK' => 'Kode MK',
			'IDJENISSURAT' => 'Jenis Surat',
			'NOSURATMK' => 'No. Surat MK',
			'NIM' => 'NIM/Nama',
                        'IDTASEMESTER'=>'Kode TA Semester',
			'NAMAWALIMK' => 'Nama Wali (Ortu mahasiswa)',
			'NIPWALIMK' => 'NIP/NRP/No.Pensiunan',
			'PANGGOL' => 'Pangkat & Golongan',
			'INSTANSIWALIMK' => 'Instansi',
                        'KETERANGANSURPERMK'=>'Keterangan',
                        'TGLCETAKSURATMK'=>'Tgl. Surat/Cetak ',
			'TGLSUBMITMK' => 'Tgl. Submit MK',
                        'ACCSURPERMK' => 'Acc. Surat',
						'PREVIEW'=>'Status Baca',
            'ACCSUBKOR' => 'Acc Subkor',
            'TANGGALACCSUBKOR' => 'Tgl Acc Subkor',
            'ACCDEKANAT' => 'Acc Dekanat',
            'TANGGALACCDEKANAT' => 'Tgl Acc Dekanat',
            'TANGGALACCSURPERMK' => 'Tgl Acc Surat',
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
		$criteria->with='nIM';
		$criteria->compare('IDMK',$this->IDMK);
		$criteria->compare('IDJENISSURAT',$this->IDJENISSURAT);
		$criteria->compare('NOSURATMK',$this->NOSURATMK,true);
		$criteria->compare('t.NIM',$this->NIM,true);
		//$criteria->compare('NIM',$this->NIM,true);
                $criteria->compare('IDTASEMESTER',$this->IDTASEMESTER,true);
		$criteria->compare('NAMAWALIMK',$this->NAMAWALIMK,true);
		$criteria->compare('NIPWALIMK',$this->NIPWALIMK,true);
		$criteria->compare('PANGGOL',$this->PANGGOL);
		$criteria->compare('INSTANSIWALIMK',$this->INSTANSIWALIMK,true);
                $criteria->compare('KETERANGANSURPERMK',$this->KETERANGANSURPERMK,true);
                $criteria->compare('TGLCETAKSURATMK',$this->TGLCETAKSURATMK,true);
		$criteria->compare('TGLSUBMITMK',$this->TGLSUBMITMK,true);
                $criteria->compare('ACCSURPERMK',$this->ACCSURPERMK,true);
				$criteria->compare('PREVIEW',$this->PREVIEW,true);
                $criteria->compare('ACCSUBKOR', $this->ACCSUBKOR, true);
                $criteria->compare('TANGGALACCSUBKOR', $this->TANGGALACCSUBKOR, true);
                $criteria->compare('ACCDEKANAT', $this->ACCDEKANAT, true);
                $criteria->compare('TANGGALACCDEKANAT', $this->TANGGALACCDEKANAT, true);
                $criteria->compare('TANGGALACCSURPERMK', $this->TANGGALACCSURPERMK, true);
		
		$criteria->compare('IDPRODI',$this->cariprodi,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                         'sort'=>array (
                               'defaultOrder'=>'IDMK DESC',
                         )
		));
	}
	
	 //membuat tombol action notifikasi
        public function getListactionnotifikasi(){
           
            $a = $this->PREVIEW;
            $sql = "select PREVIEW from surpermk where PREVIEW='$a'";
            $b = Yii::app()->db->createCommand($sql)->queryScalar();

            $g = $this->PREVIEW;
            $sqli = "select PREVIEW from surpermk where PREVIEW='$g'";
            $c = Yii::app()->db->createCommand($sqli)->queryScalar();


            if ($b == 'Y') {
                   
                echo CHtml::link('<i data-feather="search"></i>', array('surpermk/view', 'id' => $this->IDMK), array('class' => 'btn btn-sm blue')),'&nbsp';
                echo CHtml::link('<i data-feather="edit"></i>', array('surpermk/update', 'id' => $this->IDMK), array('class' => 'btn btn-sm green'));
               
            } else {
               
                if ($c == 'N') {
                   
                    echo CHtml::link('<i data-feather="search"></i>', array('surpermk/view', 'id' => $this->IDMK), array('class' => 'btn btn-sm red')),'&nbsp';
                    echo CHtml::link('<i data-feather="edit"></i>', array('surpermk/update', 'id' => $this->IDMK), array('class' => 'btn btn-sm green'));
                } 
        }
        
                }
        
        public function getListsendsuratmk(){
            $hasil='';
            if (count($this->detailsurpermks)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->detailsurpermks as $nosuratmk) {
            echo CHtml::link('<h4>Permintaan Surat Pernyataan Masih Kuliah atas nama&nbsp;: '.$nosuratmk->iDMK->nIM->NAMA.'&nbsp;<i class="fa fa-hand-o-right"></i> Telah Terkirim ke :&nbsp'.$nosuratmk->iDGROUPS->DIVISI).'</li></h4>';
            }  
            return $hasil;
       }
       public function getListbuatnosuratmk(){
            $hasil='';
            if (count($this->detailsurpermks)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->detailsurpermks as $nosuratmk) {
            echo CHtml::link('<li>No.Surat : '.$nosuratmk->iDMK->NOSURATMK.'&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp'.$nosuratmk->iDGROUPS->DIVISI).'</li>';    
            //echo CHtml::link('<li>No.Surat : '.$nosuratmk->iDMK->NOSURATMK.'&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp'.$nosuratmk->iDGROUPS->DIVISI.'',array('surpermk/updatenosurpermk','id'=>$nosuratmk->IDMK)).'</li>';
            }
            if (count($this->detailsurpermks)>0) echo '</ul>';
            //echo CHtml::link('<i class="fa fa-tag"></i> Buat No.Surat',array('surpermk/updatenosurpermk','id'=>$this->IDMK),array('class'=>'btn btn-sm green'));
            return $hasil;
            }
            
            public function getStatuskirimsurat() {
        $a=$this->IDMK;
        $sql="select IDMK from detailsurpermk where IDMK='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        if ($b > 0) {
            echo ('<i class="fa fa-check"> </i>');
        } else {
            echo "Belum Dikirim...";
        }
    }

    public function getAccsurat(){
        $hasil='';

        if ($this->ACCSURPERMK=='Approve'){
            $hasil='<label class="btn btn-warning waves-effect waves-float waves-light"><i data-feather="check-square"></i></label>';
        }
        else  if ($this->ACCSURPERMK=='Not Approved')
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

    public function getAccsubkor()
    {
        $hasil='';
        if($this->ACCSUBKOR=='Approve')
        {
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
        else
        {
            $hasil='<label class="btn btn-danger waves-effect waves-float waves-light"><i data-feather="alert-circle"></i></label>';
        }
        {
            return $hasil;
        }
    }
            
    
     public function getCetakbytgl(){
         $a=$this->IDMK;
        $sql="select TGLCETAKSURATMK from surpermk where IDMK='$a' and ACCSURPERMK='Approve'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

       if ($b > 0) {
            echo CHtml::link('<i data-feather="printer"></i>',array('cetak/surpermk','id'=>$this->IDMK),array('target'=>'_blank','class'=>'btn btn-gradient-warning'));
       
        } else {
            echo "<font color='red'> Tgl.cetak belum di set / Surat Belum di Acc</font>";
        }
    }    
    
       


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Surpermk the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function getCariprodi() {
        return $this->cariprodi;
    }
}
