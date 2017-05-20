@extends('master')

@section('content')
<section class="hero is-medium is-dark is-bold is-fullheight">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Login Now
            </h1>
            <h2 class="subtitle">
                We help teachers reach their students
            </h2>

            <div class="content">
                <div class="columns">
                    <div class="column is-one-third">
                        <form class="" action="index.html" method="post">
                            <div class="field">
                                <p class="control has-icons-left has-icons-right">
                                    <input class="input" type="text" placeholder="Username" value="">
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </p>
                            </div>
                            <div class="field">
                                <p class="control has-icons-left has-icons-right">
                                    <input class="input" type="password" placeholder="Password" value="">
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </p>
                            </div>
                            <div class="field is-grouped">
                                <p class="control">
                                    <button class="button is-dark">Submit</button>
                                </p>
                                <p class="control">
                                    <button class="button is-link">Not a member yet?</button>
                                </p>
                            </div>
                        </form>
                    </div>
                    <div class="column is-two-thirds"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
