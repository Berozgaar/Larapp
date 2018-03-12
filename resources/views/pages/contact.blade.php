@extends('welcome')
@section('title', 'Contact')
@section('content')
<div class="jumbotron">
    <h3>Contact Us</h3>
    <hr>

    <div class="row">
        <div class="col-md-6">
            @if (Session::has('flash_message'))
            <div class="alert alert-success msg">{{ Session::get('flash_message') }}</div>
            @endif
            <form class="" action="{{ route('contact.store') }}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="uname">Fullname</label>
                  <input type="text" class="form-control" id="name" placeholder="Fullname">
                </div>
                <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="email" class="form-control" id="email" placeholder="E-mail Address">
                </div>
                <div class="form-group">
                  <label for="mobile">Mobile</label>
                  <input type="text" class="form-control" id="mobile" placeholder="+91-1234567890">
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Type your message for us..."></textarea>
                </div>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>

</div>

@endsection
