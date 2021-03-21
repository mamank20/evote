<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Tambah Kandidat</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Menu</a></div>
        <div class="breadcrumb-item"><a href="#">Tambah Kandidat Kandidat</a></div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Form Tambah User</h4>
            </div>

            <div class="card-body">

              <form action="" method="post" enctype="multipart/form-data">
                <div class="section-title mt-1">Nomor Urut</div>
                <div class="form-group">
                  <input type="number" class="form-control" name="no_urut" placeholder="Ex : 1">
                </div>
                <div class="section-title mt-1">Nama Calon Ketua dan Wakil Ketua</div>
                <div class="form-group">
                  <input type="text" class="form-control" name="nama" placeholder="Ex : Kobul - Culim">
                </div>
                <div class="section-title">Visi dan Misi</div>
                <div class="form-group">
                  <textarea class="form-control" name="visi-misi" placeholder="Ex : Mengapa harus pilih saya kalau yang lain lebih bagus daripada saya"></textarea>
                </div>
                <div class="section-title">Foto</div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile" name="gambar">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <div class="card-footer text-right">
                  <button class="btn btn-primary mr-1" type="submit" name="submit">Submit</button>
                  <a href="<?= base_url('admin/kandidat'); ?>" class="btn btn-warning">Kembali</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>