<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\StatusScope;

class Siswa extends Model
{
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        // static::addGlobalScope(new StatusScope);
    }

    /**
     * @var string
     */
    protected $table = 'siswas';



    ##################QUERY################


    //locale scope


    public function scopeIsActive($query) 
    {
    	return $query->where('status', true);
    }

    public function scopeSelectName($query) 
    {
    	return $query->select('name');
    }

    public function scopeFilterById($query, int $id) 
    {
    	return $query->where('id', $id);
    }
}
