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
        iframe {
            width: 100%;
            height: 750px;
            /* border: none; */
        }

        textarea {
            resize: none;
        }

        #media-modal .card {
            position: relative;
            overflow: hidden;
        }

        #media-modal .card img {
            width: 100%;
            height: auto;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        #media-modal .card:hover img {
            transform: scale(1.05);
        }

        #media-modal .overlay {
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

        #media-modal .card:hover .overlay {
            opacity: 1;
        }

        #media-modal .image-grid .btn {
            padding: 0.5rem;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <div class="container-fluid" id="form-section">
        <h3>Create Template</h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#media-modal">
            Media
        </button>
        <div class="card shadow-lg mt-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
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
                                    <textarea name="content" id="content" class="form-control" cols="30" rows="25">{{ isset($emailTemplate) ? $emailTemplate->content : '' }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-dark">Submit</button>
                                <!-- <button type="button" class="btn btn-dark" id="preview-btn" onclick="togglePreview()">Preview</button> -->
                            </form>

                    </div>
                    <div class="col-lg-6">
                        <iframe id="preview-frame" srcdoc="{{ isset($emailTemplate) ? $emailTemplate->content : '' }}">
                        </iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- The Media Modal -->
    <div class="modal" id="media-modal">
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
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        const htmlInput = document.getElementById('content');
        const previewFrame = document.getElementById('preview-frame');

        htmlInput.addEventListener('input', () => {
            const htmlCode = htmlInput.value;
            previewFrame.contentDocument.body.innerHTML = htmlCode;
        });

        const togglePreview = () => {
            const formSection = document.getElementById('form-section');
            const previewSection = document.getElementById('preview-section');

            if (previewSection.style.display === "none") {
                const htmlCode = htmlInput.value;
                previewFrame.contentDocument.body.innerHTML = htmlCode;
                previewSection.style.display = "block";
                formSection.style.display = "none";
            } else {
                previewSection.style.display = "none";
                formSection.style.display = "block";
            }
        }
        
        function copyImageSrc(src) {
            navigator.clipboard.writeText(src).then(() => {
                console.log('Image source copied to clipboard');
            }).catch(err => {
                console.error('Could not copy text: ', err);
            });
        }
    </script>
</body>

</html>
