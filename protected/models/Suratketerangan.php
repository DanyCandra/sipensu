<?php

/**
 * This is the model class for table "suratketerangan".
 *
 * The followings are the available columns in table 'suratketerangan':
 * @property integer $IDSURKET
 * @property integer $IDJENISSURAT
 * @property integer $IDTASEMESTER
 * @property string $NOSURKET
 * @property string $NIM
 * @property string $PERIHAL1
 * @property string $PERIHAL2
 * @property string $KETERANGANSURKET
 * @property string $TGLCETAKSURKET
 * @property string $TGLSUBMITSURKET
 * @property string $ACCSURKET
 * @property string $PREVIEW
 * @property string $ACCSUBKOR
 * @property string $TANGGALACCSUBKOR
 * @property string $ACCDEKANAT
 * @property string $TANGGALACCDEKANAT

 *
 * The followings are the available model relations:
 * @property Detailsuratketerangan[] $detailsuratketerangans
 * @property Jenissurat $iDJENISSURAT
 * @property Mahasiswa $nIM
 * @property Currentsemester $iDTASEMESTER

 */
class Suratketerangan extends CActiveRecord
{
    public $cariprodi;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'suratketerangan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('TGLSUBMITSURKET', 'required'),
            array('NIM, PERIHAL1, PERIHAL2', 'required'),
			array('IDJENISSURAT, IDTASEMESTER', 'numerical', 'integerOnly'=>true),
			array('NOSURKET', 'length', 'max'=>50),
			array('NIM', 'length', 'max'=>10),
			array('TGLCETAKSURKET', 'length', 'max'=>20),
			array('ACCSURKET, ACCSUBKOR, ACCDEKANAT', 'length', 'max'=>15),
            array('PERIHAL1', 'length', 'max'=>5000),
            array('PERIHAL2', 'length', 'max'=>5000),
			array('KETERANGANSURKET, PREVIEW', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cariprodi, IDSURKET, IDJENISSURAT, IDTASEMESTER, NOSURKET, NIM, PERIHAL1, PERIHAL2, KETERANGANSURKET, TGLCETAKSURKET, 
			TGLSUBMITSURKET, ACCSURKET, ACCSUBKOR, ACCDEKANAT, TANGGALACCSUBKOR, TANGGALACCDEKANAT, PREVIEW', 'safe', 'on'=>'search'),
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
			'detailsuratketerangans' => array(self::HAS_MANY, 'Detailsuratketerangan', 'IDSURKET'),
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
			'IDSURKET' => 'Kode Surat Keterangan',
			'IDJENISSURAT' => 'Jenis Surat',
			'IDTASEMESTER' => 'Kode TA Semester',
			'NOSURKET' => 'No. Surat Keterangan',
			'NIM' => 'NIM',
			'PERIHAL1' => 'Keterangan Perihal',
			'PERIHAL2' => 'Detail Perihal',
			'KETERANGANSURKET' => 'Keterangan',
			'TGLCETAKSURKET' => 'Tgl. Cetak Surat',
			'TGLSUBMITSURKET' => 'Tgl. Submit',
			'ACCSURKET' => 'Acc. Surat',
             'PREVIEW'=>'Status Baca',
            'ACCSUBKOR'=>'Acc. Sub Koordinator',
            'TANGGALACCSUBKOR'=>'Tgl Acc Subkor',
            'ACCDEKNAT'=>'Acc. Dekanat',
            'TANGGALACCDEKANAT'=>'Tgl Acc Dekanat',
			
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
		$criteria->compare('IDSURKET',$this->IDSURKET);
		$criteria->compare('IDJENISSURAT',$this->IDJENISSURAT);
		$criteria->compare('IDTASEMESTER',$this->IDTASEMESTER);
		$criteria->compare('NOSURKET',$this->NOSURKET,true);
		$criteria->compare('t.NIM',$this->NIM,true);
		$criteria->compare('PERIHAL1',$this->PERIHAL1,true);
		$criteria->compare('PERIHAL2',$this->PERIHAL2,true);
		$criteria->compare('KETERANGANSURKET',$this->KETERANGANSURKET,true);
		$criteria->compare('TGLCETAKSURKET',$this->TGLCETAKSURKET,true);
		$criteria->compare('TGLSUBMITSURKET',$this->TGLSUBMITSURKET,true);
		$criteria->compare('ACCSURKET',$this->ACCSURKET,true);
        $criteria->compare('PREVIEW',$this->PREVIEW,true);
        $criteria->compare('ACCSUBKOR', $this->ACCSUBKOR, true);
        $criteria->compare('TANGGALACCSUBKOR', $this->TANGGALACCSUBKOR, true);
        $criteria->compare('ACCDEKANAT', $this->ACCDEKANAT, true);
        $criteria->compare('TANGGALACCDEKANAT', $this->TANGGALACCDEKANAT, true);
                
		$criteria->compare('IDPRODI',$this->cariprodi,true);
                

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                         'sort'=>array (
                               'defaultOrder'=>'IDSURKET DESC',
                         )
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Suratketerangan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        //membuat tombol action notifikasi
        public function getListactionnotifikasi(){
           
            $a = $this->PREVIEW;
            $sql = "select PREVIEW from suratketerangan where PREVIEW='$a'";
            $b = Yii::app()->db->createCommand($sql)->queryScalar();

            $g = $this->PREVIEW;
            $sqli = "select PREVIEW from suratketerangan where PREVIEW='$g'";
            $c = Yii::app()->db->createCommand($sqli)->queryScalar();


            if ($b == 'Y') {
                echo CHtml::link('<i data-feather="search"></i>', array('suratketerangan/view', 'id' => $this->IDSURKET), array('class' => 'btn btn-sm blue')),'&nbsp';
                echo CHtml::link('<i data-feather="edit"></i>', array('suratketerangan/update', 'id' => $this->IDSURKET), array('class' => 'btn btn-sm green'));
            } else {
                if ($c == 'N') {
                    echo CHtml::link('<i data-feather="search"></i>', array('suratketerangan/view', 'id' => $this->IDSURKET), array('class' => 'btn btn-sm red')),'&nbsp';
                    echo CHtml::link('<i data-feather="edit"></i>', array('suratketerangan/update', 'id' => $this->IDSURKET), array('class' => 'btn btn-sm green'));
                } 
            }
        }
        
        
        public function getListbuatnosuratketerangan()
        {
            $hasil='';
            if (count($this->detailsuratketerangans)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->detailsuratketerangans as $nosuratketerangan) {
            //echo CHtml::link('<li>No.Surat : '.$nosuratns->iDSURTUGNS->NOSURTUGNS.'&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp'.$nosuratns->iDGROUPS->DIVISI.'',array('surtugns/updatenosurtugns','id'=>$nosuratns->IDSURTUGNS)).'</li>';
           echo CHtml::link('<li>No.Surat : '.$nosuratketerangan->iDSURKET->NOSURKET.'&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp'.$nosuratketerangan->iDGROUPS->DIVISI.'').'</li>';
            
            }
            if (count($this->detailsuratketerangans)>0) echo '</ul>';
            //echo CHtml::link('<i class="fa fa-tag"></i> Buat No.Surat',array('suratketerangan/updatenosuratketerangan','id'=>$this->IDSURKET),array('class'=>'btn btn-sm green'));
            return $hasil;
        }

       public function getListsendsuratketerangan()
       {
            $hasil='';
            if (count($this->detailsuratketerangans)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->detailsuratketerangans as $nosuratketerangan) {
            echo CHtml::link('<h4>Permintaan Surat Keterangan atas nama&nbsp;: '.$nosuratketerangan->iDSURKET->nIM->NAMA.'&nbsp;<i class="fa fa-hand-o-right"></i> Telah Terkirim ke :&nbsp'.$nosuratketerangan->iDGROUPS->DIVISI).'</li></h4>';
            }  
            return $hasil;
       }

       public function getStatuskirimsurat() {
        $a=$this->IDSURKET;
        $sql="select IDSURKET from detailsuratketerangan where IDSURKET='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        if ($b > 0) {
            echo ('<i class="fa fa-check"> </i>');
        } else {
            echo "Belum Dikirim...";
        }
    }    
      
            
         public function getAccsurat() {
        $hasil='';
             
                    if ($this->ACCSURKET=='Approve'){
                        $hasil = '<label class="btn btn-warning waves-effect waves-float waves-light">
                        <i data-feather="check-square"></i>
                        </label>';
                    }
                     elseif ($this->ACCSURKET=='Not Approved'){
                         $hasil = '<label class="btn btn-primary waves-effect waves-float waves-light">
                        <i data-feather="x-square"></i>
                        </label>';
                     }
                   else {
                       $hasil = '<label class="btn btn-danger waves-effect waves-float waves-light">
                        <i data-feather="alert-circle"></i>
                        </label>';
                   }
                     {                  
                  return $hasil;  }
             }

