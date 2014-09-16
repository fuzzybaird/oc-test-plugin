<?php namespace October\Test\Models;

use Model;

/**
 * Staff Model
 */
class Staff extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'october_test_staffs';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

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