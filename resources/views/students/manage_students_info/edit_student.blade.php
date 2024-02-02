@extends('layout.master')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">{{__('students/edit_student.Home')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('students_info')}}">{{__('students/edit_student.Screen')}}</a></li>
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
              <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('students/edit_student.Student_Registeration_Type')}}</h3>
              <div class="card-tools"  style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}" >
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <div class="form-group">
                          <label>{{__('students/add_student.Academic_Level')}}</label>
                          <select class="form-control">
                              <option>{{__('shared/shared.Master')}}</option>
                              <option>{{__('shared/shared.phD')}}</option>
                            </select>
                        </div>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <div class="form-group">
                        <label>{{__('students/add_student.Section_Type')}}</label>
                        <select class="form-control">
                            <option>{{__('shared/shared.IT')}}</option>
                            <option>{{__('shared/shared.IS')}}</option>
                            <option>{{__('shared/shared.Cs')}}</option>
                          </select>
                      </div>
                </div>
              </div>               
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
      </section>
        <section class="content">
            <div class="container-fluid">
              <!-- SELECT2 EXAMPLE -->
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('students/edit_student.Student_information_data')}}</h3>
                  <div class="card-tools"  style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.Student_Name')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.Student_Name')}}">
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.Student_BirthDate')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.Student_BirthDate')}}">
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.Identity_type.Identity_type')}}</label>
                                <select class="form-control">
                                    <option>{{__('students/edit_student.Identity_type.option 1')}}</option>
                                    <option>{{__('students/edit_student.Identity_type.option 2')}}</option>
                                  </select>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.Identity_Number')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.Identity_Number')}}">
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.Nationality')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.Nationality')}}">
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.Country_of_Nationality')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.Country_of_Nationality')}}">
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.Sex.Sex')}}</label>
                                <select class="form-control">
                                    <option>{{__('students/edit_student.Sex.option 1')}}</option>
                                    <option>{{__('students/edit_student.Sex.option 2')}}</option>
                                  </select>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.blood_type.blood_type')}}</label>
                                <select class="form-control">
                                    <option>{{__('students/edit_student.blood_type.option 1')}}</option>
                                    <option>{{__('students/edit_student.blood_type.option 2')}}</option>
                                  </select>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.Governorate')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.Governorate')}}">
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.Directorate')}}</label>
                                <input type="text" class="form-control" placeholder="Directorate">
                              </div>
                        </div>
                    </div>                 
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.container-fluid -->
          </section>
          <section class="content">
            <div class="container-fluid">
              <!-- SELECT2 EXAMPLE -->
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('students/edit_student.Student_contact_information')}}</h3>
                  <div class="card-tools"  style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.Phone_Number')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.Phone_Number')}}">
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.Email')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.Email')}}">
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.Address')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.Address')}}">
                              </div>
                        </div>
                    </div>                
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.container-fluid -->
          </section>
          <section class="content">
            <div class="container-fluid">
              <!-- SELECT2 EXAMPLE -->
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('students/edit_student.High_school_information')}}</h3>
                  <div class="card-tools"  style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.School_Name')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.School_Name')}}">
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.Student_School_ID')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.Student_School_ID')}}">
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.High_school_governorate')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.High_school_governorate')}}">
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.High_school_directorate')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.High_school_directorate')}}">
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.Graduation_year')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.Graduation_year')}}">
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.High_school_type.High_school_type')}}</label>
                                <select class="form-control">
                                    <option>{{__('students/edit_student.High_school_type.option 1')}}</option>
                                    <option>{{__('students/edit_student.High_school_type.option 2')}}</option>
                                  </select>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.Total_scores')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.Total_scores')}}">
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.High_school_percentage')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.High_school_percentage')}}">
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.The_maxmim_degree')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.The_maxmim_degree')}}">
                              </div>
                        </div>
                    </div>                 
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.container-fluid -->
          </section>
          <section class="content">
            <div class="container-fluid">
              <!-- SELECT2 EXAMPLE -->
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('students/edit_student.Student_information_in_English')}}</h3>
                  <div class="card-tools"  style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.student_Name')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.student_Name')}}">
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.Place_of_Birth')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.Place_of_Birth')}}">
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.identity_type')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.identity_type')}}">
                              </div>
                        </div>
                    </div>                
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.container-fluid -->
          </section>
          <section class="content">
            <div class="container-fluid">
              <!-- SELECT2 EXAMPLE -->
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('students/edit_student.Data_of_previous_university_qualification')}}</h3>
                  <div class="card-tools"  style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.University_Name')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.University_Name')}}">
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.College_Name')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.College_Name')}}">
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.Section.Section')}}</label>
                                <select class="form-control">
                                    <option>{{__('students/edit_student.Section.option 1')}}</option>
                                    <option>{{__('students/edit_student.Section.option 2')}}</option>
                                  </select>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.Major.Major')}}</label>
                                <select class="form-control">
                                    <option>{{__('students/edit_student.Major.option 1')}}</option>
                                    <option>{{__('students/edit_student.Major.option 2')}}</option>
                                  </select>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('students/edit_student.percentage')}}</label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.percentage')}}">
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.General_appreciation.General_appreciation')}}</label>
                                <select class="form-control">
                                    <option>{{__('students/edit_student.General_appreciation.option 1')}}</option>
                                    <option>{{__('students/edit_student.General_appreciation.option 2')}}</option>
                                  </select>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.Name_of_qualification.Name_of_qualification')}}</label>
                                <select class="form-control">
                                    <option>{{__('students/edit_student.Name_of_qualification.option 1')}}</option>
                                    <option>{{__('students/edit_student.Name_of_qualification.option 2')}}</option>
                                  </select>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.Graduation_Year')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.Graduation_Year')}}">
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.Graduation_country')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.Graduation_country')}}">
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.Country_of_birth')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/edit_student.Country_of_birth')}}">
                              </div>
                        </div>
                    </div>                 
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.container-fluid -->
          </section>
          <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}" >{{__('students/edit_student.Fees')}}</h3>
                        <div class="card-tools"  style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="card-body table-responsive p-0" style="max-height: 400px; overflow-y: auto;">
                                <table class="table table-hover text-nowrap" id="dynamicAddRemove">
                                    <thead>
                                        <tr>
                                          <th colspan="6">
                                            <div class="col-3">
                                              <div class="input-group">
                                                  <input type="text" class="form-control" placeholder="{{__('students/edit_student.Student_Fees')}}">
                                                  <div class="input-group-append">
                                                      <span class="input-group-text">{{__('students/edit_student.Student_Fees')}}</span>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          </th>
                                        </tr>
                                        <tr>
                                            <th>{{__('students/edit_student.Payment_Fees')}}</th>
                                            <th>{{__('students/edit_student.Bond_No')}}</th>
                                            <th>{{__('students/edit_student.Date_of_payment')}}</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="dynamicAddRemove_2">
                                        <tr>
                                            <td>
                                              <div>
                                                <input type="text" name="B[0][B]" class="form-control" placeholder="{{__('students/edit_student.Payment_Fees')}}">
                                              </div>
                                            </td>
                                            <td>
                                              <div>
                                                <input type="text" name="C[0][C]" class="form-control" placeholder="{{__('students/edit_student.Bond_No')}}">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="text" name="D[0][D]" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask
                                                placeholder="{{__('students/edit_student.Date_of_payment')}}">
                                              </div>
                                            </td>
                                        </tr>
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
        <section class="content">
            <div class="container-fluid">
              <!-- SELECT2 EXAMPLE -->
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('students/edit_student.Notes')}}</h3>
                  <div class="card-tools"  style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/edit_student.Notes')}}</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                              </div>
                        </div>
                    </div>               
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.container-fluid -->
          </section>
          <div class="col-md-6">
            <div class="form-group">
                  <button type="submit" class="btn btn-success">{{__('shared/shared.Save')}}</button>
            </div>              
        </div>
    </form>
@endsection
{{-- 
<div class="card-body">
  <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <div class="form-group">
                <label>{{__('students/edit_student.Term.Term')}}</label>
                <select class="form-control">
                    <option>{{__('students/edit_student.Term.option 1')}}</option>
                    <option>{{__('students/edit_student.Term.option 2')}}</option>
                  </select>
              </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <div class="form-group">
                <label>{{__('students/edit_student.Subject.Subject')}}</label>
                <input type="text" class="form-control" placeholder="{{__('students/edit_student.Subject.Subject')}}">
              </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <div class="form-group">
                <label>{{__('students/edit_student.Mark')}}</label>
                <input type="text" class="form-control" placeholder="{{__('students/edit_student.Mark')}}">
              </div>
        </div>
    </div>               
  </div>
</div> --}}

{{-- <div class="form-group" style="width: 200px">
  <input type="text" class="form-control" placeholder="Enter ...">
</div --}}