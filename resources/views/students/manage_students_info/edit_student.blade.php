@extends('layout.master')

@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3>
            <button type="button" class="btn btn-success">
              <i class="fas fa-print"> {{ __('shared/shared.Print') }}</i>
            </button>
          </h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">{{ __('students/edit_student.Home') }}</li>
            <li class="breadcrumb-item active"><a
                href="{{ route('students_info') }}">{{ __('students/edit_student.Screen') }}</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <form method="POST" action="{{ route('update_student', $student) }}">
    @csrf
    <div class="row" style="margin: 0">
      <div class="col-md-6">
        {{-- Student Registeration Type --}}
        <section class="content">
          <div class="container-fluid">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title"
                  style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left' }}">
                  {{ __('students/add_student.Student_Registeration_Type') }}</h3>
                <div class="card-tools"
                  style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right' }}">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.Academic_Number') }}</label>
                        <input type="number" name="academic_number" value="{{ $student->academic_number }}"
                          class="form-control" placeholder="{{ __('students/add_student.Academic_Number') }}">
                        @error('name')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.Academic_Level') }}</label>
                        <select name="registration_type" class="form-control">
                          <option value="{{ $student->registration_type }}"
                            @if (old('registration_type') == $student->registration_type) selected @endif>
                            {{ $student->registration_type }}
                          </option>
                          @foreach ($academicLevels as $key => $level)
                            @if ($level == $student->registration_type)
                              @continue
                            @else
                              <option value="{{ $level }}" @if (old('registration_type') == $level) selected @endif>
                                {{ $level }}
                              </option>
                            @endif
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
                        <label>{{ __('students/add_student.Section_Type') }}</label>
                        <select name="department_id" class="form-control">
                          <option value="{{ $student->department_id }}"
                            @if (old('department_id') == $student->department_id) selected @endif>
                            {{ $student->departments->name }}</option>
                          @foreach ($departments as $department)
                            @if ($student->department_id == $department->id)
                              @continue
                            @else
                              <option value="{{ $department->id }}" @if (old('department_id') == $department->id) selected @endif>
                                {{ $department->name }}</option>
                            @endif
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
          </div>
        </section>

        {{-- Fees --}}
        <section class="content">
          <div class="container-fluid">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title"
                  style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left' }}">
                  {{ __('students/add_student.Fees') }}</h3>
                <div class="card-tools"
                  style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right' }}">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.Student_Fees') }}</label>
                        <input type="text" name="fees" value="{{ $student->fees }}" class="form-control"
                          placeholder="{{ __('students/add_student.Student_Fees') }}">
                        @error('fees')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        {{-- Notes --}}
        <section class="content">
          <div class="container-fluid">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title"
                  style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left' }}">
                  {{ __('students/add_student.Notes') }}</h3>
                <div class="card-tools"
                  style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right' }}">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.Notes') }}</label>
                        <textarea name="notes" value="{{ $student->notes }}" type="text" class="form-control" rows="3"
                          placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        {{-- Student Contact Information --}}
        <section class="content">
          <div class="container-fluid">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title"
                  style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left' }}">
                  {{ __('students/add_student.Student_contact_information') }}</h3>
                <div class="card-tools"
                  style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right' }}">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.Email') }}</label>
                        <input type="email" name="email" value="{{ $student->email }}" class="form-control"
                          placeholder="{{ __('students/add_student.Email') }}">
                        @error('email')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>{{ __('students/add_student.Phone_Number') }}</label>
                      <div class="input-group">
                        <input type="text" name="phone_number" value="{{ $student->phone_number }}"
                          class="form-control" placeholder="{{ __('students/add_student.Phone_Number') }}">
                      </div>
                      @error('phone_number')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.Address') }}</label>
                        <input type="text" name="address" value="{{ $student->address }}" class="form-control"
                          placeholder="{{ __('students/add_student.Address') }}">
                        @error('address')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        {{-- High School Information --}}
        <section class="content">
          <div class="container-fluid">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title"
                  style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left' }}">
                  {{ __('students/add_student.High_school_information') }}</h3>
                <div class="card-tools"
                  style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right' }}">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.School_Name') }}</label>
                        <input type="text" name="high_school_name" value="{{ $student->high_school_name }}"
                          class="form-control" placeholder="{{ __('students/add_student.School_Name') }}">
                        @error('high_school_name')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.Student_School_ID') }}</label>
                        <input type="text" name="high_school_exam_id" value="{{ $student->high_school_exam_id }}"
                          class="form-control" placeholder="{{ __('students/add_student.Student_School_ID') }}">
                        @error('high_school_exam_id')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.High_school_governorate') }}</label>
                        <input type="text" name="high_school_city" value="{{ $student->high_school_city }}"
                          class="form-control" placeholder="{{ __('students/add_student.High_school_governorate') }}">
                        @error('high_school_city')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.High_school_directorate') }}</label>
                        <input type="text" name="high_school_district" value="{{ $student->high_school_district }}"
                          class="form-control" placeholder="{{ __('students/add_student.High_school_directorate') }}">
                        @error('high_school_district')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.Graduation_year') }}</label>
                        <input type="text" name="high_school_graduation_year"
                          value="{{ $student->high_school_graduation_year }}" class="form-control"
                          placeholder="{{ __('students/add_student.Graduation_year') }}">
                        @error('high_school_graduation_year')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.High_school_type.High_school_type') }}</label>
                        <select name="high_school_type" class="form-control">
                          <option value="{{ $student->high_school_type }}"
                            @if (old('high_school_type') == $student->high_school_type) selected @endif>{{ $student->high_school_type }}
                          </option>
                          @foreach ($highSchoolTypes as $key => $type)
                            @if ($student->high_school_type == $type)
                              @continue
                            @else
                              <option value="{{ $type }}" @if (old('high_school_type') == $type) selected @endif>
                                {{ $type }}
                              </option>
                            @endif
                          @endforeach
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
                        <label>{{ __('students/add_student.Total_scores') }}</label>
                        <input type="text" name="high_school_total_score"
                          value="{{ $student->high_school_total_score }}" class="form-control"
                          placeholder="{{ __('students/add_student.Total_scores') }}">
                        @error('high_school_total_score')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.High_school_percentage') }}</label>
                        <input type="text" name="high_school_total_percentage"
                          value="{{ $student->high_school_total_percentage }}" class="form-control"
                          placeholder="{{ __('students/add_student.High_school_percentage') }}">
                        @error('high_school_total_percentage')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.The_maxmim_degree') }}</label>
                        <input type="text" name="high_school_max_score"
                          value="{{ $student->high_school_max_score }}" class="form-control"
                          placeholder="{{ __('students/add_student.The_maxmim_degree') }}">
                        @error('high_school_max_score')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div class="col-md-6">
        {{-- Student Information Data --}}
        <section class="content">
          <div class="container-fluid">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title"
                  style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left' }}">
                  {{ __('students/add_student.Student_information_data') }}</h3>
                <div class="card-tools"
                  style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right' }}">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.Student_Name') }}</label>
                        <input type="text" name="name" value="{{ $student->name }}" class="form-control"
                          placeholder="{{ __('students/add_student.Student_Name') }}">
                        @error('name')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>{{ __('students/add_student.Student_BirthDate') }}</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="date" name="birthdate" value="{{ $student->birthdate }}"
                          class="form-control datepicker-input" data-target="#reservationdate"
                          placeholder="{{ __('students/add_student.Student_BirthDate') }}" />
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datepicker">
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
                        <label>{{ __('students/add_student.Identity_type.Identity_type') }}</label>
                        <select name="Identity_type" class="form-control">
                          <option value="{{ $student->Identity_type }}">{{ $student->Identity_type }}</option>
                          @foreach ($identityTypes as $key => $identity)
                            @if ($student->Identity_type == $identity)
                              @continue
                            @else
                              <option value="{{ $identity }}" @if (old('Identity_type') == $identity) selected @endif>
                                {{ $identity }}
                              </option>
                            @endif
                          @endforeach
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
                        <label>{{ __('students/add_student.Identity_Number') }}</label>
                        <input type="text" name="identity_number" value="{{ $student->identity_number }}"
                          class="form-control" placeholder="{{ __('students/add_student.Identity_Number') }}">
                        @error('identity_number')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.Nationality') }}</label>
                        <input type="text" name="nationality" value="{{ $student->nationality }}"
                          class="form-control" placeholder="{{ __('students/add_student.Nationality') }}">
                        @error('nationality')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.Country_of_Nationality') }}</label>
                        <input type="text" name="nationality_country" value="{{ $student->nationality_country }}"
                          class="form-control" placeholder="{{ __('students/add_student.Country_of_Nationality') }}">
                        @error('nationality_country')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.Sex.Sex') }}</label>
                        <select name="gender" class="form-control">
                          <option value="{{ $student->gender }}" @if (old('gender') == $student->gender) selected @endif>
                            {{ $student->gender }}
                          </option>
                          @foreach ($genders as $key => $gender)
                            @if ($student->gender == $gender)
                              @continue
                            @else
                              <option value="{{ $gender }}" @if (old('gender') == $gender) selected @endif>
                                {{ $gender }}
                              </option>
                            @endif
                          @endforeach
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
                        <label>{{ __('students/add_student.blood_type.blood_type') }}</label>
                        <select name="blood_type" class="form-control">
                          <option value="{{ $student->blood_type }}"
                            @if (old('blood_type') == $student->blood_type) selected @endif>
                            {{ $student->blood_type }}
                          </option>
                          @foreach ($bloodTypes as $key => $type)
                            @if ($student->blood_type == $type)
                              @continue
                            @else
                              <option value="{{ $type }}" @if (old('blood_type') == $type) selected @endif>
                                {{ $type }}
                              </option>
                            @endif
                          @endforeach
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
                        <label>{{ __('students/add_student.Governorate') }}</label>
                        <input type="text" name="city" value="{{ $student->city }}" class="form-control"
                          placeholder="{{ __('students/add_student.Governorate') }}">
                        @error('city')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.Directorate') }}</label>
                        <input type="text" name="district" value="{{ $student->district }}" class="form-control"
                          placeholder="{{ __('students/add_student.Directorate') }}">
                        @error('district')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.BirthPlace') }}</label>
                        <input type="text" name="birth_place" value="{{ $student->birth_place }}"
                          class="form-control" placeholder="{{ __('students/add_student.BirthPlace') }}">
                        @error('birth_place')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        {{-- Data of Previous University Qualification --}}
        <section class="content">
          <div class="container-fluid">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title"
                  style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left' }}">
                  {{ __('students/add_student.Data_of_previous_university_qualification') }}</h3>
                <div class="card-tools"
                  style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right' }}">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.University_Name') }}</label>
                        <input type="text" name="university" value="{{ $student->university }}"
                          class="form-control" placeholder="{{ __('students/add_student.University_Name') }}">
                        @error('university')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.College_Name') }}</label>
                        <input type="text" name="college" value="{{ $student->college }}" class="form-control"
                          placeholder="{{ __('students/add_student.College_Name') }}">
                        @error('college')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.Section.Section') }}</label>
                        <input type="text" name="college_department" value="{{ $student->college_department }}"
                          class="form-control" placeholder="{{ __('students/add_student.Section.Section') }}">
                        @error('college_department')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.Major.Major') }}</label>
                        <input type="text" name="major_name" value="{{ $student->major_name }}"
                          class="form-control" placeholder="{{ __('students/add_student.Major.Major') }}">
                        @error('major_name')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>{{ __('students/add_student.percentage') }}</label>
                      <div class="form-group">
                        <input type="text" name="total_percentage" value="{{ $student->total_percentage }}"
                          class="form-control" placeholder="{{ __('students/add_student.percentage') }}">
                        @error('total_percentage')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.General_appreciation.General_appreciation') }}</label>
                        <select name="general_grade" class="form-control">
                          <option value="{{ $student->general_grade }}"
                            @if (old('general_grade') == $student->general_grade) selected @endif>{{ $student->general_grade }}
                          </option>
                          @foreach ($generalGrades as $key => $grade)
                            @if ($student->general_grade == $grade)
                              @continue
                            @else
                              <option value="{{ $grade }}" @if (old('general_grade') == $grade) selected @endif>
                                {{ $grade }}
                              </option>
                            @endif
                          @endforeach
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
                        <label>{{ __('students/add_student.Name_of_qualification.Name_of_qualification') }}</label>
                        <select name="last_degree" class="form-control">
                          <option value="{{ $student->last_degree }}"
                            @if (old('last_degree') == $student->last_degree) selected @endif>
                            {{ $student->last_degree }}
                          </option>
                          @foreach ($academicLevels as $key => $level)
                            @if ($student->last_degree == $level)
                              @continue
                            @else
                              <option value="{{ $level }}" @if (old('last_degree') == $level) selected @endif>
                                {{ $level }}
                              </option>
                            @endif
                          @endforeach
                        </select>
                        @error('last_degree')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.Graduation_Year') }}</label>
                        <input type="text" name="graduation_year" value="{{ $student->graduation_year }}"
                          class="form-control" placeholder="{{ __('students/add_student.Graduation_Year') }}">
                        @error('graduation_year')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.Graduation_country') }}</label>
                        <input type="text" name="graduation_country" value="{{ $student->graduation_country }}"
                          class="form-control" placeholder="{{ __('students/add_student.Graduation_country') }}">
                        @error('graduation_country')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </section>

        {{-- Student Information in English --}}
        <section class="content">
          <div class="container-fluid">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title"
                  style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left' }}">
                  {{ __('students/add_student.Student_information_in_English') }}</h3>
                <div class="card-tools"
                  style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right' }}">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.student_Name') }}</label>
                        <input type="text" name="english_name" value="{{ $student->english_name }}"
                          class="form-control" placeholder="{{ __('students/add_student.student_Name') }}">
                        @error('english_name')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.Place_of_Birth') }}</label>
                        <input type="text" name="english_birth_place" value="{{ $student->english_birth_place }}"
                          class="form-control" placeholder="{{ __('students/add_student.Place_of_Birth') }}">
                        @error('english_birth_place')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>{{ __('students/add_student.english_address') }}</label>
                        <input type="text" name="english_address" value="{{ $student->english_address }}"
                          class="form-control" placeholder="{{ __('students/add_student.english_address') }}">
                        @error('english_address')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <button type="submit" class="btn btn-success">{{ __('shared/shared.Save') }}</button>
      </div>
    </div>
  </form>
@endsection
