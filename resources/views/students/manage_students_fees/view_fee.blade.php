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
          <li class="breadcrumb-item">{{__('students/view_student.Home_Fee')}}</li>
            <li class="breadcrumb-item active"><a href="{{route('students_fees')}}">{{__('students/view_student.Screen_Fee')}}</a></li>
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
                    <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('students/add_student.Fees')}}</h3>
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
                      <div class="row" style="margin-bottom: 20px; margin-top: 20px">
                        <div class="col">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="400000">
                                <div class="input-group-append">
                                    <span class="input-group-text">{{__('students/add_student.Student_Fees')}}</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                          <div class="input-group">
                              <input type="text" class="form-control" placeholder="250000">
                              <div class="input-group-append">
                                  <span class="input-group-text">{{__('students/add_student.Total_Paid')}}</span>
                              </div>
                          </div>
                      </div>

                      <div class="col">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="150000">
                            <div class="input-group-append">
                                <span class="input-group-text">{{__('students/add_student.Remaining_Fees')}}</span>
                            </div>
                        </div>
                    </div>
                    </div>
                        <div class="card-body table-responsive p-0" style="max-height: 600px; overflow-y: auto;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>{{__('students/add_student.Payment_Fees')}}</th>
                                        <th>{{__('students/add_student.Bond_No')}}</th>
                                        <th>{{__('students/add_student.Date_of_payment')}}</th>
                                        <th>{{__('students/add_student.Notes_Fees')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                          <div>
                                            <input type="text" class="form-control" placeholder="{{__('students/add_student.Payment_Fees')}}">
                                          </div>
                                        </td>
                                        <td>
                                          <div>
                                            <input type="text" class="form-control" placeholder="{{__('students/add_student.Bond_No')}}">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="input-group">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                          </div>
                                        </td>
                                        <td>
                                          <div>
                                            <input type="text" class="form-control" placeholder="{{__('students/add_student.Notes_Fees')}}">
                                          </div>
                                        </td>
                                    </tr>    
                                    <tr>
                                      <td>
                                        <div>
                                          <input type="text" class="form-control" placeholder="{{__('students/add_student.Payment_Fees')}}">
                                        </div>
                                      </td>
                                      <td>
                                        <div>
                                          <input type="text" class="form-control" placeholder="{{__('students/add_student.Bond_No')}}">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                          </div>
                                          <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                      </td>
                                      <td>
                                        <div>
                                          <input type="text" class="form-control" placeholder="{{__('students/add_student.Notes_Fees')}}">
                                        </div>
                                      </td>
                                     </tr>
                                     <tr>
                                      <td>
                                        <div>
                                          <input type="text" class="form-control" placeholder="{{__('students/add_student.Payment_Fees')}}">
                                        </div>
                                      </td>
                                      <td>
                                        <div>
                                          <input type="text" class="form-control" placeholder="{{__('students/add_student.Bond_No')}}">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                          </div>
                                          <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                      </td>
                                      <td>
                                        <div>
                                          <input type="text" class="form-control" placeholder="{{__('students/add_student.Notes_Fees')}}">
                                        </div>
                                      </td>
                                     </tr> 
                                     <tr>
                                      <td>
                                        <div>
                                          <input type="text" class="form-control" placeholder="{{__('students/add_student.Payment_Fees')}}">
                                        </div>
                                      </td>
                                      <td>
                                        <div>
                                          <input type="text" class="form-control" placeholder="{{__('students/add_student.Bond_No')}}">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                          </div>
                                          <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                      </td>
                                      <td>
                                        <div>
                                          <input type="text" class="form-control" placeholder="{{__('students/add_student.Notes_Fees')}}">
                                        </div>
                                      </td>
                                     </tr> 
                                     <tr>
                                      <td>
                                        <div>
                                          <input type="text" class="form-control" placeholder="{{__('students/add_student.Payment_Fees')}}">
                                        </div>
                                      </td>
                                      <td>
                                        <div>
                                          <input type="text" class="form-control" placeholder="{{__('students/add_student.Bond_No')}}">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                          </div>
                                          <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                      </td>
                                      <td>
                                        <div>
                                          <input type="text" class="form-control" placeholder="{{__('students/add_student.Notes_Fees')}}">
                                        </div>
                                      </td>
                                     </tr>                                
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </section>
</form>
@endsection
