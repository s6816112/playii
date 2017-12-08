<?php

namespace Playii\Controller;

use yii\web\Controller;

class PortalController extends Controller
{
    /**
     * `/index.php?r=portal/home`
     * vs
     * `/portal/home`
     */
    public function actionHome()
    {
        return 'home';
    }
}
