<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
class Building extends Model implements Searchable
{
    use HasFactory;
    protected $guarded = [];

    public function getSearchResult(): SearchResult
        {
            $url = route('building.show', $this->id);

            return new SearchResult(
                $this,
                $this->address,
                $url
            );
        }

        function Building_relationBetweenUser()
              {
              return $this->hasOne('App\Models\User','id','user_id');
              }
}
