@extends('layouts.admin')

@section('content')
<!-- Main content -->

<div class="content-header">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Opciones de Menú</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            <li class="breadcrumb-item active">menú</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Cinta de Opciones</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-sm-4">

                  <div class="position-relative p-3 bg-gray" style="height: 180px">
                      <img src="../../dist/img/photo1.png" alt="Photo 1" class="img-fluid">
                      <div class="ribbon-wrapper ribbon-xl">
                          <div class="ribbon bg-primary text-lg">
                            Inicio
                          </div>
                        </div>
                    Ribbon Default <br />
                    <small>.ribbon-wrapper.ribbon-lg .ribbon</small>
                  </div>

                </div>
                <div class="col-sm-4">
                  <div class="position-relative p-3 bg-gray" style="height: 180px">
                      <div class="ribbon-wrapper ribbon-xl">
                          <div class="ribbon bg-info text-lg">
                            Quienes somos
                          </div>
                        </div>
                    Ribbon Large <br />
                    <small>.ribbon-wrapper.ribbon-lg .ribbon</small>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="position-relative p-3 bg-gray" style="height: 180px">
                      <div class="ribbon-wrapper ribbon-xl">
                          <div class="ribbon bg-success text-lg">
                            Servicios
                          </div>
                        </div>
                    Ribbon Extra Large <br />
                    <small>.ribbon-wrapper.ribbon-xl .ribbon</small>
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-sm-4">
                  <div class="position-relative p-3 bg-gray" style="height: 180px">
                    <div class="ribbon-wrapper ribbon-lg">
                      <div class="ribbon bg-success text-lg">
                        Productos
                      </div>
                    </div>
                    Ribbon Large <br /> with Large Text <br />
                    <small>.ribbon-wrapper.ribbon-lg .ribbon.text-lg</small>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="position-relative p-3 bg-gray" style="height: 180px">
                    <div class="ribbon-wrapper ribbon-xl">
                      <div class="ribbon bg-warning text-lg">
                        Proyectos
                      </div>
                    </div>
                    Ribbon Extra Large <br /> with Large Text <br />
                    <small>.ribbon-wrapper.ribbon-xl .ribbon.text-lg</small>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="position-relative p-3 bg-gray" style="height: 180px">
                    <div class="ribbon-wrapper ribbon-xl">
                      <div class="ribbon bg-danger text-lg">
                        Clientes
                      </div>
                    </div>
                    Ribbon Extra Large <br /> with Extra Large Text <br />
                    <small>.ribbon-wrapper.ribbon-xl .ribbon.text-xl</small>
                  </div>
                </div>
              </div>
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
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
