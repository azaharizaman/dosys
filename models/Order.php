<?php namespace AzahariZaman\Dosys\Models;

use App;
use Str;
use Lang;
use Model;
use Markdown;
use ValidationException;

/**
 * Order Model
 */
class Order extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'azaharizaman_dosys_orders';
    
     /*
     * Validation
     */
    public $rules = [
        'MRN' => 'required',
        'patient_name' => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i'],
    ];

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $belongsTo = [
        'order_type' => ['AzahariZaman\Dosys\Models\OrderType'],
        'body_part' => ['AzahariZaman\Dosys\Models\BodyPart'],
        'radiographer' => ['AzahariZaman\Dosys\Models\Radiographer'],
        'doctor' => ['AzahariZaman\Dosys\Models\Doctor'],
        'user' => ['Backend\Models\User'],
    ];
    
    
    public $belongsToMany = [
        'examinations' => [
            'AzahariZaman\Dosys\Models\Examination',
            'table' => 'azaharizaman_dosys_orders_examinations'
        ],
    ];
    

}