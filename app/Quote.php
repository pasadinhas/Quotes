<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $guarded = [];

    public function date()
    {
        return date_format($this->created_at, 'Y-m-d H:i:s');
    }
}
