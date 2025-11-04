
        @extends('layouts.layouts_super.master')
        @section('title', 'Liste des utilisateurs')
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
                            <h5 class="m-b-10">Gestion des utilisateurs</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Administration</a></li>
                            <li class="breadcrumb-item"><a href="#!">liste des utilisateurs</a></li>

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

                            <div class="col-md-4">

                                <div class="form-group">

                                    <label for="filterStatut">Drena</label>

                                         <select class="form-control" id="drena">
                                            <option>DRENA 1</option>
                                            <option>DRENA 2</option>
                                            <option>DRENA 3</option>
                                            <option>DRENA 4</option>
                                            <option>DRENA 5</option>
                                        </select>                                     </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="filterAnnee">IEPP</label>

                                         <select class="form-control" id="iepp">
                                            <option>IEPP 1</option>
                                            <option>IEPP 2</option>
                                            <option>IEPP 3</option>
                                            <option>IEPP 4</option>
                                            <option>IEPP 5</option>
                                        </select>                                     </div>
                            </div>

                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="filterAnnee">IEPP</label>

                                  <select class="form-control" id="epp">
                                             <option>EPP 1</option>
                                            <option> EPP 2</option>
                                            <option> EPP 3</option>
                                            <option> EPP 4</option>
                                            <option> EPP 5</option>
                                        </select>         
                                   </div>
                      </div>
             </div>



             <div class="row">

                              <div class="col-md-4">
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

                                
                              <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="role"> Nom et prenoms </label>
                                        <input type="text" class="form-control" id="nom">

                                    </div>
                                </div>

                                
                              <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="role"> Nom utilisateur  </label>
                                        <input type="text" class="form-control" id="nom_user">

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
                                        <a href="/ajoututilisateur" class="btn btn-primary">
                                            <i class="feather icon-plus"></i> Nouvel Utilisateur
                                        </a>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p style="margin-top:10px;" class="text-danger text-uppercase"> Nombre d'utilisateurs:  <b style="color:blue;"> {{ 3 }} </b></p> 





  <!-- Data Table -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        
                        <h5>Liste des Utilisateurs</h5>
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
                                  <th>Drena</th>
                                  <th>Iepp </th>
                                  <th>Epp </th>
                                  <th>Nom et prenoms </th>
                                  <th>Nom utilisateur</th>
                                  <th>détail</th>
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

                                 <td>DRENA1</td>
                                 <td>IEPP1</td>
                                 <td>EPP1</td> 
                                 <td>kouassi</td>
                                 <td>wili</td>

                                  <td>
                               <a  href="detailutilisateur/1" class="btn btn-outline-info" title="detail">
                                                    <i class="feather icon-eye"></i>
                                                </a>    
                                </td>
                                <td>
                               <a  href="modificationutilisateur/1" class="btn btn-outline-warning" title="Modifier">
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

                                 <td>DRENA2</td>
                                 <td>IEPP2</td>
                                 <td>EPP1</td> 
                                 <td>traore</td>
                                 <td>moussa</td>

                                  <td>
                               <a  href="detailutilisateur/1" class="btn btn-outline-info" title="detail">
                                                    <i class="feather icon-eye"></i>
                                                </a>    
                                </td>
                                <td>
                               <a  href="modificationutilisateur/1" class="btn btn-outline-warning" title="Modifier">
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

                                 <td>DRENA3</td>
                                 <td>IEPP1</td>
                                 <td>EPP2</td> 
                                 <td>logbo</td>
                                 <td>charles</td>

                                  <td>
                               <a  href="detailutilisateur/1" class="btn btn-outline-info" title="detail">
                                                    <i class="feather icon-eye"></i>
                                                </a>    
                                </td>
                                <td>
                               <a  href="modificationutilisateur/1" class="btn btn-outline-warning" title="Modifier">
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
