
        @extends('layouts.layouts_super.master')
        @section('title', 'details utilisateur')
        @section('content')

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <!-- <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard Analytics-------------------</h5>
                        </div> -->
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/compte_utilisateur"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">GESTION DES UTILISATEURS</a></li>
                            <li class="breadcrumb-item"><a href="#!">Détails des utilisateurs</a></li>
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
                        <h5>DETAIL DE L'UTILISATEUR </h5>
                    </div>
                    <div class="card-body">
                        <form>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="drena"> DRENA </label>
                                        <input type="text" value="DRENA1" class="form-control" id="drena" placeholder="">

                                                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="iepp">IEPP</label>
                                       <input type="text" value="IEPP" class="form-control" id="iepp" placeholder="">

                                                                  </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp">EPP</label>
                                        <input type="text" value="EPP" class="form-control" id="epp" placeholder="">

                                        </div>
                                </div>
                            </div>


                             <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="role"> Role </label>
                                        <input type="text" class="form-control" id="role" >

                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="nom">nom et prénoms  </label>
                                        <input type="text" class="form-control" id="nom" >

                                    </div>
                                </div>
                                

                                <div class="col-sm-4">
                                    <div class="form-group">

                                        <label class="floating-label" for="nom_user">Nom utilisateur</label>
                                        <input type="text" class="form-control" id="nom_user" >
                                    
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
