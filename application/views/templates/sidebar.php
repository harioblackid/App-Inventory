        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion " id="accordionSidebar">

            <!-- Sidebar - Brand -->

            <!-- LOOPING MENU -->
            <div class="sidebar-heading m-0 p-0 text-white bg-images">
                <div class="user-info mt-4 mb-4 mx-4">
                    <h6 class="p-0"><?= (user()->role_id == 1 ? "Administrator" : "User" ); ?> </h6>
                    <?= company()->name; ?>
                </div>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider bg-dark">
            

            <!-- LOOPING MENU -->
            <div class="sidebar-heading text-dark">
                Menu
            </div>

            <li class="nav-item text-dark">
                <a class="nav-link pb-0" href="<?=base_url('admin'); ?>">
                    <i class="fa fa-home text-dark"></i>
                    <span class="text-dark">Dashboard</span></a>
            </li>

            <?php if($this->session->userdata('role_id') == 1) : ?>
            <li class="nav-item text-dark">
                <a class="nav-link pb-0" href="<?=base_url('user/list'); ?>">
                    <i class="fa fa-users text-dark"></i>
                    <span class="text-dark">User Management</span></a>
            </li>

            <?php endif; ?>

            <li class="nav-item text-dark">
                <a class="nav-link pb-0" href="<?= base_url('arsip'); ?>">
                    <i class="fa fa-clipboard text-dark"></i>
                    <span class="text-dark">Arsip</span></a>
            </li>

            <li class="nav-item text-dark">
                <a class="nav-link pb-0" href="<?= base_url('barang'); ?>">
                    <i class="fa fa-th-list text-dark"></i>
                    <span class="text-dark">Stok Barang</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link pb-0 text-dark" href="<?= base_url('surat_masuk'); ?>">
                    <i class="fa fa-envelope text-dark"></i>
                    <span class="text-dark">Surat Masuk</span></a>
            </li>

            <li class="nav-item text-dark">
                <a class="nav-link pb-0" href="<?= base_url('surat_keluar'); ?>">
                    <i class="fa fa-inbox text-dark"></i>
                    <span class="text-dark">Surat Keluar</span></a>
            </li>

            <hr class="sidebar-divider bg-dark mt-3">               
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0 bg-danger" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End  of Sidebar --> 