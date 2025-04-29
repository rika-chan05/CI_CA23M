<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Data Dosen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Formulir Data Dosen</li>
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
          <h3 class="card-title">Formulir Data Dosen</h3>

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
            <a href="<?= base_url('dosen/tambah'); ?>" class="btn btn-primary mb-3">Tambah Data</a>
            <?php if (!empty($dosen)): ?>
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>NIDN</th>
                    <th>Nama Dosen</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>Telp</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
              <tbody>
                <?php foreach ($dosen as $d): ?>
                  <tr>
                    <td><?= $d['nidn'];?></td>
                    <td><?= $d['nama'];?></td>
                    <td><?= $d['jenis_kelamin'];?></td>
                    <td><?= $d['email'];?></td>
                    <td><?= $d['telp'];?></td>
                    <td>
                      <a href="<?= base_url('dosen/edit/'.$d['iddosen']); ?>" class="btn btn-sm btn-info">Edit</a>
                      <a href="<?= base_url('dosen/hapus/'.$d['iddosen']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin menghapus data dosen ini?')">Hapus</a>
                    </td>
                      <?php endforeach;?>
                </tbody>
                </table>
                <?php else: ?>
                  <p> Tidak Ada Data Dosen yang Tersedia</p>
                  <?php endif; ?>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>