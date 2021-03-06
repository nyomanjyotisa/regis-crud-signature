<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="/">REGIS CRUD</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="/">CRUD</a>
    </div>
    <ul class="sidebar-menu">
        <li class="">
            <a class="nav-link" href="/">
                <i class="fas fa-file"></i>
                <span>Registration List</span>
            </a>
        </li>
        <li class="">
            <a href="/new" class="nav-link">
                <i class="fas fa-plus"></i>
                <span>New Registration</span>
            </a>
        </li>
        @if(auth()->user()->is_super_admin == 1)
        <li class="">
            <a href="/admin" class="nav-link">
                <i class="fas fa-user"></i>
                <span>Admins</span>
            </a>
        </li>
        @endif
</aside>
