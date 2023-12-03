<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LeaveResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return array(
            "leave_id" => $this->leave_id,
            "user_id" => $this->user_id,
            "date" => $this->date,
            "cutoff_remarks" => $this->cutoff_remarks,
            "leave_type" => $this->leave_type,
            "half_day" => $this->half_day,
            "with_pay" => $this->with_pay,
            "approve" => $this->approve,
            "remarks" => $this->remarks,
        );
    }
}
