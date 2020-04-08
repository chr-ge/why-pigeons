<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Restaurant extends Authenticatable
{
    //Restaurant model
    use Notifiable;

    protected $guard = 'restaurant';

    protected  $fillable = [
        'name', 'email', 'phone', 'password', 'category_id', 'image', 'active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    public function getStatus()
    {
        return ($this->active === 1 ? 'Active' : 'Not Active');
    }

    public function delete()
    {
        $this->address()->delete();
        $this->menu_items()->delete();
        $this->categories()->detach();
        return parent::delete();
    }

    public function menu_items()
    {
        return $this->hasMany(Menu::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class, 'account_id');
    }

    public function categories(){
        return $this->belongsToMany(Category::class)->orderBy('name');
    }
}
