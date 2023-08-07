<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <h2>User List</h2>
        <table class="table table-bordered">
            <thead>
                <tr>

                    <th>Name</th>
                    <th>Email</th>
                    <th>Company Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                </tr>
            </thead>
            @foreach($user as $item)
            <tbody>
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->company_name}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->address}}</td>


                </tr>


            </tbody>
            @endforeach
        </table>
    </div>

</body>

</html>