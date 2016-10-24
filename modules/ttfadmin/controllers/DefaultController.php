<?php

namespace app\modules\ttfadmin\controllers;

use yii\web\Controller;

use yii\filters\VerbFilter;
use yii\filters\AccessControl;
/**
 * Default controller for the `appttfadmin` module
 */


class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'create', 'view', 'update', 'delete', 'permissions'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index'],
                        'roles' => ['userManage'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['create'],
                        'roles' => ['userCreate'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['view'],
                        'roles' => ['userView'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['update'],
                        'matchCallback' => function ($rule, $action) {
                            return Yii::$app->user->can('userUpdate', ['user' => $this->findModel(Yii::$app->request->get('id'))]);
                        }
                    ],
                    [
                        'allow' => true,
                        'actions' => ['delete'],
                        'roles' => ['userDelete'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['permissions'],
                        'roles' => ['userPermissions'],
                    ],
                ],
            ],
        ];
    }
    
    public function actionIndex()
    {
        return $this->render('index');
    }
}
