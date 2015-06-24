<?php namespace AzahariZaman\Dosys\Models;

use Model;

/**
 * Examination Model
 */
class Examination extends Model
{ 

    /**
     * @var string The database table used by the model.
     */
    public $table = 'azaharizaman_dosys_examinations';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['group','exam_name'];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}