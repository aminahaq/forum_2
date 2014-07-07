<?php

/**
 * This is the model class for table "comment".
 *
 * The followings are the available columns in table 'comment':
 * @property integer $id
 * @property string $judul
 * @property string $isi
 * @property integer $user_id
 * @property integer $thread_id
 * @property string $tanggalPost
 *
 * The followings are the available model relations:
 * @property User $user
 * @property Thread $thread
 */
class Comment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comment the static model class
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
		return 'comment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('isi, user_id, thread_id, tanggalPost', 'required'),
			array('user_id, thread_id', 'numerical', 'integerOnly'=>true),
			array('judul', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, judul, isi, user_id, thread_id, tanggalPost', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'judul' => 'Judul',
			'isi' => 'Isi',
			'user_id' => 'User',
			'thread_id' => 'Thread',
			'tanggalPost' => 'Tanggal Post',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('isi',$this->isi,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('thread_id',$this->thread_id);
		$criteria->compare('tanggalPost',$this->tanggalPost,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}