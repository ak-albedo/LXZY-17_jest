<?php

namespace App\models;

use App\core\database\BaseDbModel;

class User extends BaseDbModel
{
    /**
     * @return string
     */
    public static function getTableName(): string
    {
        return "users";
    }

    /**
     * @return array
     */
    protected static function rules(): array
    {
        return [
            'first_name' => ['required', 'fio'],
            'last_name' => ['required', 'fio'],
            'birthday' => ['required', ['date', 'max' => 'today']],
            'report_subject' => ['required', 'string'],
            'country' => ['required', 'string'],
            'phone' => ['required', 'phone'],
            'email' => ['required', 'email', 'unique'],
			'company' => ['string'],
			'position' => ['string'],
			'photo' => [['image', 'max' => 2]],
        ];
    }
}