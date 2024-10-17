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
        .image-grid img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .image-grid img:hover {
            transform: scale(1.05);
        }

        .image-grid .card {
            overflow: hidden;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <h3>Media</h3>
        <!-- <a class="btn btn-dark" href="{{ route('email-templates.create') }}">+ Add New</a> -->
        <div class="row g-3 image-grid">
            @for ($i = 0; $i < 10; $i++)
                <div class="col-6 col-md-4 col-lg-3">
                        <div class="shadow card image-box">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQALjHNA5UOunikOOQzdkrarFsYkmnGKc2rFw&s" alt="">
                        </div>
                </div>
            @endfor
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>