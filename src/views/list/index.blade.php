<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Templates</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h3>List of Templates</h3>
        <div class="card shadow-lg mt-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Last Updated At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($emailTemplates as $emailTemplate)
                                <tr>
                                    <td>{{ $emailTemplate->id }}</td>
                                    <td>{{ $emailTemplate->title }}</td>
                                    <td>{{ $emailTemplate->updated_at }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton{{ $loop->iteration }}" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Actions
                                            </button>
                                            <ul class="dropdown-menu"
                                                aria-labelledby="dropdownMenuButton{{ $loop->iteration }}">
                                                <li><a class="dropdown-item" href="{{route('email-templates.edit',$emailTemplate->id)}}">Edit</a></li>
                                                <li>
                                                    <form action="/foo/bar" method="POST">@method('DELETE') <button type="submit">Delete</button> </form>
                                                    {{-- <a class="dropdown-item" href="#">Delete</a> --}}
                                                </li>
                                                {{-- <li><a class="dropdown-item" href="#">Duplicate</a></li> --}}
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        document.querySelector('.table-responsive').addEventListener('show.bs.dropdown', function() {
            document.querySelector('.table-responsive').style.overflow = 'inherit';
        });

        document.querySelector('.table-responsive').addEventListener('hide.bs.dropdown', function() {
            document.querySelector('.table-responsive').style.overflow = 'auto';
        });
    </script>
</body>

</html>
