<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Section extends Model
{
    use HasFactory;
    protected $fillable = ['name','class_id'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }
}
