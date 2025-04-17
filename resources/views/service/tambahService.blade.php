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
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h3 class="card-title">Tambah Service</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('service.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="id_kendaraan" class="form-label">Kendaraan</label>
                                        <select class="form-control" id="id_kendaraan" name="id_kendaraan" required>
                                            @foreach($kendaraan as $k)
                                                <option value="{{ $k->id_kendaraan }}">{{ $k->no_pol }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="keluhan" class="form-label">Keluhan</label>
                                        <textarea class="form-control" id="keluhan" name="keluhan" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="id_mekanik" class="form-label">Mekanik</label>
                                        <select class="form-control" id="id_mekanik" name="id_mekanik" required>
                                            @foreach($mekanik as $m)
                                                <option value="{{ $m->id_mekanik }}">{{ $m->nm_mekanik }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tgl_masuk" class="form-label">Tanggal Masuk</label>
                                        <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tgl_keluar" class="form-label">Tanggal Keluar</label>
                                        <input type="date" class="form-control" id="tgl_keluar" name="tgl_keluar">
                                    </div>
                                    <div class="mb-3">
                                        <label for="id_jns_service" class="form-label">Jenis Service</label>
                                        @if($jnsService->isEmpty())
                                            <p class="text-danger">Tidak ada jenis service tersedia</p>
                                        @else
                                        <select class="form-control" id="id_jns_service" name="id_jns_service" required>
                                            @foreach($jnsService as $js)
                                                <option value="{{ $js->id_jns_service }}">{{ $js->nama_service }}</option>
                                            @endforeach
                                        </select>
                                        @endif
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
            <!--end::Container-->
        </div>
    </main>
    <!--end::App Main-->
    <!--begin::Footer-->
    @include('layout.coba')
<!-- apa -->
        <!--end::Footer-->
    </div>
    @include('layout.footer')

