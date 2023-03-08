<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mechanic;

class Service extends Model
{
    use HasFactory;

    protected $fillable =['title','address','manager'];

    public function masters(){
        return $this->hasMany(Mechanic::class);
    }
}
