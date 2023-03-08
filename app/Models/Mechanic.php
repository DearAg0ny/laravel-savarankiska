<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class Mechanic extends Model
{
    use HasFactory;

    protected $fillable =['name','lname','type','city','photo','service_id'];

    public function services(){
        return $this->belongsTo(Service::class);
    }

}
