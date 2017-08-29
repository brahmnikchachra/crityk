<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pages';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['template', 'name', 'title', 'slug', 'content', 'extras'];
    // protected $hidden = [];
    // protected $dates = [];
    protected $fakeColumns = ['extras'];

    /**
     * Get the post's language.
     *
     * @return Language
     */


}
