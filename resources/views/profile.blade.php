@extends('master')

@section('content')
<section class="section">
    <div class="container-fluid">
        <div class="columns">
            <div class="column is-2 ">
                @component('sidebar',['active' => 'profile'])
                @endcomponent
            </div>
            <div class="column ">
                <profile></profile>
                
            </div>
        </div>
    </div>
</section>
@endsection
