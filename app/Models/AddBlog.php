<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AddBlog extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        'userid','title','comment'
    ];
    protected $table='addblogs';
}
