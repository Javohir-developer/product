<?php
namespace backend\controllers;

use common\models\Application;
use common\models\InformationSpecialists;
use common\models\Korxona;
use common\models\Branches;
use common\models\User;
use common\rbac\models\Role;
use frontend\models\SignupForm;
use Yii;
use yii\base\Exception;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error',  'signup'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout',  'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['get'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
            $user = \common\models\User::findOne(Yii::$app->user->id);

            return $this->render('index');

    }




    public function actionSignup()
    {
        $this->layout = 'user';
        $model = new SignupForm();
        $username1=($_POST['SignupForm']["username"]);
        $user1 = \common\models\User::find()->where(['=', 'username', $username1])->one();
        if (Yii::$app->request->post() && $user1 == false) {
            Yii::$app->session->setFlash('success', 'Ro\'yxatdan o\'tganingiz uchun tashakkur.');
            $user = new User();
            $role = new Role();
            $password=($_POST['SignupForm']["password"]);
            $username=($_POST['SignupForm']["username"]);

            $user->username = $username;
            try {
                $user->auth_key = Yii::$app->security->generateRandomString();
            } catch (Exception $e) {
            }
            try {
                $user->password_hash = Yii::$app->getSecurity()->generatePasswordHash($password);
            } catch (Exception $e) {
            }
            $user->status=10;
            $user->rule = 'User';
            $user->verification_token=Yii::$app->user->identity;
            $user->save();
//            if ($user->save()){
//                $role->user_id = $user->getId();
//                $role->item_name = 'User';
//                $role->save();
//            }
            return $this->redirect(['/site/login']);
        }else if (  $user1 == true){
            Yii::$app->session->setFlash('success', 'Bu username band qlingan');
            return $this->render('signup', [
                'model' => $model,
            ]);

        }else{
            return $this->render('signup', [
                'model' => $model,
            ]);
        }


    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        $this->layout = 'user';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
//            return $this->redirect(['index']);

        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
