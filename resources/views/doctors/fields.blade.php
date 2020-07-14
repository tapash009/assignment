<!-- Doctor Name Field -->
<div class="row">
<div class="form-group col-md-6">
    {!! Form::label('name', 'Doctor\'s name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','id'=>'entry_date']) !!}
</div>

@if (Route::currentRouteName() == 'assignment4.edit')
    <div class="form-group col-md-6">
        {!! Form::label('status', 'Current Status:') !!}
        <p>{{ $doctor->status == 'free' ? 'Available' : 'Busy' }}</p>
        {{--{!! Form::select('status', array('free' => 'Available', 'busy' => 'Busy'), null, ['class' => 'form-control','id'=>'entry_date']) !!}--}}
    </div>
@endif
</div>

<!-- Start Time Field -->
<div class="row">
<div class="form-group col-md-6">
    {!! Form::label('start_time', 'Appointment Start Time:') !!}
    {!! Form::time('start_time', null, ['class' => 'form-control','id'=>'start_time']) !!}
</div>

<!-- End Time Field -->
<div class="form-group col-md-6">
    {!! Form::label('end_time', 'Appointment End Time:') !!}
    {!! Form::time('end_time', null, ['class' => 'form-control','id'=>'end_time']) !!}
</div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('assignment4.index') }}" class="btn btn-default">Cancel</a>
</div>

@section('scripts')
    <script type="text/javascript">

    </script>
@endsection