    public function getAccsubkor()
    {
        $hasil='';
        if($this->ACCSUBKOR=='Approve'){
            $hasil = '<label class="btn btn-warning waves-effect waves-float waves-light">
                        <i data-feather="check-square"></i>
                        </label>';
        }
        elseif($this->ACCSUBKOR=='Not Approved')
        {
            $hasil = '<label class="btn btn-primary waves-effect waves-float waves-light">
                        <i data-feather="x-square"></i>
                        </label>';
        }
        else{
            $hasil = '<label class="btn btn-danger waves-effect waves-float waves-light">
                        <i data-feather="alert-circle"></i>
                        </label>';
        }
        return $hasil;

    }

    public function getAccdekanat()
    {
        $hasil='';
        if($this->ACCDEKANAT=='Approve'){
            $hasil = '<label class="btn btn-warning waves-effect waves-float waves-light">
                        <i data-feather="check-square"></i>
                        </label>';
        }
        elseif($this->ACCDEKANAT=='Not Approved')
        {
            $hasil = '<label class="btn btn-primary waves-effect waves-float waves-light">
                        <i data-feather="x-square"></i>
                        </label>';
        }
        else{
            $hasil = '<label class="btn btn-danger waves-effect waves-float waves-light">
                        <i data-feather="alert-circle"></i>
                        </label>';
        }
        return $hasil;

    }

    
         //coba tampilkan gabunan perihal1&perihal2
              public function getListperihalsuratketerangan(){
              $a = $this->IDSURKET;
              $sql = "select PERIHAL1, PERIHAL2 from suratketerangan where IDSURKET='$a'";
              $b = Yii::app()->db->createCommand($sql)->queryScalar();
                {
                echo CHtml::link('Adalah benar-benar mahasiswa Fakutas Ekonomi dan Bisnis Universitas Jenderal Soedirman Purwokerto,'.$this->PERIHAL1.'&nbsp;Surat keterangan ini dibuat sebagai&nbsp'.$this->PERIHAL2).'';
                }  
                }
   
