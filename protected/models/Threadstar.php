<?php

/**
 * This is the model class for table "threadstar".
 *
 * The followings are the available columns in table 'threadstar':
 * @property integer $is
 * @property integer $nilai
 * @property integer $user_id
 * @property integer $thread_id
 *
 * The followings are the available model relations:
 * @property User $user
 * @property Thread $thread
 */
class Threadstar extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Threadstar the static model class
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
		return 'threadstar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nilai, user_id, thread_id', 'required'),
			array('nilai, user_id, thread_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('is, nilai, user_id, thread_id', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
			'thread' => array(self::BELONGS_TO, 'Thread', 'thread_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'is' => 'Is',
			'nilai' => 'Nilai',
			'user_id' => 'User',
			'thread_id' => 'Thread',
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

		$criteria->compare('is',$this->is);
		$criteria->compare('nilai',$this->nilai);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('thread_id',$this->thread_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}