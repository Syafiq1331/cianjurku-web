@extends('layouts.guest.app', ['title' => 'Dashboard'])

@section('content')
    <div class="container py-5 my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Halaman tidak di temukan</div>
                    <div class="card-body">
                        <p>Halaman masih dalam tahap development</p>
                        <a href="{{ url('/') }}" class="btn btn-primary">
                            Kembali ke halaman utama
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
