@extends('manajemen.layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        @if ($errors->any())
            <div class="alert alert-danger fade show" role="alert">
                <h5>Terjadi Kesalahan</h5>
                @foreach ($errors->all() as $error)
                    <p class="mb-2">{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => ['pegawai.update', $pegawai], 'method' => 'POST']) !!}
                @method('PUT')
                @csrf
                {!! Form::hidden('pegawai_id', $pegawai->id) !!}
                @include('manajemen.pegawai.form', ['edit' => true])
                {{ Form::submit('UBAH', ['class' => 'btn btn-warning w-100']) }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
