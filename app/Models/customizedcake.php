<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class customizedcake
 * @package App\Models
 * @version October 27, 2021, 2:58 pm UTC
 *
 * @property string $design
 * @property string $flavor
 * @property string $details
 * @property string $size
 * @property integer $prize
 */
class customizedcake extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'customizedcake';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'design',
        'flavor',
        'details',
        'size',
        'prize'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'design' => 'string',
        'flavor' => 'string',
        'details' => 'string',
        'size' => 'string',
        'prize' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'design' => 'required|string|max:255',
        'flavor' => 'required|string|max:255',
        'details' => 'required|string|max:255',
        'size' => 'required|string|max:255',
        'prize' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
