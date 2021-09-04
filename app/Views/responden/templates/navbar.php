  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light py-4" data-aos="fade-down" data-aos-duration="2000">

      <div class="container">
          <a class="navbar-brand purple-text" href="#">
              <img src="<?= base_url(); ?>/img/unj.png" alt="" class="d-inline-block align-text-top">
              Instrumen Kepuasan SPMI
          </a>

          <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse order-3" id="navbarCollapse">
              <!-- Left navbar links -->
              <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                      <a class="nav-link active" href="<?= base_url('responden'); ?>">Home</a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">Isi Survei</a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">Riwayat Survei</a>
                  </li>

                  <li class="nav-item">
                      <!-- Button logout modal -->
                      <a class="nav-link" href="#" role="button" data-bs-toggle="modal" data-bs-target="#logoutModal">
                          Keluar
                          <i class="fas fa-sign-out-alt mx-2"></i>
                      </a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
  <!-- /.navbar -->

  <!-- Logout Modal -->
  <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="mx-auto"> Yakin ingin keluar?</h5>
              </div>

              <div class="modal-footer mx-auto">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                  <a href="<?= base_url('logout'); ?>">
                      <button type="button" class="btn btn-primary">Keluar</button>
                  </a>
              </div>
          </div>
      </div>
  </div>