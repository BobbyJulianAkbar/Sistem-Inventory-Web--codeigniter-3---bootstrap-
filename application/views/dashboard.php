<style type="text/css">
  #horizontal-line{
    width: 100%;
    height: 5px;
    background-color: black;
    margin: 150px 0 10px 0;
  }
  #vertikal-line{
    width: 5px;
    height: 400px;
    background-color: black;
  }
  #border{
    width: 200px;
    height: 200px;
    border-radius: 50%;
    margin: 100px 0 10px 300px;
  }
  #margin{
    margin: 2px 0 10px 352px;
  }
  .box-container-horizontal{
    height: 100%;
    width: 50%;
    z-index: 1;
    top: 0;
    overflow-x: hidden;
    padding-top: 20px;
  }
  .box-container-vertikal{
    height: 100%;
    width: 50%;
    z-index: 1;
    top: 0;
    overflow-x: hidden;
    padding-top: 20px;
  }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Profile User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>  
       <div id="horizontal-line" class="box-container-horizontal"></div>
        <h1 type="bold">User</h1>
        <img id="border" src="<?php echo base_url() ?>assets/dist/img/pp.jpg" alt="User Image">
        <h2 id="margin">PROFIL</h2>
        <div id="vertikal-line" class="box-container-vertikal"></div>
    </section>
  </div>
  

</body>
</html>
