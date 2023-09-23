<?php

/**
 * This is the model class for table "detailsurtugmonitoring".
 *
 * The followings are the available columns in table 'detailsurtugmonitoring':
 * @property integer $IDDETAILSURTUGMONITORING
 * @property integer $IDSURTUGMONITORING
 * @property string $IDGROUPS
 * @property string $TGLSUBMITSURTUGMONITORING
* @property string $PREVIEW
 *
 * The followings are the available model relations:
 * @property Surtugmonitoring $iDSURTUGMONITORING
 * @property Groups $iDGROUPS
 * 
 */
class Detailsurtugmonitoring extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detailsurtugmonitoring';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('TGLSUBMITSURTUGMONITORING', 'required'),
			array('IDSURTUGMONITORING', 'numerical', 'integerOnly'=>true),
			array('IDGROUPS', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDDETAILSURTUGMONITORING, IDSURTUGMONITORING, IDGROUPS, TGLSUBMITSURTUGMONITORING, PREVIEW', 'safe', 'on'=>'search'),
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
			'iDSURTUGMONITORING' => array(self::BELONGS_TO, 'Surtugmonitoring', 'IDSURTUGMONITORING'),
			'iDGROUPS' => array(self::BELONGS_TO, 'Groups', 'IDGROUPS'),
                         //
                        'groupsurtugmonitorings' => array(self::HAS_MANY, 'Groupsurtugmonitoring', 'IDSURTUGMONITORING'),
                    'iDSUBDETAILSURPELPK' => array(self::BELONGS_TO, 'Subdetaisurpelpk', 'IDSUBDETAILSURPELPK'),
                    
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDDETAILSURTUGMONITORING' => 'Kode Detail Surat',
			'IDSURTUGMONITORING' => 'Kode Srt. Monitoring',
			'IDGROUPS' => 'Sub. Bagian/Divisi/Operator',
			'TGLSUBMITSURTUGMONITORING' => 'Tgl. Submit',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('IDDETAILSURTUGMONITORING',$this->IDDETAILSURTUGMONITORING);
		$criteria->compare('IDSURTUGMONITORING',$this->IDSURTUGMONITORING);
		$criteria->compare('IDGROUPS',$this->IDGROUPS,true);
		$criteria->compare('TGLSUBMITSURTUGMONITORING',$this->TGLSUBMITSURTUGMONITORING,true);
                 $criteria->compare('PREVIEW',$this->PREVIEW,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>array (
                               'defaultOrder'=>'IDDETAILSURTUGMONITORING DESC',
                         )
		));
	}
        
        //membuat tombol action notifikasi
        public function getListactionnotifikasi(){
           
            $a = $this->PREVIEW;
            $sql = "select PREVIEW from detailsurtugmonitoring where PREVIEW='$a'";
            $b = Yii::app()->db->createCommand($sql)->queryScalar();

            $g = $this->PREVIEW;
            $sqli = "select PREVIEW from detailsurtugmonitoring where PREVIEW='$g'";
            $c = Yii::app()->db->createCommand($sqli)->queryScalar();


            if ($b == 'Y') {
                   
                echo CHtml::link('<i class="fa fa-search"></i>', array('detailsurtugmonitoring/view', 'id' => $this->IDDETAILSURTUGMONITORING), array('class' => 'btn btn-sm blue')),'&nbsp';
                echo CHtml::link('<i class="fa fa-edit"></i>', array('surtugmonitoring/updatenosurtugmonitoringoperator','id'=>$this->IDSURTUGMONITORING), array('class' => 'btn btn-sm green'));
               
            } else {
               
                if ($c == 'N') {
                   
                    echo CHtml::link('<i class="fa fa-search"></i>', array('detailsurtugmonitoring/view', 'id' => $this->IDDETAILSURTUGMONITORING), array('class' => 'btn btn-sm red')),'&nbsp';
                    echo CHtml::link('<i class="fa fa-edit"></i>', array('surtugmonitoring/updatenosurtugmonitoringoperator','id'=>$this->IDSURTUGMONITORING), array('class' => 'btn btn-sm green'));
                } 
        }
        
                }
        
         public function getListgroupmahasiswasurtugmonitoring(){
            $hasil='';
            if (count($this->groupsurtugmonitorings)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->groupsurtugmonitorings as $groupmonitoring) {
            echo CHtml::link('<li>'.$groupmonitoring->NOURUTSURTUGMONITORING.'<i class="fa fa-caret-right"></i>'.$groupmonitoring->nIM->NAMA).'</li>';
              
            }
           
            return $hasil;
            }
            
        
            
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Detailsurtugmonitoring the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
