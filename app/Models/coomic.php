<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coomic extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = ["id", "title", "description", "thumb", "price", "series", "sale_date", "type", "deleted_at"];
}
