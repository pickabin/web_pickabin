
@extends('layouts3.main')
@section('content')
<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-sm-6">
          <h3>Basic DataTables</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item">Data Tables</li>
            <li class="breadcrumb-item active">Basic Init</li>
          </ol>
        </div>
        <div class="col-sm-6">
          <!-- Bookmark Start-->
          <div class="bookmark">
            <ul>
              <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
              <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
              <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
              <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
              <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                <form class="form-inline search-form">
                  <div class="form-group form-control-search">
                    <input type="text" placeholder="Search..">
                  </div>
                </form>
              </li>
            </ul>
          </div>
          <!-- Bookmark Ends-->
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">
      <!-- Zero Configuration  Starts-->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>Zero Configuration</h5><span>DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function:<code>$().DataTable();</code>.</span><span>Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</span>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="display" id="basic-1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No. Telepon</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="table-list">
                  <tr></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
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

  // get data
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
                      <a class="btn btn-primary mt-1" href="" >Detail user</a>\
                      <a class="btn btn-success mt-1 update-post">Edit</a>\
                      <a class="btn btn-danger mt-1 delete-data">Hapus</a></td>\
                  </tr>');
          }
          lastId = index;
      });
      $('#table-list').html(htmls);
  });
</script>
@endsection