<?php 

namespace app\controllers;

use app\models\Product;
use app\models\Cart;
Use Yii;

class CartController extends AppController {

	function actionAdd(){
		$id = Yii::$app->request->get('id');
		$product = Product::findOne($id);
		if(empty($product)) return false;
		debug($product);
	}
}