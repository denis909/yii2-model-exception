<?php

namespace denis909\yii;

use yii\base\Model;
use Throwable;

class ModelException extends \yii\base\Exception
{

    public function __construct(Model $model, int $code = 0, Throwable $previous = null)
    {
        $errors = $model->getFirstErrors();

        $error = array_shift($errors);
        
        parent::__construct($error);
    }

}