<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // utile per associare in modo sicuro la tabella del db, categories è propio la tabella di riferimento
    protected $table = 'categories';
}
