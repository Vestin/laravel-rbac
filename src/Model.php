<?php

namespace HuangYi\Rbac;

use Illuminate\Database\Eloquent\Model as BaseModel;

abstract class Model extends BaseModel
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Wrap table with prefix.
     *
     * @param  string  $table
     * @return string
     */
    public function table($table)
    {
        return config('rbac.database.prefix').$table;
    }
}
