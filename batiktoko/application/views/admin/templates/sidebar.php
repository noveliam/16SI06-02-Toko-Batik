    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>admin/dashboard">
                <i class="nav-icon icon-speedometer"></i> Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>admin/customers">
                <i class="nav-icon icon-user"></i> Customer</a>
            </li>
            
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle">
                <i class="nav-icon icon-puzzle"></i> Detail Product</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/ages">
                    <i class="nav-icon icon-puzzle"></i> Ages
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/categories">
                    <i class="nav-icon icon-puzzle"></i> Kategori
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/materials">
                    <i class="nav-icon icon-puzzle"></i> Motif Batik
                  </a>
                </li>
                
                </li>
              </ul>
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle">
                <i class="nav-icon icon-layers"></i> Pesan Custom</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/advertisements">
                    <i class="nav-icon icon-layers"></i> Data Custom</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/advertisements/report">
                    <i class="nav-icon icon-book-open"></i> Report Custom</a>
                </li>
              </ul>
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle">
                <i class="nav-icon icon-layers"></i> Transaksi</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/advertisements">
                    <i class="nav-icon icon-layers"></i> Data Order</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>admin/advertisements/report">
                    <i class="nav-icon icon-book-open"></i> Report Order</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>admin/logout">
                <i class="nav-icon icon-logout"></i> Logout
              </a>
            </li>
          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>