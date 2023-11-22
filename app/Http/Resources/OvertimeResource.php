<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OvertimeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return array (
            "id" => $this->id,
            "user_id" => $this->user_id,
            "overtime_application_number" => $this->overtime_application_number,
            "overtime_date" => $this->overtime_date,
            "overtime_hours" => $this->overtime_hours,
            "approved" => $this->approved,
            "convert_to_offset_credits" => $this->convert_to_offset_credits,
            "cutoff_remarks" => $this->cutoff_remarks,
            "remarks" => $this->remarks,
        );
    }
}
