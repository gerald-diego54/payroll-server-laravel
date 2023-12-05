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
        <thead>
            <tr>
                <th scope="col">employee_name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($computation ?? '' as $data)
            <tr>
                <th scope="row"> {{$data->employee_name}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>