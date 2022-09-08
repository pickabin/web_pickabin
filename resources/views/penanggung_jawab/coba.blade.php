<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- {{-- <meta http-equiv="refresh" content="25"> --}} -->
    <title>Kolam</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets\images\logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Datatable -->
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css" rel="stylesheet">

    <style>
        .modal-backdrop {
            /* bug fix - no overlay */
            display: none;
        }
    </style>
</head>

<body>
    <div class="m-5">
        <!-- Bread crumb and right sidebar toggle -->
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title mb-3">Data kolam</h2>
                </div>
                <div class="col-auto">
                    <a href="{{ route('datatambak') }}">
                        <button type="button" class="btn btn-secondary">
                            Kembali
                        </button>
                    </a>
                </div>
            </div>
            <h3 class="page-title mb-2 mt-2 " id="nama-tambak"></h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('datatambak') }}" style="text-decoration: none">Data Tambak</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kolam</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End Bread crumb and right sidebar toggle -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Semua Data kolam
                        <div class="float-end">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-modal">Tambah kolam</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="tabledata" class="table-hover table table-striped table-bordered nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Kolam</th>
                                    <th scope="col">Panjang</th>
                                    <th scope="col">Lebar</th>
                                    <th scope="col">Kedalaman</th>
                                    <th scope="col">Catatan</th>
                                    <th scope="col">Keterangan</th>
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
                        <h5 class="modal-title">Tambah kolam</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form id="add-post" method="post">
                            <div class="mb-3">
                                <label for="nama_kolam" class="form-label">Nama Kolam</label>
                                <input type="text" class="form-control" id="nama_kolam" name="nama_kolam" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="panjang" class="form-label">Panjang</label>
                                <input type="number" class="form-control" id="panjang" name="panjang">
                            </div>
                            <div class="mb-3">
                                <label for="lebar" class="form-label">Lebar</label>
                                <input type="number" class="form-control" id="lebar" name="lebar">
                            </div>
                            <div class="mb-3">
                                <label for="kedalaman" class="form-label">Kedalaman</label>
                                <input type="number" class="form-control" id="kedalaman" name="kedalaman">
                            </div>
                            <div class="mb-3">
                                <label for="noted" class="form-label">Catatan</label>
                                <textarea class="form-control" name="noted" id="noted"></textarea>
                            </div>
                           
                            <button type="button" id="add-submit" class="btn btn-primary">Tambah</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
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
                        <h5 class="modal-title">Edit Kolam</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form id="update-post" method="post">
                            <div class="mb-3">
                                <label for="update-nama_kolam" class="form-label">Nama Kolam</label>
                                <textarea class="form-control" name="nama_kolam" id="update-nama_kolam"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="update-panjang" class="form-label">Panjang</label>
                                <input type="text" class="form-control" id="update-panjang" name="update-panjang">
                            </div>
                            <div class="mb-3">
                                <label for="update-lebar" class="form-label">Lebar</label>
                                <input type="text" class="form-control" id="update-lebar" name="update-lebar">
                            </div>
                            <div class="mb-3">
                                <label for="update-kedalaman" class="form-label">Kedalaman</label>
                                <input type="text" class="form-control" id="update-kedalaman" name="update-kedalaman">
                            </div>
                            <div class="mb-3">
                                <label for="update-noted" class="form-label">Catatan</label>
                                <textarea class="form-control" name="update-noted" id="update-noted"></textarea>
                            </div>
                           
                            <button type="button" id="update-button" class="btn btn-primary">Ubah</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
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
                        <h5 class="modal-title">Hapus kolam</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="lead">Apakah anda ingin menghapus data ini?</p>
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



            // get post data
            database.ref("kolam").on('value', function(snapshot) {
                var value = snapshot.val();
            });
           

            // add data
            $('#add-submit').on('click', function() {
                var formData = $('#add-post').serializeArray();
              
                firebase.database().ref('kolam/').push({
                    nama_kolam: formData[0].value,
                    panjang: formData[1].value,
                    lebar: formData[2].value,
                    kedalaman: formData[3].value,
                    noted: formData[4].value,

                });

                // Reassign lastID value
                $("#add-post")[0].reset();
                $("#add-modal").modal('hide');
                location.reload();
            });

            

        </script>
    </div>
</body>