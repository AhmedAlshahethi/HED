@extends('layout.master')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3>
          <button type="button" class="btn btn-success">
            <i class="fas fa-print"> {{__('shared/shared.Print')}}</i>
          </button>
        </h3>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">{{__('instructors/edit_instructor.Home')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('instructors')}}">{{__('instructors/edit_instructor.Screen')}}</a></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<section class="content">
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('instructors/profile_instructor.Profile_Instructor')}}</h3>
      </div>
      <div class="card-body">
        <div class="row">
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-3">
        
                  <!-- Profile Image -->
                  <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                      <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                             src="{{$instructor->image}}"
                             alt="User profile picture">
                      </div>
        
                      <h3 class="profile-username text-center">{{$instructor->name}}</h3>
        
                      <p class="text-muted text-center"> {{$instructor->departments->name}}  </p>
   
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
        
                  <!-- About Me Box -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">
                        {{__('instructors/profile_instructor.Infomation')}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <strong><i class="fas fa-book mr-1"></i>{{__('instructors/profile_instructor.Phone_Number')}}</strong>
        
                      <p class="text-muted">
                       {{$instructor->phone_number}}
                      </p>
        
                      <hr>
        
                      <strong><i class="fas fa-map-marker-alt mr-1"></i>{{__('instructors/profile_instructor.Email_address')}}</strong>
        
                      <p class="text-muted">{{$instructor->email}}</p>
        
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                  <div class="card">
                    <div class="card-header p-2">
                      <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">{{__('instructors/profile_instructor.Description')}}</a></li>
                        {{-- <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li> --}}
                      </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                          <!-- Post -->
                          <div class="post">
                            <!-- /.user-block -->
                            <p> {{$instructor->description}}
                               
                          </p>
                          </div>
                        </div>
                      </div>
                      <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
          </section>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection