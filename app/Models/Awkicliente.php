<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Awkicliente extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function awkitienda()
    {
        return $this->belongsTo(Awkitienda::class);
    }

    public function awkizona()
    {
        return $this->belongsTo(Awkizona::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //uno a muchos
    public function expedientes()
    {
        return $this->hasMany(Expediente::class);
    }



}
