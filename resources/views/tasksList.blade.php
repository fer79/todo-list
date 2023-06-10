<div class="table-responsive">
  <div class="d-md-flex justify-content-md-end mb-3">
    <button class="btn btn-success w-25">New Task</button>
  </div>
  <table class="table table-bordered table-hover">
    <thead>
      <tr class="table-dark">
        <th class="text-center">Ended</th>
        <th class="text-center">Task Name</th>
        <th class="text-center">Due Date</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $row)

        <tr>
          <td class="text-center">
            @if(empty($row->end_date))
              <div class="btn-group">
                <form method="POST" action="{{ route('tasks.end') }}">
                  @csrf
                  <input type="hidden" name="id" value="{{ $row->id }}">
                  <button type="submit" class="btn btn-success btn-xs" onclick="this.disabled=true;this.parentNode.submit();"><i class="fas fa-check-square"></i></button>
                </form>
              </div>
            @else
              {{ date("d-m-Y", strtotime($row->end_date)) }}
            @endif
          </td>
          <td class="text-center">{{ $row->task_name }}</td>
          <td class="text-center">{{ date("d-m-Y", strtotime($row->due_date)) }}</td>
          <td class="text-center">
            <div class="btn-group">
              <form method="POST" action="{{ route('tasks.destroy') }}">
                @csrf
                <input type="hidden" name="id" value="{{ $row->id }}">
                <button type="submit" class="btn btn-success btn-xs" onclick="this.disabled=true;this.parentNode.submit();"><i class="fas fa-check-square"></i></button>
              </form>
            </div>
          </td>
        </tr>

      @endforeach
    </tbody>
  </table>
  {!! $data->links() !!}
</div>