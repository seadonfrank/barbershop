@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-9 col-md-offset-2" >
                <h1>Edit</h1>
                <h4>User</h4>
                <hr/>
            </div>
            <form class="form-horizontal" role="form" method="post" action="{{ url('/user/'.$user[0]->id) }}">
                {{ csrf_field() }}

                <input type="hidden" name="_method" value="put" />
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-3 control-label">Name</label>

                    <div class="col-md-8">
                        <input id="name" type="text" class="form-control" name="name" value="{{ $user[0]->name }}">

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-3 control-label">Email</label>

                    <div class="col-md-8">
                        <input id="email" type="email" disabled class="form-control" name="email" value="{{ $user[0]->email }}">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="alert alert-info row">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-3 control-label">Password</label>

                        <div class="col-md-8">
                            <input id="password" type="password" class="form-control" name="password" value="">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="password-confirm" class="col-md-3 control-label">Confirm Password</label>

                        <div class="col-md-8">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <span class="col-md-3"></span>
                    <span class="col-md-8 text-danger">* If you do not want to change the password then, Please keep the password fields blank.</span>
                    <br/>
                </div>

                <div class="form-group{{ $errors->has('isadmin') ? ' has-error' : '' }}">
                    <label for="isadmin" class="col-md-3 control-label">IsAdmin</label>

                    <div class="col-md-1">
                        <select id="isadmin" class="form-control" name="isadmin" value="{{ old('isadmin') }}">
                            <option value="0" @if(!$user[0]->isadmin) selected @endif>False</option>
                            <option value="1" @if($user[0]->isadmin) selected @endif>True</option>
                        </select>

                        @if ($errors->has('isadmin'))
                            <span class="help-block">
                                <strong>{{ $errors->first('isadmin') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                </div>
            </form>

            <h5>
                <div class="col-md-9 col-md-offset-2" >
                    <a href="{{ url('/user') }}">Back to list</a>
                </div>
            </h5>
        </div>
    </div>
</div>
@endsection
