<?php namespace October\Test\Models;

use Model;

/**
 * User Model
 */
class User extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'october_test_users';

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
    public $belongsToMany = [
        'roles' => ['October\Test\Models\Role', 'table' => 'october_test_users_roles']
    ];

}