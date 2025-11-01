
        @extends('layouts.layouts_super.master')
        @section('title', 'Liste des regulations drena')
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
                            <h5 class="m-b-10">Gestion des regulation</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Administration</a></li>
                            <li class="breadcrumb-item"><a href="#!">liste des regulations drena</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div> 
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->

<!-- ---------------------------------------------- -->



   
        <!-- Filters and Actions -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Filtres et Actions</h5>
                    </div>
                    <div class="card-body">


                        <div class="row align-items-center">

                            <div class="col-md-3">

                                <div class="form-group">

                                    <label for="filterStatut">DRENA donateur </label>

                                         <select class="form-control" id="DRENA1">
                                            <option>DRENA 1</option>
                                            <option>DRENA 2</option>
                                            <option>DRENA 3</option>
                                            <option>DRENA 4</option>
                                            <option>DRENA 5</option>
                                        </select>                                     </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="filterAnnee">DRENA beneficiaire</label>

                                         <select class="form-control" id="DRENA2">
                                            <option>DRENA 1</option>
                                            <option>DRENA 2</option>
                                            <option>DRENA 3</option>
                                            <option>DRENA 4</option>
                                            <option>DRENA 5</option>
                                        </select>                                     </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="filterAnnee">Type de manuel</label>

                                  <select class="form-control" id="type">
                                             <option>LIVRE</option>
                                             <option> GUIDE MAITRE </option>
                                             <option> CAHIER D'EXERCICE </option>

                                        </select>         
                                   </div>
                          </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="filterAnnee">titre de manuel</label>

                                  <select class="form-control" id="titre">
                                             <option>MATH</option>
                                             <option>FRANCAIS</option>
                                             <option>EDHC</option>
                                             <option>HISTOIRE - GEOGRAPHIE </option>
                                             <option>SCIENCE - TECHNOLOGIE </option>
                                             <option>PHYSIQUE</option>


                                        </select>         
                                   </div>
                          </div>


             </div>



             <div class="row">

                             <div class="col-md-3">
                                <div class="form-group">
                                    <label for="filterAnnee">niveau scolaire</label>

                                  <select class="form-control" id="niveau">
                                             <option>CP1</option>
                                             <option>CP2</option>
                                             <option>CE1</option>
                                            
                                        </select>         
                                   </div>
                          </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <div class="d-block">
                                        <button type="button" class="btn btn-outline-primary">
                                            <i class="feather icon-search"></i> Rechercher
                                        </button>
                                      
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <div class="d-block">
                                        <a href="/ajoutregulationdrena" class="btn btn-primary">
                                            <i class="feather icon-plus"></i> Nouvelle regulation drena                                        </a>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p style="margin-top:10px;" class="text-danger text-uppercase"> Nombre de regulation drena :  <b style="color:blue;"> {{ 3 }} </b></p> 





  <!-- Data Table -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        
                        <h5>Liste des Regulations </h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> Plein écran</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> Réduire</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><span><i class="feather icon-refresh-cw"></i> Actualiser</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                              <thead>
                              <tr>
                                  <th>Ordre</th>
                                  <th>DAF</th>
                                  <th>DRENA donateur </th>
                                  <th>DRENA beneficiaire </th>
                                  <th>Type de manuel </th>
                                  <th>Titre de manuel </th>
                                  <th>Niveau </th>
                                  <th>Quantité </th>
                                  <th>modifier</th>
                                  <th>supprimer</th>

                              </tr>
                              </thead>


                                <tbody>  
                        <?php
                            $i=0;
                           ?>
                            <?php
                            $i++
                           ?>
                            
                            <tr class="table-con">
                                <td>{{$i}}</td>
                                 <td>DAF</td>
                                 <td>DRENA1</td>
                                 <td>DRENA2</td> 
                                 <td>LIVRE</td>
                                 <td>MATH</td>
                                 <td>CP1</td>
                                 <td>20</td>

                                
                                <td>
                               <a  href="modificationregulationdrena/1" class="btn btn-outline-warning" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>    
                                </td>
                                <td>

                                 <button type="button" class="btn btn-outline-danger" title="Supprimer" data-toggle="modal" 
                                data-id='1 | guide' data-target="#deleteModal" >
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                              </td>

                            </tr>

                             <tr class="table-con">
                               <td>{{$i}}</td>
                                 <td>DAF</td>
                                 <td>DRENA1</td>
                                 <td>DRENA3</td> 
                                 <td>LIVRE</td>
                                 <td>PHYSIQUE</td>
                                 <td>CP2</td>
                                 <td>30</td>
                                
                            
                                <td>
                               <a  href="modificationregulationdrena/1" class="btn btn-outline-warning" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>    
                                </td>
                                <td>

                                 <button type="button" class="btn btn-outline-danger" title="Supprimer" data-toggle="modal" 
                                data-id='1 | guide' data-target="#deleteModal" >
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                              </td>

                            </tr>

                             <tr class="table-con">

                                <td>{{$i}}</td>
                                 <td>DAF</td>
                                 <td>DRENA2</td>
                                 <td>DRENA3</td> 
                                 <td>LIVRE</td>
                                 <td>EDHC</td>
                                 <td>CP1</td>
                                 <td>20</td>

                                <td>
                               <a  href="modificationregulationdrena/1" class="btn btn-outline-warning" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>    
                                </td>
                                <td>

                                 <button type="button" class="btn btn-outline-danger" title="Supprimer" data-toggle="modal" 
                                data-id='1 | guide' data-target="#deleteModal" >
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                              </td>

                            </tr>
                            
                              
                            </tbody>
                            </table>
                        </div>

                        <!-- Pagination statique -->
                        <div class="row">
                            <div class="col-sm-12">
                                <nav aria-label="Pagination">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <p class="text-center text-muted">Affichage de 1 à 5 sur 5 entrées</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr></hr>



   <!-- Modal -->
   <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
    <div  class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light" id="exampleModalLabel"> <p>SUPPRESION DE DONNEES </p>
</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <form action="/deleteus" method="POST" enctype="multipart/form-data">
                    @csrf

                    <p id="message" > </p>
                    <div style="padding:50px;" class="input-group mb-3 cacher bg-light">
                        <input type="text" hidden name="id" id="id" class="form-control">

                        <button class="btn btn-success" type=button data-dismiss="modal">Non</button>
                        <button class="btn btn-danger supprimer_dep" type=submit >OUI ! supprimer </button> 
  

                </form>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
	<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
    </div>
</div>





<!-- ----------------------------------------------------- -->

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


<style>
.order-card {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg, #4099ff, #73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg, #2ed8b6, #59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg, #FFB64D, #ffcb80);
}

.bg-c-red {
    background: linear-gradient(45deg, #FF5370, #ff869a);
}

.badge-light-success {
    color: #2ed8b6;
    background-color: rgba(46, 216, 182, 0.1);
}

.badge-light-info {
    color: #4099ff;
    background-color: rgba(64, 153, 255, 0.1);
}

.badge-light-secondary {
    color: #6c757d;
    background-color: rgba(108, 117, 125, 0.1);
}

.badge-light-primary {
    color: #4680ff;
    background-color: rgba(70, 128, 255, 0.1);
}

.btn-group .btn {
    margin-right: 2px;
}

.table-hover tbody tr:hover {
    background-color: #f5f5f5;
}
</style>
