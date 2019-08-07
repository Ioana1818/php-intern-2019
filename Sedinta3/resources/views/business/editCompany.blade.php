@extends('business.layout')
@section('title',"Edit Company")
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 text-center">
            <form action="/companies/update/{{$company->id}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Company name</label>
                    <input type="text" name="name" class="form-control" value="{{$company->name}}">
                </div>
                <div class="form-group">
                    <label for="form7">Description</label>
                    <div class="md-form" >
                        <textarea id="form7" name="description" value="{{$company->description}}" class="md-textarea form-control" rows="3">
                        {{$company->description}}
                        </textarea>

                    </div>
                </div>
                <button class="btn btn-primary" type="submint">Edit company</button>
            </form>
            </ul>
        </div>
    </div>
</div>
@endsection