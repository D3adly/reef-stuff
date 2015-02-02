@extends('admin._layouts.default')

@section('page container')
    <div class='container'>

                    <div class="signin-row row">
                        <div class="span4"></div>
                        <div class="span8">
                            <div class="container-signin">
                                <legend>Please Login</legend>
                                {{ Form::open() }}

                                        @if ($errors->has('login'))
                                                <div class="alert alert-error">{{ $errors->first('login', ':message') }}</div>
                                        @endif

                                        <div class="control-group">
                                                {{ Form::label('email', 'Email') }}
                                                <div class="controls">
                                                        {{ Form::text('email') }}
                                                </div>
                                        </div>

                                        <div class="control-group">
                                                {{ Form::label('password', 'Password') }}
                                                <div class="controls">
                                                        {{ Form::password('password') }}
                                                </div>
                                        </div>

                                        <div class="form-actions">
                                                {{ Form::submit('Login', array('class' => 'btn btn-inverse btn-login')) }}
                                        </div>

                                {{ Form::close() }}
                                {{--<form action='dashboard.html' method='POST' id='loginForm' class='form-signin' autocomplete='off'>
                                    <div class="form-inner">
                                        <div class="input-prepend">

                                            <span class="add-on" rel="tooltip" title="Username or E-Mail Address" data-placement="top"><i class="icon-envelope"></i></span>
                                            <input type='text' class='span4' id='username'/>
                                        </div>

                                        <div class="input-prepend">

                                            <span class="add-on"><i class="icon-key"></i></span>
                                            <input type='password' class='span4' id='password'/>
                                        </div>
                                        <label class="checkbox" for='remember_me'>Remember me
                                            <input type='checkbox' id='remember_me'
                                                   />
                                        </label>
                                    </div>
                                    <footer class="signin-actions">
                                        <input class="btn btn-primary" type='submit' id="submit" value='Login'/>
                                    </footer>
                                </form>--}}
                            </div>
                        </div>
                        <div class="span3"></div>
                    </div>

                    <div class="signin-row row">
                        <div class="span4"></div>
                        <div class="span8">
                            <div class="well well-small well-shadow">
                                <legend class="lead">Additional Content</legend>
                                Add additional content here.
                            </div>
                        </div>
                        <div class="span8"></div>
                    </div>
                <!--<div class="span4">

                    </div>-->
                </div>
@stop