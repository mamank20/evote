<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Hapus Users</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Menu</a></div>
        <div class="breadcrumb-item"><a href="#">Hapus Users</a></div>
      </div>
    </div>

    <div class="section-body">
      <div class="card">

        <div class="card-body">
          <form action="" method="post">
            <h5 class="card-title">Hapus Users dengan Username : <?= base_url('#'); ?></h5>
            <button type="submit" name="hapus" class="btn btn-danger mt-3">Hapus</button>
            <a href="<?= base_url('admin/users'); ?>" class="btn btn-warning mt-3">Kembali</a>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>