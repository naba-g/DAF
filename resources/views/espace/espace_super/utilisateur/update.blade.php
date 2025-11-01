
        @extends('layouts.layouts_super.master')
        @section('title', 'modifier utilisateur')
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
                            <li class="breadcrumb-item"><a href="#!">Modification des utilisateurs</a></li>
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
                        <h5>FORMULAIRE MODIFICATION UTILISATEUR </h5>
                    </div>
                    <div class="card-body">
                        <form>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="drena"> DRENA </label>

                                         <select class="form-control" id="drena">
                                            <option>DRENA 1</option>
                                            <option>DRENA 2</option>
                                            <option>DRENA 3</option>
                                            <option>DRENA 4</option>
                                            <option>DRENA 5</option>
                                        </select>                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="iepp">IEPP</label>
                                     <select class="form-control" id="iepp">
                                            <option> IEPP 1</option>
                                            <option> IEPP 2</option>
                                            <option> IEPP 3</option>
                                            <option> IEPP 4</option>
                                            <option> IEPP 5</option>
                                        </select>                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp">EPP</label>
                                         <select class="form-control" id="epp">
                                             <option>EPP 1</option>
                                            <option> EPP 2</option>
                                            <option> EPP 3</option>
                                            <option> EPP 4</option>
                                            <option> EPP 5</option>
                                        </select>                                    </div>
                                </div>
                            </div>


                             <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="role"> Role </label>
                                          <select class="form-control" id="drena">
                                            <option> cabinet </option>
                                            <option> daf </option>
                                            <option> drena </option>
                                            <option> ipee </option>
                                            <option> epp </option>
                                        </select>  
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="nom">nom et prénoms  </label>
                                        <input type="text" class="form-control" id="nom" placeholder="saisir le nom et prenoms ">

                                    </div>
                                </div>
                                

                                <div class="col-sm-4">
                                    <div class="form-group">

                                        <label class="floating-label" for="nom_user">Nom utilisateur</label>
                                        <input type="text" class="form-control" id="nom_user" placeholder="saisir nom utilisateur">
                                    
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
