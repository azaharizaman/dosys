<?php namespace AzahariZaman\Dosys\Models;

use Model;

/**
 * Doctor Model
 */
class Doctor extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'azaharizaman_dosys_doctors';

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