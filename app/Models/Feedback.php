<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Feedback extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'subject',
        'comment'
    ];

    protected $table="feedbacks";
}