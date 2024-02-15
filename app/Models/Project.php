<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = 'projects';
    protected $fillable = ['title', 'type_id', 'description', 'date', 'complete'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
