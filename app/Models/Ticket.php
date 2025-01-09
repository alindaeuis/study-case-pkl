<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'email',
        'title', 
        'description',
        'ticket_type',
        'project_id',
        'status',
    ];

    public function ticketType() {
        return $this->belongsTo(TicketType::class);
    }

    public function project() {
        return $this->belongsTo(Project::class);
    }
}
