<?php

/**
 * This is the model class for table "shop_products".
 *
 * The followings are the available columns in table 'shop_products':
 * @property integer $product_id
 * @property integer $category_id
 * @property integer $tax_id
 * @property string $title
 * @property string $model
 * @property string $manufacturer
 * @property integer $weight
 * @property string $description
 * @property string $price
 * @property string $size
 * @property string $new_price
 * @property integer $is_special
 * @property string $language
 * @property string $specifications
 * @property string $created_time
 *
 * The followings are the available model relations:
 * @property ShopImage[] $shopImages
 * @property ShopCategory $category
 */
class Products extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'shop_products';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category_id, tax_id, title', 'required'),
			array('category_id, tax_id, weight, is_special', 'numerical', 'integerOnly'=>true),
			array('title, model, price, size, new_price, language', 'length', 'max'=>45),
			array('manufacturer', 'length', 'max'=>255),
			array('description, specifications, created_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('product_id, category_id, tax_id, title, model, manufacturer, weight, description, price, size, new_price, is_special, language, specifications, created_time', 'safe', 'on'=>'search'),
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
			'shopImages' => array(self::HAS_MANY, 'ShopImage', 'product_id'),
			'category' => array(self::BELONGS_TO, 'ShopCategory', 'category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'product_id' => 'Product',
			'category_id' => 'Category',
			'tax_id' => 'Tax',
			'title' => 'Title',
			'model' => 'Model',
			'manufacturer' => 'Manufacturer',
			'weight' => 'Weight',
			'description' => 'Description',
			'price' => 'Price',
			'size' => 'Size',
			'new_price' => 'New Price',
			'is_special' => 'Is Special',
			'language' => 'Language',
			'specifications' => 'Specifications',
			'created_time' => 'Created Time',
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

		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('tax_id',$this->tax_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('manufacturer',$this->manufacturer,true);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('size',$this->size,true);
		$criteria->compare('new_price',$this->new_price,true);
		$criteria->compare('is_special',$this->is_special);
		$criteria->compare('language',$this->language,true);
		$criteria->compare('specifications',$this->specifications,true);
		$criteria->compare('created_time',$this->created_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Products the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
