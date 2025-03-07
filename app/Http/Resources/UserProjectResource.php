<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserProjectResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "user" => UserResource::make($this->user),
            "project" => ProjectResource::make($this->project),
        ];
    }
}
