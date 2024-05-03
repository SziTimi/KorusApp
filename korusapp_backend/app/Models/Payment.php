<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Payment extends Model

{
    use HasFactory, Notifiable;
    //protected $table = 'payments';
    protected $fillable = [
        'amount_paid', 'payment_date', 'members_id' // Ensure 'members_id' is fillable if setting explicitly
    ];

    public $timestamps = true;


    public function user()
    {
        return $this->belongsTo(User::class, 'members_id');
    }

}
