@extends('layout.template')
<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul
        class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion"
        id="accordionSidebar"
    >
        <!-- Sidebar - Brand -->
        <a
            class="sidebar-brand d-flex align-items-center justify-content-center"
            href="create"
        >
            <div class="sidebar-brand-icon rotate-n-15">
                <!-- <i class="fas fa-laugh-wink"></i> -->
            </div>
            <div class="sidebar-brand-text mx-3">
                Tiket <i class="text-warning">| Pesawat</i>
            </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a
            >
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="/form/tambah">
                <i class="fas fa-fw fa-table"></i>
                <span>Booking</span></a
            >
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="/form">
                <i class="fas fa-fw fa-table"></i>
                <span>Tables</span></a
            >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            <nav
                class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
            >
                <!-- Sidebar Toggle (Topbar) -->
                <form class="form-inline">
                    <button
                        id="sidebarToggleTop"
                        class="btn btn-link d-md-none rounded-circle mr-3"
                    >
                        <i class="fa fa-bars"></i>
                    </button>
                </form>

                <!-- Topbar Search -->
                <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                >
                    <div class="input-group">
                        <input
                            type="text"
                            class="form-control bg-light border-0 small"
                            placeholder="Search for..."
                            aria-label="Search"
                            aria-describedby="basic-addon2"
                        />
                        <div class="input-group-append">
                            <button class="btn btn-info" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="searchDropdown"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div
                            class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                            aria-labelledby="searchDropdown"
                        >
                            <form
                                class="form-inline mr-auto w-100 navbar-search"
                            >
                                <div class="input-group">
                                    <input
                                        type="text"
                                        class="form-control bg-light border-0 small"
                                        placeholder="Search for..."
                                        aria-label="Search"
                                        aria-describedby="basic-addon2"
                                    />
                                    <div class="input-group-append">
                                        <button
                                            class="btn btn-info"
                                            type="button"
                                        >
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="userDropdown"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            <span
                                class="mr-2 d-none d-lg-inline text-gray-600 small"
                                >Douglas McGee</span
                            >
                            <img
                                class="img-profile rounded-circle"
                                src="material/img/undraw_profile.svg"
                            />
                        </a>
                        <!-- Dropdown - User Information -->
                        <div
                            class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown"
                        >
                            <a class="dropdown-item" href="#">
                                <i
                                    class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"
                                ></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i
                                    class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"
                                ></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i
                                    class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"
                                ></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a
                                class="dropdown-item"
                                href="#"
                                data-toggle="modal"
                                data-target="#logoutModal"
                            >
                                <i
                                    class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                                ></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Create Data</h1>

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('form.submit') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input
                                    name="nama"
                                    type="text"
                                    class="form-control shadow-sm rounded"
                                    id="nama"
                                    aria-describedby="emailHelp"
                                    placeholder="Masukan Nama Lengkap"
                                />
                            </div>
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input
                                    name="nik"
                                    type="number"
                                    class="form-control shadow-sm rounded"
                                    id="nik"
                                    aria-describedby="nik"
                                    placeholder="Masukan Nomor NIK"
                                />
                            </div>
                            <div class="form-group">
                                <label for="nomor">No Telpon</label>
                                <input
                                    name="nomor"
                                    type="number"
                                    class="form-control shadow-sm rounded"
                                    id="nomor"
                                    aria-describedby="nomor"
                                    placeholder="Masukan Nomor Telpon"
                                />
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input
                                    name="email"
                                    type="email"
                                    class="form-control shadow-sm rounded"
                                    id="email"
                                    aria-describedby="email"
                                    placeholder="Masukan Email"
                                />
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input
                                    name="date"
                                    type="date"
                                    class="form-control shadow-sm rounded"
                                />
                            </div>
                            <div class="form-group">
                                <label for="keberangkatan">Keberangkatan</label>
                                <input
                                    nama="keberangkatan"
                                    type="text"
                                    class="form-control shadow-sm rounded"
                                    id="keberangkatan"
                                    aria-describedby="keberangkatan"
                                    placeholder="Keberangkatan"
                                />
                            </div>
                            <div class="form-group">
                                <label for="tujuan">Tujuan</label>
                                <input
                                    name="tujuan"
                                    type="text"
                                    class="form-control shadow-sm rounded"
                                    id="tujuan"
                                    aria-describedby="tujuan"
                                    placeholder="Tujuan"
                                />
                            </div>
                            <div class="form-group">
                                <label for="maskapai">Maskapai</label>
                                <select
                                    class="form-control shadow-sm rounded"
                                    id="maskapai"
                                    name="maskapai"
                                >
                                    <option>Lion Air</option>
                                    <option>Air Asia</option>
                                    <option>Citilink</option>
                                    <option>Garuda Indonesia</option>
                                    <option>Super Air Jet</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button href="{{ route('form.tampil') }}" type="submit" id="btn" class="btn btn-info">
                            Submit
                        </button>
                        <button type="submit" id="btn" class="btn btn-danger">
                            Clear
                        </button>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div
    class="modal fade"
    id="logoutModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Ready to Leave?
                </h5>
                <button
                    class="close"
                    type="button"
                    data-dismiss="modal"
                    aria-label="Close"
                >
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                Select "Logout" below if you are ready to end your current
                session.
            </div>
            <div class="modal-footer">
                <button
                    class="btn btn-secondary"
                    type="button"
                    data-dismiss="modal"
                >
                    Cancel
                </button>
                <a class="btn btn-info" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>
