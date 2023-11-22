<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RegisterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return array(
            "username" => $this->username,
            "first_name" => $this->first_name,
            "last_name" => $this->last_name,
            "middle_name" => $this->middle_name,
            "mobile_number" => $this->mobile_number,
            "landline_number" => $this->landline_number,
            "company" => $this->company,
            "branch" => $this->branch,
            "position" => $this->position,
            "leave_type" => $this->leave_type,
        );
    }
}
