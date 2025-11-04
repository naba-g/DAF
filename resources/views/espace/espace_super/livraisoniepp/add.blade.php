@extends('layouts.layouts_super.master')
@section('title', 'Liste livraison en iepp')
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
                            <h5 class="m-b-10">Livraison iepp</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/manuel_scolaire"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">GESTION DES IEPP</a></li>
                            <li class="breadcrumb-item"><a href="#!">Création des IEPP</a></li>
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
                        <h5>FORMULAIRE AJOUT LIVRAISON IEPP </h5>
                    </div>
                    <div class="card-body">

                        <form>

                            <!--<div class="row">

                                <div class="col-sm-4">

                                    <div class="form-group">

                                        <label class="floating-label" for="matiere"> Matière </label>

                                        <select class="form-control" id="matiere">
                                            <option>Francçais</option>
                                            <option>Mathématique</option>  
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="niveau">Niveau ou classe</label>
                                     <select class="form-control" id="niveau">
                                            <option>cp1</option>
                                            <option>CP2</option>
                                            <option>CE1</option>
                                            <option>CE2</option>
                                            <option>CM1</option>
                                            <option>CM2</option>
                                        </select> 
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="type">Type</label>
                                         <select class="form-control" id="type">
                                             <option>Livre</option>
                                             <option>Guide maitre</option>
                                             <option>Cahier d'exercice</option>
                                        </select>
                                     </div>
                                </div>
                            </div>-->


                            <div class="row">
                                <!--<div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="annee"> Année de puplication </label>
                                          <select class="form-control" id="annee">
                                            <option> 2022 </option>
                                            <option> 2023 </option>
                                            <option> 2024 </option>
                                            <option> 2025 </option>
                                            <option> 2026 </option>
                                        </select>  
                                    </div>
                                </div>-->

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="date">Date livraison </label>
                                        <input type="text" class="form-control" id="date" placeholder="saisir la date de la livraison">

                                    </div>
                                </div>

                                  <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="date">Type de manuel</label>
                                        <select class="form-control" id="annee">
                                            <option>Livre </option>
                                            <option> Guide maitre </option>
                                            <option> Cahier d'excercice </option>
                                        
                                        </select>  


                                    </div>
                                </div>

                                
                                </div>

                                <label class="floating-label" for="niveau">CLASSE CP1</label> <hr>

                         <div class="row">


                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="date">Mathématiques</label>
                                        <input type="text" class="form-control" id="date" placeholder="saisir la date de la livraison">

                                    </div>
                                </div>
                                

                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label class="floating-label" for="niveau">Physiques</label>
                                        <input type="text" class="form-control" id="niveau" placeholder="saisir nom du manuel">
                                    
                                    </div>
                                </div>


                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label class="floating-label" for="quantite">Français</label>
                                        <input type="text" class="form-control" id="quantite" placeholder="saisir nom du manuel">
                                    
                                    </div>
                                </div>

                                 <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="date">EDHC</label>
                                        <input type="text" class="form-control" id="date" placeholder="saisir la date de la livraison">

                                    </div>
                                </div>
                                

                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label class="floating-label" for="niveau">Histoire-Géographie</label>
                                        <input type="text" class="form-control" id="niveau" placeholder="saisir nom du manuel">
                                    
                                    </div>
                                </div>


                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label class="floating-label" for="quantite">Sciences et technologies</label>
                                        <input type="text" class="form-control" id="quantite" placeholder="saisir nom du manuel">
                                    
                                    </div>
                                </div>



                            </div>


                            <label class="floating-label" for="niveau">CLASSE CP2</label> <hr>

                         <div class="row">


                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="date">Mathématiques</label>
                                        <input type="text" class="form-control" id="date" placeholder="saisir la date de la livraison">

                                    </div>
                                </div>
                                

                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label class="floating-label" for="niveau">Physiques</label>
                                        <input type="text" class="form-control" id="niveau" placeholder="saisir nom du manuel">
                                    
                                    </div>
                                </div>


                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label class="floating-label" for="quantite">Français</label>
                                        <input type="text" class="form-control" id="quantite" placeholder="saisir nom du manuel">
                                    
                                    </div>
                                </div>

                                 <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="date">EDHC</label>
                                        <input type="text" class="form-control" id="date" placeholder="saisir la date de la livraison">

                                    </div>
                                </div>
                                

                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label class="floating-label" for="niveau">Histoire-Géographie</label>
                                        <input type="text" class="form-control" id="niveau" placeholder="saisir nom du manuel">
                                    
                                    </div>
                                </div>


                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label class="floating-label" for="quantite">Sciences et technologies</label>
                                        <input type="text" class="form-control" id="quantite" placeholder="saisir nom du manuel">
                                    
                                    </div>
                                </div>



                            </div>

                            <label class="floating-label" for="niveau">CLASSE CE1</label> <hr>

                         <div class="row">


                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="date">Mathématiques</label>
                                        <input type="text" class="form-control" id="date" placeholder="saisir la date de la livraison">

                                    </div>
                                </div>
                                

                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label class="floating-label" for="niveau">Physiques</label>
                                        <input type="text" class="form-control" id="niveau" placeholder="saisir nom du manuel">
                                    
                                    </div>
                                </div>


                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label class="floating-label" for="quantite">Français</label>
                                        <input type="text" class="form-control" id="quantite" placeholder="saisir nom du manuel">
                                    
                                    </div>
                                </div>

                                 <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="date">EDHC</label>
                                        <input type="text" class="form-control" id="date" placeholder="saisir la date de la livraison">

                                    </div>
                                </div>
                                

                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label class="floating-label" for="niveau">Histoire-Géographie</label>
                                        <input type="text" class="form-control" id="niveau" placeholder="saisir nom du manuel">
                                    
                                    </div>
                                </div>


                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label class="floating-label" for="quantite">Sciences et technologies</label>
                                        <input type="text" class="form-control" id="quantite" placeholder="saisir nom du manuel">
                                    
                                    </div>
                                </div>



                            </div>

                            <label class="floating-label" for="niveau">CLASSE CE2</label> <hr>

                         <div class="row">


                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="date">Mathématiques</label>
                                        <input type="text" class="form-control" id="date" placeholder="saisir la date de la livraison">

                                    </div>
                                </div>
                                

                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label class="floating-label" for="niveau">Physiques</label>
                                        <input type="text" class="form-control" id="niveau" placeholder="saisir nom du manuel">
                                    
                                    </div>
                                </div>


                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label class="floating-label" for="quantite">Français</label>
                                        <input type="text" class="form-control" id="quantite" placeholder="saisir nom du manuel">
                                    
                                    </div>
                                </div>

                                 <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="date">EDHC</label>
                                        <input type="text" class="form-control" id="date" placeholder="saisir la date de la livraison">

                                    </div>
                                </div>
                                

                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label class="floating-label" for="niveau">Histoire-Géographie</label>
                                        <input type="text" class="form-control" id="niveau" placeholder="saisir nom du manuel">
                                    
                                    </div>
                                </div>


                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label class="floating-label" for="quantite">Sciences et technologies</label>
                                        <input type="text" class="form-control" id="quantite" placeholder="saisir nom du manuel">
                                    
                                    </div>
                                </div>



                            </div>

                            <label class="floating-label" for="niveau">CLASSE CM1</label> <hr>

                         <div class="row">


                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="date">Mathématiques</label>
                                        <input type="text" class="form-control" id="date" placeholder="saisir la date de la livraison">

                                    </div>
                                </div>
                                

                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label class="floating-label" for="niveau">Physiques</label>
                                        <input type="text" class="form-control" id="niveau" placeholder="saisir nom du manuel">
                                    
                                    </div>
                                </div>


                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label class="floating-label" for="quantite">Français</label>
                                        <input type="text" class="form-control" id="quantite" placeholder="saisir nom du manuel">
                                    
                                    </div>
                                </div>

                                 <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="date">EDHC</label>
                                        <input type="text" class="form-control" id="date" placeholder="saisir la date de la livraison">

                                    </div>
                                </div>
                                

                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label class="floating-label" for="niveau">Histoire-Géographie</label>
                                        <input type="text" class="form-control" id="niveau" placeholder="saisir nom du manuel">
                                    
                                    </div>
                                </div>


                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label class="floating-label" for="quantite">Sciences et technologies</label>
                                        <input type="text" class="form-control" id="quantite" placeholder="saisir nom du manuel">
                                    
                                    </div>
                                </div>



                            </div>

                            <label class="floating-label" for="niveau">CLASSE CM2</label> <hr>

                         <div class="row">


                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="date">Mathématiques</label>
                                        <input type="text" class="form-control" id="date" placeholder="saisir la date de la livraison">

                                    </div>
                                </div>
                                

                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label class="floating-label" for="niveau">Physiques</label>
                                        <input type="text" class="form-control" id="niveau" placeholder="saisir nom du manuel">
                                    
                                    </div>
                                </div>


                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label class="floating-label" for="quantite">Français</label>
                                        <input type="text" class="form-control" id="quantite" placeholder="saisir nom du manuel">
                                    
                                    </div>
                                </div>

                                 <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="date">EDHC</label>
                                        <input type="text" class="form-control" id="date" placeholder="saisir la date de la livraison">

                                    </div>
                                </div>
                                

                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label class="floating-label" for="niveau">Histoire-Géographie</label>
                                        <input type="text" class="form-control" id="niveau" placeholder="saisir nom du manuel">
                                    
                                    </div>
                                </div>


                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label class="floating-label" for="quantite">Sciences et technologies</label>
                                        <input type="text" class="form-control" id="quantite" placeholder="saisir nom du manuel">
                                    
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
