@extends('manajemen.layouts.app')

@section('section-actions')
    @can('permissions-add')
        <div class="section-header-breadcrumb">
            <a href="{{ route('permissions.create') }}" type="button" class="btn-shadow btn btn-success mb-1">
                <span class="btn-icon-wrapper pr-2 opacity-7">
                    <i class="fa fa-plus fa-w-20"></i>
                </span>
                Tambah {{ $pageTitle }}
            </a>
        </div>
    @endcan
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <table style="width: 100%;" id="datatable" role="grid"
                class="table table-hover table-striped table-bordered table-responsive-sm">
                <thead>
                    <tr role="row">
                        <th style="width: 10px">#</th>
                        <th>HAK AKSES</th>
                        <th>GROUP</th>
                        @if (auth()->user()->hasAnyPermission(['permissions-edit', 'permissions-delete']))
                            <th class="text-center">AKSI</th>
                        @endif
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    @include('manajemen.modals.hapus-data')
@endsection

@push('styles')
    <link rel="stylesheet"
        href="{{ asset('assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/modules/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/modules/select2/dist/js/select2.min.js') }}"></script>
    <script>
        $(function() {
            $('#datatable').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                language: {
                    url: "{{ asset('assets/modules/datatables/Indonesian.json') }}",
                },
                ajax: {
                    url: "{{ route('permissions.datatable.api') }}",
                    type: "GET",
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        serachable: false
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'group',
                        name: 'group'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        serachable: false
                    }
                ],
                columnDefs: [{
                        className: 'text-center',
                        width: 30,
                        targets: [0]
                    },
                    {
                        className: 'text-center',
                        width: 100,
                        targets: [3]
                    },
                ],
                order: [],
            });
        });
    </script>
    @can('permissions-delete')
        <script>
            var id;
            $(document).on('click', '.delete', function(e) {
                e.preventDefault();

                id = $(this).data('id');
                $('#confirm-delete').modal('show');
            });

            $('#delete-btn').click(function() {
                $('#confirm-delete').modal().hide();
                var url = "{{ route('permissions.destroy', ':id') }}"
                url = url.replace(':id', id);
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        _method: 'DELETE'
                    },
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success: function(result) {
                        $('#confirm-delete').modal('hide');
                        $('#datatable').DataTable().ajax.reload();
                        if (result.status == true) {
                            toastr.success(result.message);
                        } else {
                            toastr.error(result.message);
                        }
                    },
                })
            });
        </script>
    @endcan
@endpush
