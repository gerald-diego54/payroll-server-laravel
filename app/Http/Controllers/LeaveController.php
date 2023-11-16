<?php

namespace App\Http\Controllers;

use App\Models\LeaveModel;
use App\Http\Resources\LeaveResource;
use App\Http\Requests\LeaveRequest;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    //
    // public function store(LeaveRequest $request)
    public function __invoke(LeaveRequest $request)
    {

        $data = $request->only(
            "leave_application_number",
            "date",
            "cutoff_remarks",
            "half_day",
            "leave_type",
            "with_pay",
            "approve",
            "remarks"
        );
        var_dump($data);
        $leaveApp = LeaveModel::create($data);
        return (new LeaveResource($leaveApp));

    }
}
