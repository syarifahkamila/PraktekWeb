@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Mahasiswa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../admin">Beranda</a></li>
                            <li class="breadcrumb-item active">Detail Mahasiswa</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Mahasiswa</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nidn">NIM:</label>
                        <p>{{ $mahasiswa->nim }}</p>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <p>{{ $mahasiswa->nama }}</p>
                    </div>
                    <div class="form-group">
                        <label for="tmp_lahir">Tempat Lahir:</label>
                        <p>{{ $mahasiswa->tmp_lahir }}</p>
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir:</label>
                        <p>{{ $mahasiswa->tgl_lahir }}</p>
                    </div>
                    <div class="form-group">
                        <label for="ipk">IPK:</label>
                        <p>{{ $mahasiswa->ipk }}</p>
                    </div>
                    <div class="form-group">
                        <label for="prodi_id">ID Prodi:</label>
                        <p>{{ $mahasiswa->prodi_id }}</p>
                    </div>
                    <div class="form-group">
                        <label for="rombel_id">ID Rombel:</label>
                        <p>{{ $mahasiswa->rombel_id }}</p>
                    </div>
                    <a href="{{ route('mahasiswas.index') }}" class="btn btn-primary">Kembali</a>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.footer')