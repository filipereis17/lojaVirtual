<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class FormatterController extends Controller
{
	public function actionIndex()
	{
		$appLang = Yii::$app->language;
		$formatter = Yii::$app->formatter;
	}
}