<section class="home-section">
  <div class="text"><?=$judul;?></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <a href="<?=base_url('admin');?>" class="btn btn-dark"><i class='bx bxs-left-arrow'></i> Kembali</a>
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
                    value="<?=$admin['nama'];?>"
                  />
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Email"
                    name="email"
                    value="<?=$admin['email'];?>"
                    readonly
                  />
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Password"
                    name="password"
                    value="<?=$admin['password'];?>"
                  />
                </div>
              </div>
            </div>
            <div class="row mt-3 mb-5 justify-content-center">
              <div class="col-8">
                <button class="btn btn-warning btn-block">Edit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
