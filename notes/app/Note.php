<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['title','body','important'];// campos llenables
    //protected $guarded =['id']; // campos no llenables
    public function isImportant(){

      return $this->important ==1;
    }
}
