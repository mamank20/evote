<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Kelola Kandidat</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Menu</a></div>
        <div class="breadcrumb-item"><a href="#">Kelola Kandidat</a></div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="col-md-12">
                <h4 style="text-align: center !important;">Data Kandidat</h4>
                <a href="<?= base_url('admin/tambah_kandidat'); ?>" class="btn btn-primary">Tambah Kandidat</a>
              </div>
            </div>

            <div class="card-body">
              <div class="row">
                <div class="col-md-4">
                  <div class="card" style="width: 18rem">
                    <img class="card-img-top" src="<?= base_url(); ?>assets/img/paslon.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">Nama Kandidat</h5>
                      <div class="text-center">
                        <a href="<?= base_url('admin/hapus_kandidat'); ?>" class="btn btn-danger">Hapus</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>