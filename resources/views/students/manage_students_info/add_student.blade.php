@extends('layout.master')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">{{__('students/add_student.Home')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('students_info')}}">{{__('students/add_student.Screen')}}</a></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <form method="POST">
      @csrf
      <section class="content">
        <div class="container-fluid">
          <!-- SELECT2 EXAMPLE -->
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('students/add_student.Student_Registeration_Type')}}</h3>
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
                            @foreach ($academicLevels as $key => $level)
                            <option value="{{$key}}">{{$level}}</option>
                            @endforeach 
                            </select>
                            @error('registration_type')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <div class="form-group">
                        <label>{{__('students/add_student.Section_Type')}}</label>
                        <select class="form-control">
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
                  <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('students/add_student.Student_information_data')}}</h3>
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
                                <label>{{__('students/add_student.Student_Name')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/add_student.Student_Name')}}">
                                @error('name')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label>{{__('students/add_student.Student_BirthDate')}}</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"
                                placeholder="{{__('students/add_student.Student_BirthDate')}}"/>
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                            @error('birthdate')
                                  <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div> 
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/add_student.Identity_type.Identity_type')}}</label>
                                <select class="form-control">
                                    <option>{{__('students/add_student.Identity_type.option 1')}}</option>
                                    <option>{{__('students/add_student.Identity_type.option 2')}}</option>
                                  </select>
                                  @error('Identity_type')
                                     <span class="text-danger">{{ $message }}</span>
                                   @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/add_student.Identity_Number')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/add_student.Identity_Number')}}">
                                @error('identity_number')
                                     <span class="text-danger">{{ $message }}</span>
                                   @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/add_student.Nationality')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/add_student.Nationality')}}">
                                @error('nationality')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/add_student.Country_of_Nationality')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/add_student.Country_of_Nationality')}}">
                                @error('nationality_country')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/add_student.Sex.Sex')}}</label>
                                <select class="form-control">
                                    <option>{{__('students/add_student.Sex.option 1')}}</option>
                                    <option>{{__('students/add_student.Sex.option 2')}}</option>
                                  </select>
                                  @error('gender')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/add_student.blood_type.blood_type')}}</label>
                                <select class="form-control">
                                    <option>{{__('students/add_student.blood_type.option 1')}}</option>
                                    <option>{{__('students/add_student.blood_type.option 2')}}</option>
                                  </select>
                                  @error('blood_type')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/add_student.Governorate')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/add_student.Governorate')}}">
                                @error('city')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/add_student.Directorate')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/add_student.Directorate')}}">
                                @error('district')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class="form-group">
                              <label>{{__('students/add_student.BirthPlace')}}</label>
                              <input type="text" class="form-control" placeholder="{{__('students/add_student.BirthPlace')}}">
                              @error('birth_place')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
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
                  <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('students/add_student.Student_contact_information')}}</h3>
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
                                <label>{{__('students/add_student.Email')}}</label>
                                <input type="email" class="form-control" placeholder="{{__('students/add_student.Email')}}">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>{{__('students/add_student.Phone_Number')}}</label>
                        <div class="input-group">
                          <input type="text" class="form-control" data-inputmask='"mask": "999999999"' data-mask
                          placeholder="{{__('students/add_student.Phone_Number')}}">
                        </div>
                        @error('phone_number')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                        <!-- /.input group -->
                      </div>
                  </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/add_student.Address')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/add_student.Address')}}">
                                @error('address')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
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
                  <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('students/add_student.High_school_information')}}</h3>
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
                                <label>{{__('students/add_student.School_Name')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/add_student.School_Name')}}">
                                @error('high_school_name')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/add_student.Student_School_ID')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/add_student.Student_School_ID')}}">
                                @error('high_school_exam_id')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/add_student.High_school_governorate')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/add_student.High_school_governorate')}}">
                                @error('high_school_city')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/add_student.High_school_directorate')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/add_student.High_school_directorate')}}">
                                @error('high_school_district')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/add_student.Graduation_year')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/add_student.Graduation_year')}}">
                                @error('high_school_graduation_year')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/add_student.High_school_type.High_school_type')}}</label>
                                <select class="form-control">
                                    <option>{{__('students/add_student.High_school_type.option 1')}}</option>
                                    <option>{{__('students/add_student.High_school_type.option 2')}}</option>
                                  </select>
                                  @error('high_school_type')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/add_student.Total_scores')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/add_student.Total_scores')}}">
                                @error('high_school_total_score')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/add_student.High_school_percentage')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/add_student.High_school_percentage')}}">
                                @error('high_school_total_percentage')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/add_student.The_maxmim_degree')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/add_student.The_maxmim_degree')}}">
                                @error('high_school_max_score')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
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
                  <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('students/add_student.Student_information_in_English')}}</h3>
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
                                <label>{{__('students/add_student.student_Name')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/add_student.student_Name')}}">
                                @error('english_name')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/add_student.Place_of_Birth')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/add_student.Place_of_Birth')}}">
                                @error('english_birth_place')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
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
                  <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('students/add_student.Data_of_previous_university_qualification')}}</h3>
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
                                <label>{{__('students/add_student.University_Name')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/add_student.University_Name')}}">
                                @error('university')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/add_student.College_Name')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/add_student.College_Name')}}">
                                @error('college')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class="form-group">
                              <label>{{__('students/add_student.Section.Section')}}</label>
                              <input type="text" class="form-control" placeholder="{{__('students/add_student.Section.Section')}}">
                              @error('college_department')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label>{{__('students/add_student.Major.Major')}}</label>
                            <input type="text" class="form-control" placeholder="{{__('students/add_student.Major.Major')}}">
                            @error('major_name')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                          </div>
                    </div>
                </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('students/add_student.percentage')}}</label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="{{__('students/add_student.percentage')}}">
                                @error('total_percentage')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/add_student.General_appreciation.General_appreciation')}}</label>
                                <select class="form-control">
                                    <option>{{__('students/add_student.General_appreciation.option 1')}}</option>
                                    <option>{{__('students/add_student.General_appreciation.option 2')}}</option>
                                  </select>
                                  @error('general_grade')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/add_student.Name_of_qualification.Name_of_qualification')}}</label>
                                <select class="form-control">
                                    <option>{{__('students/add_student.Name_of_qualification.option 1')}}</option>
                                    <option>{{__('students/add_student.Name_of_qualification.option 2')}}</option>
                                  </select>
                                  @error('registration_type')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/add_student.Graduation_Year')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/add_student.Graduation_Year')}}">
                                @error('graduation_year')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/add_student.Graduation_country')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/add_student.Graduation_country')}}">
                                @error('graduation_country')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>{{__('students/add_student.Country_of_birth')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('students/add_student.Country_of_birth')}}">
                                @error('total_percentage')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
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
                        <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('students/add_student.Fees')}}</h3>
                        <div class="card-tools"  style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}" >
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
                                                  <input type="text" class="form-control" placeholder="{{__('students/add_student.Student_Fees')}}">
                                                  <div class="input-group-append">
                                                      <span class="input-group-text">{{__('students/add_student.Student_Fees')}}</span>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          </th>
                                        </tr>
                                        <tr>
                                            <th>{{__('students/add_student.Coordination_Fees')}}</th>
                                            <th>{{__('students/add_student.Bond_No')}}</th>
                                            <th>{{__('students/add_student.Date_of_payment')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody id="dynamicAddRemove_2">
                                        <tr>
                                            <td>
                                              <div>
                                                <input type="text" name="B[0][B]" class="form-control" placeholder="{{__('students/add_student.Coordination_Fees')}}">
                                              </div>
                                            </td>
                                            <td>
                                              <div>
                                                <input type="text" name="C[0][C]" class="form-control" placeholder="{{__('students/add_student.Bond_No')}}">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="text" name="D[0][D]" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask
                                                placeholder="{{__('students/add_student.Date_of_payment')}}">
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
          {{-- <section class="content">
            <div class="container-fluid">
              <!-- SELECT2 EXAMPLE -->
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('students/add_student.Documents')}}</h3>
                  <div class="card-tools"  style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="float-left">
                      <button type="button" id="dynamic-ar_3" class="btn btn-block btn-primary">{{__('students/add_student.Add_Document')}}</button>
                    </div>
                    <div class="card-body table-responsive p-0" style="max-height: 400px; overflow-y: auto;">
                      <table class="table table-hover text-nowrap" id="dynamicAddRemove">
                          <thead>
                              <tr>
                                  <th>{{__('students/add_student.Document_Title')}}</th>
                                  <th>{{__('students/add_student.Document_Number')}}</th>
                                  <th>{{__('students/add_student.Received_Date')}}</th>
                                  <th>{{__('students/add_student.Document_type.Document_type')}}</th>
                                  <th></th>
                              </tr>
                          </thead>
                          <tbody id="dynamicAddRemove_3">
                              <tr>
                                  <td>
                                    <div>
                                      <input type="text" name="Doc_title[0][title]" class="form-control" placeholder="{{__('students/add_student.Document_Title')}}">
                                    </div>
                                  </td>
                                  <td>
                                    <div>
                                      <input type="text" name="Doc_num[0][number]" class="form-control" placeholder="{{__('students/add_student.Document_Number')}}">
                                    </div>
                                  </td>
                                  <td>
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                      </div>
                                      <input type="text" name="Doc_date[0][date]" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                    </div>
                                  </td>
                                  <td>
                                    <select class="custom-select" name="Doc_type[0][type]">
                                      <option>option 1</option>
                                      <option>option 2</option>
                                      <option>option 3</option>
                                      <option>option 4</option>
                                      <option>option 5</option>
                                    </select>
                                  </td>
                                  <td class="project-actions text-right">
                                      <a class="btn btn-danger btn-sm text-white">
                                          <i class="fas fa-trash"></i>
                                          {{__('schedules/add_schedule.Lectures_Table.Delete')}}
                                      </a>
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
          </section> --}}
          <section class="content">
            <div class="container-fluid">
              <!-- SELECT2 EXAMPLE -->
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('students/add_student.Notes')}}</h3>
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
                                <label>{{__('students/add_student.Notes')}}</label>
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

