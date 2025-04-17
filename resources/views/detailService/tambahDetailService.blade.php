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
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6"><h3 class="mb-0">Tambah Detail Service</h3></div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="app-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">Tambah Detail Service</h3>
              </div>
              <div class="card-body">
                <form action="{{route('detailservice.store')}}" method="POST">
                  @csrf
                  <!-- Input form -->
                  <div class="mb-3">
                  <input type="hidden" class="form-control" id="id_service" name="id_service" value="1">
                  </div>
                  <div class="mb-3">
                  <label for="sparepart" class="form-label">Nama Sparepart</label>
                  <input type="text" class="form-control" id="sparepart" name="sparepart" required>
                  </div>
                  <div class="mb-3">
                  <label for="harga" class="form-label">Harga</label>
                  <input type="number" class="form-control" id="harga" name="harga" required>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--end::App Main-->
  <!--begin::Footer-->
  @include('layout.coba')
  <!-- apa -->
  <!--end::Footer-->
</div>
@include('layout.footer')
