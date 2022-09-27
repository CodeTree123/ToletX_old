<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Room extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function getSearchResult(): SearchResult
        {
            $url = route('room.show', $this->id);

            return new SearchResult(
                $this,
                $this->address,
                $url
            );
        }

        function Room_relationBetweenUser()
              {
              return $this->hasOne('App\Models\User','id','user_id');
              }
}
