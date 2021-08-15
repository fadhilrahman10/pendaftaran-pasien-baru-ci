<section class="home-section">
  <div class="text"><?=$judul;?></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <a href="<?=base_url('pasien/tambahPasien');?>" class="btn btn-primary"
          ><i class="bx bx-plus font-weight-bold pr-2"></i>Tambah Pasien
          Baru</a
        >
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-4">
        <form action="" method="POST">
          <div class="input-group mb-3">
            <input type="month" class="form-control" name="bulan" value="<?=set_value('bulan', date('Y-m'));?>">
            <div class="input-group-append">
              <button class="btn btn-dark" type="submit" id="button-addon2">Button</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-12">
        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-primary" role="alert">
          <?=$this->session->flashdata('success');?>
        </div>
        <?php endif?>
        <?php if ($this->session->flashdata('gagal')): ?>
        <div class="alert alert-danger" role="alert">
          <?=$this->session->flashdata('gagal');?>
        </div>
        <?php endif?>
        <table class="table table-hover display" id="tabel">
          <thead class="thead-dark">
            <tr>
              <th scope="col">NRM</th>
              <th scope="col">Nama</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Profesi</th>
              <th scope="col">Tanggal Registrasi</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($pasien as $data): ?>
            <tr>
              <th scope="row"><?=$data['nrm'];?></th>
              <td><?=$data['nama'];?></td>
              <td><?=$data['jenis_kelamin'];?></td>
              <td><?=$data['profesi'];?></td>
              <td><?=date('d F Y', strtotime($data['tanggal_dibuat']));?></td>
              <td>
                <a href="<?=base_url('pasien/printPasien');?>/<?=$data['nrm'];?>" target="_blank" class="badge badge-info"><i class='bx bxs-printer'></i></a>
                <a href="<?=base_url('pasien/editPasien');?>/<?=$data['nrm'];?>" class="badge badge-success"><i class='bx bx-edit' ></i></a>
                <a href="<?=base_url('pasien/hapusPasien');?>/<?=$data['nrm'];?>" class="badge badge-danger" onclick="return confirm('anda yakin?');"><i class='bx bx-trash' ></i></a>
              </td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
