<?php

class ProductsController extends Controller {

    /**
     * Lists all models in a paginated list
     */
    public function actionList() {
        $data = Yii::app()->db->createCommand('SELECT * from products')->queryAll();
        // or $data = Products::model()->findAll();
        $dataProvider = new CArrayDataProvider($data, array(
            'pagination' => array('pagesize' => 10),
        ));
        $this->render('list', array(
            'dataProvider' => $dataProvider,
        ));
    }

}

?>