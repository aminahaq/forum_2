<?php

/**
 * This is the model class for table "thread".
 *
 * The followings are the available columns in table 'thread':
 * @property integer $id
 * @property string $judul
 * @property string $isi
 * @property integer $user_id
 * @property integer $kategori_id
 * @property string $tanggalPost
 *
 * The followings are the available model relations:
 * @property Comment[] $comments
 * @property User $user
 * @property Kategori $kategori
 * @property Threadstar[] $threadstars
 */
class thread extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return thread the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'thread';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('judul, isi, user_id, kategori_id', 'required'),
            array('user_id, kategori_id', 'numerical', 'integerOnly' => true),
            array('judul', 'length', 'max' => 255),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, judul, isi, user_id, kategori_id, tanggalPost', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'comments' => array(self::HAS_MANY, 'Comment', 'thread_id'),
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),
            'kategori' => array(self::BELONGS_TO, 'Kategori', 'kategori_id'),
            'threadstars' => array(self::HAS_MANY, 'Threadstar', 'thread_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'judul' => 'Judul',
            'isi' => 'Isi',
            'user_id' => 'User',
            'kategori_id' => 'Kategori',
            'tanggalPost' => 'Tanggal Post',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('judul', $this->judul, true);
        $criteria->compare('isi', $this->isi, true);
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('kategori_id', $this->kategori_id);
        $criteria->compare('tanggalPost', $this->tanggalPost, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function threadCountPerCategory() {
        $sql = "select b.id id, b.kategori kategori, count(a.id) jumlah from thread a
                    right join kategori b on a.kategori_id = b.id
                    group by kategori_id
                    order by b.id";

        $dataProvider = new CSqlDataProvider($sql, array(
            'keyField' => 'threadCountPerCategory',
            'pagination' => array('pageSize' => 5),
        ));

        return $dataProvider;
    }

    /*
    public function topThread() {
        $sql5 = 'SELECT count(thread_id),thread_id FROM comment GROUP BY thread_id order by count(thread_id) DESC';
        $dataProvider5 = new CSqlDataProvider($sql5, array(
            'keyField' => 'thread_id',
            'pagination' => array(
                'pageSize' => 5,
            ),
        ));
        return $dataProvider5;
    }

    public function lastThread() {
        $sql2 = 'SELECT * FROM thread order by id desc';
        $dataProvider2 = new CSqlDataProvider($sql2, array(
            'keyField' => 'id',
            'pagination' => array(
                'pageSize' => 5,
            ),
        ));
        return $dataProvider2;
    }
     * 
     */

}
