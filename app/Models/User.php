<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public const TABLE = 'users';
    protected $table = self::TABLE;
    public const FIELD_ID = 'id';
    protected $primaryKey = self::FIELD_ID;
    public $incrementing = true;

    public const FIELD_NAME = 'name';
    public const FIELD_EMAIL = 'email';
    public const FIELD_LOGIN = 'login';
    public const FIELD_PASSWORD = 'password';

    private const FIELD_REMEMBER_TOKEN = 'remember_token';

    public const FIELD_EMAIL_VERIFIED = 'email_verified_at';

    public const FIELD_ISADMIN = 'isAdmin';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        self::FIELD_NAME,
        self::FIELD_EMAIL,
        self::FIELD_LOGIN,
        self::FIELD_PASSWORD,
        self::FIELD_ISADMIN,
    ];

    protected $attributes = [
        self::FIELD_NAME    => "",
        self::FIELD_ISADMIN     => false,
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        self::FIELD_PASSWORD,
        self::CREATED_AT,
        self::UPDATED_AT,
        self::FIELD_REMEMBER_TOKEN,
        self::FIELD_LOGIN,
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        self::FIELD_EMAIL_VERIFIED => 'datetime',
        self::FIELD_PASSWORD => 'hashed',
    ];
}
