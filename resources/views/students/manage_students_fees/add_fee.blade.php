@extends('layout.master')

@section('content')


<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">{{__('students/add_student.Home_Fee')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('students_fees')}}">{{__('students/add_student.Screen_Fee')}}</a></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<form method="post"  id="myform"action="{{route('store_fee')}}">
  @csrf
  <input type="hidden" name="student_id" value="{{ $student->id }}">
   
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('students/add_student.Fees')}}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="max-height: 600px; overflow-y: auto;">
                  <table class="table table-head-fixed text-nowrap" id="dynamicAddRemove">
                      <thead>
                          <tr>
                              <th colspan="2">
                                {{__('shared/shared.Student_Name')}} {{$student->name}}
                              </th>
                              <th colspan="2">
                                {{__('shared/shared.Student_Id')}} : {{$student->academic_number}}
                              </th>
                              <th></th>
                          </tr>
                      </thead></table>
                </div>
                <div class="card-body">
                    <div class="row">
                        {{-- <div class="input-group">
                          <input type="text" class="form-control col-2" placeholder="{{__('students/add_student.Student_Fees')}}">
                          <div class="input-group-append">
                              <span class="input-group-text">{{__('students/add_student.Student_Fees')}}</span>
                          </div>
                      </div>
                      <div class="input-group">
                        <input type="text" class="form-control col-2" placeholder="{{__('students/add_student.Remaining_Fees')}}">
                        <div class="input-group-append">
                            <span class="input-group-text">{{__('students/add_student.Remaining_Fees')}}</span>
                        </div>
                    </div>
                      <div class="float-left" style="margin-bottom: 20px; margin-top: 20px">
                       
                      
                        <button type="button" id="dynamic-ar_2" class="btn btn-block btn-primary">{{__('students/add_student.Add_Fees')}}</button>

                        
                      </div> --}}
                      <div class="row" style="margin-bottom: 20px; margin-top: 20px">
                        <div class="col">
                          <div class="float-left">
                              <button type="button" id="dynamic-ar_2" class="btn btn-block btn-primary">{{__('students/add_student.Add_Fees')}}</button>
                          </div>
                      </div>
                        <div class="col">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="{{$student->fees}}" readonly>
                                <div class="input-group-append">
                                    <span class="input-group-text">{{__('students/add_student.Student_Fees')}}</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                          <div class="input-group">
                              <input type="text" class="form-control" placeholder="{{$amount_paid}}" readonly>
                              <div class="input-group-append">
                                  <span class="input-group-text">{{__('students/add_student.Total_Paid')}}</span>
                              </div>
                          </div>
                      </div>

                      <div class="col">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="{{$amount_tobe_paid}}" readonly>
                            <div class="input-group-append">
                                <span class="input-group-text">{{__('students/add_student.Remaining_Fees')}}</span>
                            </div>
                        </div>
                    </div>
                    </div>                  
                        <div class="card-body table-responsive p-0" style="max-height: 600px; overflow-y: auto;">
                            <table class="table table-head-fixed text-nowrap" id="dynamicAddRemove">
                                <thead>
                                    <tr>
                                        <th>{{__('students/add_student.Payment_Fees')}}</th>
                                        <th>{{__('students/add_student.Bond_No')}}</th>
                                        <th>{{__('students/add_student.Date_of_payment')}}</th>
                                        <th>{{__('students/add_student.Notes_Fees')}}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="dynamicAddRemove_2">
                                  
                                @foreach($student_payments as $student_payment)
                                <tr> 
                                    <input type="hidden" value="{{$student_payment->id}}">
                                        <td>
                                          <div>
                                            <input type="text"  class="form-control" value="{{$student_payment->payment}}" readonly>
                                          </div>
                                        </td>
                                        <td>
                                          <div>
                                            <input type="text"  class="form-control" value="{{$student_payment->reciet}}" readonly>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="input-group">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                            </div>
                                            <input type="text"  class="form-control"   
                                            value="{{$student_payment->date}}" readonly>
                                          </div>
                                        </td>
                                        <td>
                                          <div>
                                            <input type="text"  class="form-control" value="{{$student_payment->notes}}" readonly>
                                          </div>
                                        </td>
                                        <td class="project-actions text-right">
                                            
                                          
                                        <button type="button" class="update">
                                          <i class="fas fa-pencil-alt"></i>
                                         {{ __('shared/shared.Edit') }}
                                          </button> 


                                        <a   class="btn btn-danger btn-sm text-white" href="{{route('delete_fee', $student_payment->id)}}">
                                                <i class="fas fa-trash"></i>
                                                {{__('shared/shared.Delete')}}
                                            </a>
                                        </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                          <button type="submit"  class="btn btn-success">{{__('shared/shared.Save')}}</button>
                    </div>              
                </div>
            </div>
        </div>
    </section>
