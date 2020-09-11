<div class="sidebar" data-color="danger" data-background-color="white">
  <div class="logo">
    <a href="<?php echo site_url('dashboard') ?>" class="simple-text logo-mini">
      <img src="<?php echo base_url('asset/images/index.jpeg') ?>" style="max-width: 80%">
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item <?php echo $this->uri->segment(2) == 'dashboard' ? 'active': '' ?> ">
        <a class="nav-link" href="<?php echo site_url('admin/dashboard') ?>">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item <?php echo $this->uri->segment(2) == 'cLearn' || $this->uri->segment(2) == 'eLearn' ? 'active': '' ?>">
        <a class="nav-link" data-toggle="collapse" href="#manageLearn" aria-expanded="false">
          <i class="material-icons">menu_book</i>
          <p>
            Manage learn
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse <?php echo $this->uri->segment(2) == 'learn' || $this->uri->segment(2) == 'mentor' ? 'show': '' ?>" id="manageLearn">
          <ul class="nav">
            <li class="nav-item <?php echo $this->uri->segment(2) == 'learn' ? 'active': '' ?>">
              <a href="<?php echo base_url('admin/learn') ?>" class="nav-link">
                <span class="sidebar-mini">ML</span>
                <span class="sidebar-normal">Manage Learn</span>
              </a>
            </li>
            <li class="nav-item <?php echo $this->uri->segment(2) == 'mentor' ? 'active': '' ?>">
              <a href="<?php echo base_url('admin/mentor') ?>" class="nav-link">
                <span class="sidebar-mini">MM</span>
                <span class="sidebar-normal">Manage Mentor</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item <?php echo $this->uri->segment(2) == 'cTest' || $this->uri->segment(2) == 'eTest' ? 'active': '' ?>">
        <a class="nav-link" data-toggle="collapse" href="#manageTest">
          <i class="material-icons">library_books</i>
          <p>Manage Test
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse <?php echo $this->uri->segment(2) == 'cTest' || $this->uri->segment(2) == 'eTest' ? 'show': '' ?>" id="manageTest">
          <ul class="nav">
            <li class="nav-item <?php echo $this->uri->segment(2) == 'cTest' ? 'active': '' ?>">
              <a href="<?php echo base_url('admin/cTest') ?>" class="nav-link ">
                <span class="sidebar-mini">CT</span>
                <span class="sidebar-normal">Create Test</span>
              </a>
            </li>
            <li class="nav-item <?php echo $this->uri->segment(2) == 'eTest' ? 'active': '' ?>">
              <a href="<?php echo base_url('admin/eTest') ?>" class="nav-link">
                <span class="sidebar-mini">ET</span>
                <span class="sidebar-normal">Edit Test</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item <?php echo $this->uri->segment(2) == 'listSetPembayaran' ? 'active': '' ?>">
        <a class="nav-link" data-toggle="collapse" href="#setting">
          <i class="material-icons">settings</i>
          <p>Setting
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse <?php echo $this->uri->segment(2) == 'listSetPembayaran' ? 'show': '' ?>" id="setting">
          <ul class="nav">
            <li class="nav-item <?php echo $this->uri->segment(2) == 'listSetPembayaran' ? 'active': '' ?>">
              <a href="<?php echo base_url('admin/listSetPembayaran')?>" class="nav-link">
                <span class="sidebar-mini">LB</span>
                <span class="sidebar-normal">List Bayar</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>