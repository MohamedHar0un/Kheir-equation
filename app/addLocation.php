<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addLocation extends Model
{
    //form...
    
    protected $fillable = ['title','organization_id','gov_name', 'dis_name','searchmap','lat','lng', 'house_no', 'house_type', 'comm_method', 'comm_method_info', 'area_main_job','timestamps','_token'];

}
