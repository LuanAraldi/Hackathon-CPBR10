<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pontos extends Model
{
    /**
     * Trait para popular o ID com Uuid.
     */
    use \App\Globals\Uuids;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
}
