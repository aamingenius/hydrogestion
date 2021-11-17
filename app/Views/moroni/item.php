<!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row"> 
          <!-- <div class="col-lg-1 col-6"></div> -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner"><?php 
                if(isset($jaugeage) && count($jaugeage) > 0){
                  $compteur_essence=0;
                  $compteur_gasoil=0;
                  $compteur_petrole=0;
                  $compteur_jeta1=0;
                  $compteur_gaz=0;
              foreach($jaugeage as $jaugeage){
    
              if(stripos($jaugeage['cuve'], "MORONI") !== false && $jaugeage['produit'] == "ESSENCE" && $jaugeage['date']==date('d/m/Y', strtotime(' -1 day'))){
                              $compteur_essence=$compteur_essence+$jaugeage['fin_compteur'];
                   }
              if(stripos($jaugeage['cuve'], "MORONI") !== false && $jaugeage['produit'] == "GASOIL" && $jaugeage['date']==date('d/m/Y', strtotime(' -1 day'))){
                              $compteur_gasoil=$compteur_gasoil+$jaugeage['fin_compteur'];
                   }
              if(stripos($jaugeage['cuve'], "MORONI") !== false && $jaugeage['produit'] == "PETROLE" && $jaugeage['date']==date('d/m/Y', strtotime(' -1 day'))){
                              $compteur_petrole=$compteur_petrole+$jaugeage['fin_compteur'];
                   }
              if(stripos($jaugeage['cuve'], "MORONI") !== false && $jaugeage['produit'] == "JET A1" && $jaugeage['date']==date('d/m/Y', strtotime(' -1 day'))){
                              $compteur_jeta1=$compteur_jeta1+$jaugeage['fin_compteur'];
                   }
              // if($jaugeage['produit'] == "GAZ" && $jaugeage['date']==date('d/m/Y', strtotime(' -1 day'))){
              //                 $compteur=$compteur+$jaugeage['fin_compteur'];
              //      }
                    
                
                    }
                  }else{
                    
                  }
             ?>
                 
                <h3><?php  echo $compteur_essence; ?><sup style="font-size: 20px"> Litres </sup></h3>

                <h2>Essence</h2>
                <!-- <p>New Orders</p> -->
              </div>
              <div class="icon">
                <i class="ion ion-waterdrop"> </i> 
              </div>
              <a href="#" class="small-box-footer"><!-- Plus info <i class="fas fa-arrow-circle-right"></i> --></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php  echo $compteur_gasoil; ?><sup style="font-size: 20px"> Litres </sup></h3>

                <h2>Gasoil</h2>
              </div>
              <div class="icon">
                <i class="ion ion-waterdrop"></i>
              </div>
              <a href="#" class="small-box-footer"><!-- Plus info <i class="fas fa-arrow-circle-right"></i> --></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php  echo $compteur_petrole; ?><sup style="font-size: 20px"> Litres </sup></h3>

                <h2>Petrole</h2>
              </div>
              <div class="icon">
                <i class="ion ion-waterdrop"></i>
              </div>
              <a href="#" class="small-box-footer"><!-- Plus info <i class="fas fa-arrow-circle-right"></i> --></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php  echo $compteur_jeta1; ?><sup style="font-size: 20px"> Litres </sup></h3>

                <h2>Jet A1</h2>
              </div>
              <div class="icon">
                <i class="ion ion-plane"></i>
              </div>
              <a href="#" class="small-box-footer"><!-- Plus info <i class="fas fa-arrow-circle-right"></i> --></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6">
           
            <div class="small-box bg-orange">
              <div class="inner">
                <h3>43<sup style="font-size: 20px"> Bouteils </sup></h3>

                <h2>Hydrogaz</h2>
              </div>
              <div class="icon">
                <i class="ion ion-flame"></i>
              </div>
              <a href="#" class="small-box-footer"> Plus info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
        </div>
        <!-- /.row -->