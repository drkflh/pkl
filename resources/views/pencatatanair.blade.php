<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
  <link href="{{asset('tabel/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="{{asset('tabel/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{asset('tabel/css/style.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


  <title>Pencatatan Suhu Air </title>
</head>

<body>
<!--esih ana sng kurang kolom foto r ana nang db-->

  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
	      <main class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="ms-auto">
						<div class="btn-group">
							<a href="/export-suhu-air" class="btn btn-primary">Export Excel</a>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"><a class="dropdown-item" href="/badaso-dashboard/general/pencatatan-suhu-air/add">Add Data</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">Pencatatan Suhu Air</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
                        <tr>
                    <th class="text-center" width="100px">Tanggal</th>
                    <th class="text-center">Hari</th>
                    <th class="text-center">08.00</th>
                    <th class="text-center">10.00</th>
                    <th class="text-center">12.00</th>
                    <th class="text-center">14.00</th>
                    <th class="text-center">Acon</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Paraf</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1;?>
                @foreach ($suhu_air as $item)
                <tr>
                    <td class="text-center">{{ $item ->tanggal}}</td>
                    <td class="text-center">{{ $item ->hari}}</td>
                    <td class="text-center">{{ $item ->delapan}}</td>
                    <td class="text-center">{{ $item ->sepuluh}}</td>
                    <td class="text-center">{{ $item ->duabelas}}</td>
                    <td class="text-center">{{ $item ->empatbelas}}</td>
                    <td class="text-center">{{ $item ->acon}}</td>
                    <td class="text-center">{{ $item ->nama_pegawai}}</td>
                    <td class="text-center">{{ $item ->paraf}}</td>
                </tr>
                <?php $no++ ;?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</main>
<!--end page main-->

 
<!--start overlay-->
<div class="overlay nav-toggle-icon"></div>
<!--end overlay-->

<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->



</div>
<!--end wrapper-->


<!-- Bootstrap bundle JS -->
<script src="{{asset('tabel/js/bootstrap.bundle.min.js') }}"></script>
<!--plugins-->
<script src="{{asset('tabel/js/jquery.min.js') }}"></script>
<script src="{{asset('tabel/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{asset('tabel/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{asset('tabel/js/table-datatable.js') }}"></script>  
</body>

</html>