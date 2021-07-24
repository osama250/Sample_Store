@extends('admin.layout.main');
@section('title', 'Dahbord')

@section('content')

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3> {{ count_Admins() }} </h3>
                    <p> Admins</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-user-lock"></i>
                  </div>
                  <a href="{{ route('Admins.index') }}" class="small-box-footer">
                      More info <i class="fas fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                  <div class="inner">
                    <h3> {{ count_Users()  }} </h3>
                    <p> Users  </p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-users"></i>
                  </div>
                  <a href="{{ route('Users.index') }}" class="small-box-footer">
                      More info <i class="fas fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info text-center">
              <div class="inner">
                <h3>{{ count_Categories()  }} </h3>
                <p> Categories </p>
              </div>
              <div class="icon">
                <i class="fas fa-building"></i>
              </div>
              <a href="{{ route('Categories.index') }}" class="small-box-footer">
                  More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>  {{ count_Prodcuts() }}  </h3>
                <p> Prodcuts </p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="{{ route('Prodcuts.index') }}" class="small-box-footer">
                  More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-gray">
              <div class="inner">
                <h3>  {{ count_Types() }}  </h3>
                <p> Types </p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="{{ route('Types.index') }}" class="small-box-footer">
                  More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>  {{  count_Reviews()  }}  </h3>
                <p> Reivews </p>
              </div>
              <div class="icon">
                <i class="fas fa-comments"></i>
              </div>
              <a href="{{ route('Reviews.index') }}" class="small-box-footer">
                  More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-fuchsia">
              <div class="inner">
                <h3>  {{  count_Orders() }}  </h3>
                <p> Orders </p>
              </div>
              <div class="icon">
                <i class="fas fa-comments"></i>
              </div>
              <a href="{{ route('Orders.index') }}" class="small-box-footer">
                 More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
        </div>
        <!-- /.row -->
    </section>
  </div>
@endsection
