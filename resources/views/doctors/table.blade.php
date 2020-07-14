<div class="table-responsive">
    <table class="table" id="entries-table">
        <thead>
        <tr>
            <th>#ID</th>
            <th>Doctors Name</th>
            <th>Appointment Time</th>
            <th>Current Status</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($doctors as $doctor)
            <tr>
                <td>{{ $doctor->id }}</td>
                <td>{{ $doctor->name }}</td>
                <td>{{ date("g:i A", strtotime($doctor->start_time)).' - '.date("g:i A", strtotime($doctor->end_time)) }}</td>
                <td class="{{ $doctor->status == 'free' ? 'text-success font-weight-bold' : 'text-danger font-weight-bold' }}">{{ $doctor->status == 'free' ? 'Available' : 'Busy'}}</td>
                <td>@if($doctor->deleted_at)
                        <p>Deleted</p>
                    @else
                        <div class='btn-group'>
                            <a href="{{ route('assignment4.edit', [$doctor->id]) }}" class='btn btn-primary btn'>Edit</a>
                            @if($doctor->status == 'free')
                                <a href="{{ route('book-appointment', [$doctor->id]) }}" class='btn btn-success btn-sm'>Book an Appointment</a>
                            @endif
                        </div>
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
