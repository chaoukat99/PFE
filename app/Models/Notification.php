<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable=['content'];

    public function experts()
    {
        return $this->belongsTo(Expert::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }


}
