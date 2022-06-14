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

  
  <title>Freezing Monitoring</title>
</head>

<body>

  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
	      <main class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="ms-auto">
						<div class="btn-group">
							<a href="/export-freezing-monitoring" class="btn btn-primary">Export Excel</a>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"><a class="dropdown-item" href="/badaso-dashboard/general/freezing-monitoring-record/add">Add Data</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">Freezing Monitoring</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr class="text-center">
                    <th width="100px">Date</th>
                    <th>No Freezing Unit</th>
                    <th>Start Time</th>
                    <th>Freezing Temperature</th>
                    <th>Amount Of Product</th>
                    <th>End Time</th>
                    <th>Freezing Temperature</th>
                    <th>Produk Kondisi</th>
                     <th>Component Action</th>
									</tr>
								</thead>
								<tbody>
									
                                        <?php $no=1;?>
                                        @foreach ($freezing as $item)
                                              <tr class="text-center">
                                            <td>{{ $item ->date}}</td>
                                            <td>{{ $item ->no_freezing_unit}}</td>
                                            <td>{{ $item ->start_time}}</td>
                                            <td>{{ $item ->freezing_temperature_1}}</td>
                                            <td>{{ $item ->amount_of_product}}</td>
                                            <td>{{ $item ->end_time}}</td>
                                            <td>{{ $item ->freezing_temperature_2}}</td>
                                            <td>{{ $item ->product_condition}}</td>
                                            <td>{{ $item ->component_action}}</td>
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