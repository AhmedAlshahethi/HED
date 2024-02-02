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
<form>
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
                        <input type="text" class="form-control" placeholder="{{__('subjects/add_subject.Subject_Name')}}">
                      </div>
                </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  <div class="form-group">
                      <label>{{__('subjects/add_subject.Section.Section')}}</label>
                      <select class="form-control">
                        <option>{{__('subjects/add_subject.Section.option 1')}}</option>
                        <option>{{__('subjects/add_subject.Section.option 2')}}</option>
                      </select>
                    </div>
              </div>
          </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-group">
                        <label>{{__('subjects/add_subject.Level.Level')}}</label>
                        <select class="form-control">
                          <option>{{__('subjects/add_subject.Level.option 1')}}</option>
                          <option>{{__('subjects/add_subject.Level.option 2')}}</option>
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