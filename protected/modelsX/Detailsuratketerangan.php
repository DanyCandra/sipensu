<?php

/**
 * This is the model class for table "detailsuratketerangan".
 *
 * The followings are the available columns in table 'detailsuratketerangan':
 * @property integer $IDDETAILSURKET
 * @property integer $IDSURKET
 * @property integer $IDGROUPS
 * @property string $TGLSUBMITDETAILSURKET
 * @property string $PREVIEW 
 *
 * The followings are the available model relations:
 * @property Groups $iDGROUPS
 * @property Suratketerangan $iDSURKET
 */
class Detailsuratketerangan extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'detailsuratketerangan';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            //array('TGLSUBMITDETAILSURKET', 'required'),
            array('IDSURKET, IDGROUPS', 'numerical', 'integerOnly' => true),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('IDDETAILSURKET, IDSURKET, IDGROUPS, TGLSUBMITDETAILSURKET, PREVIEW', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'iDGROUPS' => array(self::BELONGS_TO, 'Groups', 'IDGROUPS'),
            'iDSURKET' => array(self::BELONGS_TO, 'Suratketerangan', 'IDSURKET'),
            //
            //
                      
            'suratketerangans' => array(self::BELONGS_TO, 'Suratketerangan', 'IDSURKET'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'IDDETAILSURKET' => 'Kode Detail Surat',
            'IDSURKET' => 'Kode Surat Keterangan',
            'IDGROUPS' => 'Sub. Bagian/Divisi/Operator',
            'TGLSUBMITDETAILSURKET' => 'Tgl. Submit',
             'PREVIEW'=>'Status Baca',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('IDDETAILSURKET', $this->IDDETAILSURKET);
        $criteria->compare('IDSURKET', $this->IDSURKET);
        $criteria->compare('IDGROUPS', $this->IDGROUPS);
        $criteria->compare('TGLSUBMITDETAILSURKET', $this->TGLSUBMITDETAILSURKET, true);
        $criteria->compare('PREVIEW',$this->PREVIEW,true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'sort' => array(
                'defaultOrder' => 'IDDETAILSURKET DESC',
            )
        ));
    }
    
    //membuat tombol action notifikasi
        public function getListactionnotifikasi(){
           
            $a = $this->PREVIEW;
            $sql = "select PREVIEW from detailsuratketerangan where PREVIEW='$a'";
            $b = Yii::app()->db->createCommand($sql)->queryScalar();

            $g = $this->PREVIEW;
            $sqli = "select PREVIEW from detailsuratketerangan where PREVIEW='$g'";
            $c = Yii::app()->db->createCommand($sqli)->queryScalar();


            if ($b == 'Y') {
                   
                echo CHtml::link('<i class="fa fa-search"></i>', array('detailsuratketerangan/view', 'id' => $this->IDDETAILSURKET), array('class' => 'btn btn-sm blue')),'&nbsp';
                echo CHtml::link('<i class="fa fa-edit"></i>', array('suratketerangan/updatenosuratketeranganoperator','id'=>$this->IDSURKET), array('class' => 'btn btn-sm green'));
               
            } else {
               
                if ($c == 'N') {
                   
                    echo CHtml::link('<i class="fa fa-search"></i>', array('detailsuratketerangan/view', 'id' => $this->IDDETAILSURKET), array('class' => 'btn btn-sm red')),'&nbsp';
                    echo CHtml::link('<i class="fa fa-edit"></i>', array('suratketerangan/updatenosuratketeranganoperator','id'=>$this->IDSURKET), array('class' => 'btn btn-sm green'));
                } 
        }
        
                }

    //coba tampilkan gabunan perihal1&perihal2
    
    public function getListperihalsuratketerangan() {
        $a = $this->IDSURKET;
        $sql = "select count(IDSURKET)AS C FROM suratketerangan where IDSURKET='$a'";
        $b = Yii::app()->db->createCommand($sql)->queryScalar();
        if ($b > 0) {
            echo CHtml::link('Adalah benar-benar mahasiswa Fakutas Ekonomi dan Bisnis Universitas Jenderal Soedirman Purwokerto,' . $this->suratketerangans->PERIHAL1 . '. Surat keterangan ini dibuat sebagai ' . $this->suratketerangans->PERIHAL2 . '&nbsp') . '';
           } else {
            echo "<font color='red'> kosong..</font>";
        }
    }

    //coba tampilkan gabunan perihal1&perihal2 pada view
    public function getStatusperihalsuratketerangan() {
        $a = $this->IDSURKET;
        $sql = "select count(IDSURKET)AS C FROM suratketerangan where IDSURKET='$a'";
       $b = Yii::app()->db->createCommand($sql)->queryScalar();
      {
             $hasil='Adalah benar-benar mahasiswa Fakutas Ekonomi dan Bisnis Universitas Jenderal Soedirman Purwokerto,' . $this->suratketerangans->PERIHAL1 . '. Surat keterangan ini dibuat sebagai ' . $this->suratketerangans->PERIHAL2 . '&nbsp' . '';
            } 
            return $hasil;
        }
    

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Detailsuratketerangan the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
