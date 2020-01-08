@extends('layouts.app')

@section('content')

<section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="card">
                          <header class="card-header">
                             Edit User
                          </header>
                          <div class="card-body">
                              
                            @if (isset($errors) && count($errors))
                            <div class="alert alert-danger">
                                There were {{count($errors->all())}} Error(s)
                                            <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }} </li>
                                        @endforeach
                                    </ul>
                                    </div>
                                    
                            @endif
                            <div class="alert alert-{{ $status1 ?? ''}}" role="alert">
                                {{ $status ?? ''}}
                            </div>
                              <div class="form">
                                  <form class="cmxform form-horizontal tasi-form" id="signupForm" method="post" action="/people/{{$user->id}}">
                                  @csrf {{ method_field('PUT') }}
                                      <div class="form-group row">
                                          <label for="name" class="control-label col-lg-2">Full Name</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="firstname" value="{{$user->name}}" name="name" type="text" />
                                          </div>
                                      </div>
                                      <div class="row form-group">
                                        <div class="form-check ml-3">
                                            <input type="checkbox" name="is_password" id="is_password" class="form-check-input">
                                            <label for="is_password" class="form-check-label">
                                                Click to change password
                                            </label>
                                        </div>
                                      </div>
                                      <div class="form-group row ">
                                          <label for="password" class="control-label col-lg-2">Password</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="password" name="password" type="password" />
                                          </div>
                                      </div>
                                      <div class="form-group row ">
                                          <label for="confirm_password" class="control-label col-lg-2">Confirm Password</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="password_confirmation" name="password_confirmation" type="password" />
                                          </div>
                                      </div>
                                      <div class="row form-group">
                                        <div class="form-check ml-3">
                                            <input type="checkbox" name="show_password" id="show_password" class="form-check-input">
                                            <label for="show_password" class="form-check-label">
                                                Show Password
                                            </label>
                                        </div>
                                      </div>
                                      <div class="form-group row ">
                                          <label for="email" class="control-label col-lg-2">Email</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " readonly id="email" name="email" value="{{$user->email}}" type="email" />
                                          </div>
                                      </div>
                                      <div class="form-group row ">
                                          <label for="role" class="control-label col-lg-2">Role</label>
                                          <div class="col-lg-10">
                                                <select class="form-control " id="role" name="role">
                                                    <option value="{{$user->role}}">{{$user->role}}</option>
                                                    <option value="regular">Regular</option>
                                                    <option value="admin">Admin</option>
                                                </select>
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <div class="form-check ml-3">
                                              <input  type="checkbox"  class="form-check-input" id="agree" name="agree" />
                                              <label class="form-check-label" for="agree">
                                                  Agree to Change
                                              </label>
                                          </div>
                                      </div>
    

                                      <div class="form-group row">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-danger" type="submit">Save</button>
                                              <button class="btn btn-default" type="button">Cancel</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>

@endsection
@section('script')
    <!--script for this page-->
    <script src="{{ asset('admin/js/form-validation-script.js') }}"></script>
    <script>
    $(document).ready(function(){
        $('#password').hide()
        $('#password_confirmation').hide()
        $('#is_password').click(function(){
            if($(this).prop("checked") == true){
                $('#password').show()
                $('#password_confirmation').show()
            }
            else if($(this).prop("checked") == false){
                $('#password').hide()
                $('#password_confirmation').hide()
            }
        });
        $('#show_password').click(function(){
            if($(this).prop("checked") == true){
                document.getElementById('password').type = 'text'
                document.getElementById('password_confirmation').type = 'text'

                $('#password_confirmation').type = 'text'
            }else{
                document.getElementById('password').type = 'password'
                document.getElementById('password_confirmation').type = 'password'
            }
        })
    });
    </script>

@endsection