<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model{
    
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['name', 'start', 'end'];
    public function user () {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    protected $casts = [
        'start' => 'date',  
        'end'   => 'date',  
    ];
}
