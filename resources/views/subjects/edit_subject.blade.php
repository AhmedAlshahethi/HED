@extends('layout.master')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">{{__('subjects/edit_subject.Home')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('subjects')}}">{{__('subjects/edit_subject.Screen')}}</a></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<form method="post" action="{{route('update_subject',$subject)}}">

@csrf
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('subjects/edit_subject.New_Subject')}}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-group">
                        <label>{{__('subjects/edit_subject.Subject_Name')}}</label>
                        <input name="name" type="text" class="form-control" placeholder="{{__('subjects/edit_subject.Subject_Name')}}"  value="{{$subject->name}}">
                      </div>
                </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <div class="form-group">
                    <label>الساعات</label>
                    <input type="text" name="hours" class="form-control" placeholder="الساعات" value="{{$subject->hours}}">
                    @error('hours')
                          <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
            </div>
        </div>
            <div class="col-md-6">
              <div class="form-group">
                  <div class="form-group">
                      <label>{{__('subjects/edit_subject.Section.Section')}}</label>
                  <select name="department_id" class="form-control">
                    <option value="{{$subject->department_id}}">{{$subject->departments->name}}</option>
                          @foreach($Alldepartments as $department )
                       @if($subject->department_id == $department->id)
                      @continue
                      @else
                    <option value="{{$department->id}}">{{$department->name}}</option>
                       @endif
                       @endforeach
                  </select>
                  </div>
              </div>
          </div>
          <div class="col-md-6">
        <div class="form-group">
            <div class="form-group">  
                <label>الترم</label>
                <select name="semester" class="form-control">
                <option value="{{$subject->semester}}">{{$subject->semester}}</option>
                  @foreach ($semesters as $key => $semester)
                  @if($subject->semester == $semester)
                      @continue
                      @else
                      <option value="{{$semester}}">{{$semester}}</option>
                       @endif
                  @endforeach 
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
  <!-- /.card-body -->

  {{-- <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div> --}}
</form>
@endsection