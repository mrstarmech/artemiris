<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

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
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionProject()
    {
        return $this->render('project');
    }

    public function actionResources()
    {
        return $this->render('resources');
    }

    public function actionNews()
    {
        return $this->render('news');
    }

    public function actionTeam()
    {
        return $this->render('team');
    }

    public function actionPublication()
    {
        return $this->render('publication');
    }

    public function actionLinks()
    {
        return $this->render('links');
    }

    public function actionMobileapp()
    {
        return $this->render('mobile');
    }

    public function actionMonography()
    {
        $this->redirect('https://getfile.dokpub.com/yandex/get/https://disk.yandex.ru/i/lLL3lmP-gPirUQ',307);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
//    public function actionLogin()
//    {
//        if (!Yii::$app->user->isGuest) {
//            return $this->goHome();
//        }
//
//        $model = new LoginForm();
//        if ($model->load(Yii::$app->request->post()) && $model->login()) {
//            return $this->goBack();
//        } else {
//            $model->password = '';
//
//            return $this->render('login', [
//                'model' => $model,
//            ]);
//        }
//    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
//    public function actionLogout()
//    {
//        Yii::$app->user->logout();
//
//        return $this->goHome();
//    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
//    public function actionSignup()
//    {
//        $model = new SignupForm();
//        if ($model->load(Yii::$app->request->post())) {
//            if ($user = $model->signup()) {
//                if (Yii::$app->getUser()->login($user)) {
//                    return $this->goHome();
//                }
//            }
//        }
//
//        return $this->render('signup', [
//            'model' => $model,
//        ]);
//    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
//    public function actionRequestPasswordReset()
//    {
//        $model = new PasswordResetRequestForm();
//        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
//            if ($model->sendEmail()) {
//                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
//
//                return $this->goHome();
//            } else {
//                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
//            }
//        }
//
//        return $this->render('requestPasswordResetToken', [
//            'model' => $model,
//        ]);
//    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
//    public function actionResetPassword($token)
//    {
//        try {
//            $model = new ResetPasswordForm($token);
//        } catch (InvalidParamException $e) {
//            throw new BadRequestHttpException($e->getMessage());
//        }
//
//        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
//            Yii::$app->session->setFlash('success', 'New password saved.');
//
//            return $this->goHome();
//        }
//
//        return $this->render('resetPassword', [
//            'model' => $model,
//        ]);
//    }
}
