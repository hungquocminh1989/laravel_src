<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SitePage extends Model
{
    use SoftDeletes;
	
    protected $table = 'm_site_page';
    
    protected $primaryKey = 'm_site_page_id';

	//protected $dates = ['deleted_at'];
    
    public $timestamps = true;
    
    //protected $dateFormat = 'U';
    
    public function refSiteHeader()
    {
    	return $this->hasMany('App\SiteHeader');
    }
    
    public function refSitePageSection()
    {
    	return $this->hasMany('App\SitePageSection');
    }
    
    public function refHtmlSection()
    {
    	return $this->hasMany('App\HtmlSection');
    }
    
    public function refProductSection()
    {
    	return $this->hasMany('App\ProductSection');
    }
    
    public function refCategorySection()
    {
    	return $this->hasMany('App\CategorySection');
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
