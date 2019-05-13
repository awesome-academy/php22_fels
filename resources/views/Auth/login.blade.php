@extends('master.app')
@section('content')
<div class="container" style="margin-top: 10%">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">@lang('message.signup')</h4>
                </div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'login']) !!}
                        @if(Session::has('flag'))
                            <div class="alert alert-{{Session::get('flag')}}">
                                {{Session::get('message')}}
                            </div>
                        @endif()
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            {{Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => trans('message.email')]) }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                            {{Form::password('password', ['class' => 'form-control', 'placeholder' => trans('message.password')]) }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::submit(trans('message.login'), ['class' => 'btn btn-primary']) !!}
                                    </div>
                                    <div class="login-help">
                                        <a href="{{ route('register') }}" >@lang('message.signup')</a> - <a href="#" >@lang('message.forgot_password')</a>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
