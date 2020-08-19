<div class="sidebar" data-color="danger" data-background-color="white">
  <!--
  Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

  Tip 2: you can also add an image using data-image tag
-->
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
      <li class="nav-item <?php echo $this->uri->segment(1) == 'pembelajaran' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('pembelajaran') ?>">
          <i class="material-icons">menu_book</i>
          <p>Learning</p>
        </a>
      </li>
      <li class="nav-item <?php echo $this->uri->segment(1) == 'soal' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('soal') ?>">
          <i class="material-icons">library_books</i>
          <p>Question Test</p>
        </a>
      </li>
    </ul>
  </div>
</div>