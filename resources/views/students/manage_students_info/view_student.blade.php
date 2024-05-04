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
            <li class="breadcrumb-item">{{__('students/view_student.Home')}}</li>
            <li class="breadcrumb-item active"><a href="{{route('students_info')}}">{{__('students/view_student.Screen')}}</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="row">
    <div class="col-md-6">
      <section class="content">
        <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
          <div class="card-header">
              <h3 class="card-title" style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left'}}">{{__('students/view_student.Student_information_data')}}</h3>
              <div class="card-tools" style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                  </button>
              </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <div class="row">
                  <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap vertical-table">
                          <tbody> 
                              <tr>
                                  <th>{{__('students/view_student.Student_Name')}}</th>
                                  <td>{{ $student->name }}</td>
                              </tr>
                              <tr>
                                  <th>{{__('students/view_student.Student_BirthDate')}}</th>
                                  <td>{{ $student->birthdate }}</td>
                              </tr>
                              <tr>
                                  <th>{{__('students/view_student.Identity_type.Identity_type')}}</th>
                                  <td>{{ $student->Identity_type }}</td>
                              </tr>
                              <tr>
                                  <th>{{__('students/view_student.Identity_Number')}}</th>
                                  <td>{{ $student->identity_number }}</td>
                              </tr>
                              <tr>
                                  <th>{{__('students/view_student.Nationality')}}</th>
                                  <td>{{ $student->nationality }}</td>
                              </tr>
                              <tr>
                                  <th>{{__('students/view_student.Country_of_Nationality')}}</th>
                                  <td>{{ $student->nationality_country }}</td>
                              </tr>
                              <tr>
                                  <th>{{__('students/view_student.Sex.Sex')}}</th>
                                  <td>{{ $student->gender }}</td>
                              </tr>
                              <tr>
                                  <th>{{__('students/view_student.blood_type.blood_type')}}</th>
                                  <td>{{ $student->blood_type }}</td>
                              </tr>
                              <tr>
                                  <th>{{__('students/view_student.Governorate')}}</th>
                                  <td>{{ $student->city }}</td>
                              </tr>
                              <tr>
                                  <th>{{__('students/view_student.Directorate')}}</th>
                                  <td>{{ $student->district }}</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
      <!-- /.card -->
  </div>
  </section>
  <section class="content">
    <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
                <h3 class="card-title" style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left'}}">{{__('students/view_student.Student_contact_information')}}</h3>
                <div class="card-tools" style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap vertical-table">
                            <tbody>
                                <tr>
                                    <th>{{__('students/view_student.Phone_Number')}}</th>
                                    <td>{{ $student->phone_number }}</td>
                                </tr>
                                <tr>
                                    <th>{{__('students/view_student.Email')}}</th>
                                    <td>{{ $student->email }}</td>
                                </tr>
                                <tr>
                                    <th>{{__('students/view_student.Address')}}</th>
                                    <td>{{ $student->address }}</td>
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
              <h3 class="card-title" style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left'}}">{{__('students/view_student.Student_information_in_English')}}</h3>
              <div class="card-tools" style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                  </button>
              </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <div class="row">
                  <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap vertical-table">
                          <tbody>
                              <tr>
                                  <th>{{__('students/view_student.student_Name')}}</th>
                                  <td>{{ $student->english_name }}</td>
                              </tr>
                              <tr>
                                  <th>{{__('students/view_student.Place_of_Birth')}}</th>
                                  <td>{{ $student->english_birth_place }}</td>
                              </tr>
                              <tr>
                                  <th>{{__('students/view_student.identity_type')}}</th>
                                  <td>{{ $student->english_address }}</td>
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
              <h3 class="card-title" style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left'}}">{{__('students/edit_student.Student_Registeration_Type')}}</h3>
              <div class="card-tools" style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                  </button>
              </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <div class="row">
                  <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap vertical-table">
                          <tbody>
                              <tr>
                                  <th>{{__('students/edit_student.Academic_Level')}}</th>
                                  <td>{{ $student->registration_type }}</td>
                              </tr>
                              <tr>
                                  <th>{{__('students/edit_student.Section_Type')}}</th>
                                  <td>{{ $student->departments->name }}</td>
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



  </div>




    <div class="col-md-6">
      <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title" style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left'}}">{{__('students/view_student.Data_of_previous_university_qualification')}}</h3>
                    <div class="card-tools" style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap vertical-table">
                                <tbody>
                                    <tr>
                                        <th>{{__('students/view_student.University_Name')}}</th>
                                        <td>{{ $student->university }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('students/view_student.College_Name')}}</th>
                                        <td>{{ $student->college }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('students/view_student.Section.Section')}}</th>
                                        <td>{{ $student->college_department }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('students/view_student.Major.Major')}}</th>
                                        <td>{{ $student->major_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('students/view_student.percentage')}}</th>
                                        <td>{{ $student->total_percentage }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('students/view_student.General_appreciation.General_appreciation')}}</th>
                                        <td>{{ $student->general_grade }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('students/view_student.Name_of_qualification.Name_of_qualification')}}</th>
                                        <td>{{ $student->last_degree }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('students/view_student.Graduation_Year')}}</th>
                                        <td>{{ $student->graduation_year }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('students/view_student.Graduation_country')}}</th>
                                        <td>غير موجوده في قاعده البيانات</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('students/view_student.Country_of_birth')}}</th>
                                        <td>غير موجوده في قاعده البيانات</td>
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
                  <h3 class="card-title" style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left'}}">{{__('students/view_student.High_school_information')}}</h3>
                  <div class="card-tools" style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                      </button>
                  </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="row">
                      <div class="card-body table-responsive p-0">
                          <table class="table table-hover text-nowrap vertical-table">
                              <tbody>
                                  <tr>
                                      <th>{{__('students/view_student.Student_School_ID')}}</th>
                                      <td>{{ $student->high_school_exam_id }}</td>
                                  </tr>
                                  <tr>
                                      <th>{{__('students/view_student.School_Name')}}</th>
                                      <td>{{ $student->high_school_name }}</td>
                                  </tr>
                                  <tr>
                                      <th>{{__('students/view_student.High_school_governorate')}}</th>
                                      <td>{{ $student->high_school_city }}</td>
                                  </tr>
                                  <tr>
                                      <th>{{__('students/view_student.High_school_directorate')}}</th>
                                      <td>{{ $student->high_school_district }}</td>
                                  </tr>
                                  <tr>
                                      <th>{{__('students/view_student.Graduation_year')}}</th>
                                      <td>{{ $student->high_school_graduation_year }}</td>
                                  </tr>
                                  <tr>
                                      <th>{{__('students/view_student.High_school_type.High_school_type')}}</th>
                                      <td>{{ $student->high_school_type }}</td>
                                  </tr>
                                  <tr>
                                      <th>{{__('students/view_student.Total_scores')}}</th>
                                      <td>{{ $student->high_school_total_score }}</td>
                                  </tr>
                                  <tr>
                                      <th>{{__('students/view_student.High_school_percentage')}}</th>
                                      <td>{{ $student->high_school_total_percentage }}</td>
                                  </tr>
                                  <tr>
                                      <th>{{__('students/view_student.The_maxmim_degree')}}</th>
                                      <td>{{ $student->high_school_max_score }}</td>
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
          <h3 class="card-title" style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left'}}">{{__('students/view_student.Notes')}}</h3>
          <div class="card-tools" style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>{{__('students/view_student.Notes')}}</th>
                      <td>{{ $student->notes }}</td>
                    </tr>
                  </thead>
                </table>
              </div>
          </div>
        </div>
      </div>
      <!-- /.card -->
    </div>
    <!-- /.container-fluid -->
  </section> <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title" style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left'}}">{{__('students/view_student.Fees')}}</h3>
          <div class="card-tools" style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>{{__('students/view_student.Fees')}}</th>
                      <td>{{ $student->fees }}</td>
                    </tr>
                  </thead>
    
                </table>
              </div>
          </div>
        </div>
      </div>
      <!-- /.card -->
    </div>
    <!-- /.container-fluid -->
  </section>

    
      </div>
