<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = [
        'code',
        'name',
        'identification',
        'address',
        'phone',
        'email',
        
        'access_sri', // indica si lleva la configuración del sri o no
        
        // el tipo de documento para indicar si está usando el acceso al sri o es informal
        // también sirve para saber el tipo de documento que se va a entregar y si puede o o recibir retencion
        'type_identification', 
        
        // Montos economicos con los que va a trabajar la empresa
        'amount_chash',
        'amount_bank',
        'retention_font',
        'retention_tax',
        
    ];


    public function products()
    {
        return $this->hasManyThrough('App\Models\Product', 'App\Models\Stock','company_id','stock_id');
    }

    public function services()
    {
        return $this->hasManyThrough('App\Models\Service', 'App\Models\Stock','company_id','stock_id');
    }

    public function clients()
    {
        return $this->hasMany('App\Models\Client');
    }

    public function clientZones()
    {
        return $this->hasMany('App\Models\ZoneClient');
    }

    public function clientCategories()
    {
        return $this->hasMany('App\Models\CategoryClient');
    }

    public function clientTypes()
    {
        return $this->hasMany('App\Models\TypeClient');
    }

    public function providers()
    {
        return $this->hasMany('App\Models\Provider');
    }

    public function providerTypes()
    {
        return $this->hasMany('App\Models\TypeProvider');
    }

    public function employees()
    {
        return $this->hasMany('App\Models\Employee');
    }

    public function employeeTypes()
    {
        return $this->hasMany('App\Models\TypeEmployee');
    }

    public function transactions()
    {
        return $this->hasMany('App\Models\Transaction');
    }

    public function movementsMoney()
    {
        return $this->hasMany('App\Models\MovementMoney');
    }

    public function groups()
    {
        return $this->hasMany('App\Models\ProductGroup', 'company_id');
    }

    public function marks()
    {
        return $this->hasMany('App\Models\Mark', 'company_id');
    }

    public function lines()
    {
        return $this->hasMany('App\Models\ProductLine', 'company_id');
    }

    public function measurements()
    {
        return $this->hasMany('App\Models\Measurement', 'company_id');
    }

    public function sri()
    {
        return $this->hasOne('App\Models\Sri','company_id');
    }
    
    public function retentionFont()
    {
        return $this->belongsTo('App\Models\Retention', 'retention_font');
    }

    public function retentionTax()
    {
        return $this->belongsTo('App\Models\Retention', 'retention_tax');
    }

    public function retentions()
    {
        return $this->hasMany('App\Models\Retention');
    }
}
