<div class="column is-2 is-aside">
    <h1 class="brand"><span>eve</span></h1>
    <aside class="menu">
        <p class="menu-label">
            General
        </p>
        <ul class="menu-list">
            <li><a><i class="fa fa-fw fa-th"></i>Dashboard</a></li>
        </ul>

        <p class="menu-label">
            Account
        </p>
        <ul class="menu-list">
            <li><a class="is-active" href="{{ route('profile') }}"><i class="fa fa-fw fa-user"></i>Profile</a></li>
            <li><a href="{{ route('user.logout') }}"><i class="fa fa-fw fa-sign-out"></i>Logout</a></li>
        </ul>
    </aside>
</div>
