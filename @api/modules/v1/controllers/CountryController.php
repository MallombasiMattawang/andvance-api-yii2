<?php
namespace api\modules\v1\controllers;
use yii\rest\ActiveController;
/**
 * Country Controller API
 *
 * @author Mattawang
 */
class CountryController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Country';
}