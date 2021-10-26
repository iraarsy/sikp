<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Laporan Ketersediaan Pangan</small></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Laporan</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div>
  </div>
  <!-- /.content-header -->

  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-2">
          <div class="card">
            <div class="card-body">
              <a href="/tanaman/tambah" type="button" class="btn btn-block bg-gradient-primary">
                <i class=" fas fa-plus"></i> <strong>Tambah Data</strong>
              </a>
              <a href="/dashboard" type="button" class="btn btn-block bg-gradient-warning">
                <i class=" fas fa-plus"></i> <strong>Keluar</strong>
              </a>
            </div>
          </div>
        </div>
        <div class="col-10">
          <div class="card">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Tanaman Pangan</th>
                    <th>Kepemilikan</th>
                    <th>Lokasi</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Tomat</td>
                    <td>Tony Chicken</td>
                    <td>DiKebun</td>
                    <td>
                      <a href="/tanaman/detail" class="btn btn-block btn-info btn-sm" type="button">
                        <i class="fa fa-folder-open"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Tomat</td>
                    <td>Tony Chicken</td>
                    <td>DiKebun</td>
                    <td>
                      <a href="/tanaman/detail" class="btn btn-block btn-info btn-sm" type="button">
                        <i class="fa fa-folder-open"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Tomat</td>
                    <td>Tony Chicken</td>
                    <td>DiKebun</td>
                    <td>
                      <a href="/tanaman/detail" class="btn btn-block btn-info btn-sm" type="button">
                        <i class="fa fa-folder-open"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Tomat</td>
                    <td>Tony Chicken</td>
                    <td>DiKebun</td>
                    <td>
                      <a href="/tanaman/detail" class="btn btn-block btn-info btn-sm" type="button">
                        <i class="fa fa-folder-open"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Tomat</td>
                    <td>Tony Chicken</td>
                    <td>DiKebun</td>
                    <td>
                      <a href="/tanaman/detail" class="btn btn-block btn-info btn-sm" type="button">
                        <i class="fa fa-folder-open"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Tomat</td>
                    <td>Tony Chicken</td>
                    <td>DiKebun</td>
                    <td>
                      <a href="/tanaman/detail" class="btn btn-block btn-info btn-sm" type="button">
                        <i class="fa fa-folder-open"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Tomat</td>
                    <td>Tony Chicken</td>
                    <td>DiKebun</td>
                    <td>
                      <a href="/tanaman/detail" class="btn btn-block btn-info btn-sm" type="button">
                        <i class="fa fa-folder-open"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Tomat</td>
                    <td>Tony Chicken</td>
                    <td>DiKebun</td>
                    <td>
                      <a href="/tanaman/detail" class="btn btn-block btn-info btn-sm" type="button">
                        <i class="fa fa-folder-open"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Tomat</td>
                    <td>Tony Chicken</td>
                    <td>DiKebun</td>
                    <td>
                      <a href="/tanaman/detail" class="btn btn-block btn-info btn-sm" type="button">
                        <i class="fa fa-folder-open"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Tomat</td>
                    <td>Tony Chicken</td>
                    <td>DiKebun</td>
                    <td>
                      <a href="/tanaman/detail" class="btn btn-block btn-info btn-sm" type="button">
                        <i class="fa fa-folder-open"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Tomat</td>
                    <td>Tony Chicken</td>
                    <td>DiKebun</td>
                    <td>
                      <a href="/tanaman/detail" class="btn btn-block btn-info btn-sm" type="button">
                        <i class="fa fa-folder-open"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>Tomat</td>
                    <td>Tony Chicken</td>
                    <td>DiKebun</td>
                    <td>
                      <a href="/tanaman/detail" class="btn btn-block btn-info btn-sm" type="button">
                        <i class="fa fa-folder-open"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>Tomat</td>
                    <td>Tony Chicken</td>
                    <td>DiKebun</td>
                    <td>
                      <a href="/tanaman/detail" class="btn btn-block btn-info btn-sm" type="button">
                        <i class="fa fa-folder-open"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>Tomat</td>
                    <td>Tony Chicken</td>
                    <td>DiKebun</td>
                    <td>
                      <a href="/tanaman/detail" class="btn btn-block btn-info btn-sm" type="button">
                        <i class="fa fa-folder-open"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>Tomat</td>
                    <td>Tony Chicken</td>
                    <td>DiKebun</td>
                    <td>
                      <a href="/tanaman/detail" class="btn btn-block btn-info btn-sm" type="button">
                        <i class="fa fa-folder-open"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td>Tomat</td>
                    <td>Tony Chicken</td>
                    <td>DiKebun</td>
                    <td>
                      <a href="/tanaman/detail" class="btn btn-block btn-info btn-sm" type="button">
                        <i class="fa fa-folder-open"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td>Tomat</td>
                    <td>Tony Chicken</td>
                    <td>DiKebun</td>
                    <td>
                      <a href="/tanaman/detail" class="btn btn-block btn-info btn-sm" type="button">
                        <i class="fa fa-folder-open"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>18</td>
                    <td>Tomat</td>
                    <td>Tony Chicken</td>
                    <td>DiKebun</td>
                    <td>
                      <a href="/tanaman/detail" class="btn btn-block btn-info btn-sm" type="button">
                        <i class="fa fa-folder-open"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>19</td>
                    <td>Tomat</td>
                    <td>Tony Chicken</td>
                    <td>DiKebun</td>
                    <td>
                      <a href="/tanaman/detail" class="btn btn-block btn-info btn-sm" type="button">
                        <i class="fa fa-folder-open"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>20</td>
                    <td>Tomat</td>
                    <td>Tony Chicken</td>
                    <td>DiKebun</td>
                    <td>
                      <a href="/tanaman/detail" class="btn btn-block btn-info btn-sm" type="button">
                        <i class="fa fa-folder-open"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>21</td>
                    <td>Tomat</td>
                    <td>Tony Chicken</td>
                    <td>DiKebun</td>
                    <td>
                      <a href="/tanaman/detail" class="btn btn-block btn-info btn-sm" type="button">
                        <i class="fa fa-folder-open"></i> Detail</a>
                    </td>
                  </tr>

                </tbody>
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
</div>

<?= $this->endSection(); ?>