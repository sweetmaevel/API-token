<!-- Design Field -->
<div class="form-group col-sm-6">
    {!! Form::label('design', 'Design:') !!}
    {!! Form::text('design', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Flavor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('flavor', 'Flavor:') !!}
    {!! Form::text('flavor', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Details Field -->
<div class="form-group col-sm-6">
    {!! Form::label('details', 'Details:') !!}
    {!! Form::text('details', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('size', 'Size:') !!}
    {!! Form::text('size', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Prize Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prize', 'Prize:') !!}
    {!! Form::number('prize', null, ['class' => 'form-control']) !!}
</div>