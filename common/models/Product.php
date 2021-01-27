<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $product_name
 * @property string $product_price
 * @property string $categore_name
 * @property string $product_reyting
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_name', 'product_price', 'categore_name', 'product_reyting'], 'required'],
            [['product_name', 'product_price', 'categore_name', 'product_reyting'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_name' => 'Product Name',
            'product_price' => 'Product Price',
            'categore_name' => 'Categore Name',
            'product_reyting' => 'Product Reyting',
        ];
    }
}