            //status perihal di view
          public function getStatusperihalsuratketerangan() {
            $a = $this->IDSURKET;
              $sql = "select PERIHAL1, PERIHAL2 from suratketerangan where IDSURKET='$a'";
              $b = Yii::app()->db->createCommand($sql)->queryScalar();
               {
                $hasil= 'Adalah benar-benar mahasiswa Fakutas Ekonomi dan Bisnis Universitas Jenderal Soedirman Purwokerto,'.$this->PERIHAL1.'&nbsp;Surat keterangan ini dibuat sebagai&nbsp'.$this->PERIHAL2.'';
                }  
               
          return $hasil;
            }

       public function getCetakbytgl() {
        $a = $this->IDSURKET;
        $sql = "select TGLCETAKSURKET from suratketerangan where IDSURKET='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

        if ($b > 0) {
            echo CHtml::link('<i class="fa fa-print"></i> QR', array('cetak/suratketerangan', 'id' => $this->IDSURKET, 'tipe'=>'1'), array('target' => '_blank', 'class' => 'btn btn-gradient-primary'));
            echo CHtml::link('<i class="fa fa-print"></i> No QR', array('cetak/suratketerangan', 'id' => $this->IDSURKET, 'tipe'=>'2'), array('target' => '_blank', 'class' => 'btn btn-gradient-danger'));
        } else {
            echo "<font color='red'> Tgl.cetak belum di set..</font>";
        }
       }
    
    public function getCariprodi(){
        return $this->cariprodi;
    }
}
