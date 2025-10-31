
        @extends('layouts.layouts_super.master')
        @section('title', 'Liste des utilisateur')
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
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">GESTION DES UTILISATEURS</a></li>
                            <li class="breadcrumb-item"><a href="#!">liste des utilisateurs</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div> 
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->

<!-- ---------------------------------------------- -->


<div style="padding:50px;" class="container bg-light">
    <?php
    //print_r($data3)
    ?>
<p style="margin-top:10px;" class="text-danger text-uppercase"> Nombre des utilisateurs :  <b style="color:blue;"> {{ 2 }} </b></p>
<style>
   
  
#exTab1 .tab-content {
  color : navy;
  background-color:gray;
  padding : 40px;
}

#exTab2 h3 {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;
}

/* remove border radius for the tab*/

#exTab1 .nav-pills > li > a {
  border-radius: 0;
}

/* change border radius for the tab , apply corners on top*/

#exTab3 .nav-pills > li > a {
  border-radius: 4px 4px 0 0 ;
}

#exTab3 .tab-content {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;
}

thead{
    font-size:12px;
    color:navy;
}



tbody{
    font-size:12px;
    color:gray;
}

.recher{
  background-color:#ffe;
}



</style>
       <div class="row">
        <div class="col-md-12">
        <h5 style="padding:20px; background-color:#131111;" class="text-white text-center"> LISTE DES UTILISATEURS  </h5>
        </div>

    </div> <br> <br>


    <form action="{{url('/searchuser')}}" type="GET" >



   <div class="row">
  <div class="col-md-3">
  <label for="">Nom utilisateur</label>
    <input class= "form-control recher" type="text" name="query1" id="">
  </div>
  <div class="col-md-3">
  <label for="">Code utilisateur </label>

  <input class= "form-control recher" type="text" name="query2" id="">
    </div>
    <div class="col-md-3">
   <label for="">Drena</label>
    <select class="form-control bg-light" name="query3" id="service_re">
                                        <option value="0">-----Choisir Drena------</option>
                                        <option value="1">drena 1</option>
                                        <option value="2">drena 2</option>
                                        <option value="3">drena 3</option>

                                     </select>        
    </div>
    <div class="col-md-3">
         <label for="">IEPP</label>
                             <select class="form-control  bg-light" name="query4" id="departement_re">
                                        <option value="0">-----Choisir iepp-----</option>
                                        <option value="1">iepp 1</option>
                                        <option value="2">iepp 2</option>
                                        <option value="3">iepp 3</option>

                                     </select>        
    </div>


</div>



   <div class="row">

  
    <div class="col-md-3">
   <label for="">Epp</label>
    <select class="form-control bg-light" name="query3" id="service_re">
                                        <option value="0">-----Choisir epp------</option>
                                        <option value="1">epp 1</option>
                                        <option value="2">epp 2</option>
                                        <option value="3">epp 3</option>

                                     </select>        
    </div>
    <div class="col-md-3">
         <label for="">Statut</label>
                             <select class="form-control  bg-light" name="query4" id="departement_re">
                                        <option value="0">-----Choisir statut-----</option>
                                        <option value="1">activé</option>
                                        <option value="2">en attente</option>
                                        <option value="3">bloqué</option>

                                     </select>        
    </div>

     <div class="col-md-3">
         <label for="">Role</label>
                             <select class="form-control  bg-light" name="query4" id="departement_re">
                                        <option value="0">-----Choisir role-----</option>
                                        <option value="1">Cabinet</option>
                                        <option value="2">Daf</option>
                                        <option value="3">Iepp</option>
                                        <option value="3">Epp</option>

                                     </select>        
    </div>



</div>







<br>
<button class="btn btn-info" type="submit">rechercher</button>
<button class="btn btn-dark text-light" type="submit">expoter</button>
<button class="btn btn-dark text-light" type="submit">imprimer</button>
<a class="btn btn-primary text-light float-right" href="/ajoututilisateur">ajouter utilisateur</a>


<hr>

</form>


    <div class="row ">

                <table class="table table-hover table-straped">
                        <thead>
                        <tr>
                            <th>Ordre</th>
                            <th>Nom </th>
                            <th>Prénoms </th>
                            <th>Nom utilisateur </th>
                            <th>Drena </th>
                            <th>Iepp </th>
                            <th>Epp</th>
                            <th>Statut </th>
                            <!-- <th>Detail </th> -->
                            <th>Modifier </th>
                            <th>Supprimer</th>
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

                                <td>KOUASSI</td>
                                <td>JESUS</td>
                                <td>GRANBONW</td>
                                <td>activé</td>

                                 <td>DRENA2</td>
                                 <td>IEPP1</td>
                                 <td>EPP1</td>

                                <td>
                                 <a style="padding:1px;"  class=" btn-primary" href="detailutilisateur/1">DETAIL</a>
                                </td> 

                                <td>
                                <a style="padding:1px;"  class=" btn-info" href="modificationutilisateur/1">MODIFIER</a>
    
                                </td>
                                <td>

                                <a  style="padding:1px;"  href="" class="addAttr btn-danger" data-toggle="modal" 
                                data-id='1 | kouassi' data-target="#deleteModal"  >SUPPRIMER</a>
                                 
                              </td>

                            </tr>

                                <tr class="table-con">
                                <td>{{$i}}</td>

                                <td>YAO</td>
                                <td>SERGE</td>
                                <td>USER2</td>
                                <td>activé</td>

                                <td>DRENA1</td>
                                <td>IEPP1</td>
                                <td>EPP1</td>

                                 <td>
                                 <a style="padding:1px;"  class=" btn-primary" href="detailutilisateur/1">DETAIL</a>
                                </td> 

                                <td>
                                <a style="padding:1px;"  class=" btn-info" href="modificationutilisateur/2">MODIFIER</a>
    
                                </td>
                                <td>

                                <a  style="padding:1px;"  href="" class="addAttr btn-danger" data-toggle="modal" 
                                data-id='1 | kouassi' data-target="#deleteModal"  >SUPPRIMER</a>
                                 
                              </td>

                            </tr>
                                <tr class="table-con">
                                <td>{{$i}}</td>

                                <td>TRAORE</td>
                                <td>LUCIEN</td>
                                <td>USER3</td>
                                <td>activé</td>

                                <td>DRENA1</td>
                                <td>IEPP2</td>
                                <td>EPP1</td>

                                <td>
                                 <a style="padding:1px;"  class=" btn-primary" href="detailutilisateur/1">DETAIL</a>
                                </td> 

                                <td>
                                <a style="padding:1px;"  class=" btn-info" href="modificationutilisateur/3">MODIFIER</a>
    
                                </td>
                                <td>

                                <a  style="padding:1px;"  href="" class="addAttr btn-danger" data-toggle="modal" 
                                data-id='1 | kouassi' data-target="#deleteModal"  >SUPPRIMER</a>
                                 
                              </td>

                            </tr>





                            
                            </tbody>

                         
                    </table> <hr>



        <a href="/" class="btn btn-light" >Precedent</a> &nbsp;&nbsp;

<a  href="/add-les-comptes-users" class="btn btn-light" >suivant</a>

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
