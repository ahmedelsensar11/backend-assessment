<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TimesheetResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "task_name" => $this->task_name,
            "date" => $this->date,
            "hours" => $this->hours,
            "user" => UserResource::make($this->user),
            "project" => ProjectResource::make($this->project)
        ];
    }
}
