<?php
use App\User;
use App\Type;
use App\Area;
namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

    protected function user(){
        return $this->belongsTo(User::class);
    }
     public function type(){
        return $this->belongsTo(Type::class);
    }
    public function area(){
        return $this->belongsTo(Area::class);
    }
}
