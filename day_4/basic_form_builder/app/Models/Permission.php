<?php

namespace App\Models;


use App\Libraries\CommonFunction;
use Illuminate\Database\Eloquent\Model;

class BasicInfo extends Model
{
    protected $table = 'basic_infos';


    protected $fillable = [
        'name_of_org_eng',
        'name_of_org_ban',
        'type_of_org',
        'status_of_org',
        'ownership_of_org',
        'country_of_org',
        'name_of_the_project',
        'business_sector',
        'major_activities',
        'first_or_not',
        'contact_name',
        'contact_phone',
        'pay_amount',
        'total_amount',
        'contact_email',
        'contact_address',
        'vat_on_pay_amount',
        'terms_and_condition',
        'status',
        'is_archive',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];


    public static function boot() {
        parent::boot();
        static::creating(function($post) {
            $post->created_by = CommonFunction::getUserId();
            $post->updated_by = CommonFunction::getUserId();
        });

        static::updating(function($post) {
            $post->updated_by = CommonFunction::getUserId();
        });
    }
}
