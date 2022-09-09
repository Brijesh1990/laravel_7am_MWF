<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AddGallery extends Model
{
    use HasFactory, Notifiable;
    protected $fillable=[
        'gelleryname','gelleryimage'
    ];

    protected $table='addgalleries';
}
