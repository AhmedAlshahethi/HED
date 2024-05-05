@extends('layout.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">{{ __('students_thesis/shared.Home_Journal.Add_Journal') }}</li>
                        <li class="breadcrumb-item active"><a
                                href="{{ route('students_journals') }}">{{ __('students_thesis/shared.Screen_Journal') }}</a>
                        </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <form method="POST" action="{{ route('store_journal') }}">
        @csrf
        <input type="text" name="research_id" value="{{ $research_id }}">
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title"
                            style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left' }}">
                            {{ __('students_thesis/shared.Journal_Title.New_Journal') }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="max-height: 600px; overflow-y: auto;">
                        <table class="table table-head-fixed text-nowrap" id="dynamicAddRemove">
                            <thead>
                                <tr>
                                    <th colspan="2">
                                        {{ __('shared/shared.Student_Name') }} : {{ $student->name }}
                                    </th>
                                    <th colspan="2">
                                        {{ __('shared/shared.Student_Id') }} : 21160021
                                    </th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th colspan="2">
                                        {{ __('students_thesis/shared.Students_table.Thesis_Title') }} :
                                        {{ $seminar->title }}
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="float-left" style="margin-bottom: 20px;">
                                <button type="button" id="dynamic-ar_5"
                                    class="btn btn-block btn-primary">{{ __('students_thesis/journal.Add_Journal') }}</button>
                            </div>
                            <div class="card-body table-responsive p-0" style="max-height: 600px; overflow-y: auto;">
                                <table class="table table-head-fixed text-nowrap" id="dynamicAddRemove">
                                    <thead>
                                        <tr>
                                            <th>{{ __('students_thesis/journal.Journal_Name') }}</th>
                                            <th>{{ __('students_thesis/journal.Journal_Link') }}</th>
                                            <th>{{ __('students_thesis/journal.Notes') }}</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="dynamicAddRemove_5">
                                        @for ($i = 0; $i < count(old('journal_name', [''])); $i++)
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="text"
                                                            name="journal_name[{{ $i }}][journal_name]"
                                                            class="form-control"
                                                            placeholder="{{ __('students_thesis/journal.Journal_Name') }}"
                                                            value="{{ old("journal_name.${i}.journal_name") }}">
                                                        @error("journal_name.${i}.journal_name")
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text"
                                                            name="journal_link[{{ $i }}][journal_link]"
                                                            class="form-control"
                                                            placeholder="{{ __('students_thesis/journal.Journal_Link') }}"
                                                            value="{{ old("journal_link.${i}.journal_link") }}">
                                                        @error("journal_link.${i}.journal_link")
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" name="notes[{{ $i }}][notes]"
                                                            class="form-control"
                                                            placeholder="{{ __('students_thesis/journal.Notes') }}"
                                                            value="{{ old("notes.${i}.notes") }}">
                                                        @error("notes.${i}.notes")
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="project-actions text-right">
                                                    <a class="btn btn-danger btn-sm text-white remove-input-field_5">
                                                        <i class="fas fa-trash"></i>
                                                        {{ __('schedules/add_schedule.Lectures_Table.Delete') }}
                                                    </a>
                                                </td>
                                            </tr>
                                        @endfor
                                    </tbody>

                                </table>
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
