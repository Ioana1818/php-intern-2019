@extends('business.layout')
@section('title','Companies')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Company name</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($companies as $company)
                    <tr>
                        <th scope="row"></th>
                        <td>{{$company['name']}}</td>
                        <td>{{$company['description']}}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="/companies/edit/{{$company->id}}">Edit</a></li>
                                    <li class="divider"></li>
                                    <li><a href="/companies/destroy/{{$company->id}}">Delete</a></li>
                                </ul>
                            </div>
                        </td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-6 text-center">
            <form action="/companies" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Company name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                <label for="form7">Description</label>
                    <div class="md-form" >
                        <textarea id="form7"  name="description" value="{{$company->description}}" class="md-textarea form-control" rows="3" required></textarea>
                        
                    </div>
                </div>
                <button class="btn btn-primary" type="submint">Add company</button>
            </form>
            </ul>
        </div>
    </div>
</div>

@endsection