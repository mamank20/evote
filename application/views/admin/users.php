<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Akun</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Modules</a></div>
        <div class="breadcrumb-item">DataTables</div>
      </div>
    </div>

    <div class="section-body">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="col-md-12">
                <h4 style="text-align: center !important;">Data Akun Pengguna</h4>
                <a href="<?= base_url('admin/tambah_user'); ?>" class="btn btn-primary">Tambah User</a>
                <a href="<?= base_url('admin/export_user'); ?>" target="_blank" class="btn btn-warning float-right">Export to Pdf</a>
                <a href="<?= base_url('admin/reset_status'); ?>" target="_blank" class="btn btn-warning float-right">Reset Status</a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-2">
                  <thead>
                    <tr>
                      <th class="text-center">
                        #
                      </th>
                      <th>Nama</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Program Studi</th>
                      <th>Status Memilih</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td class="text-center"></td>
                      <td>Akun Demo</td>
                      <td>akundemo</td>
                      <td>akun demo</td>
                      <td>akun demo</td>
                      <td>
                        <div class="badge badge-danger">Belum Memilih</div>
                      </td>
                      <td>
                        <a href="<?= base_url('admin/edit_users'); ?>" class="btn btn-primary">Edit</a>
                        <a href="<?= base_url('admin/hapus_users'); ?>" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>