<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

    use RecordsActivity;

    protected static $recordEvents = ['created'];

}
