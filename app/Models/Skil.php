<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skil extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function project() {
        return $this->belongsToMany(Project::class);
    }

    public static function getSkills($projects){
        $skills = [];

        foreach ($projects as $key => $project) {
            $skills[] = $project->skill;
        }

        return $skills;
    }

    public static function deleteSkills($project){
        $project->skill()->detach();
        // foreach ($project->skill as $key => $skill) {
        //     $skill->detach();
        // }
    }
}
