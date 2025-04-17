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
                <div class="col-sm-6"><h3 class="mb-0">Tambah Kendaraan</h3></div>
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
                <div class="col-md-12">
                <div class="card card-primary card-outline mb-4">
                    <!--begin::Header-->
                    <div class="card-header"><div class="card-title">Masukkan data kendaraan!</div></div>
                    <!--end::Header-->
                    <!--begin::Form-->
                    <form action="{{ route('kendaraan.store') }}" method="POST">
                    <!--begin::Body-->
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                        <label class="form-label" for="">Nomor Polisi</label>
                        <input type="text" class="form-control" name="no_pol" value="{{ old('no_pol') }}"/>
                        </div>
                        <div class="mb-3">
                        <label class="form-label" for="">Tahun Kendaraan</label>
                        <input type="text" class="form-control" name="tahun_kendaraan" />
                        </div>
                        <div class="mb-3">
                        <label class="form-label" for="">Nomor Mesin</label>
                        <input type="text" class="form-control" name="no_mesin" />
                        </div>
                        <div class="mb-3">
                        <label class="form-label" for="">Nomor Rangka</label>
                        <input type="text" class="form-control" name="no_rangka" />
                        </div>
                        <div class="mb-3">
                        <label class="form-label" for="">Kapasitas Mesin</label>
                        <input type="text" class="form-control" name="kapasitas" />
                        </div>
                        <div class="mb-3">
                        <label class="form-label" for="">Transmisi</label>
                        <input type="text" class="form-control" name="transmisi" />
                        </div>
                        <div class="mb-3">
                        <label for="id_jenis_kendaraan">Jenis Kendaraan</label>
                        <select class="form-control" name="id_jenis_kendaraan" required>
                            <option value="1" {{ $kendaraan->id_jenis_kendaraan == 1 ? 'selected' : '' }}>Jenis 1</option>
                            <option value="2" {{ $kendaraan->id_jenis_kendaraan == 2 ? 'selected' : '' }}>Jenis 2</option>
                        </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="id_pemilik">Pemilik</label>
                            <select class="form-control" name="id_pemilik" required>
                                <option value="">-- Pilih Pemilik --</option>
                                <option value="1">Pemilik 1</option>
                                <option value="2">Pemilik 2</option>
                            </select>
                        </div>
                    </div>
                    <!--end::Body-->
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

        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">

        </div>
</section>
</main>
    <!--end::App Main-->
      <!--begin::Footer-->
      @include('layout.coba')
      
<!-- apa -->
      <!--end::Footer-->
    </div>
    @include('layout.footer')
