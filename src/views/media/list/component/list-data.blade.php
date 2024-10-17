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