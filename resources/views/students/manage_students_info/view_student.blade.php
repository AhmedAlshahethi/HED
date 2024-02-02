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
                                  <td>احمد محمد علي الشاحذي</td>
                              </tr>
                              <tr>
                                  <th>{{__('students/view_student.Student_BirthDate')}}</th>
                                  <td>22-5-2001</td>
                              </tr>
                              <tr>
                                  <th>{{__('students/view_student.Identity_type.Identity_type')}}</th>
                                  <td>بطاقة شخصية</td>
                              </tr>
                              <tr>
                                  <th>{{__('students/view_student.Identity_Number')}}</th>
                                  <td>1569432185</td>
                              </tr>
                              <tr>
                                  <th>{{__('students/view_student.Nationality')}}</th>
                                  <td>يمني</td>
                              </tr>
                              <tr>
                                  <th>{{__('students/view_student.Country_of_Nationality')}}</th>
                                  <td>اليمن</td>
                              </tr>
                              <tr>
                                  <th>{{__('students/view_student.Sex.Sex')}}</th>
                                  <td>ذكر</td>
                              </tr>
                              <tr>
                                  <th>{{__('students/view_student.blood_type.blood_type')}}</th>
                                  <td>A+</td>
                              </tr>
                              <tr>
                                  <th>{{__('students/view_student.Governorate')}}</th>
                                  <td>صنعاء</td>
                              </tr>
                              <tr>
                                  <th>{{__('students/view_student.Directorate')}}</th>
                                  <td>معين</td>
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
                                    <td>772323972</td>
                                </tr>
                                <tr>
                                    <th>{{__('students/view_student.Email')}}</th>
                                    <td>ahmedalshahethy1@gmail.com</td>
                                </tr>
                                <tr>
                                    <th>{{__('students/view_student.Address')}}</th>
                                    <td>صنعاء -معين -شارع هائل</td>
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
                                  <td>Ahmed Alshahethi</td>
                              </tr>
                              <tr>
                                  <th>{{__('students/view_student.Place_of_Birth')}}</th>
                                  <td>Sana'a</td>
                              </tr>
                              <tr>
                                  <th>{{__('students/view_student.identity_type')}}</th>
                                  <td>ID Card</td>
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
                                  <td>ماجستير</td>
                              </tr>
                              <tr>
                                  <th>{{__('students/edit_student.Section_Type')}}</th>
                                  <td>تقنية المعلومات</td>
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
                                        <td>جامعة صنعاء</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('students/view_student.College_Name')}}</th>
                                        <td>كلية الحاسوب</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('students/view_student.Section.Section')}}</th>
                                        <td>تقنية المعلومات</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('students/view_student.Major.Major')}}</th>
                                        <td>تقنية المعلومات</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('students/view_student.percentage')}}</th>
                                        <td>88.23</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('students/view_student.General_appreciation.General_appreciation')}}</th>
                                        <td>جيد جدا</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('students/view_student.Name_of_qualification.Name_of_qualification')}}</th>
                                        <td>ماجستير</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('students/view_student.Graduation_Year')}}</th>
                                        <td>2022</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('students/view_student.Graduation_country')}}</th>
                                        <td>اليمن</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('students/view_student.Country_of_birth')}}</th>
                                        <td>اليمن</td>
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
                                      <td>2052354</td>
                                  </tr>
                                  <tr>
                                      <th>{{__('students/view_student.School_Name')}}</th>
                                      <td>ثانوية ابن ماجد</td>
                                  </tr>
                                  <tr>
                                      <th>{{__('students/view_student.High_school_governorate')}}</th>
                                      <td>صنعاء</td>
                                  </tr>
                                  <tr>
                                      <th>{{__('students/view_student.High_school_directorate')}}</th>
                                      <td>الوحدة</td>
                                  </tr>
                                  <tr>
                                      <th>{{__('students/view_student.Graduation_year')}}</th>
                                      <td>2019</td>
                                  </tr>
                                  <tr>
                                      <th>{{__('students/view_student.High_school_type.High_school_type')}}</th>
                                      <td>علمي</td>
                                  </tr>
                                  <tr>
                                      <th>{{__('students/view_student.Total_scores')}}</th>
                                      <td>800</td>
                                  </tr>
                                  <tr>
                                      <th>{{__('students/view_student.High_school_percentage')}}</th>
                                      <td>84</td>
                                  </tr>
                                  <tr>
                                      <th>{{__('students/view_student.The_maxmim_degree')}}</th>
                                      <td>100</td>
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
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> - </td>
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