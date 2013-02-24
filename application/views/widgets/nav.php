
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="<?= base_url(''); ?>">
        <!-- <img src="<?php echo base_url();?>/public/img/logo-small.png"/> -->
        ArtHOP
      </a>
      <div class="nav-collapse collapse">

        <ul class="nav">

        <?php if($this->tank_auth->is_logged_in()): ?>

          <?php if( $this->users->is_admin() ): ?>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              Gallery
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a data-toggle="modal" href="<?= base_url('/gallery/add'); ?>" data-target="#add_gallery">Add Gallery</a></li>
 
              <li><a href="<?= base_url('/gallery'); ?>">View Galleries</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              Art
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="<?= base_url('/art/add'); ?>">Add Art</a></li>
              <li><a href="<?= base_url('/art'); ?>">View Art</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              Artists
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="<?= base_url('/artist/add'); ?>">Add Artist</a></li>
              <li><a href="<?= base_url('/artist'); ?>">View Artists</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              Walls
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="<?= base_url('/wall/add'); ?>">Add Wall</a></li>
              <li><a href="<?= base_url('/wall'); ?>">View Walls</a></li>
            </ul>
          </li>

          <?php endif; ?>

          <?php if( $this->users->is_artist() ): ?>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              Art
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="<?= base_url('/art/add'); ?>">Add Art</a></li>
              <li><a href="<?= base_url('/art'); ?>">View Art</a></li>
            </ul>
          </li>

          <?php endif; ?>

          <?php if( $this->users->is_gallery() ): ?>

          <li><a href="<?= base_url('/gallery/edit/'); ?>">Edit Gallery</a></li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              Art
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="<?= base_url('/art/add'); ?>">Add Art</a></li>
              <li><a href="<?= base_url('/art'); ?>">View Art</a></li>
            </ul>
          </li>

          <?php endif; ?>

        </ul>

        <ul class="nav pull-right">
          <li class="navbar-text">Hey <?= $name ?></li>
          <li><a href="<?= base_url('/auth/logout'); ?>">Logout</a></li>
        </ul>

        <?php endif; ?>

      </div><!--/.nav-collapse -->
    </div>
  </div>

</div>