<?php

namespace App\Http\Controllers;

use App\Http\Requests\OvertimeRequest;
use App\Http\Resources\OvertimeResource;
use App\Models\Overtime;
use Illuminate\Http\Request;

class OvertimeController extends Controller
{
    public function __invoke(OvertimeRequest $request)
    {
        $data = $request->only(
            "user_id",
            "overtime_application_number",
            "overtime_date",
            "overtime_hours",
            "approved",
            "convert_to_offset_credits",
            "cutoff_remarks",
            "remarks"
        );
        $overtime = Overtime::create($data);
        return (new OvertimeResource($overtime));
    }
}
