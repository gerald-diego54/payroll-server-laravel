<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computation</title>
</head>
<body>
    <a class="btn btn-primary" href="{{ URL::to('/employee/pdf') }}">Export to PDF</a>
    <table>
        <tbody>
            @foreach($computation ?? '' as $data)
            <tr>
                <td>EMPLOYEE NAME {{$data->employee_name}}</td>
            </tr>
            <tr>
                <td>EMPLOYEE ID  {{$data->employee_id}}</td>
            </tr>
            <tr>
                <td>DEPARTMENT {{$data->department}}</td>
            </tr>
            <tr>
                <td>POSITION {{$data->position}}</td>
            </tr>
            <tr>
                <td>COMPANY {{$data->company}}</td>
            </tr>
            <tr>
                <td>PAYROLL TYPE {{$data->payroll_type}}</td>
            </tr>
            <tr>
                <td>MONTHLY RATE {{$data->monthly_rate}}</td>
            </tr>
            <tr>
                <td>DAILY RATE {{$data->daily_rate}}</td>
            </tr>

            <tr>
                <td>PAYROLL REFERENCE {{$data->payroll_reference}}</td>
            </tr>

            <tr>
                <td>PAYROLL PERIOD {{$data->payroll_period}}</td>
            </tr>

            <tr>
                <td># OF DAYS {{$data->number_of_days}} </td>
            </tr>

         <thead>
            <tr>
                <th>LOANS</th>
                <th>LOAN DATE</th>
                <th>Balance amount</th>
            </tr>
         </thead>
         <tr>
            <td>SSS Calamity Loan {{$data->loan_date}}, {{$data->balance_amount}}</td>
         </tr>




            @endforeach
        </tbody>
    </table>

</body>
</html>
