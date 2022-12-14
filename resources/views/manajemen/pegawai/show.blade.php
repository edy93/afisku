@extends('manajemen.layouts.app')

@section('content')
    <div class="card author-box card-primary">
        <div class="card-body">
            <div class="author-box-name">
                <a href="javascript:void(0)">{{ $pegawai->nm_pegawai }}</a>
            </div>
            <div class="author-box-job" style="font-size: 10pt"><span style="margin-right: 40px">asdasdasd</span>{{ $pegawai->nip }}</div>
            <div style="font-size: 10pt"><span style="margin-right: 40px">asd</span>{{ $pegawai->jabatan }}</div>
            <div class="author-box-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
            </div>
            <div class="mb-2 mt-3">
                <div class="text-small font-weight-bold">Follow Hasan On</div>
            </div>
            <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="btn btn-social-icon mr-1 btn-github">
                <i class="fab fa-github"></i>
            </a>
            <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <div class="w-100 d-sm-none"></div>
            <div class="float-right mt-sm-0 mt-3">
                <a href="#" class="btn">View Posts <i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            // 
        });
    </script>
@endpush
