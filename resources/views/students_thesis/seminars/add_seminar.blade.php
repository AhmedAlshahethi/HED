@extends('layout.master')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">{{__('students_thesis/shared.Home_Seminar.Add_Seminar')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('students_seminars')}}">{{__('students_thesis/shared.Screen_Seminar')}}</a></li>
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
              <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('students_thesis/shared.Seminar_Title.New_Seminar')}}</h3>
              <div class="card-tools"  style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}" >
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="max-height: 600px; overflow-y: auto;">
              <table class="table table-head-fixed text-nowrap" id="dynamicAddRemove">
                  <thead>
                      <tr>
                          <th colspan="2">
                            {{__('shared/shared.Student_Name')}} : احمد الشاحذي
                          </th>
                          <th colspan="2">
                            {{__('shared/shared.Student_Id')}} : 21160021
                          </th>
                          <th></th>
                      </tr>
                  </thead></table>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label>{{__('students_thesis/seminar.Title')}}</label>
                            <input type="text" class="form-control" placeholder="{{__('students_thesis/seminar.Title')}}">
                          </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label>{{__('students_thesis/seminar.Date')}}</label>
                            <input type="text" class="form-control" placeholder="{{__('students_thesis/seminar.Date')}}">
                          </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                            <label>{{__('students_thesis/seminar.Supervisor')}}</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected"></option>
                                <option>احمد محمد الشاحذي</option>
                                <option>اكرم علي المعرسي</option>
                                <option>خالد محسن الشيباني</option>
                                <option>محمد عبدالواسع الدقاف</option>
                                <option>عبدالكريم جلال النزيلي</option>
                              </select>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label>{{__('students_thesis/seminar.Assistant_Supervisor')}}</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected"></option>
                      <option>احمد محمد الشاحذي</option>
                      <option>اكرم علي المعرسي</option>
                      <option>خالد محسن الشيباني</option>
                      <option>محمد عبدالواسع الدقاف</option>
                      <option>عبدالكريم جلال النزيلي</option>
                    </select>
                  </div>
                </div>                
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                    <button type="submit" class="btn btn-success">{{__('shared/shared.Save')}}</button>
              </div>              
          </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
      </section>
</form>
@endsection


   