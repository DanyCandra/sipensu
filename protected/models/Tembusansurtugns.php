<?php

/**
 * This is the model class for table "tembusansurtugns".
 *
 * The followings are the available columns in table 'tembusansurtugns':
 * @property integer $IDTEMBUSAN
 * @property integer $IDSURTUGNS
 * @property string $TUJUANTEMBUSAN
 * @property string $TGLSUBMITTEMBUSAN
 *
 * The followings are the available model relations:
 * @property Surtugns $iDSURTUGNS
 */
class Tembusansurtugns extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tembusansurtugns';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IDSURTUGNS', 'numerical', 'integerOnly'=>true),
			array('TUJUANTEMBUSAN', 'length', 'max'=>250),
			array('TGLSUBMITTEMBUSAN', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDTEMBUSAN, IDSURTUGNS, TUJUANTEMBUSAN, TGLSUBMITTEMBUSAN', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDTEMBUSAN' => 'Kode Tembusan',
			'IDSURTUGNS' => 'Kode Surat Tugas',
			'TUJUANTEMBUSAN' => 'Tujuan Tembusan',
			'TGLSUBMITTEMBUSAN' => 'Tgl. Submit',
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

		$criteria->compare('IDTEMBUSAN',$this->IDTEMBUSAN);
		$criteria->compare('IDSURTUGNS',$this->IDSURTUGNS);
		$criteria->compare('TUJUANTEMBUSAN',$this->TUJUANTEMBUSAN,true);
		$criteria->compare('TGLSUBMITTEMBUSAN',$this->TGLSUBMITTEMBUSAN,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tembusansurtugns the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
