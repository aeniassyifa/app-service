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
        <!--begin::Row-->
        <div class="row">
          <div class="col-sm-6"><h3 class="mb-0">Tambah Pemilik</h3></div>
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
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">Form Tambah Pemilik</h3>
              </div>
              <div class="card-body">
                <form action="{{ route('pemilik.store') }}" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label for="nm_pemilik" class="form-label">Nama Pemilik</label>
                    <input type="text" class="form-control" id="nm_pemilik" name="nm_pemilik" required>
                  </div>
                  <div class="mb-3">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                  </div>
                  <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                  </div>
                  <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" required>
                  </div>
                  <div class="mb-3">
                    <label for="no_hp" class="form-label">Nomor HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                  </div>
                  <!--begin::Footer-->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  <!--end::Footer-->
                </form>
                <!--end::Form-->
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
    </div>
  </main>
  <!--end::App Main-->
  <!--begin::Footer-->
  @include('layout.coba')
  <!-- apa -->
  <!--end::Footer-->
</div>
@include('layout.footer')
