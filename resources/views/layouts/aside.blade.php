<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
        <img src="{{asset('adminlte/voting.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">E-VOTING V.02</span>
    </a>
<?php
$kandidat = DB::select('SELECT*FROM kandidat');
$pemilih = DB::select('SELECT*FROM pemilih');
?>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            @if(\Auth::user()->role_id == 1)
            
            <div class="image">
                <img src="{{url('uploads/',\Auth::user()->photo)}}" style="height: 40px;width: 40px" class="img-circle elevation-2" alt="User Image">
            </div>
            
            @else
                <div class="image">
                <img src="{{url('https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg')}}" style="height: 40px;width: 40px" class="img-circle elevation-2" alt="User Image">
            </div>
            @endif
            <div class="info">
                <a href="#" class="d-block">{{ \Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="{{url('dashboard')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
               @if (\Auth::user()->role_id == 1)
               <li class="nav-item">
                <a href="{{url('candidat')}}" class="nav-link">
                    <i class="nav-icon fas fa-address-book"></i>
                    <p>Data Kandidat <span class="right badge badge-primary"> {{ count($kandidat) }}</span></p>
                </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('voter')}}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Data Pemilih <span class="right badge badge-warning"> {{ count($pemilih) }}</span></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('hitung_cepat')}}" class="nav-link">
                        <i class="nav-icon fas fa-vote-yea"></i>
                        <p>Quic Count <span class="right badge badge-danger"> QC</span></p>
                    </a>
                </li>
                <li class="nav-header">OTHER</li>
                <li class="nav-item">
                    <a href="{{url('users')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>User <span class="right badge badge-success"> New</span></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('keluar')}}" class="nav-link">
                        <i class="nav-icon fas fa-arrow-alt-circle-right"></i>
                        <p>Keluar</p>
                    </a>
                </li>
               @endif

               @if (\Auth::user()->role_id == 2)
               <li class="nav-item">
                <a href="{{url('candidat')}}" class="nav-link">
                    <i class="nav-icon fas fa-address-book"></i>
                    <p>Data Kandidat <span class="right badge badge-primary"> {{ count($kandidat) }}</span></p>
                </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('voter')}}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Data Pemilih <span class="right badge badge-warning"> {{ count($pemilih) }}</span></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('hitung_cepat')}}" class="nav-link">
                        <i class="nav-icon fas fa-vote-yea"></i>
                        <p>Quic Count <span class="right badge badge-danger"> QC</span></p>
                    </a>
                </li>
                <li class="nav-header">OTHER</li>
                <li class="nav-item">
                    <a href="{{url('keluar')}}" class="nav-link">
                        <i class="nav-icon fas fa-arrow-alt-circle-right"></i>
                        <p>Keluar</p>
                    </a>
                </li>
               @endif
               
                @if (\Auth::user()->role_id == 3)
                <li class="nav-item">
                    <a href="{{url('hitung_cepat')}}" class="nav-link">
                        <i class="nav-icon fas fa-vote-yea"></i>
                        <p>Quic Count <span class="right badge badge-danger"> QC</span></p>
                    </a>
                </li>
                <li class="nav-header">OTHER</li>
                <li class="nav-item">
                    <a href="{{url('keluar')}}" class="nav-link">
                        <i class="nav-icon fas fa-arrow-alt-circle-right"></i>
                        <p>Keluar</p>
                    </a>
                </li>
               @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>