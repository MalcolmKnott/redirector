@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Redirects Module - Update Redirect</div>

                <div class="panel-body">
                    <div class="panel-body">
                    <form method="post" action="{{ action('\MalcolmKnott\Redirector\RedirectController@update', $redirect->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        @include('redirector::redirects.form', ['submit_button_text' => 'Update', 'is_update' => true])
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection