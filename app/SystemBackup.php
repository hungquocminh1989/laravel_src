<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SystemBackup extends Model
{
    use SoftDeletes;
	
    protected $table = 'm_system_backup';
    
    protected $primaryKey = 'm_site_setting_id';

	//protected $dates = ['deleted_at'];
    
    public $timestamps = true;
    
    //protected $dateFormat = 'U';
    
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
