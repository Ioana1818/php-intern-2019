@extends('business.layout')
@section('title',"Edit Employee")
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <form action="/employees/update/{{$employee->id}}" method="POST">
                    {{csrf_field()}}
                    
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{$employee->name}}">
                    </div>
                    <div class="form-group">
                        <label>Company (before: {{$company_name}})</label>
                        <select name="company_id" class="form-control" class="form-check-input">
                            @foreach($companies as $company)
                            <option value="{{$company->id}}" class="form-check-label">{{$company->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submint">Edit employee</button>
                </form>
                </ul>
            </div>
        </div>
    </div>
@endsection