</div>

 
  


  
    


{{-- <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title" style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left'}}">{{__('students/view_student.Fee_bond')}}</h3>
          <div class="card-tools" style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>{{__('students/view_student.section.section')}}</th>
                      <th>{{__('students/view_student.Coordination_amount')}}</th>
                      <th>{{__('students/view_student.Portfolio_number')}}</th>
                      <th>{{__('students/view_student.Bond_No')}}</th>
                      <th>{{__('students/view_student.Date_of_payment')}}</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>IT</td>
                      <td>350000</td>
                      <td>5165238425</td>
                      <td>8632541230</td>
                      <td>23-11-2023</td>
                    </tr>
                    <tr>
                        <td>IT</td>
                        <td>350000</td>
                        <td>5165238425</td>
                        <td>8632541230</td>
                        <td>23-11-2023</td>
                      </tr>
                      <tr>
                        <td>IT</td>
                        <td>350000</td>
                        <td>5165238425</td>
                        <td>8632541230</td>
                        <td>23-11-2023</td>
                      </tr>
                      <tr>
                        <td>IT</td>
                        <td>350000</td>
                        <td>5165238425</td>
                        <td>8632541230</td>
                        <td>23-11-2023</td>
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
  </section> --}}
  {{-- <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title" style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left'}}">{{__('students/view_student.Documents')}}</h3>
          <div class="card-tools" style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>{{__('students/view_student.Document_type.Document_type')}}</th>
                      <th>{{__('students/view_student.Document_Title')}}</th>
                      <th>{{__('students/view_student.Document_Number')}}</th>
                      <th>{{__('students/view_student.Received_Date')}}</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Hihg school</td>
                      <td>High school diploma</td>
                      <td>5165238425</td>
                      <td>23-11-2023</td>
                    </tr>
                    <tr>
                        <td>Hihg school</td>
                        <td>High school diploma</td>
                        <td>5165238425</td>
                        <td>23-11-2023</td>
                      </tr>
                      <tr>
                        <td>Hihg school</td>
                        <td>High school diploma</td>
                        <td>5165238425</td>
                        <td>23-11-2023</td>
                      </tr>
                      <tr>
                        <td>Hihg school</td>
                        <td>High school diploma</td>
                        <td>5165238425</td>
                        <td>23-11-2023</td>
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
  </section> --}}
  
    
@endsection