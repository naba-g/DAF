
        @extends('layouts.layouts_super.master')
        @section('title', 'Modification de retour')
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
                            <h5 class="m-b-10">Gestion des retours</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/retourmanuels"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Administration</a></li>
                            <li class="breadcrumb-item"><a href="#!">Modification de retours </a></li>
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
                        <h5>FORMULAIRE MODIFICATION RETOUR </h5>
                    </div>
                    <div class="card-body">
                        <form>

                            <div class="row">
                                
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="drena"> Type de manuels  </label>

                                         <select class="form-control" id="drena">
                                            <option>livre</option>
                                            <option>guide maitre</option>
                                           
                                        </select>                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="iepp">Titre de manuels </label>
                                     <select class="form-control" id="iepp">
                                            <option>MATH</option>
                                            <option>PHYSIQUE</option>
                                            <option>EDHC</option>
                                            <option>SCIENCE ET TECHNOLOGIE</option>
                                            <option>FRANCAIS</option>
                                        </select>                                    
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp">Quantité</label>
                                        <input type="text" class="form-control" id="qte" placeholder="saisir la qte ">

                                     </div>
                                </div>
                            </div>

                            
                            <div class="row">
                                
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="drena"> Type de manuels  </label>

                                         <select class="form-control" id="drena">
                                            <option>livre</option>
                                            <option>guide maitre</option>
                                           
                                        </select>                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="iepp">Titre de manuels </label>
                                     <select class="form-control" id="iepp">
                                            <option>MATH</option>
                                            <option>PHYSIQUE</option>
                                            <option>EDHC</option>
                                            <option>SCIENCE ET TECHNOLOGIE</option>
                                            <option>FRANCAIS</option>
                                        </select>                                    
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp">Quantité</label>
                                        <input type="text" class="form-control" id="qte" placeholder="saisir la qte ">

                                     </div>
                                </div>
                            </div>

                            
                            <div class="row">
                                
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="drena"> Type de manuels  </label>

                                         <select class="form-control" id="drena">
                                            <option>livre</option>
                                            <option>guide maitre</option>
                                           
                                        </select>                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="iepp">Titre de manuels </label>
                                     <select class="form-control" id="iepp">
                                            <option>MATH</option>
                                            <option>PHYSIQUE</option>
                                            <option>EDHC</option>
                                            <option>SCIENCE ET TECHNOLOGIE</option>
                                            <option>FRANCAIS</option>
                                        </select>                                    
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp">Quantité</label>
                                        <input type="text" class="form-control" id="qte" placeholder="saisir la qte ">

                                     </div>
                                </div>
                            </div>

                            
                            <div class="row">
                                
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="drena"> Type de manuels  </label>

                                         <select class="form-control" id="drena">
                                            <option>livre</option>
                                            <option>guide maitre</option>
                                           
                                        </select>                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="iepp">Titre de manuels </label>
                                     <select class="form-control" id="iepp">
                                            <option>MATH</option>
                                            <option>PHYSIQUE</option>
                                            <option>EDHC</option>
                                            <option>SCIENCE ET TECHNOLOGIE</option>
                                            <option>FRANCAIS</option>
                                            <option>HISTOIRE - GEOGRAPHIE</option>

                                        </select>                                    
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp">Quantité</label>
                                        <input type="text" class="form-control" id="qte" placeholder="saisir la qte ">

                                     </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="drena"> Type de manuels  </label>

                                         <select class="form-control" id="drena">
                                            <option>livre</option>
                                            <option>guide maitre</option>
                                           
                                        </select>                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="iepp">Titre de manuels </label>
                                     <select class="form-control" id="iepp">
                                            <option>MATH</option>
                                            <option>PHYSIQUE</option>
                                            <option>EDHC</option>
                                            <option>SCIENCE ET TECHNOLOGIE</option>
                                            <option>FRANCAIS</option>
                                            <option>HISTOIRE - GEOGRAPHIE</option>

                                        </select>                                    
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp">Quantité</label>
                                        <input type="text" class="form-control" id="qte" placeholder="saisir la qte ">

                                     </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="drena"> Type de manuels  </label>

                                         <select class="form-control" id="drena">
                                            <option>livre</option>
                                            <option>guide maitre</option>
                                           
                                        </select>                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="iepp">Titre de manuels </label>
                                     <select class="form-control" id="iepp">
                                            <option>MATH</option>
                                            <option>PHYSIQUE</option>
                                            <option>EDHC</option>
                                            <option>SCIENCE ET TECHNOLOGIE</option>
                                            <option>FRANCAIS</option>
                                            <option>HISTOIRE - GEOGRAPHIE</option>

                                        </select>                                    
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="epp">Quantité</label>
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
