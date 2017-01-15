<div class="form-group">
    {!! Form::label('firstName', 'First Name: ') !!}
    {!! Form::text('firstName', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('lastName', 'Last Name: ') !!}
    {!! Form::text('lastName', null, ['class' => 'form-control']) !!}
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
    {!! Form::label('companyName', 'Company Name: ') !!}
    {!! Form::text('companyName', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('industry', 'Industry: ') !!}
    {!! Form::text('industry', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('referredBy', 'Referred By: ') !!}
    {!! Form::text('referredBy', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>