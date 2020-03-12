<div class="table-responsive">
    <table class="table" id="entries-table">
        <thead>
            <tr>
                <th>#ID</th>
        <th>Entry</th>
        <th>Entry Date</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($entries as $entry)
            <tr class="{{$entry->deleted_at!=null?'deleted':''}}">
                <td>{{ $entry->id }}</td>
            <td>{{ $entry->entry }}</td>
            <td>{{ $entry->entry_date->format('Y-m-d') }}</td>
                <td>@if($entry->deleted_at)
                    <p>Deleted</p>
                    @else
                    {!! Form::open(['route' => ['entries.destroy', $entry->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('entries.show', [$entry->id]) }}" class='btn btn-default btn'>View</a>
                        <a href="{{ route('entries.edit', [$entry->id]) }}" class='btn btn-default btn'>Edit</a>
                        {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@section('css')
    <style>
        .deleted {
            background-color: #80808030;
            -webkit-text-decoration-line: line-through;
            text-decoration-line: line-through;
        }
        .deleted p{
            text-decoration: none;
            display: inline-block;
        }
    </style>
@endsection