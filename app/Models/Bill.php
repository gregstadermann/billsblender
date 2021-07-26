<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory, SoftDeletes;
 protected $fillable = [
        'name', 'type', 'payment', 'balance', 'due_date', 'autopay'
    ];
}
