<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'm_category';
    
    protected $primaryKey = 'm_category_id';
    
    public $timestamps = true;
    
    //protected $dateFormat = 'U';
    
    //Column enable update with function fill(), create()
    /*protected $fillable = [
        '*'
    ];*/
    
    //Column can not update with function fill(), create()
    protected $guarded = [
        //'m_category_id','category_name'
    ];
    
    //Column hidden
    protected $hidden = [
    	//'category_name'
    ];
}
