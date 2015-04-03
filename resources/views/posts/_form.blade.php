
<div class="form-group">
    {!! Form::label('title', 'Titre') !!}
    {!! Form::text('title', null, array('class' => 'form-control', 'required' => 'required')) !!}
    <small class="text-danger">{{ $errors->first('title') }}</small>
</div>

<div class="form-group">
    {!! Form::label('content', 'Contenu') !!}
    {!! Form::textarea('content', null, array('class' => 'form-control', 'required' => 'required')) !!}
    <small class="text-danger">{{ $errors->first('content') }}</small>
</div>

<div class="form-group">
    {!! Form::label('user_id', 'Auteur') !!}
    {!! Form::select('user_id', $users, null, array('class' => 'form-control', 'required' => 'required')) !!}
    <small class="text-danger">{{ $errors->first('user_id') }}</small>
</div>