<?php

class PageController extends FrontController
{
	public $title='Translation';
	public $subTitle='Administrar translation';
	
	public function actionIndex()
	{
		$this->render('index');
	}
}