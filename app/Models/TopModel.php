<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\QueryStringParam;

class TopModel extends Model
{
    use HasFactory;
    use QueryStringParam;

//    /**
//     * The table associated with the model.
//     *
//     * @var string
//     */
//    protected $table;

    protected $perPage = 500;

}
