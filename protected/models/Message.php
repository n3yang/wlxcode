<?php

/**
 * This is the model class for table "message".
 *
 * The followings are the available columns in table 'message':
 * @property string $id
 * @property string $name
 * @property string $mobile
 * @property string $email
 * @property string $address
 * @property string $content
 * @property integer $type
 * @property string $time_create
 */
class Message extends CActiveRecord
{

	public $verifyCode;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Message the static model class
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
		return 'message';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, mobile, email, content', 'required', 'message'=>'{attribute}不能为空'),
			array('type', 'in', 'range'=>array(1,2), 'allowEmpty'=>false),
			array('name, address', 'length', 'max'=>200),
			array('mobile', 'length', 'max'=>20),
			array('email', 'length', 'max'=>100),
			array('email', 'email', 'allowEmpty'=>false, 'message'=>'邮件地址不符合规则'),
			array('content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, mobile, email, address, content, type', 'safe', 'on'=>'search'),
			array('time_create', 'default', 'value'=>new CDbExpression('NOW()'),
				'setOnEmpty'=>false, 'on'=>'insert'),
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => '姓名',
			'mobile' => '电话',
			'email' => '邮箱',
			'address' => '地址',
			'content' => '留言内容',
			'time_create'	=> '添加时间',
			'type' => '类型',
			'verifyCode'=> '验证码',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('type',$this->type);

		return new CActiveDataProvider($this, array(
			'sort'=>array(
				'defaultOrder'=>'id DESC', //设置默认排序是create_time倒序
			),
			'criteria'=>$criteria,
		));
	}


	public function getTypeName($typeId)
	{
		$types = array(
			1 => '娟娟红',
			2 => '魏老香',
		);
		return $types[$typeId];
	}
}