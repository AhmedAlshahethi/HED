@extends('layout.master')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
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
<form>
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('instructors/edit_instructor.New_Instructor')}}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <div class="form-group">
                      <label>{{__('instructors/edit_instructor.Instructor_Name')}}</label>
                      <input type="text" class="form-control" placeholder="{{__('instructors/edit_instructor.Instructor_Name')}}">
                    </div>
              </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <div class="form-group">
                    <label>{{__('instructors/edit_instructor.Phone_Number')}}</label>
                    <input type="text" class="form-control" placeholder="{{__('instructors/edit_instructor.Phone_Number')}}">
                  </div>
            </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
              <div class="form-group">
                  <label>{{__('instructors/edit_instructor.Section.Section')}}</label>
                  <select class="form-control">
                    <option>{{__('instructors/edit_instructor.Section.option 1')}}</option>
                    <option>{{__('instructors/edit_instructor.Section.option 2')}}</option>
                  </select>
                </div>
          </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <div class="form-group">
                <label>{{__('instructors/edit_instructor.Level.Level')}}</label>
                <select class="form-control">
                  <option>{{__('instructors/edit_instructor.Level.option 1')}}</option>
                  <option>{{__('instructors/edit_instructor.Level.option 2')}}</option>
                </select>
              </div>
        </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
          <div class="form-group">
            <label for="exampleInputEmail1">{{__('instructors/edit_instructor.Email_address')}}</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="{{__('instructors/edit_instructor.Email_address')}}">
            </div>
      </div>
  </div> 
  <div class="col-md-6">
    <div class="form-group">
        <div class="form-group">
          <label for="exampleInputFile">{{__('instructors/edit_instructor.Upload_Picture')}}</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile"></label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">{{__('instructors/edit_instructor.Upload')}}</span>
                </div>
              </div>
          </div>
    </div>
  </div> 
  <div class="col-md-6">
    <div class="form-group">
        <div class="form-group">
          <label>{{__('instructors/edit_instructor.Description')}}</label>
          <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
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