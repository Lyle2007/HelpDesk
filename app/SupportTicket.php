<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
    protected $table = 'support_ticket';
    protected $primaryKey = 'TicketNumber';

    protected $guarded = ['TicketNumber','created_at'];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
