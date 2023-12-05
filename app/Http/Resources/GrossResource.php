<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GrossResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return array(
            "gross_id" => $this->gross_id,
            "daily_rate" => $this->daily_rate,
            "basic_salary" => $this->basic_salary,
            "overtime" => $this->overtime,
        );
    }
}
