<?php

class InputGenerator extends CCodeGenerator
{
	public $codeModel='gii.generators.input.InputCode';
	public $title='INPUT';
	public $subTitle='INPUT generator';
	
	/**
	 * Prepares the code model.
	 */
	protected function prepare()
	{
		if($this->codeModel===null)
			throw new CException(get_class($this).'.codeModel property must be specified.');
		$modelClass=Yii::import($this->codeModel,true);
		$model=new $modelClass;
	
		if(isset($_POST[$modelClass]))
		{
			$model->attributes=$_POST[$modelClass];
			$model->viewPath=$model->moduleName.'.views';
			$model->status=CCodeModel::STATUS_PREVIEW;
			if($model->validate())
				$model->prepare();
		}
		return $model;
	}
}