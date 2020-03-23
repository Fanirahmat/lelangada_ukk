<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    public function auctions()
    {
        return belongsToMany('App\User');
    }
}
