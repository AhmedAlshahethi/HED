@extends('layout.master')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">{{__('subjects/add_subject.Home')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('subjects')}}">{{__('subjects/add_subject.Screen')}}</a></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<form method="POST" action="{{route('store_subject')}}">
  @csrf
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('subjects/add_subject.New_Subject')}}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-group">
                        <label>{{__('subjects/add_subject.Subject_Name')}}</label>
                        <input type="text" name="name" class="form-control" placeholder="{{__('subjects/add_subject.Subject_Name')}}">
                        @error('name')
                              <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  <div class="form-group">
                      <label>الترم</label>
                      <input type="text" name="semester" class="form-control" placeholder="الترم">
                      @error('semester')
                            <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
              </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <div class="form-group">
                    <label>الساعات</label>
                    <input type="text" name="hours" class="form-control" placeholder="الساعات">
                    @error('hours')
                          <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
            </div>
        </div>
            <div class="col-md-6">
              <div class="form-group">
                  <div class="form-group">
                      <label>{{__('subjects/add_subject.Section.Section')}}</label>
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
            {{-- <div class="col-md-6">
                <div class="form-group">
                    <div class="form-group">
                        <label>{{__('subjects/add_subject.Level.Level')}}</label>
                        <select  name="registration_type" class="form-control">
                          @foreach ($academicLevels as $key => $level)
                            <option value="{{$key}}">{{$level}}</option>
                            @endforeach 
                        </select>
                        @error('registration_type')
                              <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                </div>
            </div>   --}}
            
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
  <!-- /.card-body -->

  {{-- <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div> --}}
</form>
@endsection