<?php

class SiteController extends Controller
{

	public $layout='//layouts/column1';
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	/**
	 * Displays the contact page
	 */
	// public function actionContact()
	// {
	// 	$model=new ContactForm;
	// 	if(isset($_POST['ContactForm']))
	// 	{
	// 		$model->attributes=$_POST['ContactForm'];
	// 		if($model->validate())
	// 		{
	// 			$headers="From: {$model->email}\r\nReply-To: {$model->email}";
	// 			mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);
	// 			Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
	// 			$this->refresh();
	// 		}
	// 	}
	// 	$this->render('contact',array('model'=>$model));
	// }

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$this->layout = "//layouts/column2";
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	public function actionActivity1()
	{
		$model=new Message;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['Message'])){
			$_POST['Message']['type'] = 1;
			$model->attributes=$_POST['Message'];
			if($model->save()) {
				$this->redirect(array('site/activity1','success'=>1));
			}
		}
		$this->render('activity1',array('model'=>$model));
	}

	public function actionActivityFrame1()
	{
		$model=new Message;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['Message'])){
			$_POST['Message']['type'] = 1;
			$model->attributes=$_POST['Message'];
			if($model->save()) {
				$this->redirect(array('site/activityFrame1','success'=>1));
			}
		}
		$this->render('activityFrame1',array('model'=>$model));
	}

	public function actionActivity2()
	{
		$model=new Message;
		if(isset($_POST['Message'])){
			$_POST['Message']['type'] = 2;
			$model->attributes=$_POST['Message'];
			if($model->save()) {
				$this->redirect(array('site/activity2','success'=>1));
			}
		}
		$this->render('activity2',array('model'=>$model));
	}

	public function actionActivityFrame2()
	{
		$model=new Message;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['Message'])){
			$_POST['Message']['type'] = 2;
			$model->attributes=$_POST['Message'];
			if($model->save()) {
				$this->redirect(array('site/activityFrame2','success'=>1));
			}
		}
		$this->render('activityFrame2',array('model'=>$model));
	}

}