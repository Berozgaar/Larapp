@extends('welcome')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="jumbotron">
            @if (Session::has('flash_message'))
            <div class="alert alert-success msg">{{ Session::get('flash_message') }}</div>
            @endif
            <form action="{{route('email.send')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="name">Fullname</label>
                  <input type="text" class="form-control" name="name" placeholder="John Doe">
                </div>
                <div class="form-group">
                  <label for="from">Sender E-mail Address</label>
                  <input type="email" class="form-control" name="from" placeholder="From : johndoe@example.com">
                </div>
                <div class="form-group">
                  <label for="subject">Subject</label>
                  <input type="text" class="form-control" name="subject" placeholder="This is subject...">
                </div>
                <div class="form-group">
                  <label for="to">Recipent E-mail Address</label>
                  <input type="email" class="form-control" name="to" placeholder="To : johndoe@example.com">
                </div>
                <div class="form-group">
                  <label for="msg">Message</label>
                  <textarea type="text" class="form-control" name="msgbody" row="5" placeholder="This is sample text."></textarea>
                </div>
                <div class="form-group">
                  <button type="Submit">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
