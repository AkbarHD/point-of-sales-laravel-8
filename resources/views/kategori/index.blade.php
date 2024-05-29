@extends('layouts.master')

@section('title')
    Kategoru
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Dashboard</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <button onclick="addForm()" class="btn btn-success xs btn-flat"><i class="fa fa-plus-circle"></i> Tambah
                        Kategori</button>

                    <div class="box-body table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Kategori</th>
                                    <th width="15%"><i class="fa fa-cog"></i></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- modal --}}
    @includeIf('kategori.form')
@endsection

@push('after-script')
    <script>
        $(document).ready(function() {
            $('.table').DataTable({
                processing: true,
                'autoWidth': false,
                // 'ajax': {
                //     'url': '{{ route('kategori.data') }}'
                // }
            });
        });

        function addForm() {
            $('#modal-form').modal('show');
            $('#modal-form .modal-title').text('Tambah Kategori');

            $('#modal-form form')[0].reset();
            $('#modal-form [name=_method]').val('post');
            $('#modal-form [name=nama_kategori]').focus();
        }
    </script>
@endpush
