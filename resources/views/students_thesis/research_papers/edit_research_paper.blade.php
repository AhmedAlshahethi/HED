@extends('layout.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">{{ __('students_thesis/shared.Home_Thesis.Edit_Thesis') }}</li>
                        <li class="breadcrumb-item active"><a
                                href="{{ route('students_papers') }}">{{ __('students_thesis/shared.Screen_Thesis') }}</a>
                        </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <form method="POST" action="{{ route('update_research_paper') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $researchPaper->id }}">
        <input type="hidden" name="seminar_id" value="{{ $seminar->id }}">
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title"
                            style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left' }}">
                            {{ __('students_thesis/shared.Thesis_Title.Edit_Thesis_Data') }}</h3>
                        <div class="card-tools"
                            style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right' }}">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="max-height: 600px; overflow-y: auto;">
                        <table class="table table-head-fixed text-nowrap" id="dynamicAddRemove">
                            <thead>
                                <tr>
                                    <th colspan="2">
                                        {{ __('shared/shared.Student_Name') }} : {{ $seminar->students->name }}
                                    </th>
                                    <th colspan="2">
                                        {{ __('shared/shared.Student_Id') }} : 21160021
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>{{ __('students_thesis/thesis.Thesis_Title') }}</label>
                                        <input type="text" class="form-control" placeholder="{{ $seminar->title }}"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>{{ __('students_thesis/thesis.Score') }}</label>
                                        <input type="text" name="score" class="form-control"
                                            value="{{ $researchPaper->score }}">
                                        @error('score')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('students_thesis/thesis.Section_Approvement_Date') }}</label>
                                    <div class="input-group date" id="section_approvement_date" data-target-input="nearest">
                                        <input name="section_approvement_date"
                                            value="{{ $researchPaper->section_approvement_date }}" type="text"
                                            class="form-control datetimepicker-input"
                                            data-target="#section_approvement_date"
                                            placeholder="{{ __('students_thesis/thesis.Section_Approvement_Date') }}" />
                                        <div class="input-group-append" data-target="#section_approvement_date"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    @error('section_approvement_date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>{{ __('students_thesis/thesis.Section_Approvement_Number') }}</label>
                                        <input name="section_approvement_number"
                                            value="{{ $researchPaper->section_approvement_number }}" type="text"
                                            class="form-control"
                                            placeholder="{{ __('students_thesis/thesis.Section_Approvement_Number') }}">
                                        @error('section_approvement_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('students_thesis/thesis.College_Approvement_Date') }}</label>
                                    <div class="input-group date" id="college_approvement_date" data-target-input="nearest">
                                        <input name="college_approvement_date"
                                            value="{{ $researchPaper->college_approvement_date }}" type="text"
                                            class="form-control datetimepicker-input"
                                            data-target="#college_approvement_date"
                                            placeholder="{{ __('students_thesis/thesis.College_Approvement_Date') }}" />
                                        <div class="input-group-append" data-target="#college_approvement_date"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    @error('college_approvement_date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>{{ __('students_thesis/thesis.College_Approvement_Number') }}</label>
                                        <input name="college_approvement_number"
                                            value="{{ $researchPaper->college_approvement_number }}" type="text"
                                            class="form-control"
                                            placeholder="{{ __('students_thesis/thesis.College_Approvement_Number') }}">
                                        @error('college_approvement_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">{{ __('students_thesis/thesis.Thesis_File') }}</label>
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input name="file_path" type="file" class="custom-file-input"
                                                id="customFile">
                                            <label class="custom-file-label <?php echo app()->getLocale() === 'ar' ? 'rtl-file-label' : 'ltr-file-label'; ?>"
                                                for="customFile">{{ __('students_thesis/thesis.Thesis_File') }}</label>
                                        </div>
                                    </div>
                                    @error('file_path')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>{{ __('students_thesis/thesis.Notes') }}</label>
                                        <textarea name="notes" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">{{ __('shared/shared.Save') }}</button>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </form>
@endsection
