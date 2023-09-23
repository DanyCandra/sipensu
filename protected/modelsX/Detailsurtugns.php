<?php

/**
 * This is the model class for table "detailsurtugns".
 *
 * The followings are the available columns in table 'detailsurtugns':
 * @property integer $IDDETAILSURTUGNS
 * @property integer $IDSURTUGNS
 * @property string $IDGROUPS
 * @property string $TGLSUBMITDETAILSURTUGNS
   * @property string $PREVIEW
 *
 * The followings are the available model relations:
 * @property Surtugns $iDSURTUGNS
 * @property Surtugpm $iDGROUPS
 */
class Detailsurtugns extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Detailsurtugns the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detailsurtugns';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('TGLSUBMITDETAILSURTUGNS', 'required'),
			array('IDSURTUGNS', 'numerical', 'integerOnly'=>true),
                        array('IDGROUPS', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IDDETAILSURTUGNS, IDSURTUGNS,IDPENGGUNA, TGLSUBMITDETAILSURTUGNS, PREVIEW', 'safe', 'on'=>'search'),
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
			'iDSURTUGNS' => array(self::BELONGS_TO, 'Surtugns', 'IDSURTUGNS'),
                        'iDGROUPS' => array(self::BELONGS_TO, 'Groups', 'IDGROUPS'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDDETAILSURTUGNS' => 'Kode Detail Permintaan/Permohonan',
			'IDSURTUGNS' => 'Peminta/Pemohon Surat',
                        'IDGROUPS' => 'Sub. Bagian/Divisi/Operator',
			'TGLSUBMITDETAILSURTUGNS' => 'Tgl. Submit',
                        'PREVIEW'=>'Status Baca',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('IDDETAILSURTUGNS',$this->IDDETAILSURTUGNS);
		$criteria->compare('IDSURTUGNS',$this->IDSURTUGNS);
                $criteria->compare('IDGROUPS',$this->IDGROUPS); 
		$criteria->compare('TGLSUBMITDETAILSURTUGNS',$this->TGLSUBMITDETAILSURTUGNS,true);
                 $criteria->compare('PREVIEW',$this->PREVIEW,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>array (
                               'defaultOrder'=>'IDDETAILSURTUGNS DESC',
                         )
		));
	}
        
         //membuat tombol action notifikasi
        public function getListactionnotifikasi(){
           
            $a = $this->PREVIEW;
            $sql = "select PREVIEW from detailsurtugns where PREVIEW='$a'";
            $b = Yii::app()->db->createCommand($sql)->queryScalar();

            $g = $this->PREVIEW;
            $sqli = "select PREVIEW from detailsurtugns where PREVIEW='$g'";
            $c = Yii::app()->db->createCommand($sqli)->queryScalar();


            if ($b == 'Y') {
                   
                echo CHtml::link('<i class="fa fa-search"></i>', array('detailsurtugns/view', 'id' => $this->IDDETAILSURTUGNS), array('class' => 'btn btn-sm blue')),'&nbsp';
                echo CHtml::link('<i class="fa fa-edit"></i>', array('surtugns/updatenosurtugnsoperator','id'=>$this->IDSURTUGNS), array('class' => 'btn btn-sm green'));
               
            } else {
               
                if ($c == 'N') {
                   
                    echo CHtml::link('<i class="fa fa-search"></i>', array('detailsurtugns/view', 'id' => $this->IDDETAILSURTUGNS), array('class' => 'btn btn-sm red')),'&nbsp';
                    echo CHtml::link('<i class="fa fa-edit"></i>', array('surtugns/updatenosurtugnsoperator','id'=>$this->IDSURTUGNS), array('class' => 'btn btn-sm green'));
                } 
        }
        
                }
        public function getAccsrtns($val)
        {
            if($val=='Approve')
            {
                return 'Setujui';
            }
            else if($val=='Not Approved')
            {
                return 'Belum Disetujui';
            }
            
            
        }
        
        
}