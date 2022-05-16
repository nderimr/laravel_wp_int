@extends('../layouts.master')
@section('content')
<h1> Create new contact</h1>
<form name="add-contact-form" id="add-contact-form" method="post" action="{{url('contacts/store')}}">
       @csrf
<div class="form-group" id="contactdiv">
  <form action >  
  <label for="name">Name</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    @error('name') <span class="text-danger">{{ $message }}</span> @enderror 

  <label for="phone_number">Phone number</label>
  <input type="text" class="form-control" id="phone_number" plaeceholder="Enter phone number" name="phone_number" placeholder="Phone number">
  @error('phone_number') <span class="text-danger">{{ $message }}</span> @enderror   

  <label for="email_address">Email address</label>
  <input type="email" class="form-control" id="email_address" name="email_address" placeholder="Enter email address">
  @error('email_address') <span class="text-danger">{{ $message }}</span> @enderror   

  <label for="desired_budget"> Desired budget</label>
  <input type="number"  class="form-control" id="desired_budget" name="desired_budget" placeholder="Enter desired buddget">
  @error('desired_budget') <span class="text-danger">{{ $message }}</span> @enderror     

  <label for="message">Message</label>
    <textarea rows="4" class="form-control" id="message" placeholder="Enter message" name="message" ></textarea>
    @error('message') <span class="text-danger">{{ $message }}</span> @enderror 
     <br/>
    <input type="submit" class="form-control" value="Submit">


</div>

 
@endsection