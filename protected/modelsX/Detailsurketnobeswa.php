<?php

/**
 * This is the model class for table "detailsurketnobeswa".
 *
 * The followings are the available columns in table 'detailsurketnobeswa':
 * @property integer $IDDETAILSURKETNOBESWA
 * @property integer $IDSURKETNOBESWA
 * @property string $IDGROUPS
 * @property string $TGLSUBMITDETAILSURKETNOBESWA
 * @property string $PREVIEW 
 *
 * The followings are the available model relations:
 * @property Groups $iDGROUPS
 * @property Surketnobeswa $iDSURKETNOBESWA
 */
class Detailsurketnobeswa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detailsurketnobeswa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('TGLSUBMITDETAILSURKETNOBESWA', 'required'),
			array('IDSURKETNOBESWA', 'numerical', 'integerOnly'=>true),
			array('IDGROUPS', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDDETAILSURKETNOBESWA, IDSURKETNOBESWA, IDGROUPS, TGLSUBMITDETAILSURKETNOBESWA, PREVIEW', 'safe', 'on'=>'search'),
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
			'iDSURKETNOBESWA' => array(self::BELONGS_TO, 'Surketnobeswa', 'IDSURKETNOBESWA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDDETAILSURKETNOBESWA' => 'Kode Detail Surat',
			'IDSURKETNOBESWA' => 'Kode Surat No Beswa',
			'IDGROUPS' => 'Sub. Bagian/Divisi/Operator',
			'TGLSUBMITDETAILSURKETNOBESWA' => 'Tgl. Submit',
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

		$criteria->compare('IDDETAILSURKETNOBESWA',$this->IDDETAILSURKETNOBESWA);
		$criteria->compare('IDSURKETNOBESWA',$this->IDSURKETNOBESWA);
		$criteria->compare('IDGROUPS',$this->IDGROUPS,true);
		$criteria->compare('TGLSUBMITDETAILSURKETNOBESWA',$this->TGLSUBMITDETAILSURKETNOBESWA,true);
                $criteria->compare('PREVIEW',$this->PREVIEW,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>array (
                               'defaultOrder'=>'IDDETAILSURKETNOBESWA DESC',
                         )
		));
	}
        
        //membuat tombol action notifikasi
        public function getListactionnotifikasi(){
           
            $a = $this->PREVIEW;
            $sql = "select PREVIEW from detailsurketnobeswa where PREVIEW='$a'";
            $b = Yii::app()->db->createCommand($sql)->queryScalar();

            $g = $this->PREVIEW;
            $sqli = "select PREVIEW from detailsurketnobeswa where PREVIEW='$g'";
            $c = Yii::app()->db->createCommand($sqli)->queryScalar();


            if ($b == 'Y') {
                   
                echo CHtml::link('<i class="fa fa-search"></i>', array('detailsurketnobeswa/view', 'id' => $this->IDDETAILSURKETNOBESWA), array('class' => 'btn btn-sm blue')),'&nbsp';
                echo CHtml::link('<i class="fa fa-edit"></i>', array('surketnobeswa/updatenosurketnobeswaoperator','id'=>$this->IDSURKETNOBESWA), array('class' => 'btn btn-sm green'));
               
            } else {
               
                if ($c == 'N') {
                   
                    echo CHtml::link('<i class="fa fa-search"></i>', array('detailsurketnobeswa/view', 'id' => $this->IDDETAILSURKETNOBESWA), array('class' => 'btn btn-sm red')),'&nbsp';
                    echo CHtml::link('<i class="fa fa-edit"></i>', array('surketnobeswa/updatenosurketnobeswaoperator','id'=>$this->IDSURKETNOBESWA), array('class' => 'btn btn-sm green'));
                } 
        }
        
                }
        
        public function getAccsrtnobeswa($val)
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
	 * @return Detailsurketnobeswa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
