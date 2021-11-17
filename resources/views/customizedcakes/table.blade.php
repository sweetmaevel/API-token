<div class="table-responsive">
    <table class="table" id="customizedcakes-table">
        <thead>
            <tr>
                <th>Design</th>
        <th>Flavor</th>
        <th>Details</th>
        <th>Size</th>
        <th>Prize</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($customizedcakes as $customizedcake)
            <tr>
                <td>{{ $customizedcake->design }}</td>
            <td>{{ $customizedcake->flavor }}</td>
            <td>{{ $customizedcake->details }}</td>
            <td>{{ $customizedcake->size }}</td>
            <td>{{ $customizedcake->prize }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['customizedcakes.destroy', $customizedcake->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('customizedcakes.show', [$customizedcake->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('customizedcakes.edit', [$customizedcake->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
