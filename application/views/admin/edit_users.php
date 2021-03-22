<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Edit User</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Menu</a></div>
        <div class="breadcrumb-item"><a href="#">Edit User</a></div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Form Edit User</h4>
            </div>

            <div class="card-body">

              <form action="" method="post">
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" class="form-control" name="nama" value="#">
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username" value="#">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" class="form-control" name="password_baru" value="#">
                </div>
                <div class="form-group">
                  <label>Program Studi</label>
                  <input type="text" class="form-control" name="prodi_baru" value="#">
                </div>
                <div class="card-footer text-right">
                  <button class="btn btn-primary mr-1" type="submit" name="submit">Submit</button>
                  <a href="<?= base_url('admin/users'); ?>" class="btn btn-warning">Kembali</a>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>