</form>



@push('scripts')

<<script>

    var i = 0;

    $("#dynamic-ar_2").click(function() {
      ++i;
      $("#dynamicAddRemove_2").append(`<tr>
                                            <td>
                                              <div>
                                                <input type="text" name="payment[${i}][payment]" class="form-control" placeholder="{{ __('students/add_student.Payment_Fees') }}">
                                              </div>
                                            </td>
                                            <td>
                                              <div>
                                                <input type="text" name="reciet[ ${i} ][reciet]" class="form-control" placeholder="{{ __('students/add_student.Bond_No') }}">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="text" name="date[  ${i} ][date]" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask
                                                placeholder="{{ __('students/add_student.Date_of_payment') }}">
                                              </div>
                                            </td>
                                            <td>
                                          <div>
                                            <input type="text" name="notes[  ${i}  ][notes]" class="form-control" placeholder="{{ __('students/add_student.Notes_Fees') }}">
                                          </div>
                                        </td>
                                            <td class="project-actions text-right">
                                                <a class="btn btn-danger btn-sm text-white remove-input-field_2">
                                                    <i class="fas fa-trash"></i>
                                                    {{ __('schedules/add_schedule.Lectures_Table.Delete') }}
                                                </a>
                                            </td>
                                        </tr>`);
    });

    $(document).on('click', '.remove-input-field_2', function() {
      $(this).parents('tr').remove();
    });
  </script>





  <script>
$(document).ready(function() {

  
  

  $(".update").on('click', function(event){

    event.stopPropagation();
    event.stopImmediatePropagation();
    var clickedRow = $(this).closest('tr');
    

    
    
     

   
    clickedRow.find('input[readonly]').removeAttr('readonly');
   
    var table = clickedRow.closest('table');
    
    var element = document.getElementById('dynamic-ar_2');

if (element) {
  var newButton = document.createElement('button');
  newButton.textContent = 'تراجع';
  newButton.type = 'button';
  newButton.class="btn btn-block btn-primary";
  
  newButton.addEventListener('click', function() {
    window.location.reload(); 
  });
  element.parentNode.replaceChild(newButton, element);
}
  var allRows = table.find('tr');

  allRows.each(function(index, row) {
    if (row !== clickedRow[0]) { 
      $(row).remove();
    }
  });
   
  clickedRow.find('input[type="text"]').each(function(index, input) {
     
      var name = 'input_' + index; 
      $(input).attr('name', name);
    });

    clickedRow.find('input[type="hidden"]').attr('name', 'idofpayment');
    clickedRow.find('a[class="btn btn-danger btn-sm text-white"]').remove();
    clickedRow.find('button[type="button"]').remove();

    
    

  });
});

 </script>

<script>

$(document).ready(function() {
  var amount_tobe_paid = parseFloat('{{ $amount_tobe_paid }}'); 

  if (amount_tobe_paid == 0) {
    $("#dynamic-ar_2").hide();
    toastr.info("{{ __('الأقساط مكتملة') }}");
   } else if(amount_tobe_paid<0){
    $("#dynamic-ar_2").hide();
    toastr.info("{{ __('المتبقي من الرسوم بالسالب يرجى مراجعة مبالغ الأقساط ') }}");

   } else {
    $("#dynamic-ar_2").show();
  }
});

</script>
<!--
<script>  
function confirmSubmit(formId) {
  var form = document.getElementById(formId);
  if (confirm("Are you sure you want to submit the form?")) {
    form.submit(); 
  } else {
    event.preventDefault(); // Prevent default form submission if canceled
  }
}
</script>

-->
  
  @endpush

@endsection
  