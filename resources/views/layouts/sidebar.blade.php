 <aside class="main-sidebar">
     <!-- sidebar: style can be found in sidebar.less -->
     <section class="sidebar">
         <!-- Sidebar user panel -->
         <div class="user-panel">
             <div class="pull-left image">
                 <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
             </div>
             <div class="pull-left info">
                 <p>{{ Auth::user()->name }}</p>
                 <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
             </div>
         </div>

         <!-- /.search form -->
         <!-- sidebar menu: : style can be found in sidebar.less -->
         <ul class="sidebar-menu" data-widget="tree">
             <li>
                 <a href="pages/widgets.html">
                     <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                     <span class="pull-right-container">
                     </span>
                 </a>
             </li>

             <li class="header">Master</li>

             <li>
                 <a href="pages/widgets.html">
                     <i class="fa fa-dashboard"></i> <span>Kategori</span>
                     <span class="pull-right-container">
                     </span>
                 </a>
             </li>
             <li>
                 <a href="pages/widgets.html">
                     <i class="fa fa-dashboard"></i> <span>Produk</span>
                     <span class="pull-right-container">
                     </span>
                 </a>
             </li>
             <li>
                 <a href="pages/widgets.html">
                     <i class="fa fa-dashboard"></i> <span>Member</span>
                     <span class="pull-right-container">
                     </span>
                 </a>
             </li>
             <li>
                 <a href="pages/widgets.html">
                     <i class="fa fa-dashboard"></i> <span>Supplier</span>
                     <span class="pull-right-container">
                     </span>
                 </a>
             </li>

             <li class="header">Transaksi</li>

             <li>
                 <a href="pages/widgets.html">
                     <i class="fa fa-dashboard"></i> <span>Pengeluaran</span>
                     <span class="pull-right-container">
                     </span>
                 </a>
             </li>
             <li>
                 <a href="pages/widgets.html">
                     <i class="fa fa-dashboard"></i> <span>Pembelian</span>
                     <span class="pull-right-container">
                     </span>
                 </a>
             </li>
             <li>
                 <a href="pages/widgets.html">
                     <i class="fa fa-dashboard"></i> <span>Penjualan</span>
                     <span class="pull-right-container">
                     </span>
                 </a>
             </li>
             <li>
                 <a href="pages/widgets.html">
                     <i class="fa fa-dashboard"></i> <span>Transaksi Lama</span>
                     <span class="pull-right-container">
                     </span>
                 </a>
             </li>
             <li>
                 <a href="pages/widgets.html">
                     <i class="fa fa-dashboard"></i> <span>Transaksi Baru</span>
                     <span class="pull-right-container">
                     </span>
                 </a>
             </li>

             <li class="header">Repport</li>
             <li>
                 <a href="pages/widgets.html">
                     <i class="fa fa-dashboard"></i> <span>Laporan</span>
                     <span class="pull-right-container">
                     </span>
                 </a>
             </li>

             <li class="header">System</li>
             <li>
                 <a href="pages/widgets.html">
                     <i class="fa fa-dashboard"></i> <span>User</span>
                     <span class="pull-right-container">
                     </span>
                 </a>
             </li>
             <li>
                 <a href="pages/widgets.html">
                     <i class="fa fa-dashboard"></i> <span>Pengaturan</span>
                     <span class="pull-right-container">
                     </span>
                 </a>
             </li>


         </ul>
     </section>
     <!-- /.sidebar -->
 </aside>
