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
                <div class="col-sm-6"><h3 class="mb-0">Update Service</h3></div>
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
                    <div class="card-header"><div class="card-title">Edit Data Service</div></div>
                    <!--end::Header-->
                    <!--begin::Form-->
                    @if(isset($data))
                    <form action="{{route('service.update', $data->id_service)}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Keluhan</label>
                            <input type="text" class="form-control" name="keluhan" value="{{$data->keluhan}}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Masuk</label>
                            <input type="date" class="form-control" name="tgl_masuk" value="{{$data->tgl_masuk}}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Keluar</label>
                            <input type="date" class="form-control" name="tgl_keluar" value="{{$data->tgl_keluar}}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mekanik</label>
                            <select class="form-control" name="id_mekanik">
                                @foreach($mekanik as $m)
                                    <option value="{{$m->id_mekanik}}" {{ $m->id_mekanik == $data->id_mekanik ? 'selected' : '' }}>{{$m->nm_mekanik}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Service</label>
                            <select class="form-control" name="id_jns_service">
                            @if(isset($jenis_service) && $jenis_service->count() > 0)
                                @foreach($jenis_service as $js)
                                    <option value="{{$js->id_jns_service}}" {{ $js->id_jns_service == old ('id_jns_service', $row->id_jns_service ?? '') ? 'selected' : '' }}>
                                        {{ $js->nm_jns_service}}
                                    </option>
                                @endforeach
                                @else
                                    <option value="">Jenis Service Tidak Tersedia</option>
                                @endif
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kendaraan</label>
                            <select class="form-control" name="id_kendaraan" required>
                                <option value="">-- Pilih Kendaraan --</option>
                                @foreach($kendaraan as $k)
                                    <option value="{{ $k->id_kendaraan }}" 
                                        {{ $k->id_kendaraan == $data->id_kendaraan ? 'selected' : '' }}>
                                        {{ $k->nm_kendaraan }}
                                    </option>
                                @endforeach
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
                    @else
                        <p class="text-danger text-center">Data tidak ditemukan.</p>
                    @endif
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
