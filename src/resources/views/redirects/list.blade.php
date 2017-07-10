@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <p class="pull-left">Redirects Module</p>
                    <a href="{{ action('\MalcolmKnott\Redirector\RedirectController@create') }}" class="pull-right btn btn-primary">
                        Add Redirect
                    </a>
                </div>

                <div class="panel-body">

                    @if($redirects->count())

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="col-sm-6">Old URL</th>
                                    <th class="col-sm-6">New URL</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($redirects as $redirect)
                                    <tr>
                                        <td>
                                            {{ $redirect->old_url }}
                                        </td>
                                        <td>
                                            {{ $redirect->new_url }}
                                        </td>
                                        <td>
                                            <a href="{{ action('\MalcolmKnott\Redirector\RedirectController@edit', $redirect->id) }}"
                                                class="btn btn-primary"
                                            >
                                                Edit
                                            </a>
                                        </td>
                                        <td>
                                            <form method="post"
                                                action="{{ action('\MalcolmKnott\Redirector\RedirectController@destroy', $redirect->id) }}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    @else
                        <p class="alert alert-info">
                            No redirects, <a href="{{ action('\MalcolmKnott\Redirector\RedirectController@create') }}">add first redirect</a>
                        </p>
                    @endif

                    <div class="text-center">
                        {!! $redirects->links() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection