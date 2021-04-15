<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
</head>
<body>
    <table border="5px">
    <tr>
        <th>Customer ID</th>
        <th>Nama Customer</th>
    </tr>
        @foreach($data as $hasil)
            <tr>
                <td>{{$hasil->customer_id}}</td>
                <td>{{$hasil->first_name}} {{ $hasil->last_name}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>