<?php

class Problem extends Eloquent {

    protected $table = 'problem';
    protected $primaryKey = 'pid';
    public $timestamps = false;

    // add for eager loading relations
    public function ojinfo() {
        return $this->hasOne('OJInfo', 'vname', 'name');
    }

    public function problemCategories() {
        return $this->hasMany('ProblemCategory', 'pid', 'pid');
    }

    // add scopes
    public function scopePublic($query) {
        return $query->whereHide(0);
    }

    public function scopeUserUnsolved($query) {
        if (!Auth::check()) {
            return $query;
        }
        return $query->whereRaw('pid NOT IN (SELECT DISTINCT(pid) FROM status WHERE result = "Accepted" AND username = ?) ', array(Auth::user()->username));
    }
}

