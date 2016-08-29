<?php

class ShoppingCartController extends Controller
{
    public function beforeAction($action)
    {
        $this->layout = Shop::module()->layout;
        return parent::beforeAction($action);
    }

    public function actionView()
    {
        $cart = Shop::getCartContent();

        $this->render('view', array(
            'products' => $cart
        ));
    }

    public function actionGetPriceTotal()
    {
        echo Shop::getPriceTotal();
    }

    public function actionUpdateAmount()
    {
        $cart = Shop::getCartContent();

        if ($_GET['amount'] == '')
            return true;
        if (!is_numeric($_GET['amount']) || $_GET['amount'] <= 0)
            throw new CException('Wrong amount');
        $position = $_GET['position'];

        if (isset($cart[$position]['amount']))
            $cart[$position]['amount'] = $_GET['amount'];
        $product = Products::model()->findByPk($cart[$position]['product_id']);
        Shop::setCartContent($cart);
        echo Shop::priceFormat(@$product->getPrice($cart[$position]['frame-included'], $_GET['amount']));
    }


// Add a new product to the shopping cart

    public
    function actionCreate()
    {
        if (!is_numeric($_POST['amount']) || $_POST['amount'] <= 0) {
            Shop::setFlash(Shop::t('Illegal amount given'));
            $this->redirect(array(
                '//shop/products/view', 'id' => $_POST['product_id']));
        }
        if (isset($_POST['frame-included'])) {
        }

        $cart = Shop::getCartContent();

        // remove potential clutter
        if (isset($_POST['yt0']))
            unset($_POST['yt0']);
        if (isset($_POST['yt1']))
            unset($_POST['yt1']);

        $cart[] = $_POST;

        Shop::setCartcontent($cart);
        Shop::setFlash(Shop::t('The product has been added to the shopping cart'));
        $this->redirect(array('//shop/shoppingCart/view'));
    }

    public
    function actionDelete($id)
    {
        $id = (int)$id;
        $cart = json_decode(Yii::app()->user->getState('cart'), true);

        unset($cart[$id]);
        Yii::app()->user->setState('cart', json_encode($cart));

        $this->redirect(array('//shop/shoppingCart/view'));
    }

    public
    function actionIndex()
    {
        if (isset($_SESSION['cartowner'])) {
            $carts = ShoppingCart::model()->findAll('cartowner = :cartowner', array(':cartowner' => $_SESSION['cartowner']));

            $this->render('index', array('carts' => $carts,));
        }
    }

    public
    function actionAdmin()
    {
        $model = new ShoppingCart('search');
        if (isset($_GET['ShoppingCart']))
            $model->attributes = $_GET['ShoppingCart'];
        $model->cartowner = Yii::app()->User->getState('cartowner');

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    public
    function loadModel()
    {
        if ($this->_model === null) {
            if (isset($_GET['id']))
                $this->_model = ShoppingCart::model()->findbyPk($_GET['id']);
            if ($this->_model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $this->_model;
    }

    protected
    function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'shopping cart-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
