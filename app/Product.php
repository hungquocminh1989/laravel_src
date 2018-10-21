<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
	
    protected $table = 'm_product';
    
    protected $primaryKey = 'm_product_id';

	//protected $dates = ['deleted_at'];
    
    public $timestamps = true;
    
    //protected $dateFormat = 'U';
    
    public function refProductSection()
    {
    	return $this->hasMany('App\ProductSection');
    }
    
    public function refImageManager()
    {
    	return $this->hasMany('App\ImageManager');
    }
    
    //Column enable update with function fill(), create()
    protected $fillable = [
        
    ];
    
    //Column can not update with function fill(), create()
    protected $guarded = [
        
    ];
    
    //Column hidden
    protected $hidden = [
    	
    ];
}
