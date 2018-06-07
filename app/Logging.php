<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logging extends Model
{

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var array
     */
    protected $casts = [

        'data_dump' => 'array',
    ];

    /**
     * @return mixed
     */
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }

    /**
     * @param Builder $query
     * @param $id
     */
    public function scopeProject(Builder $query, $id)
    {
        $query->where('project_id', $id);
    }
}
