<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Dosen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit</li>
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
          <h3 class="card-title">Edit</h3>

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
        <form action="<?= base_url('dosen/update/'.$dosen['iddosen']);?>" method="POST">
            <div class="box-body">
                <div class="form-group">
                    <label for="nidn">NIDN</label>
                    <input type="text" class="form-control" name="nidn" value="<?= $dosen['nidn'];?>" id="nidn" placeholder="NIDN" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Dosen</label>
                    <input type="text" class="form-control" name="nama" value="<?= $dosen['nama'];?>" id="nama" placeholder="Nama Dosen" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat" required><?= $dosen['alamat'];?></textarea>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin">
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" value="<?= $dosen['email'];?>" id="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="telp">Telephone</label>
                    <input type="telp" class="form-control" name="telp" id="telp" value="<?= $dosen['telp'];?>" placeholder="Number Phone" required>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?= base_url('dosen');?>" class="btn btn-secondary">Batal</a>
            </div>
        </form>
        </div>
        <div class="card-footer">
        </div>
    </div>
</section>
</div>