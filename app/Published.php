<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Published extends Model
{
    //
            /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type_portfolio', 'author_combined', 'article_name','conference_journal', 'year_published', 'vol_published', 'publication_duties', 'published_link','user_id',
    ];

}
