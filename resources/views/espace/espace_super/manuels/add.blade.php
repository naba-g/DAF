            @extends('layouts.layouts_super.master')
            @section('title', 'ajout Manuels ')
            @section('content')

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Gestion de manuels</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/manuel_scolaire"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Administration</a></li>
                            <li class="breadcrumb-item"><a href="#!">Création de Manuel</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->

        <div class="row"> 
            <!-- <p class="btn btn-primary">BIENVENUE SUR DISMAS ----- add user  </p> -->



            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>FORMULAIRE AJOUT MANUELS </h5>
                    </div>
                    <div class="card-body">

                        <form>

                
                            <div class="row">
                              

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="code">code </label>
                                        <input type="text" class="form-control" id="code" placeholder="saisir le code du manuel">

                                    </div>
                                </div>
                                


                                <div class="col-sm-6">
                                    <div class="form-group">

                                        <label class="floating-label" for="auteur">Libellé</label>
                                        <input type="text" class="form-control" id="auteur" placeholder="saisir nom du manuel">
                                    
                                    </div>
                                </div>

                            </div>

                    <a class="btn btn-success text-light" href="">Valider</a>
                    <a class="btn btn-danger text-light" href="">Annuler</a>

                        </form>
                    </div>
                </div>
            <!-- [ form-element ] start -->


           </div>


            </div> <!--end pcoded content -->


            <!-- Latest Customers end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>



        @endsection()
      <!--  -->

    

@section('page-script')
    <!-- <script src="{{ url('assets/js/test/test.js') }}"></script> -->
@endsection


<!-- </body></html> -->
