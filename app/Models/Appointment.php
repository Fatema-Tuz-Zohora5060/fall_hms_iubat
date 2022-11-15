<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    // protected $fillable = ["user_id"];
    protected $guarded = [];


    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
}
