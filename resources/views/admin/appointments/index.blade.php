@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->


    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('appointment') }}
                </h6>
                <div class="ml-auto">
                    <a href="{{ route('admin.appointments.create') }}" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">{{ __('New appointment') }}</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive" style="direction: rtl;">
                    <table class="table table-bordered table-striped table-hover datatable datatable-appointment" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="10"></th>
                                <th>الرقم</th>
                                <th>العميل</th>
                                <th>الموظف</th>
                                <th>وقت البدء</th>
                                <th>وقت الانتهاء</th>
                                <th>السعر</th>
                                <th>التعليقات</th>
                                <th>الخدمات</th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($appointments as $appointment)
                            <tr data-entry-id="{{ $appointment->id }}">
                                <td></td>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $appointment->client->name }}</td>
                                <td>{{ $appointment->employee->name }}</td>
                                <td>{{ $appointment->start_time }}</td>
                                <td>{{ $appointment->finish_time }}</td>
                                <td>{{ $appointment->price }} ر.ي.</td>
                                <td>{{ $appointment->comments }}</td>
                                <td>
                                    @foreach($appointment->services as $key => $service)
                                        <span class="badge badge-info">{{ $service->name }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{ route('admin.appointments.edit', $appointment->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form onclick="return confirm('هل أنت متأكد؟ ')" class="d-inline" action="{{ route('admin.appointments.destroy', $appointment->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" style="border-top-left-radius: 0;border-bottom-left-radius: 0;">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="10" class="text-center">{{ __('البيانات فارغة') }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    <!-- Content Row -->

</div>
@endsection

@push('script-alt')
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  let deleteButtonTrans = 'delete selected'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.appointments.mass_destroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });
      if (ids.length === 0) {
        alert('zero selected')
        return
      }
      if (confirm('are you sure ?')) {
        $.ajax({
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'asc' ]],
    pageLength: 50,
  });
  $('.datatable-appointment:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
@endpush
