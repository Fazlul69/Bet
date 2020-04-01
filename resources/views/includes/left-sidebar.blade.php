<!-- Brand Logo -->
<a href="{{ url('/') }}" class="brand-link">
    <img src="{{ asset('images/site-assets/worlb bet@2x.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">world bet 365</span>
</a>

<!-- Sidebar -->
<div class="sidebar nano">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{-- {{ Auth::user()->name }} --}}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview {{ isActive(['/']) }}">
                <a href="#" class="nav-link {{ isActive(['/']) }}">
                    <i class="nav-icon fas fa-chart-line"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            {{-- @if(Auth::user()->hasRole("Admin")) --}}
            <li class="nav-item has-treeview {{ isActive(['/tournaments']) }}">
                <a href="#" class="nav-link {{ isActive(['/tournaments']) }}">
                    <i class="nav-icon fas fa-trophy"></i>
                    <p> Tournament<i class="fas fa-angle-left right"></i> </p>
                </a>

                <ul class="nav nav-treeview" >
                    <li class="nav-item has-treeview {{ isActive('/tournaments') }}">
                        <a href="{{ route('tournaments.index') }}" class="nav-link {{ isActive('/tournaments') }}">
                            <i class="fas fa-list"></i>
                            <p>All Tournaments</p>
                        </a>
                    </li>
                    {{-- <li class="nav-item has-treeview {{ isActive('/add') }}">
                        <a href="#" class="nav-link {{ isActive('/add') }}">
                            <i class="fas fa-edit"></i>
                            <p>Edit Tournament<i class="fas fa-angle-left right"></i> </p>
                        </a>
                    </li> --}}
                </ul>
            </li>

            <li class="nav-item has-treeview {{ isActive(['/match']) }}">
                <a href="#" class="nav-link {{ isActive(['/match']) }}">
                    <i class="nav-icon fas fa-futbol"></i>
                    <p>Match<i class="fas fa-angle-left right"></i> </p>
                </a>
                    
                    <ul class="nav nav-treeview" >
                        <li class="nav-item has-treeview {{ isActive('/match') }}">
                        <a href="{{ route('match.index') }}" class="nav-link {{ isActive('/match') }}">
                            <i class="fas fa-list"></i>
                            <p>Matches<i class="fas fa-angle-left right"></i> </p>
                        </a>
                    </li>
                        <li class="nav-item has-treeview {{ isActive('/match/add') }}">
                            <a href="{{ route('match.create') }}" class="nav-link {{ isActive('/match/add') }}">
                                <i class="fas fa-plus"></i>
                                <p>New Match<i class="fas fa-angle-left right"></i> </p>
                            </a>
                        </li>
                    </ul>
                </li>

                
                {{-- @endif --}}

                <li class="nav-item has-treeview {{ isActive(['/bet*']) }}">
                <a href="#" class="nav-link {{ isActive(['/bet*']) }}">
                    <i class="nav-icon fas fa-futbol"></i>
                    <p>Bet<i class="fas fa-angle-left right"></i> </p>
                </a>
                    
                    <ul class="nav nav-treeview" >
                        <li class="nav-item has-treeview {{ isActive('/bet') }}">
                        <a href="{{ route('bet.index') }}" class="nav-link {{ isActive('/bet') }}">
                            <i class="fas fa-list"></i>
                            <p>All Bets<i class="fas fa-angle-left right"></i> </p>
                        </a>
                    </li>
                        {{-- <li class="nav-item has-treeview {{ isActive('/match/add') }}">
                            <a href="{{ route('match.create') }}" class="nav-link {{ isActive('/match/add') }}">
                                <i class="fas fa-plus"></i>
                                <p>New Match<i class="fas fa-angle-left right"></i> </p>
                            </a>
                        </li> --}}
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
