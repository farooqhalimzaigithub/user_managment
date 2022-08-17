@extends('admin-dashboard.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">User List</h5>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>S.No#</th>
                            <th>Avatar</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Email</th>
                            <th>DOB</th>
                            <th>City</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($users) && $users->isNotEmpty())
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->profile->avatar }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->code }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->profile->dob }}</td>
                                <td>{{ $user->profile->city }}</td>
                                <td>{{ $user->profile->address }}</td>
                                <td>
                                    <a href="{{ route('skills.edit',$user->id) }}" class="btn btn-info">Show</a>
                                    <a href="javascript:void(0)" onclick="document.getElementById('delete-skill').submit();" class="btn btn-danger">Delete</a>
                                    <form action="{{ route('skills.destroy',$user->id) }}" method="post" id="delete-skill">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
