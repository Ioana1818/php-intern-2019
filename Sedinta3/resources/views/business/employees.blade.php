@extends('business.layout')
@section('title','Employees')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Employee Name</th>
                        <th scope="col">Company</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $employee)
                    <tr>
                        <th scope="row"></th>
                        <td>{{$employee['name']}}</td>
                        <td>{{$employee->company->name}}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="/employees/edit/{{$employee->id}}">Edit</a></li>
                                    <li class="divider"></li>
                                    <li><a href="/employees/destroy/{{$employee->id}}">Delete</a></li>
                                </ul>
                            </div>
                        </td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-6 text-center">
            <div>
                <form action="/employees" method="POST" id="form">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" id="name" name="name" class="form-control" {!!$errors->has('name')?
                        'style="border-color:red;"':' '!!}
                        value="{{old('name')}}"/>
                    </div>
                    <div class="form-group">
                        <label>Company</label>
                        <select name="company_id" class="form-control" class="form-check-input">
                            @foreach($companies as $company)
                            <option value="{{$company->id}}" class="form-check-label">{{$company->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submint">Add employee</button>
                   <!-- <button type="button" onclick="validate();return false; " id="employee">Add employee</button>-->
                </form>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                    {{$error}}
                    @endforeach
                </ul>
            </div>
            @endif
        </div>

    </div>
</div>
<script type="text/javascript">
function validate() {
    var name = document.getElementById('employee').value;
    console.log('name:', name)
    if (name.length == 0) {
        // alert('Introduceti nume');
    } else {}
    //document.getElementById('form').submit();

}
</script>
@endsection