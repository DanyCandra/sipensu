<?php

/**
 * This is the model class for table "groupsurtugpn".
 *
 * The followings are the available columns in table 'groupsurtugpn':
 * @property integer $IDGROUPPN
 * @property integer $IDPANGGOL
 * @property integer $IDJABATANAKADEMIK
 * @property string $NIP
 * @property integer $IDPN
 * @property integer $NOURUTGROUPPN
 *
 * The followings are the available model relations:
 * @property Panggol $iDPANGGOL
 * @property Surtugpn $iDPN
 * @property Msdos $nIP
 * @property Jabatanakademik $iDJABATANAKADEMIK
 * 
 * @property Groupinstansisurtugpn[] $groupinstansisurtugpns
 */
class Groupsurtugpn extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Groupsurtugpn the static model class
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
		return 'groupsurtugpn';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('NIP', 'required'),
			array('IDPANGGOL, IDJABATANAKADEMIK, IDPN, NOURUTGROUPPN', 'numerical', 'integerOnly'=>true),
			array('NIP', 'length', 'max'=>18),
			
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IDGROUPPN, IDPANGGOL, IDJABATANAKADEMIK, NIP, IDPN, NOURUTGROUPPN', 'safe', 'on'=>'search'),
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
			'iDPANGGOL' => array(self::BELONGS_TO, 'Panggol', 'IDPANGGOL'),
			'iDPN' => array(self::BELONGS_TO, 'Surtugpn', 'IDPN'),
			'nIP' => array(self::BELONGS_TO, 'Msdos', 'NIP'),
			'iDJABATANAKADEMIK' => array(self::BELONGS_TO, 'Jabatanakademik', 'IDJABATANAKADEMIK'),
                        
                        //relation menampilkan groupinstansi
                        'groupinstansisurtugpns'=>array(self::HAS_MANY,'Groupinstansisurtugpn','IDPN'),
                    
                        
                       
                    
                        
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDGROUPPN' => 'Kode Group Dosen Penelitian',
			'IDPANGGOL' => 'Pangkat & Golongan',
			'IDJABATANAKADEMIK' => 'Jabatan Akademik',
			'NIP' => 'NIP',
			'IDPN' => 'Kode Permintaan Srt.Ijin Penelitian',
			'NOURUTGROUPPN' => 'No. Urut',
			
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

		$criteria->compare('IDGROUPPN',$this->IDGROUPPN);
		$criteria->compare('IDPANGGOL',$this->IDPANGGOL);
		$criteria->compare('IDJABATANAKADEMIK',$this->IDJABATANAKADEMIK);
		$criteria->compare('NIP',$this->NIP,true);
		$criteria->compare('IDPN',$this->IDPN);
		$criteria->compare('NOURUTGROUPPN',$this->NOURUTGROUPPN);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>array('defaultOrder'=>'IDPN')
		));
	}
        public function getListinstansipn(){
            $hasil='';
            if (count($this->groupinstansisurtugpns)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->groupinstansisurtugpns as $groupinstansipn) {
            echo CHtml::link('<li>'.$groupinstansipn->INSTANSIPN.'<i class="fa fa-caret-right"></i>'.$groupinstansipn->ALAMATINSTANSIPN.'<i class="fa fa-caret-right"></i>'.$groupinstansipn->KOTAINSTANSIPN.'<i class="fa fa-caret-right"></i>No.'.$groupinstansipn->NOURUTINSTANSIPN,array('groupinstansisurtugpn/update','id'=>$groupinstansipn->IDGROUPINSTANSIPN)).'</li>';
            }
            if (count($this->groupinstansisurtugpns)>0) echo '</ul>';
            //echo CHtml::link('<i class="fa fa-tag"></i> Tambah Group Dosen',array('groupsurtugpn/create','IDPN'=>$this->IDPN),array('class'=>'btn btn-sm green'));
            return $hasil;
            }
            
       public function getListgroupinstansipn(){
            $hasil='';
            if (count($this->groupinstansisurtugpns)>0) echo '<ul style="padding-left:15px">';
            foreach ($this->groupinstansisurtugpns as $groupinstansipn) {
            echo CHtml::link('<li>'.$groupinstansipn->INSTANSIPN.'<i class="fa fa-caret-right"></i>'.$groupinstansipn->ALAMATINSTANSIPN.'<i class="fa fa-caret-right"></i>'.$groupinstansipn->KOTAINSTANSIPN.'<i class="fa fa-caret-right"></i>No.'.$groupinstansipn->NOURUTINSTANSIPN).'</li>';
            }
            if (count($this->groupinstansisurtugpns)>0) echo '</ul>';
            //echo CHtml::link('<i class="fa fa-tag"></i> Tambah Group Dosen',array('groupsurtugpn/create','IDPN'=>$this->IDPN),array('class'=>'btn btn-sm green'));
            return $hasil;
            }     
}