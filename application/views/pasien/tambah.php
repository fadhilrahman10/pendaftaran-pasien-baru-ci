<!-- content -->
<section class="home-section">
  <div class="text"><?=$judul;?></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <a href="<?=base_url('pasien');?>" class="btn btn-dark"><i class='bx bxs-left-arrow'></i> Kembali</a>
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
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label for="">Nomor Rekam Medis</label>
                  <input
                    type="text"
                    class="form-control"
                    readonly
                    placeholder="Nomor rekam medis"
                    name="nrm"
                    value="<?=$nrm;?>"
                  />
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="">Nama Lengkap</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Nama lengkap"
                    name="nama"
                  />
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="">Profesi</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Profesi"
                    name="profesi"
                  />
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="">Agama</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Agama"
                    name="agama"
                  />
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="">Tempat Lahir</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Tempat lahir"
                    name="tempat_lahir"
                  />
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tanggal_lahir"/>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="">No Hp</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="No Hp"
                    name="no_hp"
                  />
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="">Alamat</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Alamat"
                    name="alamat"
                  />
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <div class="mb-2">Jenis Kelamin</div>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="jenis_kelamin"
                      id="inlineRadio1"
                      value="laki-laki"
                      checked
                    />
                    <label class="form-check-label" for="inlineRadio1"
                      >Laki-laki</label
                    >
                  </div>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="jenis_kelamin"
                      id="inlineRadio2"
                      value="perempuan"
                    />
                    <label class="form-check-label" for="inlineRadio2"
                      >Perempuan</label
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-3 mb-5">
              <div class="col-12">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Daftar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
