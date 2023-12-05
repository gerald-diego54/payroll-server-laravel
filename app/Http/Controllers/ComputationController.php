<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrossModel;
use App\Models\TaxModel;
use App\Http\Resources\GrossResource;
use App\Http\Requests\GrossRequest;
use App\Http\Resources\TaxResource;
use App\Http\Requests\TaxRequest;


class ComputationController extends Controller
{
    public function __invoke(GrossRequest $request)
    {
        $data = $request->only(
            "gross_id",
            "daily_rate",
            "basic_salary",
            "overtime"
        );
        $gross = GrossModel::create($data);
        return (new GrossResource($gross));
    }

    public function tax(TaxRequest $request)
    {
        $data = $request->only(
            "tax_id",
            "sss",
            "pag-ibig",
            "philhealth"
        );
        $tax = TaxModel::create($data);
        return (new TaxResource($tax));
    }
}
