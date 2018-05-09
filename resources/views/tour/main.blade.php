@extends('template.main')
@section('title','TOURS')
<br>
<br>
<br>
<header id="gtco-header" class="col-md-8 col-md-offset-2 text-center gtco-heading" role="" style="">
    <h2>Tours Cozumel</h2>
    <p></p>
</header>
@section('htmlcore')
    <div class="container">
        <div class="gtco-container">
            <div class="row animate-box">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{asset('img/imaga2.jpg')}}" alt="" class="img-responsive">
                        <div class="caption">
                            <h3>Cozumel Prime Time</h3>
                            <hr>
                            <ul class="list-group">
                                <li class="list-group-item">Transportation in VAN with A/C</li>
                                <li class="list-group-item">Entrance to Chankanaab Park</li>
                                <li class="list-group-item">45 minutes shopping for visitors from Riviera Maya y Cancun</li>
                            </ul>
                            <p><a href="#" class="btn btn-primary" role="button">Read more</a> </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{asset('img/imaga3.jpg')}}" alt="..." class="img-responsive">
                        <div class="caption">
                            <h3>Cozumel Adventure by Jeep</h3>
                            <hr>
                            <ul class="list-group">
                                <li class="list-group-item">Transportation in Shared Jeep*</li>
                                <li class="list-group-item">Entrance to Punta Sur and Chankanaab Park</li>
                                <li class="list-group-item">45 minutes shopping for visitors from Riviera Maya y Cancun</li>
                            </ul>
                            <p><a href="#" class="btn btn-primary" role="button">Read more</a> </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{asset('img/imaga4.jpg')}}" alt="..." class="img-responsive">
                        <div class="caption">
                            <h3>Cozumel Experience by Jeep</h3>
                            <hr>
                            <ul class="list-group">
                                <li class="list-group-item">Transportation in Shared Jeep*</li>
                                <li class="list-group-item">Visit to San Gervasio Ruins</li>
                                <li class="list-group-item">Entrance to Punta Sur and Chankanaab Parks</li>
                            </ul>
                            <p><a href="#" class="btn btn-primary" role="button">Read more</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="gtco-container">
        <div class="row row-pb-md">
            <div class="col-md-6 animate-box">
                <h2>BestCozumelExcursions</h2>
                <form action="#" method="POST" id="contact-form" class="">
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
                            <a class="" for="Hotel">Tour</a>
                            <select name="Hotels" id="hotel" class="form-control" required>
                                <option value="1">Tour</option>
                                <option value="2">Tour</option>
                                <option value="3">Tour</option>

                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6 ">
                            <a href="">Tour Day</a>
                            <label class="sr-only" for="date">Date</label>
                            <input type="date" id="date" class="form-control" placeholder="Choice your Date" required>
                        </div>
                        <div class="col-md-6 ">

                            <label class="" for="date">Country</label>
                            <input type="input" id="date" class="form-control" placeholder="Country" required>
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

                        <input type="submit" value="Send reservation" name="submit_contact_form"  class="btn btn-primary btn-lg"/>
                        
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection()