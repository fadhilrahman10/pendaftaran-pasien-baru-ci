<!-- Sidebar -->
<div class="sidebar">
  <div class="logo-details">
    <i class="bx bxl-c-plus-plus icon"></i>
    <div class="logo_name">Clinic</div>
    <i class="bx bx-menu" id="btn"></i>
  </div>
  <ul class="nav-list">
    <li>
      <i class="bx bx-search"></i>
      <input type="text" placeholder="Search..." />
      <span class="tooltip">Search</span>
    </li>
    <li>
      <a href="<?=base_url('pasien');?>">
        <i class="bx bx-grid-alt"></i>
        <span class="links_name">Pasien</span>
      </a>
      <span class="tooltip">Pasien</span>
    </li>
    <li>
      <a href="<?=base_url('admin');?>">
        <i class="bx bx-user"></i>
        <span class="links_name">Admin</span>
      </a>
      <span class="tooltip">Admin</span>
    </li>
    <li>
      <a href="<?=base_url('settings');?>">
        <i class="bx bx-cog"></i>
        <span class="links_name">Setting</span>
      </a>
      <span class="tooltip">Setting</span>
    </li>
    <li class="profile">
      <div class="profile-details">
        <img src="<?=base_url();?>assets/img/favicon.svg" alt="profileImg" />
        <div class="name_job">
          <?php $user = $this->session->userdata('user');?>
          <div class="name"><?=$user['nama'];?></div>
          <div class="job"><?=$user['email'];?></div>
        </div>
      </div>
      <a href="<?=base_url('auth/keluar');?>"><i class="bx bx-log-out" id="log_out"></i></a>
    </li>
  </ul>
</div>
<!-- end -->
