@extends('Master_page')
@section('title','Produits')

@section('content')
<section class="h-100" style="background-color: #eee;">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0 text-black">{{ $categorie }} Gamer</h3>
        </div>

        @foreach($products as $item)
        <div class="card rounded-3 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                <img src="{{ asset('imgs/'.$item['image']) }}" class="img-fluid rounded-3" alt="{{ $item['nom'] }}">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2">{{ $item['nom'] }}</p>
              </div>
              <div class="col-md-3 col-lg-3 col-xl-2">
                <h5 class="mb-0">{{ $item['prix'] }} DH</h5>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>
</section>
@endsection
