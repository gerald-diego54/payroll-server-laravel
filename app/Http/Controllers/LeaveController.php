<?php

namespace App\Http\Controllers;

use App\Models\LeaveModel;
use App\Http\Resources\LeaveResource;
use App\Http\Requests\LeaveRequest;
use Illuminate\Http\Request;

class LeaveController extends Controller
{

    public function __invoke(LeaveRequest $request)
    {

        $data = $request->only(
            "user_id",
            "date",
            "cutoff_remarks",
            "half_day",
            "leave_type",
            "with_pay",
            "approve",
            "remarks"
        );
        $leave = LeaveModel::create($data);
        return (new LeaveResource($leave));
    }
}
