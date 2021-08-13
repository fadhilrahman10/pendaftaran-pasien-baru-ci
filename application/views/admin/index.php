<section class="home-section">
  <div class="text">Dashboard</div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <a href="<?=base_url('admin/tambahAdmin');?>" class="btn btn-primary"><i class="bx bx-plus font-weight-bold pr-2"></i>Tambah Admin</a>
      </div>
    </div>
    <div class="row mt-4 ml-3">
      <div class="col-8">
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
        <table class="table table-hover" id="tabel">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <?php if ($userAktif['status'] == 'master'): ?>
              <th scope="col">Password</th>
              <th scope="col">Aksi</th>
              <?php endif?>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($admin as $data): ?>
            <tr>
              <td><?=$data['nama'];?></td>
              <td><?=$data['email'];?></td>
              <?php if ($userAktif['status'] == 'master'): ?>
              <td><?=$data['password'];?></td>
              <td>
                <a href="<?=base_url('admin/editAdmin');?>/<?=$data['no_admin'];?>" class="badge badge-info">Edit</a>
                <a href="<?=base_url('admin/hapusAdmin');?>/<?=$data['no_admin'];?>" class="badge badge-danger" onclick="return confirm('anda yakin?');">Hapus</a>
              </td>
              <?php endif?>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
