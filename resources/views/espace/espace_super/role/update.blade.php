
        @extends('layouts.layouts_super.master')
        @section('title', 'modification de role ')
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
                            <li class="breadcrumb-item"><a href="/role"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">GESTION DES ROLES</a></li>
                            <li class="breadcrumb-item"><a href="#!">Modification des rôles</a></li>
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
                        <h5>FORMULAIRE MODIFICATION ROLE </h5>
                    </div>
                    <div class="card-body">
                        <form>

    
                             <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="code_role">Code role  </label>
                                        <input value="code 1" type="text" class="form-control" id="code_role">

                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">

                                        <label class="floating-label" for="libelle_role">Nom utilisateur</label>
                                        <input value="Cabinet" type="text" class="form-control" id="libelle_role">
                                    
                                    </div>
                                </div>
                            </div>

                        <div class="row">
                        <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="drena"> ajouter </label>

                                         <select class="form-control" id="drena">
                                            <option selected >oui</option>
                                            <option>non</option>
                                           
                                        </select>                                    </div>
                                </div>
                                 <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="drena"> modifier </label>

                                         <select class="form-control" id="drena">
                                            <option selected>oui</option>
                                            <option>non</option>
                                           
                                        </select>                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="drena"> lister </label>

                                         <select class="form-control" id="drena">
                                            <option selected>oui</option>
                                            <option>non</option>
                                           
                                        </select>                                    </div>
                                </div>

                                 <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="drena"> detail </label>

                                         <select class="form-control" id="drena">
                                            <option selected>oui</option>
                                            <option>non</option>
                                           
                                        </select>                                    </div>
                                </div>

                                 <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="drena"> supprimer </label>

                                         <select class="form-control" id="drena">
                                            <option selected>oui</option>
                                            <option>non</option>
                                           
                                        </select>                                    </div>
                                </div>

                                 <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="drena"> bloquer </label>

                                         <select class="form-control" id="drena">
                                            <option selected>oui</option>
                                            <option>non</option>
                                           
                                        </select>                                    </div>
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
