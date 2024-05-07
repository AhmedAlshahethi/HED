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
        <input type="hidden" name="research_id" value="{{ $research_id }}">
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
                                <table class="table table-head-fixed text-nowrap" id="journal-table">
                                    <thead>
                                        <tr>
                                            <th>{{ __('students_thesis/journal.Journal_Name') }}</th>
                                            <th>{{ __('students_thesis/journal.Journal_Link') }}</th>
                                            <th>{{ __('students_thesis/journal.Notes') }}</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($journals as $journal)
                                            <tr>
                                                <td>{{ $journal->journal_name }}</td>
                                                <td>{{ $journal->link }}</td>
                                                <td>{{ $journal->notes }}</td>
                                                {{-- <td class="project-actions text-right">

                                                    <a class="btn btn-danger btn-sm text-white edit-button">
                                                        <i class="fas fa-edit"></i>
                                                        {{ __('schedules/add_schedule.Lectures_Table.Edit') }}
                                                    </a>

                                                    <a class="btn btn-danger btn-sm text-white delete-button">
                                                        <i class="fas fa-trash"></i>
                                                        {{ __('schedules/add_schedule.Lectures_Table.Delete') }}
                                                    </a>
                                                </td> --}}
                                                <td class="project-actions text-right">
                                                    <a href="#" class="btn btn-info btn-sm edit-button"
                                                        data-toggle="modal" data-target="#journalModal"
                                                        data-journal-id="{{ $journal->id }}"
                                                        data-journal-name="{{ $journal->journal_name }}"
                                                        data-journal-link="{{ $journal->link }}"
                                                        data-notes="{{ $journal->notes }}">
                                                        <i class="fas fa-pencil-alt"></i>
                                                        {{ __('students_thesis/journal.Edit') }}
                                                    </a>
                                                    {{-- @if (!empty($journal->journal_name)) --}}
                                                    {{-- <form action="{{ route('delete_journal', ['id' => $journal->id]) }}"
                                                        method="POST" id="delete-form">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm text-white"
                                                            onclick="confirmDelete(event)">
                                                            <i class="fas fa-trash"></i>
                                                            {{ __('schedules/add_schedule.Lectures_Table.Delete') }}
                                                        </button>
                                                    </form> --}}
                                                    <a href="{{ route('delete_journal', ['id' => $journal->id]) }}"
                                                        class="btn btn-danger btn-sm text-white delete-button"
                                                        id="delete">
                                                        <i class="fas fa-trash"></i>
                                                        {{ __('schedules/add_schedule.Lectures_Table.Delete') }}
                                                    </a>
                                                    {{-- @endif --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr id="template-row" style="display: none;">
                                            <td>
                                                <div>
                                                    <input type="text" name="journal_name[]" class="form-control"
                                                        placeholder="{{ __('students_thesis/journal.Journal_Name') }}"
                                                        value="{{ old('journal_name') }}">
                                                    @error('journal_name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" name="journal_link[]" class="form-control"
                                                        placeholder="{{ __('students_thesis/journal.Journal_Link') }}"
                                                        value="{{ old('journal_link') }}">
                                                    @error('journal_link')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" name="notes[]" class="form-control"
                                                        placeholder="{{ __('students_thesis/journal.Notes') }}"
                                                        value="{{ old('notes') }}">
                                                    @error('notes')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </td>
                                            <td class="project-actions text-right">
                                                <a class="btn btn-danger btn-sm text-white delete-button">
                                                    <i class="fas fa-trash"></i>
                                                    {{ __('schedules/add_schedule.Lectures_Table.Delete') }}
                                                </a>
                                            </td>
                                        </tr>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add Journal Entry
            document.getElementById('dynamic-ar_5').addEventListener('click', function() {
                var templateRow = document.getElementById('template-row').cloneNode(true);
                templateRow.style.display = 'table-row';
                document.getElementById('journal-table').getElementsByTagName('tbody')[0].appendChild(
                    templateRow);
            });

            // Delete Journal Entry
            document.addEventListener('click', function(event) {
                if (event.target.classList.contains('delete-button')) {
                    var row = event.target.closest('tr');
                    row.parentNode.removeChild(row);
                }
            });
        });
    </script>

    {{-- @push('scripts')
        <script>
            $(document).ready(function() {
                // Edit Button Click Event
                $(document).on('click', '.edit-button', function() {
                    var journalId = $(this).data('journal-id');
                    var journalName = $(this).data('journal-name');
                    var journalLink = $(this).data('journal-link');
                    var notes = $(this).data('notes');

                    $('#journalId').val(journalId);
                    $('#journalName').val(journalName);
                    $('#journalLink').val(journalLink);
                    $('#notes').val(notes);

                    $('#journalModal').modal('show');
                });
            });
        </script>
    @endpush --}}

    @push('scripts')
        <script>
            $(document).ready(function() {
                // Edit Button Click Event
                $(document).on('click', '.edit-button', function() {
                    var journalId = $(this).data('journal-id');
                    var journalName = $(this).data('journal-name');
                    var journalLink = $(this).data('journal-link');
                    var notes = $(this).data('notes');

                    $('#journalId').val(journalId);
                    $('#journalName').val(journalName);
                    $('#journalLink').val(journalLink);
                    $('#notes').val(notes);

                    $('#journalModal').modal('show');
                });

                // Form Submission Event
                $('#journalForm').on('submit', function(event) {
                    event.preventDefault();

                    var form = $(this);
                    var url = form.attr('action');
                    var method = form.attr('method');
                    var formData = form.serialize();

                    $.ajax({
                        url: url,
                        type: method,
                        data: formData,
                        success: function(response) {
                            // Handle successful form submission
                            // You can display a success message or perform any desired action
                            // For example, you can close the modal and refresh the table of journals
                            $('#journalModal').modal('hide');
                            location.reload(); // Refresh the page to update the table
                        },
                        error: function(xhr) {
                            // Handle form submission errors
                            var errors = xhr.responseJSON.errors;

                            // Reset previous error messages
                            $('#journalNameError').text('asa');
                            $('#journalLinkError').text('s');
                            $('#notesError').text('sasa');
                            $('#journalName').removeClass('is-invalid');
                            $('#journalLink').removeClass('is-invalid');
                            $('#notes').removeClass('is-invalid');

                            // Display new error messages
                            if (errors.journal_name) {
                                $('#journalNameError').text(errors.journal_name[0]);
                                $('#journalName').addClass('is-invalid');
                            }
                            if (errors.journal_link) {
                                $('#journalLinkError').text(errors.journal_link[0]);
                                $('#journalLink').addClass('is-invalid');
                            }
                            if (errors.notes) {
                                $('#notesError').text(errors.notes[0]);
                                $('#notes').addClass('is-invalid');
                            }
                        }
                    });
                });

                // Clear Validation Errors on Modal Close
                $('#journalModal').on('hidden.bs.modal', function() {
                    $('#journalForm').trigger('reset');
                    $('#journalNameError').text('');
                    $('#journalLinkError').text('');
                    $('#notesError').text('');
                    $('#journalName').removeClass('is-invalid');
                    $('#journalLink').removeClass('is-invalid');
                    $('#notes').removeClass('is-invalid');
                });
            });
        </script>
    @endpush

    <script>
        function confirmDelete(event) {
            event.preventDefault();

            if (confirm('Are you sure you want to delete this journal?')) {
                document.getElementById('delete-form').submit();
            }
        }
    </script>

    <!-- Add/Edit Journal Modal -->
    <div class="modal fade" id="journalModal" tabindex="-1" role="dialog" aria-labelledby="journalModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="journalModalLabel">{{ __('students_thesis/journal.Add_Edit_Journal') }}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="journalForm" action="{{ route('update_journal') }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="journal_id" id="journalId">
                        <div class="form-group">
                            <label for="journalName">{{ __('students_thesis/journal.Journal_Name') }}</label>
                            <input type="text" class="form-control" id="journalName" name="journal_name"
                                placeholder="{{ __('students_thesis/journal.Journal_Name') }}">
                            <span class="text-danger" id="journalNameError"></span>
                        </div>
                        <div class="form-group">
                            <label for="journalLink">{{ __('students_thesis/journal.Journal_Link') }}</label>
                            <input type="text" class="form-control" id="journalLink" name="journal_link"
                                placeholder="{{ __('students_thesis/journal.Journal_Link') }}">
                            <span class="text-danger" id="journalLinkError"></span>
                        </div>
                        <div class="form-group">
                            <label for="notes">{{ __('students_thesis/journal.Notes') }}</label>
                            <input type="text" class="form-control" id="notes" name="notes"
                                placeholder="{{ __('students_thesis/journal.Notes') }}">
                            <span class="text-danger" id="notesError"></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">{{ __('students_thesis/journal.Cancel') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('students_thesis/journal.Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
