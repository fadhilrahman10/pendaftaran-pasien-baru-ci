<section class="home-section">
  <div class="text"><?=$judul;?></div>
  <div class="container-fluid">
    <div class="row mt-4">
      <div class="col-12">
        <div class="container">
          <form action="" method="POST">
            <div class="row justify-content-center">
              <div class="col-8">
                <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-primary" role="alert">
                  <?=$this->session->flashdata('success');?>
                </div>
                <?php endif?>
                <?php if (validation_errors()): ?>
                <div class="alert alert-danger" role="alert">
                  <?=validation_errors();?>
                </div>
                <?php endif?>
                <?php if ($this->session->flashdata('gagal')): ?>
                <div class="alert alert-danger" role="alert">
                  <?=$this->session->flashdata('gagal');?>
                </div>
                <?php endif?>
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
                  <label for="">Password Lama</label>
                  <input
                    type="password"
                    class="form-control"
                    placeholder="Password"
                    name="password"
                    value="<?=$admin['password'];?>"
                  />
                </div>
                <div class="form-group">
                  <label for="">Password Baru</label>
                  <input
                    type="password"
                    class="form-control"
                    placeholder="Password Baru"
                    name="password_baru"
                  />
                </div>
              </div>
            </div>
            <div class="row mt-3 mb-5 justify-content-center">
              <div class="col-8">
                <button type="submit" name="submmit" class="btn btn-dark btn-block">Edit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
