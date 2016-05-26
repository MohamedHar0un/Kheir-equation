{{--form for validate/unValidate users from the admin --}}
{!! Form::open(['action' => array('AdminController@assignValidator',$volunteer->id), 'method' => 'GET']) !!}

    {{-- check if this user is validator  --}}
@if($volunteer->role == 5)
    <div>
        {!! Form::submit('Unvalidate' , array('class' => 'vol-act btn btn-default' )) !!}
    </div>
    {{-- else means this user is normal user --}}
@elseif($volunteer->role < 5)
    <div>
        {!! Form::submit('Validate' , array('class' => 'vol-act btn btn-default' )) !!}
    </div>

@endif
{!! Form::close() !!}
