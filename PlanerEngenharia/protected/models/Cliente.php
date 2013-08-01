<?php

/**
 * This is the model class for table "tbl_cliente".
 *
 * The followings are the available columns in table 'tbl_cliente':
 * @property integer $id
 * @property string $nome
 * @property string $cpf
 * @property string $cep
 * @property string $endereco
 * @property string $bairro
 * @property string $complemento
 * @property string $cidade
 * @property string $Estado
 * @property string $Telefone
 * @property string $Telefone2
 * @property string $email
 */
class Cliente extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cliente the static model class
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
		return 'tbl_cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, cpf', 'required'),
			array('nome, endereco, bairro, complemento, cidade, Estado', 'length', 'max'=>40),
			array('cpf, Telefone, Telefone2', 'length', 'max'=>24),
			array('cep', 'length', 'max'=>14),
			array('email', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, cpf, cep, endereco, bairro, complemento, cidade, Estado, Telefone, Telefone2, email', 'safe', 'on'=>'search'),
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
			'nome' => 'Nome',
			'cpf' => 'Cpf',
			'cep' => 'Cep',
			'endereco' => 'Endereco',
			'bairro' => 'Bairro',
			'complemento' => 'Complemento',
			'cidade' => 'Cidade',
			'Estado' => 'Estado',
			'Telefone' => 'Telefone',
			'Telefone2' => 'Telefone2',
			'email' => 'Email',
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
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('cpf',$this->cpf,true);
		$criteria->compare('cep',$this->cep,true);
		$criteria->compare('endereco',$this->endereco,true);
		$criteria->compare('bairro',$this->bairro,true);
		$criteria->compare('complemento',$this->complemento,true);
		$criteria->compare('cidade',$this->cidade,true);
		$criteria->compare('Estado',$this->Estado,true);
		$criteria->compare('Telefone',$this->Telefone,true);
		$criteria->compare('Telefone2',$this->Telefone2,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}