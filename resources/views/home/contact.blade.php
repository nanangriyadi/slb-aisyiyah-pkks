@extends('layouts.main')

@section('container')



<!-- contact -->
<section class="contact-us" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 align-self-center">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>Let's get in touch</h2>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                            placeholder="YOUR EMAIL..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="SUBJECT...*"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" type="text" class="form-control" id="message"
                                            placeholder="YOUR MESSAGE..." required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">SEND MESSAGE
                                            NOW</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="right-info">
                    <ul>
                        <li>
                            <p>Phone Number<br>
                            <span> 010-020-0340</span></p>
                        </li>
                        <li>
                            <p>Email Address<br>
                            <span> info@</span></p>
                        </li>
                        <li>
                            <p>Street Address<br>
                            <span>Rio de Janeiro </span></p>
                        </li>
                        <li>
                            <p>Website URL<br>
                            <span> slbaisyiyahponorogo.sch.id</span></p>
                        </li>
                    </ul>
                </div>
        </div>
    </div>
</section>

@endsection
