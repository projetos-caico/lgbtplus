@extends('layouts.site.admin')

@section('links')
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
@endsection

@section('main')
<style>
.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}
@media (min-width: 768px) {
    .bd-placeholder-img-lg {
        font-size: 3.5rem;
        }
    }
</style>

<h1 class="h2 mb-4 text-center">Minhas notícias</h1>
    <div class="album bg-light">
        <div class="container mt-4 mb-4">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                fill="#eceeef" dy=".3em">Foto (se houver)</text>
                        </svg>

                        <div class="card-body">
                            <p class="card-text">Manchete da notícia</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-primary"
                                        style="border-radius: 5px">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary mx-2"
                                        style="border-radius: 5px">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
