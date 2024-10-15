<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Templates</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .iframe-container {
            border: 1px solid #ccc;
            height: 500px;
            overflow: auto;
            background-color: #f8f9fa;
        }

        iframe {
            width: 100%;
            border: none;
        }
    </style>
</head>

<body>
    <div class="container mb-5">
        <h3>Preview of {{ $emailTemplate->title }}</h3>

        <div class="iframe-container">
            <iframe srcdoc="{{$emailTemplate->content }}"></iframe>
        </div>

    </div>
</body>

</html>
