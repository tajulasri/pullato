<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return mixed
     */
    public function commands()
    {
        return $this->hasMany(ProjectCommand::class, 'project_id', 'id');
    }
}
