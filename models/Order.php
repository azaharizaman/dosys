<?php namespace AzahariZaman\Dosys\Models;

use Model;

/**
 * Order Model
 */
class Order extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'azaharizaman_dosys_orders';

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