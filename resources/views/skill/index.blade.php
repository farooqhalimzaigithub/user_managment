@extends('admin-dashboard.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (isset($skill))
                <form class="form-horizontal" action="{{ route('skills.update',$skill->id) }}" method="post">
                    @method('put')
                @endif
                <form class="form-horizontal" action="{{ route('skills.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">Skills Info</h4>
                        <div class="form-group row">
                            <label for="skill name" class="col-sm-3 text-end control-label col-form-label">Skill Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" required value="{{ $skill->name ?? '' }}" id="skill name" placeholder="Skill Name" />
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            @if (isset($skill))
                                <a href="{{ url()->previous() }}" class="btn btn-danger">Back</a>
                                <button class="btn btn-success">Update</button>
                            @else
                                <button class="btn btn-primary">Submit</button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if (!isset($skill))
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Skills List</h5>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>S.No#</th>
                            <th>Skill</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($skills) && $skills->isNotEmpty())
                        @foreach ($skills as $skill)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $skill->name }}</td>
                                <td>
                                    <a href="{{ route('skills.edit',$skill->id) }}" class="btn btn-info">Edit</a>
                                    <a href="javascript:void(0)" onclick="document.getElementById('delete-skill').submit();" class="btn btn-danger">Delete</a>
                                    <form action="{{ route('skills.destroy',$skill->id) }}" method="post" id="delete-skill">
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
    @endif
@endsection
