<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = false;


    public function creator()
    {
        return $this->belongsTo(User::class);
    }

    public function executor()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function labels()
    {
        return $this->belongsToMany(Label::class);
    }
}
