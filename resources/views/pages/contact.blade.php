@extends('main')

@section('title', '| Contact')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-6 mb-5 m-2">
            <h1>Get In Touch</h1>
            <hr>
            <form action="{{ url('contact') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label name="email">Email:</label>
                    <input id="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label name="subject">Subject:</label>
                    <input id="subject" name="subject" class="form-control">
                </div>

                <div class="form-group">
                    <label name="message">Message:</label>
                    <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
                </div>
                <div class="text-right">
                    <input type="reset" value="Reset" class="btn btn-danger">
                    <input type="submit" value="Send Message" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection