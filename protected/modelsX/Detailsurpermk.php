<?php

/**
 * This is the model class for table "detailsurpermk".
 *
 * The followings are the available columns in table 'detailsurpermk':
 * @property integer $IDDETAILSURPERMK
 * @property integer $IDMK
 * @property string $IDGROUPS
 * @property string $TGLSUBMITDETAILSURPERMK
  * @property string $PREVIEW
 *
 * The followings are the available model relations:
 * @property Surpermk $iDMK
 * @property Groups $iDGROUPS
 */
class Detailsurpermk extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detailsurpermk';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IDMK', 'numerical', 'integerOnly'=>true),
			array('IDGROUPS', 'length', 'max'=>1),
			array(' TGLSUBMITDETAILSURPERMK', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDDETAILSURPERMK, IDMK, IDGROUPS, ACCDETAILSURPERMK, TGLSUBMITDETAILSURPERMK, PREVIEW', 'safe', 'on'=>'search'),
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
			'iDMK' => array(self::BELONGS_TO, 'Surpermk', 'IDMK'),
			'iDGROUPS' => array(self::BELONGS_TO, 'Groups', 'IDGROUPS'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDDETAILSURPERMK' => 'Kode Detail Surat',
			'IDMK' => 'Kode MK',
			'IDGROUPS' => 'Sub. Bagian/Divisi/Operator',
			'TGLSUBMITDETAILSURPERMK' => 'Tgl. Submit',
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

		$criteria->compare('IDDETAILSURPERMK',$this->IDDETAILSURPERMK);
		$criteria->compare('IDMK',$this->IDMK);
		$criteria->compare('IDGROUPS',$this->IDGROUPS,true);
		$criteria->compare('TGLSUBMITDETAILSURPERMK',$this->TGLSUBMITDETAILSURPERMK,true);
                 $criteria->compare('PREVIEW',$this->PREVIEW,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>array (
                               'defaultOrder'=>'IDDETAILSURPERMK DESC',
                         )
		));
	}
        
        //membuat tombol action notifikasi
        public function getListactionnotifikasi(){
           
            $a = $this->PREVIEW;
            $sql = "select PREVIEW from detailsurpermk where PREVIEW='$a'";
            $b = Yii::app()->db->createCommand($sql)->queryScalar();

            $g = $this->PREVIEW;
            $sqli = "select PREVIEW from detailsurpermk where PREVIEW='$g'";
            $c = Yii::app()->db->createCommand($sqli)->queryScalar();


            if ($b == 'Y') {
                   
                echo CHtml::link('<i class="fa fa-search"></i>', array('detailsurpermk/view', 'id' => $this->IDDETAILSURPERMK), array('class' => 'btn btn-sm blue')),'&nbsp';
                echo CHtml::link('<i class="fa fa-edit"></i>', array('surpermk/updatenosurpermkoperator','id'=>$this->IDMK), array('class' => 'btn btn-sm green'));
               
            } else {
               
                if ($c == 'N') {
                   
                    echo CHtml::link('<i class="fa fa-search"></i>', array('detailsurpermk/view', 'id' => $this->IDDETAILSURPERMK), array('class' => 'btn btn-sm red')),'&nbsp';
                    echo CHtml::link('<i class="fa fa-edit"></i>', array('surpermk/updatenosurpermkoperator','id'=>$this->IDMK), array('class' => 'btn btn-sm green'));
                } 
        }
        
                }
      
        public function getAccsrtmk($val)
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
	 * @return Detailsurpermk the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
