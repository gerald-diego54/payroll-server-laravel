<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaxrResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return array(
            "tax_id" => $this->tax_id,
            "sss" => $this->sss,
            "pag-ibig" => $this->pagibig,
            "philhealth" => $this->philhealth,
        );
    }
}
