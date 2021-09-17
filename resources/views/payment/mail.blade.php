<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<style>
    table tr td,
    table tr th {
        padding: 10px;
    }
    table{
        width: auto;
    }
</style>

<body>
    <center>
        <table>
            <tr>
                <th>Email: </th>
                <td>{{ $data['email'] }}</td>
            </tr>
            <tr>
                <th>Password: </th>
                <td>{{ $data['password'] }}</td>
            </tr>
            <tr>
                <th>Username: </th>
                <td>{{ $data['username'] }}</td>
            </tr>
            <tr>
                <th>Expire Date: </th>
                <td>{{ $data['expire_date'] }}</td>
            </tr>
            <tr>
                <th>Package: </th>
                <td>{{ $data['package'] }}</td>
            </tr>
            <tr>
                <th>Create At: </th>
                <td>{{ $data['created_at'] }}</td>
            </tr>
        </table>
    </center>
</body>

</html>