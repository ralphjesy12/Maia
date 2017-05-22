<aside class="menu">
    <p class="menu-label">
        General
    </p>
    <ul class="menu-list">
        <li><a>Dashboard</a></li>
    </ul>

    <p class="menu-label">
        Account
    </p>
    <ul class="menu-list">
        <li><a class="{{ $active == 'profile' ? 'is-active' : '' }}" href="{{ route('profile') }}">Profile</a></li>
        <li><a href="{{ route('user.logout') }}">Logout</a></li>
    </ul>
</aside>
