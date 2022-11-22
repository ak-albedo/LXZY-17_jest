<?php

namespace App\core\database;

use App\core\App;
use App\core\database\Validator;

abstract class BaseDbModel
{
    abstract public static function getTableName();

    /**
     * @return array
     */
    public static function getAll(): array
    {
        return App::get('database')->selectAll(static::getTableName());
    }

    /**
     * @param  array  $parameters
     * @return void
     */
    public static function create(array $parameters)
    {
        return App::get('database')->insert(static::getTableName(), $parameters);
    }

    /**
     * @return array
     */
    protected static function rules(): array
    {
        return [];
    }

    /**
     * @param  array  $params
     * @return mixed
     */
    public static function validate(array $params)
    {
        if (!count(static::rules())) {
            return false;
        }

        $validateErrors = [];

        foreach (static::rules() as $fieldName => $rules) {		
			foreach ($rules as $rule) {
				if(!array_key_exists($fieldName, $validateErrors)) {
					$fieldValue = isset($params[$fieldName]) ? $params[$fieldName] : null;
					$validateResult = Validator::checkRule(
						$fieldName,
						$fieldValue,
						$rule,
						static::getTableName()
					);

					if ($validateResult) {
						$validateErrors[$fieldName] = $validateResult;
					}
				}
			}
        }

        if (count($validateErrors)) {
            return $validateErrors;
        }

        return false;
    }
	
	 public static function validateOne(string $field, string $value)
	 {
		 $rules = static::rules();
		 
		 if(array_key_exists($field, $rules)) {			 
			 $validateError = null;
			 
			 foreach ($rules[$field] as $rule) {
                $validateResult = Validator::checkRule(
                    $field,
                    $value,
                    $rule,
                    static::getTableName()
                );

                if ($validateResult && $validateError === null) {
                    $validateError = $validateResult;
                }
            }
			
			if ($validateError) {
				return $validateError;
			}
		 }
		 
		 return false;
	 }
}