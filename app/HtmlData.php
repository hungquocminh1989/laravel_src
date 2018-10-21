<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HtmlData extends Model
{
    use SoftDeletes;
	
    protected $table = 'm_html_data';
    
    protected $primaryKey = 'm_html_data_id';

	//protected $dates = ['deleted_at'];
    
    public $timestamps = true;
    
    //protected $dateFormat = 'U';
    
    public function refHtmlSection()
    {
    	return $this->hasMany('App\HtmlSection');
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
