<div> 
    <a href="{{ route('memberCreate') }}">Tambah data</a>
    
    <table border="1">
        <tr>
            <th>#</th>
            <th>User</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @forelse($members as $key => $member)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $member->getUser->name }}</td>
            <td>{{ $member->getUser->email }}</td> 
            <td>
                <a href="{{ route('stafShow',$member->id) }}">View</a>
                <a href="{{ route('stafEdit',$member->id) }}">Edit</a>
                <a href="{{ route('stafDelete',$member->id) }}">Delete</a>
            </td>            
        </tr>
        @empty
            <tr>
                <td colspan='7' align="center">belum ada data</td>
            </tr>
        @endforelse
    </table>

</div>