<?php

namespace app\controllers;

use app\models\Tag;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Post;
use app\models\Category;
use app\models\Guestbook;
use yii\data\Pagination;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only'  => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow'   => true,
                        'roles'   => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class'   => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error'   => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $guestbooks  = Guestbook::find()->orderBy('date_creation DESC')->all();
        $categories = Category::find()->all();
        $categoriId = Yii::$app->request->get('category_id', 0);
        $tags       = Tag::find()->all();
        $tagId      = Yii::$app->request->get('tag_id', 0);
        if ($categoriId) {
            $posts = Post::find()->where(['category_id' => $categoriId])->orderBy('date_creation DESC')->all();
        } else if ($tagId){
            $posts = Post::find()
                ->joinWith('tags')
                ->where(['tag.id' => $tagId])
                ->orderBy('date_creation DESC')
                ->all();
        } else {
            $posts = Post::find()->orderBy('date_creation DESC')->all();
        }
        return $this->render(
            'index',
            [
                'allPosts'  => $posts,
                'categories'=> $categories,
                'allGuestbooks' => $guestbooks,
                'tags'      => $tags,
            ]
        );

/*

        $query = Article::find()->where(['status' => 1]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 10]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('index', [
            'models' => $models,
            'pages' => $pages,
        ]);

*/
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
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionTest()
    {
        return $this->render('test');
    }
}
