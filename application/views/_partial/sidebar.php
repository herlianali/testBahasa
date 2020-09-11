<div class="sidebar" data-color="danger" data-background-color="white">
  <div class="logo">
    <a href="<?php echo site_url('dashboard') ?>" class="simple-text logo-mini">
      <img src="<?php echo base_url('asset/images/index.jpeg') ?>" style="max-width: 80%">
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item <?php echo $this->uri->segment(1) == 'dashboard' ? 'active': '' ?> ">
        <a class="nav-link" href="<?php echo site_url('dashboard') ?>">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <?php 
      if (!empty($_SESSION['status'] == "berbayar")) {

      ?>
      <li class="nav-item <?php echo $this->uri->segment(1) == 'pembelajaran' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('pembelajaran') ?>">
          <i class="material-icons">menu_book</i>
          <p>Learning</p>
        </a>
      </li>
      <?php
        }else{
            
        }
      ?>
      <li class="nav-item <?php echo $this->uri->segment(1) == 'soal' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('soal') ?>">
          <i class="material-icons">library_books</i>
          <p>Question Test</p>
        </a>
      </li>
    </ul>
  </div>
</div>