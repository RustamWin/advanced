<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Portfolio;
use app\models\User;
use app\models\Slides;
use app\models\Services;
use app\models\Team;
use app\models\Testimonials;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
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
     * @inheritdoc
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
        $slides = Slides::find()->limit(4)->orderBy(['id' => SORT_DESC])->all();
        
        $services = Services::find()->orderBy(['id' => SORT_ASC])->all();
        $works = Portfolio::find()->limit(4)->orderBy(['id' => SORT_DESC])->all();
        $testimonials1 = Testimonials::find()->limit(4)->offset(1)->one();
        $testimonials2 = Testimonials::find()->limit(4)->offset(2)->one();
        $testimonials3 = Testimonials::find()->limit(4)->offset(3)->one();
        $testimonials4 = Testimonials::find()->limit(4)->offset(4)->one();
        return $this->render('index',[
            'slides' => $slides,
            'testimonials1' => $testimonials1,
            'testimonials2' => $testimonials2,
            'testimonials3' => $testimonials3,
            'testimonials4' => $testimonials4,
            'works' => $works,
            'services' => $services,
        ]);
    }

    public function actionPortfolio()
    {
        $all = Portfolio::find()->orderBy(['id' => SORT_DESC])->all();
        $web = Portfolio::find()->where(['category' => "web"])->orderBy(['id' => SORT_ASC])->all();;
        $logo = Portfolio::find()->where(['category' => "logo"])->orderBy(['id' => SORT_ASC])->all();;
        $print = Portfolio::find()->where(['category' => "print"])->orderBy(['id' => SORT_ASC])->all();
        return $this->render('portfolio', [
            'all' => $all,
            'web' => $web,
            'logo' => $logo,
            'print' => $print,
        ]);
    }
    public function actionServices()
    {
        $services = Services::find()->orderBy(['id' => SORT_ASC])->all();
        return $this->render('services',[
            'services' => $services,
        ]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        $team = Team::find()->limit(4)->orderBy(['id' => SORT_DESC])->all();
        $testimonials1 = Testimonials::find()->limit(4)->offset(1)->one();
        $testimonials2 = Testimonials::find()->limit(4)->offset(2)->one();
        $testimonials3 = Testimonials::find()->limit(4)->offset(3)->one();
        $testimonials4 = Testimonials::find()->limit(4)->offset(4)->one();
        return $this->render('about', [
            'testimonials1' => $testimonials1,
            'testimonials2' => $testimonials2,
            'testimonials3' => $testimonials3,
            'testimonials4' => $testimonials4,
            'team' => $team,
            ]);
    }
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