{{-- <div class="col-sm-6">
    <!-- textarea -->
    <div class="form-group">
      <label>Textarea</label>
      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
    </div>
  </div> --}}

{{-- <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">Student information data</h3>
          <div class="card-tools"  style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}" >
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            
            
          </div>
        </div>
      </div>
      <!-- /.card -->
    </div>
    <!-- /.container-fluid -->
  </section> --}}
<!-- date-range-picker -->

  {{-- <script>
   $(function () {

    //Date picker
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    });

  </script> --}}





{{-- <div class="card-body">
    <div class="row">
      <div class="col-2">
        <a href="">
            <button type="button" class="btn btn-block btn-primary">Add Instructor</button>
            </a>
      </div>
      <div class="col-2">
        <a href="">
            <button type="button" class="btn btn-block btn-primary">Add Instructor</button>
            </a>
      </div>
      <div class="col-2">
        <a href="">
            <button type="button" class="btn btn-block btn-primary">Add Instructor</button>
            </a>
      </div>
    </div>
  </div> --}}


  {{-- <div class="col-md-6">
    <div class="form-group">
        <div class="form-group">
            <label>{{__('students/add_student.section.section')}}</label>
            <select class="form-control">
                <option>{{__('students/add_student.section.option 1')}}</option>
                <option>{{__('students/add_student.section.option 2')}}</option>
              </select>
          </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <div class="form-group">
            <label>{{__('students/add_student.Coordination_amount')}}</label>
            <input type="text" class="form-control" placeholder="{{__('students/add_student.Coordination_amount')}}">
          </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <div class="form-group">
            <label>{{__('students/add_student.Portfolio_number')}}</label>
            <input type="text" class="form-control" placeholder="{{__('students/add_student.Portfolio_number')}}">
          </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <div class="form-group">
            <label>{{__('students/add_student.Bond_No')}}</label>
            <input type="text" class="form-control" placeholder="{{__('students/add_student.Bond_No')}}">
          </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <div class="form-group">
            <label>{{__('students/add_student.Date_of_payment')}}</label>
            <input type="text" class="form-control" placeholder="{{__('students/add_student.Date_of_payment')}}">
          </div>
    </div>
</div>  --}}


{{-- <div class="col-md-6">
  <div class="form-group">
      <div class="form-group">
          <label>{{__('students/add_student.Document_type.Document_type')}}</label>
          <select class="form-control">
              <option>{{__('students/add_student.Document_type.option 1')}}</option>
              <option>{{__('students/add_student.Document_type.option 1')}}</option>
            </select>
        </div>
  </div>
</div>
<div class="col-md-6">
  <div class="form-group">
      <div class="form-group">
          <label>{{__('students/add_student.Document_Title')}}</label>
          <input type="text" class="form-control" placeholder="{{__('students/add_student.Document_Title')}}">
        </div>
  </div>
</div>
<div class="col-md-6">
  <div class="form-group">
      <div class="form-group">
          <label>{{__('students/add_student.Document_Number')}}</label>
          <input type="text" class="form-control" placeholder="{{__('students/add_student.Document_Number')}}">
        </div>
  </div>
</div>
<div class="col-md-6">
  <div class="form-group">
      <div class="form-group">
          <label>{{__('students/add_student.Received_Date')}}</label>
          <input type="text" class="form-control" placeholder="{{__('students/add_student.Received_Date')}}">
        </div>
  </div>
</div> --}}