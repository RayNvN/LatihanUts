@extends('layout.master')

@section('Judul')
    <title>Home</title>
@endsection

@section('pagecontent')
    <img src="{{ asset('images/group-students-doing-project.jpg')}}" class="img-fluid">

    @foreach($article as $a)
    <div class="mt-5">
        <div class="mt-5">
            <div class="card mb-3 border-0" style="max-width: 100%;">
                <div class="row g-0 align-items-center">
                    <div class="col-md-4 d-flex justify-content-center">
                        <img src="{{ asset('images/group-students-doing-project.jpg')}}" 
                             class="img-fluid rounded-4"
                             alt="..."
                             style="width: 100%; max-width: 320px; height: auto;">
                    </div>
                    <div class="col-md-8 d-flex">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title fs-2">{{ $a->title }}</h5>
                                <p class="card-text"><small class="text-body-secondary">{{ $a->date }} | {{$a->writers->name}}</small></p>
                                <p class="card-text fs-5">Di tengah pesatnya perkembangan teknologi kecerdasan buatan atau artificial intellegence (AI)...</p>
                            </div>
                            <div class="d-flex justify-content-end mt-5">
                                <a href="#" class="btn btn-primary rounded-pill p-3"
                                style="width: 250px; font-weight:bold; font-size:large">read more...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{ $article->links('pagination::bootstrap-5') }}

    
@endsection