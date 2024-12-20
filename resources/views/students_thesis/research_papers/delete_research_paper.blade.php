@extends('layout.master')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">{{__('students_thesis/shared.Home_Thesis.Delete_Thesis')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('students_papers')}}">{{__('students_thesis/shared.Screen_Thesis')}}</a></li>
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
              <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('students_thesis/shared.Thesis_Title.Delete_Thesis_Data')}}</h3>
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
                            <label>{{__('students_thesis/thesis.Thesis_Title')}}</label>
                            <input type="text" class="form-control" placeholder=" تحسين كفائة شبكة الجيل السادس في اليمن" disabled>
                          </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label>{{__('students_thesis/thesis.Score')}}</label>
                            <input type="text" class="form-control" placeholder="{{__('students_thesis/thesis.Score')}}" disabled>
                          </div>
                    </div>
                </div>   
                <div class="col-md-6">
                    <div class="form-group">
                        <label>{{__('students_thesis/thesis.Section_Approvement_Date')}}</label>
                          <div class="input-group date" id="reservationdate" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"
                              placeholder="{{__('students_thesis/thesis.Section_Approvement_Date')}}" disabled/>
                              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                          </div>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label>{{__('students_thesis/thesis.Section_Approvement_Number')}}</label>
                            <input type="text" class="form-control" placeholder="{{__('students_thesis/thesis.Section_Approvement_Number')}}" disabled>
                          </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>{{__('students_thesis/thesis.College_Approvement_Date')}}</label>
                          <div class="input-group date" id="reservationdate" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"
                              placeholder="{{__('students_thesis/thesis.College_Approvement_Date')}}" disabled/>
                              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                          </div>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label>{{__('students_thesis/thesis.College_Approvement_Number')}}</label>
                            <input type="text" class="form-control" placeholder="{{__('students_thesis/thesis.College_Approvement_Number')}}" disabled>
                          </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                          <label for="exampleInputFile">{{__('students_thesis/thesis.Thesis_File')}}</label>
                              <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="exampleInputFile" disabled>
                                  <label class="custom-file-label" for="exampleInputFile"></label>
                                </div>
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
                          <label>{{__('students_thesis/thesis.Notes')}}</label>
                          <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                          </div>
                    </div>
                  </div>              
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                    <button type="submit" class="btn btn-danger">{{__('shared/shared.Delete')}}</button>
              </div>              
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
      </section>
</form>
@endsection


   
   
   