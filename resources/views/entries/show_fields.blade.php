
<!-- Entry Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entry_date', 'Entry Date:') !!}
    <p>{{ $entry->entry_date->format('Y-m-d') }}</p>
</div>

<!-- Entry Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('entry', 'Entry:') !!}
    <p>{{ $entry->entry }}</p>
</div>


