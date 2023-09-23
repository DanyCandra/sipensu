<?php

/**
 * This is the model class for table "detailsurisu".
 *
 * The followings are the available columns in table 'detailsurisu':
 * @property integer $IDDETAILSURISU
 * @property integer $IDISU
 * @property string $IDGROUPS
 * @property string $TGLSUBMITDETAILSURISU
  * @property string $PREVIEW 
 *
 * The followings are the available model relations:
 * @property Surisu $iDISU
 * @property Groups $iDGROUPS
 */
class Detailsurisu extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detailsurisu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('TGLSUBMITDETAILSURISU', 'required'),
			array('IDISU', 'numerical', 'integerOnly'=>true),
			array('IDGROUPS', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDDETAILSURISU, IDISU, IDGROUPS, TGLSUBMITDETAILSURISU, PREVIEW', 'safe', 'on'=>'search'),
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
			'iDISU' => array(self::BELONGS_TO, 'Surisu', 'IDISU'),
			'iDGROUPS' => array(self::BELONGS_TO, 'Groups', 'IDGROUPS'),
                        'groupsurisus' => array(self::HAS_MANY, 'Groupsurisu', 'IDISU'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDDETAILSURISU' => 'Kode Detail Surat',
			'IDISU' => 'Kode Surat Ijin Survei',
			'IDGROUPS' => 'Sub. Bagian/Divisi/Operator',
			'TGLSUBMITDETAILSURISU' => 'Tgl. Submit',
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

		$criteria->compare('IDDETAILSURISU',$this->IDDETAILSURISU);
		$criteria->compare('IDISU',$this->IDISU);
		$criteria->compare('IDGROUPS',$this->IDGROUPS,true);
		$criteria->compare('TGLSUBMITDETAILSURISU',$this->TGLSUBMITDETAILSURISU,true);
                $criteria->compare('PREVIEW',$this->PREVIEW,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                         'sort'=>array (
                               'defaultOrder'=>'IDDETAILSURISU DESC',
                         )
		));
	}
        
        
         //membuat tombol action notifikasi
        public function getListactionnotifikasi(){
           
            $a = $this->PREVIEW;
            $sql = "select PREVIEW from detailsurisu where PREVIEW='$a'";
            $b = Yii::app()->db->createCommand($sql)->queryScalar();

            $g = $this->PREVIEW;
            $sqli = "select PREVIEW from detailsurisu where PREVIEW='$g'";
            $c = Yii::app()->db->createCommand($sqli)->queryScalar();


            if ($b == 'Y') {
                   
                echo CHtml::link('<i data-feather="search"></i>', array('detailsurisu/view', 'id' => $this->IDDETAILSURISU), array('class' => 'btn btn-info')),'&nbsp';
                echo CHtml::link('<i data-feather="edit"></i>', array('surisu/updatenosurisuoperator','id'=>$this->IDISU), array('class' => 'btn btn-success'));
               
            } else {
               
                if ($c == 'N') {
                   
                    echo CHtml::link('<i data-feather="search"></i>', array('detailsurisu/view', 'id' => $this->IDDETAILSURISU), array('class' => 'btn btn-warning')),'&nbsp';
                    echo CHtml::link('<i data-feather="edit"></i>', array('surisu/updatenosurisuoperator','id'=>$this->IDISU), array('class' => 'btn btn-primary'));
                } 
        }
        
                }
         public function getListgroupmahasiswasurisu(){
            $hasil='';
            if (count($this->groupsurisus)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->groupsurisus as $groupsurisu) {
            echo CHtml::link('<li>'.$groupsurisu->NOURUTGROUPSURISU.'<i class="fa fa-caret-right"></i>'.$groupsurisu->nIM->NAMA).'</li>';
            }
           
            return $hasil;
            }
          
         public function getAccsrt($val)
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
        
       
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Detailsurisu the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
