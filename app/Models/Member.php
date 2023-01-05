<?php

    namespace App\Models;

    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;
    use Laravel\Sanctum\HasApiTokens;


    class Member extends Authenticatable
    {
        use HasApiTokens, HasFactory, Notifiable;

        /**
         *
         * The attributes that are mass assignable.
         *
         * @var array<int, string>
         */
        protected $fillable = [
            'role',
            'name',
            'stree',
            'postcode',
            'city',
            'canton',
            'country',
            'phone',
            'email',
            'is_email_verified',
            'email_verifed_at',
            'phone_dijaspora',
            'password',
            'message',
            'ip',
            'active',
            'deleted_at',
            'deleted_reason',
            'remember_token'
        ];

        /**
         * The attributes that should be hidden for serialization.
         *
         * @var array<int, string>
         */
        protected $hidden = [
            'password',
            'remember_token',
        ];

        /**
         * The attributes that should be cast.
         *
         * @var array<string, string>
         */
        protected $casts = [
            'email_verified_at' => 'datetime',
        ];
    }
