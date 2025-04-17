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
            <div class="col-sm-6"><h3 class="mb-0">Kendaraan</h3></div>
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
                <div class="card-header"><div class="card-title">Edit Data Kendaraan</div></div>
                <!--end::Header-->
                <!--begin::Form-->
                @if($data)
                <form action="{{route('kendaraan.update',$id)}}" method="POST" name="update">
                <!--begin::Body-->
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label" for="no_pol">Nomor Polisi</label>
                        <input type="text" class="form-control" name="no_pol" value="{{ $data->no_pol }}" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="tahun_kendaraan">Tahun Kendaraan</label>
                        <input type="number" class="form-control" name="tahun_kendaraan" value="{{ $data->tahun_kendaraan }}" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="no_mesin">Nomor Mesin</label>
                        <input type="text" class="form-control" name="no_mesin" value="{{ $data->no_mesin }}" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="no_rangka">Nomor Rangka</label>
                        <input type="text" class="form-control" name="no_rangka" value="{{ $data->no_rangka }}" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="kapasitas">Kapasitas Mesin</label>
                        <input type="text" class="form-control" name="kapasitas_mesin" value="{{ $data->kapasitas_mesin }}" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="transmisi">Transmisi</label>
                        <select class="form-control" name="transmisi">
                            <option value="Manual" {{ $data->transmisi == 'Manual' ? 'selected' : '' }}>Manual</option>
                            <option value="Otomatis" {{ $data->transmisi == 'Otomatis' ? 'selected' : '' }}>Otomatis</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="id_jenis_kendaraan">Jenis Kendaraan</label>
                        <select class="form-control" name="id_jenis_kendaraan" required>
                            <option value="1" {{ $data->id_jenis_kendaraan == 1 ? 'selected' : '' }}>Motor</option>
                            <option value="2" {{ $data->id_jenis_kendaraan == 2 ? 'selected' : '' }}>Mobil</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="id_pemilik">ID Pemilik</label>
                        <select class="form-control" name="id_pemilik" required>
                            <option value="1" {{ $data->id_pemilik == 1 ? 'selected' : '' }}>Pemilik 1</option>
                            <option value="2" {{ $data->id_pemilik == 2 ? 'selected' : '' }}>Pemilik 2</option>
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
                @endif
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
    @include('layout.footer')

    <!--end::Footer-->
</div>
@include('layout.footer')
