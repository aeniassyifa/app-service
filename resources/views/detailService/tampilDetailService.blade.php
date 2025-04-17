@include('layout.header')
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      @include('layout.navbar')
      
      <!--end::Header-->
      <!--begin::Sidebar-->
      @include('layout.sidebar')
      
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">

      <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">

          <!-- Notifikasi sukses -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Detail Service</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>


        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-md-6">
                <div class="card mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                      <h3 class="card-title">Data Keseluruhan Detail Service</h3>
                          <a href="{{route('detailservice.create')}}">
                            <input type="button" class="btn btn-success" value="Tambah">
                          </a>
                  </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Service ID</th>
                                        <th>Nama Sparepart</th>
                                        <th>Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($data as $row)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$row->id_service}}</td>
                                        <td>{{$row->sparepart}}</td> <!-- Perbaikan kolom -->
                                        <td>{{ number_format($row->harga, 0, ',', '.') }}</td> <!-- Format harga -->
                                        <td>
                                            <a href="{{ route('detailservice.edit',$row->id_detail_service)}}">Update</a>
                                            <a href="{{ route('detailservice.delete',$row->id_detail_service)}}">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>
              </div>
          </div>

          </div>
        </div>

        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">

          </div>
</section>
</main>
      <!--end::App Main-->
      <!--begin::Footer-->
      @include('layout.coba')
      

      <!--end::Footer-->
    </div>
    @include('layout.footer')
