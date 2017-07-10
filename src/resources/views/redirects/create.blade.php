@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Redirects Module - Create New Redirect</div>

                <div class="panel-body">
                	<form method="post" action="{{ action('\MalcolmKnott\Redirector\RedirectController@store') }}">
						{{ csrf_field() }}
                    	@include('redirector::redirects.form', ['submit_button_text' => 'Save', 'is_update' => false])
                	</form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection