<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Templates</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">


    <style>
        /* .image-grid img {
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
        } */

        .card {
            position: relative;
            overflow: hidden;
        }

        .card img {
            width: 100%;
            height: auto;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .card:hover img {
            transform: scale(1.05);
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .card:hover .overlay {
            opacity: 1;
        }

        .image-grid .btn {
            padding: 0.5rem;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <h3>Media</h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Open modal
        </button>


        <!-- <a class="btn btn-dark" href="{{ route('email-templates.create') }}">+ Add New</a> -->
        {{-- <div class="row g-3 image-grid">
            @for ($i = 0; $i < 10; $i++)

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQALjHNA5UOunikOOQzdkrarFsYkmnGKc2rFw&s" alt="Image 1" class="card-img-top">
                        <div class="overlay">
                            <button class="btn btn-light btn-sm me-2" onclick="copyImageSrc('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQALjHNA5UOunikOOQzdkrarFsYkmnGKc2rFw&s')">
                                <i class="bi bi-clipboard"></i>
                            </button>
                            <button class="btn btn-danger btn-sm" onclick="deleteImage(this)">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>
            </div>
            @endfor
        </div> --}}
    </div>


    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Media</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row g-3 image-grid">
                        @include('email-template::media.list.component.list-data')
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        function copyImageSrc(src) {
            navigator.clipboard.writeText(src).then(() => {
                console.log('Image source copied to clipboard');
            }).catch(err => {
                console.error('Could not copy text: ', err);
            });
        }

        function deleteImage(button) {
            const card = button.closest('.col-6'); // Select the grid column, not just the card
            card.remove();
            // Optionally, remove the image from the server or database here
        }
    </script>
</body>

</html>
