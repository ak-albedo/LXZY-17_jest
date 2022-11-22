<?php

namespace App\core\database;

use App\core\App;

class Validator
{
    /**
     * @param  string  $fieldName
     * @param  string  $fieldValue
     * @param  mixed  $rule
     * @param  string  $tableName
     * @return string|bool
     */
    public static function checkRule(
        string $fieldName,
        string $fieldValue,
        $rule,
        string $tableName
    ): string {		
		if(is_array($rule)) {
			$params = $rule;
			$rule = $rule[0];
			unset($params[0]);
			
			return self::$rule($fieldName, $fieldValue, $params);
		}
		
		return self::$rule($fieldName, $fieldValue, $tableName);
    }

    /**
     * @param  string  $fieldName
     * @param  string  $fieldValue
     * @return string|bool
     */
    private static function required(string $fieldName, string $fieldValue): string
    {
        if (!$fieldValue) {
            return "Field <b>{$fieldName}</b> is required";
        }

        return false;
    }

    /**
     * @param  string  $fieldName
     * @param  string  $fieldValue
     * @return string|bool
     */
    private static function phone(string $fieldName, string $fieldValue): string
    {
        $pattern = '/^\+\d\s\(\d{3}\)\s\d{3}\-\d{4}$/';

        if (!preg_match($pattern, $fieldValue)) {
            return "<b>{$fieldName}</b> - invalid phone number format: <i>+1 (111) 111-1111</i>";
        }

        return false;
    }

    /**
     * @param  string  $fieldName
     * @param  string  $fieldValue
     * @param  array|null  $params
     * @return string|bool
     */
    private static function date(
		string $fieldName, 
		string $fieldValue, 
		$params = null
	): string
    {
        $pattern = '/^\d{4}\-\d{2}\-\d{2}$/';

        if (!preg_match($pattern, $fieldValue)) {
            return "<b>{$fieldName}</b> - invalid date format: <i>yyyy-mm-dd</i>";
        }
		
		if($params) {
			if(array_key_exists("max", $params)) {
				if($params['max'] == 'today') {
					$maxDate = date("Y-m-d");
				} else {
					$maxDate = $params['max'];
				}
				
				if($fieldValue > $maxDate) {
					return "You can't choose a future date";
				}
			}
		}

        return false;
    }

    /**
     * @param  string  $fieldName
     * @param  string  $fieldValue
     * @return string|bool
     */
    private static function email(string $fieldName, string $fieldValue): string
    {
        if (!filter_var($fieldValue, FILTER_VALIDATE_EMAIL)) {
            return "<b>{$fieldName}</b> - invalid E-mail";
        }

        return false;
    }

    /**
     * @param  string  $fieldName
     * @param  string  $fieldValue
     * @param  string  $tableName
     * @return string|bool
     */
    private static function unique(
        string $fieldName,
        string $fieldValue,
        string $tableName
    ): string {
        if (!$fieldValue || !App::get('database')->checkUnique($tableName, $fieldName, $fieldValue)) {
            return "{$fieldName}: <b>{$fieldValue}</b> - already exists";
        }

        return false;
    }
	
	/**
     * @param  string  $fieldName
     * @param  string  $fieldValue
     * @return string|bool
     */
    private static function string(
        string $fieldName,
        string $fieldValue
    ): string { 
        if(mb_strlen($fieldValue) > 256) {
            return "The field <b>{$fieldName}</b> length cannot be more than 256 characters";
        }

        return false;
    }
	
	/**
     * @param  string  $fieldName
     * @param  string  $fieldValue
     * @return string|bool
     */
    private static function fio(
        string $fieldName,
        string $fieldValue
    ): string { 
        if($isNotString = self::string($fieldName, $fieldValue)) {
			return $isNotString;
		}
		
		if(!preg_match('/^\D+$/', $fieldValue)) {
            return "This field does not allow numeric characters";
        }

        return false;
    }
	
	/**
     * @param  string  $fieldName
     * @return string|bool
     */
	private static function image(
		string $fieldName,
		string $fieldValue, 
		$params = null
	): string {
		if(isset($_FILES[$fieldName]) && $_FILES[$fieldName]['error'] === UPLOAD_ERR_OK) {
			// Check file type
			if(!in_array($_FILES[$fieldName]['type'], ['image/jpeg', 'image/png', 'image/gif'])) {
				return "Select a file in one of the listed formats: <b>.jpg .png .gif</b>";
			}
			
			if($params) {
				if(array_key_exists("max", $params)) {
					// Check file size
					if($params["max"] * 1048576 < $_FILES[$fieldName]['size']) {
						$max = ($params["max"] < 1) ? $params["max"]*1024 ."KB" : $params["max"]."MB";
						return "Photo size must not exceed {$max}";
					}
				}
			}
			
		}
		
		return false;
	}
}