@extends('master.app')
@section('content')
<div class="container_signup">
  <div class="row">
    @if(count($errors)>0)
      <div class="alert alert-danger">
        @foreach($errors->all() as $error)
          {{$error}}
        @endforeach
      </div>
    @endif
    @if(Session::has('success'))
      <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    <div class="col-sm-6 col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">@lang('message.signup')</h4>
        </div>
        <div class="panel-body">
          {!! Form::open(['route' => 'register']) !!}
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                {{ Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => trans('message.username')]) }}
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
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
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                {{Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => trans('message.password_confirm')]) }}
              </div>
            </div>
            <div class="form-group">
              {!! Form::submit(trans('message.signup'), ['class' => 'btn btn-lg btn-primary btn-block']) !!}
            </div>
            <center><a href="{{ rooute('login') }}">@lang('message.login')</a></center>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
