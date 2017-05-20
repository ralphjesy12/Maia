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
                        <form role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="field">
                                <p class="control has-icons-left has-icons-right">
                                    <input class="input {{ $errors->has('username') ? 'is-danger' : '' }}" type="text" placeholder="Username" name="username" value="{{ old('username') }}">
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    @if ($errors->has('username'))
                                    <span class="icon is-small is-right">
                                        <i class="fa fa-warning"></i>
                                    </span>
                                    <small class="help is-danger">{{ $errors->first('username') }}</small>
                                    @endif
                                </p>
                            </div>
                            <div class="field">
                                <p class="control has-icons-left has-icons-right">
                                    <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" type="password" placeholder="Password" name="password" value="{{ old('password') }}">
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                    @if ($errors->has('password'))
                                    <span class="icon is-small is-right">
                                        <i class="fa fa-warning"></i>
                                    </span>
                                    <small class="help is-danger">{{ $errors->first('password') }}</small>
                                    @endif
                                </p>
                            </div>
                            <div class="field is-grouped">
                                <p class="control">
                                    <button class="button is-dark" type="submit">Submit</button>
                                </p>
                                <!-- <p class="control">
                                    <a class="button is-link" href="{{ route('register') }}">Not a member yet?</a>
                                </p> -->
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
