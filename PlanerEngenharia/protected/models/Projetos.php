<?php

/**
 * This is the model class for table "tbl_projetos".
 *
 * The followings are the available columns in table 'tbl_projetos':
 * @property integer $id
 * @property integer $id_cliente
 * @property string $Entrada
 * @property integer $tipoProjeto
 */
class Projetos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Projetos the static model class
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
		return 'tbl_projetos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipoProjeto', 'required'),
			array('id_cliente, tipoProjeto', 'numerical', 'integerOnly'=>true),
			array('Entrada', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_cliente, Entrada, tipoProjeto', 'safe', 'on'=>'search'),
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
			'id_cliente' => 'Id Cliente',
			'Entrada' => 'Entrada',
			'tipoProjeto' => 'Tipo Projeto',
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
		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('Entrada',$this->Entrada,true);
		$criteria->compare('tipoProjeto',$this->tipoProjeto);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}