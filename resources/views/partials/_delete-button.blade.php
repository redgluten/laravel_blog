
{!! Form::open(array('url' => $url, 'class' => 'inline-form')) !!}
    {!! Form::hidden('_method', 'DELETE') !!}
    <button onclick="{{ $message }}" class="btn btn-danger btn-sm">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        Supprimer
    </button>
{!! Form::close() !!}