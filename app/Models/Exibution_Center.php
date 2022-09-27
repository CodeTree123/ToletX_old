<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Exibution_Center extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function getSearchResult(): SearchResult
        {
            $url = route('exibution.show', $this->id);

            return new SearchResult(
                $this,
                $this->exibution_center_name,
                $url
            );
        }

        function Exibution_Center_relationBetweenUser()
              {
              return $this->hasOne('App\Models\User','id','user_id');
              }
}
