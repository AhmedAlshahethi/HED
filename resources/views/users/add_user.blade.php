@extends('layout.master')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">{{__('users/add_user.Home')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('users')}}">{{__('users/add_user.Screen')}}</a></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<form>
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('users/add_user.New_User')}}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <div class="form-group">
                      <label>{{__('users/add_user.Name')}}</label>
                      <input type="text" class="form-control" placeholder="{{__('users/add_user.Name')}}">
                    </div>
              </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <div class="form-group">
                    <label>{{__('users/add_user.Username')}}</label>
                    <input type="text" class="form-control" placeholder="{{__('users/add_user.Username')}}">
                  </div>
            </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
              <div class="form-group">
                  <label>{{__('users/add_user.Password')}}</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="{{__('users/add_user.Password')}}">
                </div>
          </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <div class="form-group">
                <label>{{__('users/add_user.Confirm_Password')}}</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="{{__('users/add_user.Confirm_Password')}}">
              </div>
        </div>
    </div>
      <div class="col-md-6">
        <div class="form-group">
            <div class="form-group">
                <label>{{__('users/add_user.Role.Role')}}</label>
                <select class="form-control">
                  <option>{{__('users/add_user.Role.option 1')}}</option>
                  <option>{{__('users/add_user.Role.option 2')}}</option>
                </select>
              </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <div class="form-group">
                <label>{{__('users/add_user.User_status')}}</label>
                <select class="form-control">
                  <option>{{__('users/add_user.Role.option 1')}}</option>
                  <option>{{__('users/add_user.Role.option 2')}}</option>
                </select>
              </div>
        </div>
      </div> 
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
              <button type="submit" class="btn btn-success">{{__('shared/shared.Save')}}</button>
        </div>              
    </div>
      <!-- /.card -->
    </div>
    <!-- /.container-fluid -->
  </section>
</form>
@endsection
