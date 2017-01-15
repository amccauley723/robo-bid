<div class="form-group">
    {!! Form::label('first_name', 'First Name: ') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('last_name', 'Last Name: ') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email: ') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('password', 'Password: ') !!}
    {!! Form::text('password', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('business_name', 'Business Name: ') !!}
    {!! Form::text('business_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('industry', 'Industry: ') !!}
    {!! Form::text('industry', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('referred_by', 'Referred By: ') !!}
    {!! Form::text('referred_by', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>