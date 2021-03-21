<div id="app">
    <section class="section">
        <div class="container mt-2">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="<?= base_url(); ?>assets/img/Logo_IAIN.png" alt="logo" width="100">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Login E-Vote</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" action="cek_login.php" class="needs-validation" novalidate="">
                                <div class="form-group">
                                    <label for="email">Username</label>
                                    <input id="email" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        Please fill in your email
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4" name="submit">
                                        Login
                                    </button>
                                </div>
                            </form>
                            <div class="simple-footer">
                                Copyright &copy; PTID IAIN Ternate 2021
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>