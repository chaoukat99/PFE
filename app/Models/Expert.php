<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Expert extends Model
{
    use HasFactory;


    protected $fillable=['fullname','email','password'];


    public function users()
    {
        return $this->belongsToMany(User::class,'expert_user')->where('role','client');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function earnings()
    {
        return $this->hasMany(Earning::class);
    }
}
