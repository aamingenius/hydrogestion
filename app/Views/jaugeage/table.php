       <!-- Fin de session gauche -->
         
          <!-- Section2 Table -->
          <section class="col-lg-12 connectedSortable">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                   
                  <!-- /.card -->

                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Tableaux Recapitulatif</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                     
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>CUVE</th>
                          <th>DATE/HEURE</th>
                          <th>PRODUIT</th>
                          <th>DEBUT COMPTEUR </th>
                          <th>SORTI</th>
                          <th>ENTRE</th>
                          <th>ETAT ACTUEL COMPTEUR </th>
                         </tr>
                        </thead>
                        <tbody>
                          <?php 
            if(isset($jaugeage) && count($jaugeage) > 0){
              foreach($jaugeage as $jaugeage){
                ?>
                <tr>
                  <td><?= $jaugeage['cuve'] ?></td>
                  <td><?= $jaugeage['date'] ?></td>
                  <td><?= $jaugeage['produit'] ?></td>
                  <td><?= $jaugeage['debut_compteur'] ?></td>
                  <td><?= $jaugeage['sorti'] ?></td>
                  <td><?= $jaugeage['entre'] ?></td>
                  <td><?= $jaugeage['fin_compteur'] ?></td>
                </tr>  
             <?php
                    }
                  }else{
                    ?>
                    <tr>
                      <td colspan="7">Aucune données trouver.</td>
                    </tr>
                    <?php
                  }
             ?>
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>CUVE</th>
                          <th>DATE/HEURE</th>
                          <th>PRODUIT</th>
                          <th>DEBUT COMPTEUR </th>
                          <th>SORTI</th>
                          <th>ENTRE</th>
                          <th>ETAT ACTUEL COMPTEUR </th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
      <!-- /.container-fluid -->
          </section>