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
        <h3>Create Template</h3>
        <div class="card shadow-lg mt-4">
            <div class="card-body">
                @isset($emailTemplate)
                    <form action="{{ route('email-templates.update', $emailTemplate->id) }}" method="post">
                        @method('PUT')
                    @else
                        <form action="{{ route('email-templates.store') }}" method="post">
                        @endisset

                        <div class="mb-3 mt-3">
                            <label for="title" class="form-label">Title:</label>
                            <input type="text" class="form-control" id="title" placeholder="Enter title"
                                name="title" value="{{ isset($emailTemplate) ? $emailTemplate->title : '' }}">
                            {{-- @error('title')
                                <span class="alert alert-danger">{{ $message }}</span>
                            @enderror --}}
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="content" class="form-label">Content:</label>
                            <textarea name="content" id="content" class="form-control" cols="30" rows="10">{{ isset($emailTemplate) ? $emailTemplate->content : '' }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
