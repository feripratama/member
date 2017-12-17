<div>

<a href="{{ route('memberIndex') }}">List</a>
<hr>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session()->has('message'))
    <li>{{ session()->get('message') }}</li>
@endif
{!! Form::open(['route' => 'memberStore','method' => 'post']) !!}

    <table>
        <tr>
            <td>User</td>
            <td>
                <select name="user_id">
                    <option value="" selected disabled>-Select User-</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </td>
        </tr>      
        <tr>
            <td>&nbsp;</td>
            <td>            
                {!! Form::submit('submit') !!}                
            </td>
        </tr>
    </table>
    
     
{!! Form::close() !!}

</div>