<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('personal.main')}}" class="brand-link d-flex align-items-center">
        <span class="brand-image img-circle elevation-3" style="opacity: .8"><i class="nav-icon far fa-user"></i></span>
        <span class="brand-text font-weight-light">Personal Account</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('personal.main')}}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Main
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('personal.liked')}}" class="nav-link">
                    <i class="nav-icon far fa-heart"></i>
                    <p>
                        Liked posts
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('personal.comments')}}" class="nav-link">
                    <i class="nav-icon far fa-comment"></i>
                    <p>
                        Commentaries
                    </p>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>