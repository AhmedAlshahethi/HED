@extends('layout.master')

@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">{{ __('students/edit_student.Home_Document') }}</li>
            <li class="breadcrumb-item active"><a
                href="{{ route('students_documents') }}">{{ __('students/edit_student.Screen_Document') }}</a></li>
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
            <h3 class="card-title"
              style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left' }}">
              {{ __('students/add_student.Documents') }}</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="max-height: 600px; overflow-y: auto;">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th colspan="2">
                    {{ __('shared/shared.Student_Name') }} : احمد الشاحذي
                  </th>
                  <th colspan="2">
                    {{ __('shared/shared.Academic_Number') }} : 21160021
                  </th>
                  <th></th>
                </tr>
              </thead>
            </table>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="float-left" style="margin-bottom: 20px;">
                <button type="button" id="dynamic-ar_3"
                  class="btn btn-block btn-primary">{{ __('students/add_student.Add_Document') }}</button>
              </div>
              <div class="card-body table-responsive p-0" style="max-height: 600px; overflow-y: auto;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>{{ __('students/add_student.Document_Number') }}</th>
                      <th>{{ __('students/add_student.Received_Date') }}</th>
                      <th>{{ __('students/add_student.Document_type.Document_type') }}</th>
                      <th>{{ __('students/add_student.Document_Title') }}</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody id="dynamicAddRemove_3">
                    {{-- <tr>
                      <td>
                        <div>
                          <input type="text" name="number[0][number]" class="form-control"
                            placeholder="{{ __('students/add_student.Document_Number') }}">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                          </div>
                          <input type="date" name="date[0][date]" class="form-control" data-inputmask-alias="datetime"
                            data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                        </div>
                      </td>
                      <td>
                        <select class="custom-select" name="document_type_id[0][document_type_id]">
                          <option disabled selected>{{ __('students/add_student.Document_type.Document_type') }}</option>
                          @foreach ($doc_types as $doc_type)
                            <option value="{{ $doc_type->id }}">{{ $doc_type->name }}</option>
                          @endforeach
                        </select>
                      </td>
                      <td>
                        <div class="custom-file">
                          <input type="file" name="file_path[0][file_path]" class="custom-file-input"
                            id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile"></label>
                        </div>
                      </td>
                      <td class="project-actions text-right">
                        <a class="btn btn-danger btn-sm text-white">
                          <i class="fas fa-trash"></i>
                          {{ __('shared/shared.Delete') }}
                        </a>
                      </td>
                    </tr> --}}
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
      </div>
    </section>
  </form>
  @push('scripts')
    <script>
      function row(index, data = null) {
        return `<tr>
                                <td>
                                  <div>
                                    <input type="text" name="document[${index}][number]" class="form-control" placeholder="{{ __('students/add_student.Document_Number') }}" value="${data ? data.number : ''}">
                                  </div>
                                </td>
                                <td>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                          </div>
                                          <input type="date" name="document[${index}][date]" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric" placeholder="dd/mm/yyyy" value="${data ? data.date : ''}">
                                        </div>
                                </td>
                                <td>
                                  <select class="custom-select" name="document[${index}][document_type_id]">
                                    @foreach ($doc_types as $doc_type)
                                            
                                          <option value="{{ $doc_type->id }}" ${data ? (data.document_type_id == {{ $doc_type->id }} ? 'selected' : '') : ''}>{{ $doc_type->name }}</option>
                                          
                                          @endforeach
                                  </select>
                                </td>
                                      <td>
                                        <div class="custom-file">
                                          <input type="file" name="document[${index}][file_path]" class="custom-file-input" id="exampleInputFile">
                                          <label class="custom-file-label" for="exampleInputFile"></label>
                                        </div>
                                      </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-danger btn-sm text-white remove-input-field_3">
                                        <i class="fas fa-trash"></i>
                                        {{ __('schedules/add_schedule.Lectures_Table.Delete') }}
                                    </a>
                                </td>
                            </tr>`
      }
      const documents = @json($documents);

      function renderRows() {
        $("#dynamicAddRemove_3").empty();
        documents.forEach((document, index) => {
          $("#dynamicAddRemove_3").append(row(index, document));
        });
      }
      renderRows();
      var i = documents.length;
      $("#dynamic-ar_3").click(function() {
        ++i;
        $("#dynamicAddRemove_3").append(row(i));
      });
      $(document).on('click', '.remove-input-field_3', function() {
        $(this).parents('tr').remove();
      });
    </script>
  @endpush
@endsection
