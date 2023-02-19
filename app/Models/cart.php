<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'userid',
        'productid',
        'name',
        'filename',
        'price'
    ];
    public function users(){
        return $this->hasMany(User::class);
    }
    protected $table="cart";
}
