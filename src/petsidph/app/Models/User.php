<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    protected $table    = 'users';
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'contact_no',
        'password',
        'photo',
    ];

    /**
     *
     *
     * @param array $dataList
     * @return bool
     */
    public function insert(array $dataList): bool
    {
        return DB::table(self::getTable())->insert($dataList);
    }
}
