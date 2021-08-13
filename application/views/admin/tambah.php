<section class="home-section">
  <div class="text">Dashboard</div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <a href="<?=base_url('admin');?>" class="btn btn-dark">Kembali</a>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-12">
        <div class="container">
          <?php if (validation_errors()): ?>
          <div class="alert alert-danger" role="alert">
            <?=validation_errors();?>
          </div>
          <?php endif?>
          <form action="" method="POST">
            <div class="row justify-content-center">
              <div class="col-8">
                <div class="form-group">
                  <label for="">Nama Lengkap</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Nama lengkap"
                    name="nama"
                  />
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Email"
                    name="email"
                  />
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input
                    type="password"
                    class="form-control"
                    placeholder="Password"
                    name="password"
                  />
                </div>
                <div class="form-group">
                  <label for="">Confirm Password</label>
                  <input
                    type="password"
                    class="form-control"
                    placeholder="Confirm Password"
                    name="cpw"
                  />
                </div>
              </div>
            </div>
            <div class="row mt-3 mb-5 justify-content-center">
              <div class="col-8">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Tambah</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
