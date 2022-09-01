@extends('layouts.menu_pj')

@section('content')
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-5">
            <h3 class="page-title mb-3">Data user</h3>
        </div>
    </div>
</div>
<!-- End Bread crumb and right sidebar toggle -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Semua Data user
            </div>
            <div class="card-body">
                <table id="tabledata" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="table-list">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- create modal --}}
<div class="modal fade" id="add-modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah user</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="add-post" method="post">
                    <div class="mb-3">
                        <label for="id_hardware" class="form-label">ID hardware ( Sesuaikan Alat )</label>
                        <input class="form-control" id="id_hardware" name="id_hardware" autocomplete="off">
                        <small id="warning-text-id-hardware" style="color: red; visibility: hidden">ID Hardware sudah terdaftar!</small>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="namauser" class="form-label">Nama user</label>
                        <input type="text" class="form-control" name="namauser" id="namauser">
                    </div>
                    <input type="hidden" value="{{Session::get('uid')}}" name="user_id" id="user_id">
                    <button type="button" id="add-submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- update modal --}}
<div class="modal fade" id="update-modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit user</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="update-post" method="post">
                    <div class="mb-3">
                        <label for="update-id_hardware" class="form-label">ID hardware</label>
                        <textarea class="form-control" name="id_hardware" id="update-id_hardware"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="update-alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" id="update-alamat"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="update-namauser" class="form-label">Nama user</label>
                        <input type="text" class="form-control" name="namauser" id="update-namauser">
                    </div>
                    <input type="hidden" value="{{Session::get('uid')}}" name="user_id" id="update-user_id">
                    <button type="button" id="update-button" class="btn btn-primary">Ubah</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- delete modal --}}
<div class="modal fade" id="delete-modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus user</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="lead">Apakah anda ingin mengahapus data ini?</p>
                <input name="id" id="post-id" type="hidden">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" id="delete-button" class="btn btn-primary">Hapus</button>
            </div>
        </div>
    </div>
</div>
<script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-database.js"></script>
<script type="text/javascript">
    // Your web app's Firebase configuration
    const firebaseConfig = {
        apiKey: "{{ config('services.firebase.api_key') }}",
        authDomain: "{{ config('services.firebase.auth_domain') }}",
        databaseURL: "{{ config('services.firebase.database_url') }}",
        projectId: "{{ config('services.firebase.project_id') }}",
        storageBucket: "{{ config('services.firebase.storage_bucket') }}",
        messagingSenderId: "{{ config('services.firebase.messaging_sender_id') }}",
        appId: "{{ config('services.firebase.app_id') }}"
    };

    // Initialize Firebase
    const app = firebase.initializeApp(firebaseConfig);

    var database = firebase.database();

    var lastId = 0;

    // get post data
    database.ref("warga").on('value', function(snapshot) {
        var value = snapshot.val();
        var htmls = [];
        var no = 1;

        $.each(value, function(index, value) {
            if (value) {

                htmls.push('<tr>\
                        <td>' + no++ + '</td>\
                        <td>' + value.penanggungJawab + '</td>\
                        <td>' + value.email + '</td>\
                        <td>' + value.telp + '</td>\
                        <td>\
                        <a class="btn btn-primary mt-1" href="datakolam/' + value.id_hardware + '" >Detail user</a>\
                        <a data-bs-toggle="modal" data-bs-target="#update-modal" class="btn btn-success mt-1 update-post" data-id="' + index + '">Edit</a>\
                        <a data-bs-toggle="modal" data-bs-target="#delete-modal" class="btn btn-danger mt-1 delete-data" data-id="' + index + '">Hapus</a></td>\
                    </tr>');
            }
            lastId = index;
        });
        $('#table-list').html(htmls);

        var table = $('#tabledata').DataTable({
            responsive: true,
            stateSave: true,
            "bDestroy": true
        });
        new $.fn.dataTable.FixedHeader(table);
    });

    let isClickedBtnShowModal = false;
    let elderHardware = [];

</script>
@endsection