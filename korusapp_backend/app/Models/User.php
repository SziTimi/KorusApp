<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'mobil',
        'address',
        'date_of_birth',
        'par'
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    //protected $table = 'users';

    public function payments()
    {
        return $this->hasMany(Payment::class, 'members_id');
    }

    protected static function boot()
    {
        parent::boot();

        // After creating a new user, automatically create a related payment record
        static::created(function ($user) {
            $user->payments()->create([
                'amount_paid' => 0, // Set initial amount paid to zero
                'payment_date' => now(), // Set the payment date to the current timestamp
            ]);
        });
    }


}
