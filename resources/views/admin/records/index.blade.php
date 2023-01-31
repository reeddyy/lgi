@extends('layouts.admin')
@section('content')
@can('record_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.records.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.record.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.record.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Record">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.record.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.record.fields.status') }}
                    </th>
                    <th>
                        {{ trans('cruds.record.fields.name') }}
                    </th>
                    <th>
                        {{ trans('cruds.record.fields.email') }}
                    </th>
                    <th>
                        {{ trans('cruds.record.fields.phone') }}
                    </th>
                    <th>
                        {{ trans('cruds.record.fields.designation') }}
                    </th>
                    <th>
                        {{ trans('cruds.record.fields.company') }}
                    </th>
                    <th>
                        {{ trans('cruds.record.fields.country') }}
                    </th>
                    <th>
                        {{ trans('cruds.record.fields.industry') }}
                    </th>
                    <th>
                        {{ trans('cruds.record.fields.turnover') }}
                    </th>
                    <th>
                        {{ trans('cruds.record.fields.employment') }}
                    </th>
                    <th>
                        {{ trans('cruds.record.fields.bv') }}
                    </th>
                    <th>
                        {{ trans('cruds.record.fields.bs') }}
                    </th>
                    <th>
                        {{ trans('cruds.record.fields.tpt') }}
                    </th>
                    <th>
                        {{ trans('cruds.record.fields.tc') }}
                    </th>
                    <th>
                        {{ trans('cruds.record.fields.emp') }}
                    </th>
                    <th>
                        {{ trans('cruds.record.fields.lc') }}
                    </th>
                    <th>
                        {{ trans('cruds.record.fields.wh') }}
                    </th>
                    <th>
                        {{ trans('cruds.record.fields.wc') }}
                    </th>
                    <th>
                        {{ trans('cruds.record.fields.inv') }}
                    </th>
                    <th>
                        {{ trans('cruds.record.fields.gfs') }}
                    </th>
                    <th>
                        {{ trans('cruds.record.fields.comment') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                    </td>
                </tr>
            </thead>
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('record_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.records.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.records.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'status', name: 'status' },
{ data: 'name', name: 'name' },
{ data: 'email', name: 'email' },
{ data: 'phone', name: 'phone' },
{ data: 'designation', name: 'designation' },
{ data: 'company', name: 'company' },
{ data: 'country', name: 'country' },
{ data: 'industry', name: 'industry' },
{ data: 'turnover', name: 'turnover' },
{ data: 'employment', name: 'employment' },
{ data: 'bv', name: 'bv' },
{ data: 'bs', name: 'bs' },
{ data: 'tpt', name: 'tpt' },
{ data: 'tc', name: 'tc' },
{ data: 'emp', name: 'emp' },
{ data: 'lc', name: 'lc' },
{ data: 'wh', name: 'wh' },
{ data: 'wc', name: 'wc' },
{ data: 'inv', name: 'inv' },
{ data: 'gfs', name: 'gfs' },
{ data: 'comment', name: 'comment' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-Record').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
let visibleColumnsIndexes = null;
$('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value

      let index = $(this).parent().index()
      if (visibleColumnsIndexes !== null) {
        index = visibleColumnsIndexes[index]
      }

      table
        .column(index)
        .search(value, strict)
        .draw()
  });
table.on('column-visibility.dt', function(e, settings, column, state) {
      visibleColumnsIndexes = []
      table.columns(":visible").every(function(colIdx) {
          visibleColumnsIndexes.push(colIdx);
      });
  })
});

</script>
@endsection