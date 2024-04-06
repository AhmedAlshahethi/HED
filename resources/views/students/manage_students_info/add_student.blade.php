@extends('layout.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">{{ __('students/add_student.Home') }}</li>
                        <li class="breadcrumb-item active"><a
                                href="{{ route('students_info') }}">{{ __('students/add_student.Screen') }}</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <form method="POST" action="{{ route('store_student') }}">
        @csrf
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
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
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>{{ __('students/add_student.Academic_Level') }}</label>
                                        <select name="registration_type" class="form-control">
                                            @foreach ($academicLevels as $key => $level)
                                                <option value="{{ $level }}"
                                                    @if (old('registration_type') == $level) selected @endif>{{ $level }}
                                                </option>
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
                                            @foreach ($departments as $department)
                                                <option value="{{ $department->id }}"
                                                    @if (old('department_id') == $department->id) selected @endif>
                                                    {{ $department->name }}</option>
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
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>{{ __('students/add_student.Student_Name') }}</label>
                                        <input type="text" name="name" value="{{ old('name') }}"
                                            class="form-control"
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
                                        <input type="date" name="birthdate"
                                            value="{{ old('birthdate') ? date('mm/dd/YYYY', strtotime(old('birthdate'))) : '' }}"
                                            class="form-control datepicker-input" data-target="#reservationdate"
                                            placeholder="{{ __('students/add_student.Student_BirthDate') }}" />
                                        <div class="input-group-append" data-target="#reservationdate"
                                            data-toggle="datepicker">
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
                                            @foreach ($identityTypes as $key => $identity)
                                                <option value="{{ $identity }}"
                                                    @if (old('Identity_type') == $identity) selected @endif>{{ $identity }}
                                                </option>
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
                                        <input type="text" name="identity_number" value="{{ old('identity_number') }}"
                                            class="form-control"
                                            placeholder="{{ __('students/add_student.Identity_Number') }}">
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
                                        <input type="text" name="nationality" value="{{ old('nationality') }}"
                                            class="form-control"
                                            placeholder="{{ __('students/add_student.Nationality') }}">
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
                                        <input type="text" name="nationality_country"
                                            value="{{ old('nationality_country') }}" class="form-control"
                                            placeholder="{{ __('students/add_student.Country_of_Nationality') }}">
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
                                            @foreach ($genders as $key => $gender)
                                                <option value="{{ $gender }}"
                                                    @if (old('gender') == $gender) selected @endif>{{ $gender }}
                                                </option>
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
                                            @foreach ($bloodTypes as $key => $type)
                                                <option value="{{ $type }}"
                                                    @if (old('blood_type') == $type) selected @endif>{{ $type }}
                                                </option>
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
                                        <input type="text" name="city" value="{{ old('city') }}"
                                            class="form-control"
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
                                        <input type="text" name="district" value="{{ old('district') }}"
                                            class="form-control"
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
                                        <input type="text" name="birth_place" value="{{ old('birth_place') }}"
                                            class="form-control"
                                            placeholder="{{ __('students/add_student.BirthPlace') }}">
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
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>{{ __('students/add_student.Email') }}</label>
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            class="form-control" placeholder="{{ __('students/add_student.Email') }}">
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
                                        <input type="text" name="phone_number" value="{{ old('phone_number') }}"
                                            class="form-control" data-inputmask='"mask": "999999999"' data-mask
                                            placeholder="{{ __('students/add_student.Phone_Number') }}">
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
                                        <label>{{ __('students/add_student.Address') }}</label>
                                        <input type="text" name="address" value="{{ old('address') }}"
                                            class="form-control" placeholder="{{ __('students/add_student.Address') }}">
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
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>{{ __('students/add_student.School_Name') }}</label>
                                        <input type="text" name="high_school_name"
                                            value="{{ old('high_school_name') }}" class="form-control"
                                            placeholder="{{ __('students/add_student.School_Name') }}">
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
                                        <input type="text" name="high_school_exam_id"
                                            value="{{ old('high_school_exam_id') }}" class="form-control"
                                            placeholder="{{ __('students/add_student.Student_School_ID') }}">
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
                                        <input type="text" name="high_school_city"
                                            value="{{ old('high_school_city') }}" class="form-control"
                                            placeholder="{{ __('students/add_student.High_school_governorate') }}">
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
                                        <input type="text" name="high_school_district"
                                            value="{{ old('high_school_district') }}" class="form-control"
                                            placeholder="{{ __('students/add_student.High_school_directorate') }}">
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
                                            value="{{ old('high_school_graduation_year') }}" class="form-control"
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
                                            @foreach ($highSchoolTypes as $key => $type)
                                                <option value="{{ $type }}"
                                                    @if (old('high_school_type') == $type) selected @endif>{{ $type }}
                                                </option>
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
                                            value="{{ old('high_school_total_score') }}" class="form-control"
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
                                            value="{{ old('high_school_total_percentage') }}" class="form-control"
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
                                            value="{{ old('high_school_max_score') }}" class="form-control"
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
                <!-- /.card -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
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
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>{{ __('students/add_student.student_Name') }}</label>
                                        <input type="text" name="english_name" value="{{ old('english_name') }}"
                                            class="form-control"
                                            placeholder="{{ __('students/add_student.student_Name') }}">
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
                                        <input type="text" name="english_birth_place"
                                            value="{{ old('english_birth_place') }}" class="form-control"
                                            placeholder="{{ __('students/add_student.Place_of_Birth') }}">
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
                                        <input type="text" name="english_address" value="{{ old('english_address') }}"
                                            class="form-control"
                                            placeholder="{{ __('students/add_student.english_address') }}">
                                        @error('english_address')
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
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>{{ __('students/add_student.University_Name') }}</label>
                                        <input type="text" name="university" value="{{ old('university') }}"
                                            class="form-control"
                                            placeholder="{{ __('students/add_student.University_Name') }}">
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
                                        <input type="text" name="college" value="{{ old('college') }}"
                                            class="form-control"
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
                                        <input type="text" name="college_department" value="college_department"
                                            class="form-control"
                                            placeholder="{{ __('students/add_student.Section.Section') }}">
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
                                        <input type="text" name="major_name" value="{{ old('major_name') }}"
                                            class="form-control"
                                            placeholder="{{ __('students/add_student.Major.Major') }}">
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
                                        <input type="text" name="total_percentage"
                                            value="{{ old('total_percentage') }}" class="form-control"
                                            placeholder="{{ __('students/add_student.percentage') }}">
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
                                            @foreach ($generalGrades as $key => $grade)
                                                <option value="{{ $grade }}"
                                                    @if (old('general_grade') == $grade) selected @endif>{{ $grade }}
                                                </option>
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
                                            @foreach ($academicLevels as $key => $level)
                                                <option value="{{ $level }}"
                                                    @if (old('last_degree') == $level) selected @endif>{{ $level }}
                                                </option>
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
                                        <input type="text" name="graduation_year"
                                            value="{{ old('graduation_year') }}" class="form-control"
                                            placeholder="{{ __('students/add_student.Graduation_Year') }}">
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
                                        <input type="text" name="graduation_country"
                                            value="{{ old('graduation_country') }}" class="form-control"
                                            placeholder="{{ __('students/add_student.Graduation_country') }}">
                                        @error('graduation_country')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>{{ __('students/add_student.Country_of_birth') }}</label>
                                        <input type="text" class="form-control"
                                            placeholder="{{ __('students/add_student.Country_of_birth') }}">
                                        @error('total_percentage')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.container-fluid -->
        </section>
         
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
                                        <input type="text" name="fees" value="{{ old('fees') }}"
                                            class="form-control"
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
       
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
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
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>{{ __('students/add_student.Notes') }}</label>
                                        <input name="notes" type="text" class="form-control" rows="3" placeholder="Enter ...">
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
                <button type="submit" class="btn btn-success">{{ __('shared/shared.Save') }}</button>
            </div>
        </div>
    </form>
@endsection
