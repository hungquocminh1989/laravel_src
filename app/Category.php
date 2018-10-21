<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
	use SoftDeletes;
	
    protected $table = 'm_category';
    
    protected $primaryKey = 'm_category_id';

	//protected $dates = ['deleted_at'];
    
    public $timestamps = true;
    
    //protected $dateFormat = 'U';
    
    public function refProduct()
    {
    	return $this->hasMany('App\Product', 'm_category_id');
    }
    
    public function refCategorySection()
    {
    	return $this->hasMany('App\CategorySection');
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
