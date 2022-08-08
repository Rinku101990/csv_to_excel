<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Exxcel extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'productsId',
        'productTime',
        'serviceId_FK',
        'ProductPlanDuration',
        'productsSubject',
        'productsGrade',
        'productsPrice',
        'discount_price',
        'productBoard',
    ];
}
