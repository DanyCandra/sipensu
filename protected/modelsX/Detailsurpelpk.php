<?php

/**
 * This is the model class for table "detailsurpelpk".
 *
 * The followings are the available columns in table 'detailsurpelpk':
 * @property integer $IDDETAILSURPELPK
 * @property integer $IDSUBDETAILSURPELPK
 * @property string $IDGROUPS
 * @property string $TGLSUBMITDETAILSURPELPK
 * @property string $PREVIEW
 *
 * The followings are the available model relations:
 * @property Groups $iDGROUPS
 * @property Subdetailsurpelpk $iDSUBDETAILSURPELPK
 */
class Detailsurpelpk extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detailsurpelpk';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('TGLSUBMITDETAILSURPELPK', 'required'),
			array('IDSUBDETAILSURPELPK', 'numerical', 'integerOnly'=>true),
			array('IDGROUPS', 'length', 'max'=>1),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDDETAILSURPELPK, IDSUBDETAILSURPELPK, IDGROUPS, TGLSUBMITDETAILSURPELPK, PREVIEW', 'safe', 'on'=>'search'),
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
			'iDGROUPS' => array(self::BELONGS_TO, 'Groups', 'IDGROUPS'),
			'iDSUBDETAILSURPELPK' => array(self::BELONGS_TO, 'Subdetailsurpelpk', 'IDSUBDETAILSURPELPK'),
                        //
                        'iDPK' => array(self::BELONGS_TO, 'Surperpk', 'IDPK'),
                        'groupsurpelpks' => array(self::HAS_MANY, 'Groupsurpelpk', 'IDSUBDETAILSURPELPK'),
                       
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDDETAILSURPELPK' => 'Kode Detail Surat',
			'IDSUBDETAILSURPELPK' => 'Kode Surat Pelaksanaan',
			'IDGROUPS' => 'Sub. Bagian/Divisi/Operator',
			'TGLSUBMITDETAILSURPELPK' => 'Tgl. Submit',
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

		$criteria->compare('IDDETAILSURPELPK',$this->IDDETAILSURPELPK);
		$criteria->compare('IDSUBDETAILSURPELPK',$this->IDSUBDETAILSURPELPK);
		$criteria->compare('IDGROUPS',$this->IDGROUPS,true);
		$criteria->compare('TGLSUBMITDETAILSURPELPK',$this->TGLSUBMITDETAILSURPELPK,true);
                $criteria->compare('PREVIEW',$this->PREVIEW,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>array (
                               'defaultOrder'=>'IDDETAILSURPELPK DESC',
                         )
		));
	}
        
        //membuat tombol action notifikasi
        public function getListactionnotifikasi(){
           
            $a = $this->PREVIEW;
            $sql = "select PREVIEW from detailsurpelpk where PREVIEW='$a'";
            $b = Yii::app()->db->createCommand($sql)->queryScalar();

            $g = $this->PREVIEW;
            $sqli = "select PREVIEW from detailsurpelpk where PREVIEW='$g'";
            $c = Yii::app()->db->createCommand($sqli)->queryScalar();


            if ($b == 'Y') {
                   
                echo CHtml::link('<i class="fa fa-search"></i>', array('detailsurpelpk/view', 'id' => $this->IDDETAILSURPELPK), array('class' => 'btn btn-sm blue')),'&nbsp';
                echo CHtml::link('<i class="fa fa-edit"></i>', array('subdetailsurpelpk/updatenosurpelpkoperator','id'=>$this->IDSUBDETAILSURPELPK), array('class' => 'btn btn-sm green'));
               
            } else {
               
                if ($c == 'N') {
                   
                    echo CHtml::link('<i class="fa fa-search"></i>', array('detailsurpelpk/view', 'id' => $this->IDDETAILSURPELPK), array('class' => 'btn btn-sm red')),'&nbsp';
                    echo CHtml::link('<i class="fa fa-edit"></i>', array('subdetailsurpelpk/updatenosurpelpkoperator','id'=>$this->IDSUBDETAILSURPELPK), array('class' => 'btn btn-sm green'));
                } 
        }
        
                }
        
        public function getListgroupmahasiswasurpelpk(){
            $hasil='';
            if (count($this->groupsurpelpks)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->groupsurpelpks as $groupsurpelpk) {
            echo CHtml::link('<li>'.$groupsurpelpk->NOURUTSURPELPK.'<i class="fa fa-caret-right"></i>'.$groupsurpelpk->nIM->NAMA).'</li>';
            }
           
            return $hasil;
            }
            
       
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Detailsurpelpk the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
