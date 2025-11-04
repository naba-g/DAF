
        @extends('layouts.layouts_super.master')
        @section('title', 'modifier regulation epp')
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
                            <h5 class="m-b-10">Gestion des regulations epp</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/compte_utilisateur"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Administration</a></li>
                            <li class="breadcrumb-item"><a href="#!">Modification des regulations epp </a></li>
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
                        <h5>FORMULAIRE MODIFICATION REGULATION EPP  </h5>
                    </div>
                    <div class="card-body">
                        <form>

                            <div class="row">
                                
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp1"> Epp donateur </label>

                                         <select class="form-control" id="epp1">
                                            <option>EPP 1</option>
                                            <option>EPP 2</option>
                                            <option>EPP 3</option>
                                            <option>EPP 4</option>
                                            <option>EPP 5</option>
                                        </select>                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp2">Epp beneficiaire </label>
                                     <select class="form-control" id="epp2">
                                           <option>EPP 1</option>
                                            <option>EPP 2</option>
                                            <option>EPP 3</option>
                                            <option>EPP 4</option>
                                            <option>EPP 5</option>
                                        </select>                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp">Type de manuels </label>
                                         <select class="form-control" id="epp">
                                             <option>livre</option>
                                             <option> guide maitre</option>
                                             <option> cahier d'exercice</option>
                                           
                                        </select>                                    </div>
                                </div>

                                 <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp">Titre de manuels </label>
                                         <select class="form-control" id="epp">
                                            <option>MATH</option>
                                             <option>FRANCAIS</option>
                                             <option>EDHC</option>
                                             <option>HISTOIRE - GEOGRAPHIE </option>
                                             <option>SCIENCE - TECHNOLOGIE </option>
                                             <option>PHYSIQUE</option>

                                        </select>                                    </div>
                                </div>


                                  <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp">Niveau </label>
                                         <select class="form-control" id="epp">
                                            <option>CP1</option>
                                             <!-- <option>CP2</option>
                                             <option>CE1</option> -->
                                           
                                        </select>
                                     </div>
                                </div>

                                  <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp">Quantité </label>
                                        <input type="text" class="form-control" id="qte" placeholder="saisir la qte ">

                                     </div>
                                </div>


                            </div>


                               <div class="row">
                                
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp1"> Epp donateur </label>

                                         <select class="form-control" id="epp1">
                                            <option>EPP 1</option>
                                            <option>EPP 2</option>
                                            <option>EPP 3</option>
                                            <option>EPP 4</option>
                                            <option>EPP 5</option>
                                        </select>                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp2">Epp beneficiaire </label>
                                     <select class="form-control" id="epp2">
                                           <option>EPP 1</option>
                                            <option>EPP 2</option>
                                            <option>EPP 3</option>
                                            <option>EPP 4</option>
                                            <option>EPP 5</option>
                                        </select>                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp">Type de manuels </label>
                                         <select class="form-control" id="epp">
                                             <option>livre</option>
                                             <option> guide maitre</option>
                                             <option> cahier d'exercice</option>
                                           
                                        </select>                                    </div>
                                </div>

                                 <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp">Titre de manuels </label>
                                         <select class="form-control" id="epp">
                                            <option>MATH</option>
                                             <option>FRANCAIS</option>
                                             <option>EDHC</option>
                                             <option>HISTOIRE - GEOGRAPHIE </option>
                                             <option>SCIENCE - TECHNOLOGIE </option>
                                             <option>PHYSIQUE</option>

                                        </select>                                    </div>
                                </div>


                                  <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp">Niveau </label>
                                         <select class="form-control" id="epp">
                                            <!-- <option>CP1</option> -->
                                             <option>CP2</option>
                                             <!-- <option>CE1</option> -->
                                           
                                        </select>
                                     </div>
                                </div>

                                  <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp">Quantité </label>
                                        <input type="text" class="form-control" id="qte" placeholder="saisir la qte ">

                                     </div>
                                </div>


                            </div>

                               <div class="row">
                                
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp1"> Epp donateur </label>

                                         <select class="form-control" id="epp1">
                                            <option>EPP 1</option>
                                            <option>EPP 2</option>
                                            <option>EPP 3</option>
                                            <option>EPP 4</option>
                                            <option>EPP 5</option>
                                        </select>                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp2">Epp beneficiaire </label>
                                     <select class="form-control" id="epp2">
                                           <option>EPP 1</option>
                                            <option>EPP 2</option>
                                            <option>EPP 3</option>
                                            <option>EPP 4</option>
                                            <option>EPP 5</option>
                                        </select>                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp">Type de manuels </label>
                                         <select class="form-control" id="epp">
                                             <option>livre</option>
                                             <option> guide maitre</option>
                                             <option> cahier d'exercice</option>
                                           
                                        </select>                                    </div>
                                </div>

                                 <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp">Titre de manuels </label>
                                         <select class="form-control" id="epp">
                                            <option>MATH</option>
                                             <option>FRANCAIS</option>
                                             <option>EDHC</option>
                                             <option>HISTOIRE - GEOGRAPHIE </option>
                                             <option>SCIENCE - TECHNOLOGIE </option>
                                             <option>PHYSIQUE</option>

                                        </select>                                    </div>
                                </div>


                                  <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp">Niveau </label>
                                         <select class="form-control" id="epp">
                                            <!-- <option>CP1</option>
                                             <option>CP2</option> -->
                                             <option>CE1</option>
                                           
                                        </select>
                                     </div>
                                </div>

                                  <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp">Quantité </label>
                                        <input type="text" class="form-control" id="qte" placeholder="saisir la qte ">

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
