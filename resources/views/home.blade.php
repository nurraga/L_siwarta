@extends('layouts.siwarta')

@section('content')
    <section class="content-header">

    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #b13a32;color: #ffffff">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        You are logged in as
                        @if(Auth::user()->hasRole('administrator'))
                            Administrator.
                        @elseif(Auth::user()->hasRole('wartawan'))
                            Wartawan.
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
