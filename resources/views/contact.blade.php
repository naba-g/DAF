@extends('layouts.master')
@section('title', ' CONTACT ')
@section('content')

<div class="container">
    <!-- <div class="row">
        <div class="col-md-12">
        <h1>NOS CONTACTS </h1>
        </div>
    </div> -->
    <!-- Contact Us Section -->
      
                <div class="row">
                     
                <div style="padding:3px;" class="msg_suc bg-success text-white">

            </div>

            <div  style="padding:3px;" class="msg_err bg-danger text-white">

            </div>
                    <div class="col-md-7">
                        <div class="section-title">
                            <h2>CONTACTEZ NOUS ICI </h2>
                            <p><b>Nos supports sont disponibles </b> 
                               tous les jours, 24h/7</p>
                               <b>tel : 20 20 20 20 , 02 02 02 02</b>
                               <p class="text-danger">Laissez nous un mail, nous vous repondrons dans les minutes qui suivent </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <form  method="POST" id="form-contact" action="{{route('add.contact')}}" class="mb-4 mb-lg-0">
                            @csrf
                            <div class="form-row">

                                <div class="col-md-12 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" />
                                </div> <hr>

                                <div class="col-md-12 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Votre mail" />
                                </div>
                                
                            </div>

                            <hr>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" />
                            </div>

                             <hr>
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Votre Message"></textarea>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success">Envoyer</button>
                        </form>
                    </div>

                    <div style= "margin-top:-90px;" class="col-lg-5 bg-light">
                        <p></p>
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3571289.733943155!2d76.08560099999998!3d29.058775699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390e4a4b98404f57%3A0x75ffae70833e8448!2sShahbad%2C%20Haryana%20136135!5e0!3m2!1sen!2sin!4v1594195370933!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
        
        <!-- End Contact Us Section -->
    </body>

    <script>


$(document).ready(function(){


//alert();



});

    </script>
</html>
</div>
@endsection()



@section('page-script')
    <script src="{{ url('assets/js/contact/contact.js') }}"></script>
@endsection

