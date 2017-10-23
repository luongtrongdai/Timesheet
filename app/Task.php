<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $table = "Tasks";
    public $timestamps = false;
    public function project(){
    	return $this->belongsTo('App\Project','project_id','id');
    }

    public function timesheet(){
    	return $this->hasMany('App\Timesheet','task_id','id');
    }
}
