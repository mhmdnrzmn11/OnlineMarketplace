@extends('layouts.manage')

@section('title', 'Alamat')

@section('content')
	<div class="container">
    <div class="row justify-content-center">
      <div class="col col-md-8">
      	<div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
	          <span>Alamat</span>
            <a href="{{ route('address.create') }}" class="btn btn-sm btn-primary">Tambah Alamat</a>
	        </div>
          <div class="card-body">
            @foreach ($addresses as $address)
              <div class="border-bottom pb-2 mb-3">
                <div class="d-flex justify-content-between">
                  <h4 class="my-0">{{ $address->full_name . ' - ' . $address->address_name }}</h4>
                  <div class="d-flex">
                    <a href="{{ route('address.show', $address->id) }}" class="btn btn-light btn-sm">Lihat</a>
                    @if (Auth::user()->hasRole('user'))
                      <a href="{{ route('address.edit', $address->id) }}" class="btn btn-light btn-sm mx-1">Ubah</a>
                      <form action="{{ route('address.destroy', $address->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-light btn-sm">Hapus</button>
                      </form>
                    @endif
                  </div>
                </div>
                <p class="text-muted my-0">{{ $address->complete_address }}</p>
                <p class="text-muted my-0">{{ $address->city }} - {{ $address->sub_district }}</p>
                <p class="text-muted my-0">{{ $address->province }}</p>
                <p class="text-muted my-0">{{ $address->zip_code }}</p>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection