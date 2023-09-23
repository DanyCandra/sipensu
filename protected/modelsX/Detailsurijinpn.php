<?php

/**
 * This is the model class for table "detailsurijinpn".
 *
 * The followings are the available columns in table 'detailsurijinpn':
 * @property integer $IDDETAILSURIJINPN
 * @property integer $IDIJINPN
 * @property string $IDGROUPS
 * @property string $TGLSUBMITDETAILSURIJINPN
  * @property string $PREVIEW 
 *
 * The followings are the available model relations:
 * @property Groups $iDGROUPS
 * @property Surijinpn $iDIJINPN
 */
class Detailsurijinpn extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detailsurijinpn';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('TGLSUBMITDETAILSURIJINPN', 'required'),
			array('IDIJINPN', 'numerical', 'integerOnly'=>true),
			array('IDGROUPS', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDDETAILSURIJINPN, IDIJINPN, IDGROUPS, TGLSUBMITDETAILSURIJINPN, PREVIEW', 'safe', 'on'=>'search'),
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
			'iDIJINPN' => array(self::BELONGS_TO, 'Surijinpn', 'IDIJINPN'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDDETAILSURIJINPN' => 'Kode Detail Surat',
			'IDIJINPN' => 'Kode Surat Ijin Penelitian',
			'IDGROUPS' => 'Sub. Bagian/Divisi/Operator',
			'TGLSUBMITDETAILSURIJINPN' => 'Tgl. Submit',
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

		$criteria->compare('IDDETAILSURIJINPN',$this->IDDETAILSURIJINPN);
		$criteria->compare('IDIJINPN',$this->IDIJINPN);
		$criteria->compare('IDGROUPS',$this->IDGROUPS,true);
		$criteria->compare('TGLSUBMITDETAILSURIJINPN',$this->TGLSUBMITDETAILSURIJINPN,true);
                $criteria->compare('PREVIEW',$this->PREVIEW,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>array (
                               'defaultOrder'=>'IDDETAILSURIJINPN DESC',
                         )
		));
	}
        
        //membuat tombol action notifikasi
        public function getListactionnotifikasi(){
           
            $a = $this->PREVIEW;
            $sql = "select PREVIEW from detailsurijinpn where PREVIEW='$a'";
            $b = Yii::app()->db->createCommand($sql)->queryScalar();

            $g = $this->PREVIEW;
            $sqli = "select PREVIEW from detailsurijinpn where PREVIEW='$g'";
            $c = Yii::app()->db->createCommand($sqli)->queryScalar();


            if ($b == 'Y') {
                   
                echo CHtml::link('<i class="fa fa-search"></i>', array('detailsurijinpn/view', 'id' => $this->IDDETAILSURIJINPN), array('class' => 'btn btn-sm blue')),'&nbsp';
                echo CHtml::link('<i class="fa fa-edit"></i>', array('surijinpn/updatenosurijinpnoperator','id'=>$this->IDIJINPN), array('class' => 'btn btn-sm green'));
               
            } else {
               
                if ($c == 'N') {
                   
                    echo CHtml::link('<i class="fa fa-search"></i>', array('detailsurijinpn/view', 'id' => $this->IDDETAILSURIJINPN), array('class' => 'btn btn-sm red')),'&nbsp';
                    echo CHtml::link('<i class="fa fa-edit"></i>', array('surijinpn/updatenosurijinpnoperator','id'=>$this->IDIJINPN), array('class' => 'btn btn-sm green'));
                } 
        }
        
                }
        
        public function getAccsrtijinpn($val)
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
	 * @return Detailsurijinpn the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
