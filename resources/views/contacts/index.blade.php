@extends('../layouts.master')
@section('content')
<h1>Contacts</h1>
<a href="create">Add new contact</a>
<table class="table table-striped table-dark">
    <tr>
        <th>name</th>
        <th>phone number</th>
        <th>email</th>
        <th>message</th>
        <th> ...</th>
    </tr>
@foreach ($contacts as $contact) 
<tr>
   <td> {{ $contact->name}} </td>
   <td>{{$contact->phone_number}}</td>
   <td>{{$contact->email_address}}</td>
   <td>{{$contact->message}}</td>
   <td><input type="button" value="Create wordpress Account" class="btn btn-secondary button" /></td> 
</tr>  
@endforeach
@endsection