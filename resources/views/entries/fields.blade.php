<!-- Entry Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entry_date', 'Entry Date:') !!}
    {!! Form::text('entry_date', null, ['class' => 'form-control','id'=>'entry_date']) !!}
</div>

<!-- Entry Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('entry', 'Entry:') !!}
    {!! Form::textarea('entry', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('entries.index') }}" class="btn btn-default">Cancel</a>
</div>

@section('scripts')
    <script type="text/javascript">
        $('#entry_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endsection