@extends('master')

@section('content')
<section class="section">
    <div class="container-fluid">
        <div class="columns">
            <div class="column is-2 ">
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
                        <li><a href="{{ route('profile') }}">Profile</a></li>
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </aside>
            </div>
            <div class="column ">
                <h1 class="title">
                    Login Now
                </h1>
                <h2 class="subtitle">
                    We help teachers reach their students
                </h2>
            </div>
        </div>
    </div>
</section>
@endsection
