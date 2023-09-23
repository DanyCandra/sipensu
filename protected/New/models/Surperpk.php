<?php

/**
 * This is the model class for table "surperpk".
 *
 * The followings are the available columns in table 'surperpk':
 * @property integer $IDPK
 * @property integer $IDJENISSURAT
 * @property string $NOSURATPK
 * @property string $INSTANSIPK
 * @property string $ALAMATINSTANSIPK
 * @property string $KOTAINSTANSIPK
 * @property integer $iDTASEMESTER
 * @property string $ACCPERPK
 * @property string $KETERANGANPK
 * @property string $TGLCETAKSURATPK
 * @property string $TGLSUBMITPK
 * @property string $ACCSURPERPK
 * @property string $PREVIEW
 * @property string $TUJUANPK
 * @property string $ACCSUBKOR
 * @property string $TANGGALACCSUBKOR
 * @property string $ACCDEKANAT
 * @property string $TANGGALACCDEKANAT
 * @property string $TANGGALACCSURPERPK
 *
 * The followings are the available model relations:
 * @property Detailsurperpk[] $detailsurperpks
 * @property Groupsurperpk[] $groupsurperpks
 * @property Jenissurat $iDJENISSURAT
 */
class Surperpk extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'surperpk';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('TGLSUBMITPK', 'required'),
                        array('INSTANSIPK,ALAMATINSTANSIPK,KOTAINSTANSIPK,TUJUANPK', 'required'),
			array('IDJENISSURAT,IDTASEMESTER', 'numerical', 'integerOnly'=>true),
			array('NOSURATPK', 'length', 'max'=>50),
			array('INSTANSIPK, TUJUANPK', 'length', 'max'=>200),
			array('ALAMATINSTANSIPK', 'length', 'max'=>400),
			array('KOTAINSTANSIPK', 'length', 'max'=>100),
                        array('ACCPERPK', 'length', 'max'=>15),
                        array('TGLCETAKSURATPK', 'length', 'max'=>20),
                        array('ACCSURPERPK', 'length', 'max'=>15),
			array('KETERANGANPK , TGLCETAKSURATPK, PREVIEW', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDPK, IDJENISSURAT,TUJUANPK, NOSURATPK,ACCPERPK, INSTANSIPK,ACCSURPERPK,IDTASEMESTER,TGLCETAKSURATPK ,
			ALAMATINSTANSIPK, KOTAINSTANSIPK, KETERANGANPK, TGLSUBMITPK,PREVIEW,
			ACCSUBKOR, ACCDEKANAT, TANGGALACCSUBKOR, TANGGALACCDEKANAT, TANGGALACCSURPERPK', 'safe', 'on'=>'search'),
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
			'detailsurperpks' => array(self::HAS_MANY, 'Detailsurperpk', 'IDPK'),
			'groupsurperpks' => array(self::HAS_MANY, 'Groupsurperpk', 'IDPK'),
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
			'IDPK' => 'Kode Permohonan Surat PK',
			'IDJENISSURAT' => 'Jenis Surat',
			'NOSURATPK' => 'No. Surat',
			'TUJUANPK' => 'Surat Ditujukan',
			'INSTANSIPK' => 'Instansi Praktik Kerja',
			'ALAMATINSTANSIPK' => 'Alamat Praktik Kerja',
			'KOTAINSTANSIPK' => 'Kota Praktik Kerja',
                        'IDTASEMESTER'=>'Kode TA Semester',
                        'ACCPERPK'=>'Persetujuan Permohonan Surat',
			'KETERANGANPK' => 'Keterangan',
                        'TGLCETAKSURATPK'=>'Tgl. Cetak Surat',
			'TGLSUBMITPK' => 'Tgl. Submit',
                        'ACCSURPERPK' => 'Acc. Surat',
                        'PREVIEW'=>'Status Baca',
            'ACCSUBKOR' => 'Acc Subkor',
            'TANGGALACCSUBKOR' => 'Tgl Acc Subkor',
            'ACCDEKANAT' => 'Acc Dekanat',
            'TANGGALACCDEKANAT' => 'Tgl Acc Dekanat',
            'TANGGALACCSURPERPK' => 'Tgl Acc Surat',
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

		$criteria->compare('IDPK',$this->IDPK);
		$criteria->compare('IDJENISSURAT',$this->IDJENISSURAT);
		$criteria->compare('NOSURATPK',$this->NOSURATPK,true);
		$criteria->compare('TUJUANPK',$this->TUJUANPK,true);
		$criteria->compare('INSTANSIPK',$this->INSTANSIPK,true);
		$criteria->compare('ALAMATINSTANSIPK',$this->ALAMATINSTANSIPK,true);
		$criteria->compare('KOTAINSTANSIPK',$this->KOTAINSTANSIPK,true);
                $criteria->compare('IDTASEMESTER',$this->IDTASEMESTER,true);
                $criteria->compare('ACCPERPK',$this->ACCPERPK,true);
		$criteria->compare('KETERANGANPK',$this->KETERANGANPK,true);
                $criteria->compare('TGLCETAKSURATPK',$this->TGLCETAKSURATPK,true);
		$criteria->compare('TGLSUBMITPK',$this->TGLSUBMITPK,true);
                $criteria->compare('ACCSURPERPK',$this->ACCSURPERPK,true);
                $criteria->compare('PREVIEW',$this->PREVIEW,true);
        $criteria->compare('ACCSUBKOR', $this->ACCSUBKOR, true);
        $criteria->compare('TANGGALACCSUBKOR', $this->TANGGALACCSUBKOR, true);
        $criteria->compare('ACCDEKANAT', $this->ACCDEKANAT, true);
        $criteria->compare('TANGGALACCDEKANAT', $this->TANGGALACCDEKANAT, true);
        $criteria->compare('TANGGALACCSURPERPK', $this->TANGGALACCSURPERPK, true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                         'sort'=>array (
                               'defaultOrder'=>'IDPK DESC',
                         )
		));
	}
        
        //membuat tombol action notifikasi
        public function getListactionnotifikasi()
        {

            $a = $this->PREVIEW;
            $sql = "select PREVIEW from surperpk where PREVIEW='$a'";
            $b = Yii::app()->db->createCommand($sql)->queryScalar();

            $g = $this->PREVIEW;
            $sqli = "select PREVIEW from surperpk where PREVIEW='$g'";
            $c = Yii::app()->db->createCommand($sqli)->queryScalar();

            if ($b == 'Y') {
                echo CHtml::link('<i data-feather="search"></i>', array('surperpk/view', 'id' => $this->IDPK), array('class' => 'btn btn-sm blue')), '&nbsp';
                echo CHtml::link('<i data-feather="edit"></i>', array('surperpk/update', 'id' => $this->IDPK), array('class' => 'btn btn-sm green'));
            } else {
                if ($c == 'N') {
                    echo CHtml::link('<i data-feather="search"></i>', array('surperpk/view', 'id' => $this->IDPK), array('class' => 'btn btn-sm red')), '&nbsp';
                    echo CHtml::link('<i data-feather="edit"></i>', array('surperpk/update', 'id' => $this->IDPK), array('class' => 'btn btn-sm green'));
                }
            }
        }
        
        public function getListbuatnosuratpk(){
            $hasil='';
            if (count($this->detailsurperpks)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->detailsurperpks as $nosuratpk) {
            echo CHtml::link('<li>No.Surat : '.$nosuratpk->iDPK->NOSURATPK.'&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp'.$nosuratpk->iDGROUPS->DIVISI).'</li>';
            //echo CHtml::link('<li>No.Surat : '.$nosuratpk->iDPK->NOSURATPK.'&nbsp;<i class="fa fa-hand-o-right"></i> Send :&nbsp'.$nosuratpk->iDGROUPS->DIVISI.'',array('surperpk/updatenosurperpk','id'=>$nosuratpk->IDPK)).'</li>';
            }
            if (count($this->detailsurperpks)>0) echo '</ul>';
            //echo CHtml::link('<i class="fa fa-tag"></i> Buat No.Surat',array('surperpk/updatenosurperpk','id'=>$this->IDPK),array('class'=>'btn btn-sm green'));
            return $hasil;
            }

        public function getListsendsuratpk(){
            $hasil='';
            if (count($this->detailsurperpks)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->detailsurperpks as $nosuratpk) {
            echo CHtml::link('<h4>Permintaan Surat Penelitian di Instansi&nbsp;: '.$nosuratpk->iDPK->INSTANSIPK.'&nbsp;<i class="fa fa-hand-o-right"></i> Telah Terkirim ke :&nbsp'.$nosuratpk->iDGROUPS->DIVISI).'</li></h4>';
            }  
            return $hasil;
       }  
       
       
        public function getListtambahmahasiswasurperpk(){
            $hasil='';
            if (count($this->groupsurperpks)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->groupsurperpks as $grouppk) {
            echo CHtml::link('<li>'.$grouppk->nIM->NAMA.'<i class="fa fa-caret-right"></i>'.$grouppk->NOURUTSURPERPK,array('groupsurperpk/update','id'=>$grouppk->IDGROUPSURPERPK)).'</li>';
            }
            if (count($this->groupsurperpks)>0) echo '</ul>';
            //echo CHtml::link('<i class="fa fa-tag"></i> Tambah Group Mahasiswa',array('groupsurperpk/create','IDPK'=>$this->IDPK),array('class'=>'btn btn-sm green'));
            return $hasil;
            }
         
          public function getMahasiswasurperpk(){
            $hasil='';
            if (count($this->groupsurperpks)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->groupsurperpks as $grouppk) {
            echo CHtml::link('<li>'.$grouppk->nIM->NAMA.'<i class="fa fa-caret-right"></i>'.$grouppk->NOURUTSURPERPK).'</li>';
            }
            if (count($this->groupsurperpks)>0) echo '</ul>';
            //echo CHtml::link('<i class="fa fa-tag"></i> Tambah Group Mahasiswa',array('groupsurperpk/create','IDPK'=>$this->IDPK),array('class'=>'btn btn-sm green'));
            return $hasil;
            }   
            
         public function getCetakbytgl(){
         $a=$this->IDPK;
        $sql="select TGLCETAKSURATPK from surperpk where IDPK='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();

       if ($b > 0) {
            echo CHtml::link('<i class="fa fa-print"></i> Cetak',array('cetak/surperpk','id'=>$this->IDPK),array('target'=>'_blank','class'=>'btn btn-sm yellow'));
       
        } else {
            echo "<font color='red'> Tgl.cetak belum di set..</font>";
        }
    }    
        
        

       //membuat fungsi persetujuan permohonan surat by instansi
        public function getSur(){
        $hasil='';
        $id=$this->IDPK;
        $sql = "select IDPK from subdetailsurpelpk where IDPK='$id'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();
         
        if ($this->ACCPERPK=='Approve'){
		$hasil=CHtml::link('<i data-feather="sign-in"></i> Generate',array('subdetailsurpelpk/create','IDPK'=> $id),array('class'=>'btn btn-outline-success round waves-effect'));
        } else if($this->ACCPERPK=='Not Approved'){
            $hasil=CHtml::link('<i data-feather="times"> </i>');
        } else if($this->ACCPERPK==''){ 
              $hasil=CHtml::link('<font color="red"><i data-feather="settings"></i> Set dulu persetujuan surat...</font>',array('surperpk/updatepersetujuansurat','id'=>$this->IDPK));
        } if  ($b > 0){
              $hasil= ('<i data-feather="check"> </i>');
            }
                     {
                         return $hasil;
                         }
        } 
        
        public function getStatussurat() {
             $hasil='';
             
                    if ($this->ACCSURPERPK=='Approve'){
                        $hasil = '<label class="btn btn-warning waves-effect waves-float waves-light">
                        <i data-feather="check-square"></i>
                        </label>';
                    }
                     else  if ($this->ACCSURPERPK=='Not Approved'){
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
            
              
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Surperpk the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
