@extends('template.main')
@section('title','Reservation')
<br>
<br>
<br>
@section('htmlcore')
    <div id="gtco-history" class="gtco-section border-bottom animate-box">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                    <h2>Reservation</h2>
                    <p>Lest's Book Your Reservation</p>
                </div>
            </div>
            <div class="row row-pb-md">
                <div class="col-md-6 animate-box">
                    <h3>BestCozumelExcursion</h3>
                    <form action="#" method="POST" id="reservation-form">
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="sr-only" for="name">Name</label>
                                <input type="text" id="name" class="form-control" placeholder="Your complete name" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label class="sr-only" for="email">Email</label>
                                <input type="email" id="email" class="form-control" placeholder="Your email address" required>
                            </div>
                            <div class="col-md-6">
                                <label class="sr-only" for="email">Phone</label>

                                <input type="phone" id="email" class="form-control" placeholder="Your phone number" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <a class="" for="Hotel">Hotel</a>
                                <select name="Hotels" id="hotel" class="form-control" required>
                                    <option value="">Hotel$1</option>
                                    <option value="">Hotel$1</option>
                                    <option value="">Hotel$1</option>
                                    <option value="">Hotel$1</option>
                                    <option value="">Hotel$1</option>
                                    <option value="">Hotel$1</option>
                                    <option value="">Hotel$1</option>
                                    <option value="">Hotel$1</option>
                                    <option value="">Hotel$1</option>
                                    <option value="">Hotel$1</option>

                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <a class="">
                                    <input type="checkbox" value="0" onchange="ocultar(this.checked)" id="single" name="single">Single</a>
                            </div>
                            <div class="col-md-6">
                                <a class=""><input type="checkbox" value="1" id="round" name="round">Round</a>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6 ">
                                <a href="">Departure</a>
                                <label class="sr-only" for="date">Date</label>
                                <input type="date" id="date1" class="form-control" placeholder="Choice your Date" required>
                            </div>
                            <div class="col-md-6 ">
                                <a href="">Return</a>
                                <label class="sr-only" for="date">Date</label>
                                <input type="date" id="date2" class="form-control" placeholder="Choice your Date" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <a href="">Adults</a>
                                <select name="adults" id="adults" class="form-control">
                                    <option value="">0</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                    <option value="">6</option>
                                    <option value="">7</option>
                                    <option value="">8</option>
                                    <option value="">9</option>
                                    <option value="">10</option>
                                </select>

                            </div>
                            <div class="col-md-6">
                                <a href="">Kids</a>
                                <select name="kids" id="kids" class="form-control">
                                    <option value="">0</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                    <option value="">6</option>
                                    <option value="">7</option>
                                    <option value="">8</option>
                                    <option value="">9</option>
                                    <option value="">10</option>
                                </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="sr-only" for="message">Message</label>
                                <textarea name="message" id="message" cols="20" rows="5" class="form-control" placeholder="write us about some deatils" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">

                            <input type="submit" value="Send reservation" class="btn btn-primary btn-lg">

                            </input>
                        </div>

                    </form>
                </div>
                <div class="col-md-5 col-md-push-1 animate-box">

                    <div class="gtco-contact-info">
                        <h3>Prices</h3>
                        <ul>
                            <li class="price">$0.00</li>
                            <li class="price">$0.00</li>
                            <li class="price">$0.00</li>
                            <li class="price">$0.00</li>
                            <li class="price">$0.00</li>
                            <li class="price">$0.00</li>
                            <li class="price">$0.00</li>
                            <li class="price">$0.00</li>
                            <li class="price">$0.00</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>    
@endsection()    