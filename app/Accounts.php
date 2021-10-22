<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Accounts extends Model
{
    //
    protected $fillable = ['id','user_id','acct_name','init_invest','start_date'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
