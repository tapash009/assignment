<div class="table-responsive">
    <table class="table" id="entries-table">
        <thead>
        <tr>
            <th>#ID</th>
            <th>Doctor's Name</th>
            <th>Current Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($appointments as $appointments)
            <tr>
                <td>{{ $appointments->id }}</td>
                <td>{{ $appointments->doctor->name }}</td>
                <td class="{{ $appointments->appointment_status == 'completed' ? 'text-success font-weight-bold' : 'text-danger font-weight-bold' }}">{{ $appointments->appointment_status == 'completed' ? 'Completed' : 'Pending / In Progress'}}</td>
                <td>
                    <div class='btn-group'>
                        @if($appointments->appointment_status == 'pending')
                            <a href="{{ route('complete-appointment', [$appointments->id]) }}" class='btn btn-success btn-sm'>Complete The Appointment</a>
                        @endif
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@section('css')
@endsection
