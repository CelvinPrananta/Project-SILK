@extends('layouts.master')
@section('content')

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title"> Referensi Tabel Ruangan</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Ruangan</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_ruangan"><i class="fa fa-plus"></i> Tambah Ruangan</a>
                    </div>
                </div>
            </div>

            <!-- Pencaharian Ruangan -->
            <form action="{{ route('form/ruangan/search') }}" method="GET" id="search-form">
                @csrf
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating" id="keyword" name="keyword">
                            <label class="focus-label">Nama Ruangan</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <button type="submit" class="btn btn-success btn-block btn_search">Cari</button>
                    </div>
                </div>
            </form>
            <!-- /Pencaharian Ruangan -->

            <!-- /Page Header -->
            {!! Toastr::message() !!}

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table" id="tableRuangan" style="width: 100%">
                            <thead>
                                <tr>
                                    <th class="no">No</th>
                                    <th>Nama Ruangan</th>
                                    <th>Jumlah Tempat Tidur (Unit)</th>
                                    <th class="aksi">Aksi</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Add Ruangan Modal -->
        <div id="add_ruangan" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Ruangan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('form/ruangan/save') }}" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama Ruangan <span class="text-danger">*</span></label>
                                    <input class="form-control @error('ruangan') is-invalid @enderror" type="text" id="ruangan" name="ruangan">
                                    @error('ruangan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Jumlah Tempat Tidur</label>
                                    <input type="number" class="form-control" name="jumlah_tempat_tidur" value="">
                                </div>
                            </div>
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Ruangan Modal -->

        <!-- Edit Ruangan Modal -->
        <div id="edit_ruangan" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Ruangan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('form/ruangan/update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" id="e_id" value="">
                            <div class="form-group">
                                <label>Nama Ruangan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="ruangan_edit" name="ruangan" value="">
                            </div>
                            <div class="form-group">
                                <label>Jumlah Tempat Tidur <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="jumlah_tempat_tidur_edit" name="jumlah_tempat_tidur" value="">
                            </div>
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit Ruangan Modal -->

        <!-- Delete Ruangan Modal -->
        <div class="modal custom-modal fade" id="delete_ruangan" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Hapus Ruangan</h3>
                            <p>Apakah anda yakin ingin menghapus data ini?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <form action="{{ route('form/ruangan/delete') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" class="e_id" value="">
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary continue-btn submit-btn">Hapus</button>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Kembali</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete Ruangan Modal -->
    </div>

    <!-- /Page Wrapper -->
    @section('script')
        <script src="https://cdn.datatables.net/2.0.2/js/dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var table = $('#tableRuangan').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "ajax": {
                        "url": "{{ route('get-ruangan-data') }}",
                        "data": function(d) {
                            d.keyword = $('#keyword').val();
                            d._token = "{{ csrf_token() }}";
                        }
                    },
                    "columns": [
                        {
                            "data": "id"
                        },
                        {
                            "data": "ruangan"
                        },
                        {
                            "data": "jumlah_tempat_tidur"
                        },
                        {
                            "data": "action"
                        },
                    ],
                    "language": {
                        "lengthMenu": "Show _MENU_ entries",
                        "zeroRecords": "No data available in table",
                        "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                        "infoEmpty": "Showing 0 to 0 of 0 entries",
                        "infoFiltered": "(filtered from _MAX_ total records)",
                        "search": "Cari:",
                        "searchPlaceholder": "Nama Ruangan",
                        "paginate": {
                            "previous": "Previous",
                            "next": "Next",
                            "first": "<i class='fa-solid fa-backward-fast'></i>",
                            "last": "<i class='fa-solid fa-forward-fast'></i>",
                        }
                    },
                    "order": [
                        [0, "asc"]
                    ]
                });

                // Live search
                $('#search-form').on('submit', function(e) {
                    e.preventDefault();
                    table
                        .search($('#keyword').val())
                        .draw();
                })
            });
        </script>

        <script src="{{ asset('assets/js/referensiruangan.js') }}"></script>
        <script src="{{ asset('assets/js/memuat-ulang.js') }}"></script>

        <script>
            history.pushState({}, "", '/referensi/ruangan');
        </script>

        <script>
            document.getElementById('pageTitle').innerHTML = 'Data Referensi Ruangan - Admin | Aplikasi SILK';
        </script>

@endsection
@endsection
