<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralReport extends Model
{
    use HasFactory;
    protected $guarded = [];

    function transaction() {
        return $this->belongsTo(Transactions::class,'source','member_id');
    }
}