<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user';

    /**
     * The primary key
     * 
     * @var string
     */
    protected $primaryKey = 'uid';

    public $timestamps = false;

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password');

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail()
    {
        return $this->email;
    }

    // add for eager loading relations
    public function statuses() {
        return $this->hasMany('Status', 'username', 'username');
    }

    public function inMessages() {
        return $this->hasMany('Message', 'reciever', 'username');
    }

    public function outMessages() {
        return $this->hasMany('Message', 'sender', 'username');
    }

    public function contestClarify() {
        return $this->hasMany('ContestClarify', 'username', 'username');
    }

    // add custom attributes
    public function getIsAdminAttribute() {
        return ($this->isroot == 1);
    }

    public function getUnreadMessageCountAttribute() {
        return $this->inMessages()->whereStatus('0')->count();
    }

    // other functions
    public function isProblemAccepted($pid) {
        return ($this->statuses()->accepted()->wherePid($pid)->count() > 0);
    }

    public function isProblemSubmitted($pid) {
        return ($this->statuses()->wherePid($pid)->count() > 0);
    }

}