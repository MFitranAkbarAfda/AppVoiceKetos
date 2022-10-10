<div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
            <!-- User Profile-->
            <li class="sidebar-item"> 
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
                    <i class="me-3 far fa-clock fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span>
                </a>
            </li>
            @if(auth()->user()->role == "admin")
                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/pendaftaran" aria-expanded="false">
                        <i class="me-3 fa fa-users" aria-hidden="true"></i>
                        <span class="hide-menu">Data Pendaftaran</span>
                    </a>
                </li>
            @endif

            <li class="sidebar-item"> 
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/candidate" aria-expanded="false">
                    <i class="me-3 fa fa-table" aria-hidden="true"></i><span class="hide-menu">Data Candidate</span>
                </a>
            </li>

            <li class="sidebar-item"> 
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
                    <i class="me-3 fa fa-table" aria-hidden="true"></i>
                        <span class="hide-menu">Data Kategori</span>
                </a>
            </li>
            <li class="sidebar-item"> 
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
                    <i class="me-3 fa fa-table" aria-hidden="true"></i>
                        <span class="hide-menu">Data Vote</span>
                </a>
            </li>

            <li class="sidebar-item"> 
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
                    <i class="me-3 fa fa-table" aria-hidden="true"></i>
                        <span class="hide-menu">Data Hasil</span>
                </a>
            </li>

            <li class="sidebar-item"> 
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('logout') }}" aria-expanded="false" onclick="event.preventDefault();
                                                                                                                     document.getElementById('logout-form').submit();">
                    <i class="me-3 fa fa-table" aria-hidden="true"></i>
                        <span class="hide-menu">Logout</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                    @csrf
                </form>
            </li>

        </ul>

    </nav>
    <!-- End Sidebar navigation -->
</div>