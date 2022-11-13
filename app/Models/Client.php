<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Screen\AsSource;

class Client extends Model
{
    use HasFactory;
    use AsSource;
    use Attachable;

    protected $table = 'clients';

    protected $fillable = ['phone', 'name', 'last_name', 'email', 'birthday', 'service_id', 'assessment'];

}
