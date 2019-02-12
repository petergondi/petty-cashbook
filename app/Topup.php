<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Topup extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_type', 'topup','petty_cashier',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public $table="topup";
}
