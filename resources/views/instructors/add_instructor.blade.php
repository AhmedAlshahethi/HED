@extends('layout.master')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">{{__('instructors/add_instructor.Home')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('instructors')}}">{{__('instructors/add_instructor.Screen')}}</a></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<form method="POST" action="{{route('store_instructor')}}" enctype="multipart/form-data">
  @csrf
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('instructors/add_instructor.New_Instructor')}}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <div class="form-group">
                      <label>{{__('instructors/add_instructor.Instructor_Name')}}</label>
                      <input type="text" name="name" class="form-control" placeholder="{{__('instructors/add_instructor.Instructor_Name')}}">
                      @error('name')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
              </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <div class="form-group">
                    <label>{{__('instructors/add_instructor.Gender.Gender')}}</label>
                    <select name="gender" class="form-control">
                      @foreach ($genders as $key => $gender)
                                  <option value="{{$gender}}">{{$gender}}</option>
                      @endforeach
                    </select>
                    @error('gender')
                              <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
            </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
              <div class="form-group">
                  <label>{{__('instructors/add_instructor.Section.Section')}}</label>
                  <select name="department_id" class="form-control">
                    @foreach ($departments as $department)
                            <option value="{{$department->id}}">{{$department->name}}</option>
                    @endforeach
                  </select>
                  @error('department_id')
                              <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
          </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <div class="form-group">  
                <label>{{__('instructors/add_instructor.Level.Level')}}</label>
                <select name="academic_level" class="form-control">
                  @foreach ($academicLevels as $key => $level)
                            <option value="{{$level}}">{{$level}}</option>
                  @endforeach 
                </select>
                @error('academic_level')
                              <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
        </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
          <div class="form-group">
            <label for="exampleInputEmail1">{{__('instructors/add_instructor.Email_address')}}</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="{{__('instructors/add_instructor.Email_address')}}">
            @error('email')
                   <span class="text-danger">{{ $message }}</span>
             @enderror
            </div>
      </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
        <div class="form-group">
            <label>{{__('instructors/add_instructor.Phone_Number')}}</label>
            <input type="text" name="phone_number" class="form-control" placeholder="{{__('instructors/add_instructor.Phone_Number')}}">
            @error('phone_number')
                       <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
    </div>
</div>
  <div class="col-md-6">
    <div class="form-group">
        <div class="form-group">
          <label for="exampleInputFile">{{__('instructors/add_instructor.Upload_Picture')}}</label>
              <div class="input-group">
              <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile"></label>
                </div>
                <!--  <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input" id="exampleInputFile"> 


                </div>-->
                <div class="input-group-append">
                  <span class="input-group-text">{{__('instructors/add_instructor.Upload')}}</span>
                </div>
              </div>
          </div>
    </div>
  </div> 
  <div class="col-md-6">
    <div class="form-group">
        <div class="form-group">
          <label>{{__('instructors/add_instructor.Description')}}</label>
          <textarea  name="description"class="form-control" rows="3" placeholder="Enter ..."></textarea>
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