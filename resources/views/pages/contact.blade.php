@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body shadow">
                    <h1 class="text-center">Contact Us Today</h1> <br>
                    <marquee><b>Call Us On 08185375580, 07084469462</b></marquee>
                     <form action="https://submit-form.com/qDENog_VqTkVmWadZFFnP" method="POST" target="_self">
                         <div class="form-group">
                            <label for="name"><b>Name</b></label>
                            <input name="name" type="text" class="form-control" placeholder="Name" required>
                         </div>
                         <div class="form-group">
                            <label for="subject"><b>Phone Number/Email</b></label>
                            <input name="phone" type="text" class="form-control" placeholder="Phone Number/Email" required>
                         </div>
                         <div class="form-group">
                            <label for="subject"><b>Subject</b></label>
                            <input name="subject" type="text" class="form-control " placeholder="Subject" required>
                         </div>
                         <div class="form-group">
                            <label for="subject"><b>Message</b></label>
                            <textarea name="message" class="form-control shadow" name="message" id="" cols="30" rows="10" required></textarea>
                         </div>
                         <input type="submit"  class="btn btn-success btn-lg shadow" value="Send Message">
                     </form>
                </div>
            </div>
        </div>
    </div>
@endsection  
