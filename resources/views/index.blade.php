@extends('site.templateSite')

@section('content')
    <div class="wrapper">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group pull-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li>
                                    <a href="#">Rei do Coin</a>
                                </li>
                                <li>
                                    <a href="#">Pagina inicial</a>
                                </li>
                                <li class="active">
                                    Home visitante
                                </li>
                            </ol>
                        </div>
                        <h4 class="page-title">Sejá bem vindo visitante!</h4>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->


            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="card-box widget-box-two widget-two-primary">
                        <i class="mdi mdi-account-network widget-two-icon"></i>
                        <div class="wigdet-two-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Total de mineiros</p>
                            <h2><span data-plugin="counterup">34578</span></h2>
                            <p class="text-muted m-0"><b>Top Miners:</b> Music:30.4k</p>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-3 col-md-6">
                    <div class="card-box widget-box-two widget-two-warning">
                        <i class="mdi mdi-layers widget-two-icon"></i>
                        <div class="wigdet-two-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Blocos encontrados</p>
                            <h2><span data-plugin="counterup">52.410,00 </span></h2>
                            <p class="text-muted m-0"><b>30 dias:</b> 40.33k</p>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-3 col-md-6">
                    <div class="card-box widget-box-two widget-two-danger">
                        <i class="mdi mdi-currency-usd widget-two-icon"></i>
                        <div class="wigdet-two-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Valor gerado este mês!</p>
                            <h2><span data-plugin="counterup">R$6352,00</span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                            <p class="text-muted m-0"><b>Por dia:</b> 30.4k</p>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-3 col-md-6">
                    <div class="card-box widget-box-two widget-two-success">
                        <i class="mdi  mdi-coin widget-two-icon"></i>
                        <div class="wigdet-two-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User Today">Total gerado!</p>
                            <h2><span data-plugin="counterup">R$895 </span> <small><i class="mdi mdi-arrow-down text-danger"></i></small></h2>
                            <p class="text-muted m-0">Em 5 pool's</p>
                        </div>
                    </div>
                </div><!-- end col -->

            </div>
            <!-- end row -->
            <div class="row">

                <div class="col-md-4">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Download's Importantes</h4>

                        <div class="inbox-widget slimscroll-alt" style="min-height: 302px;">
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="images/users/avatar-1.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Simpleming</p>
                                    <p class="inbox-item-text">Sistema operacional para mineração!</p>
                                    <p class="inbox-item-date">13:40 PM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="images/users/avatar-2.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Claymore 10.1</p>
                                    <p class="inbox-item-text">Atualização do Claymore</p>
                                    <p class="inbox-item-date">13:34 PM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="images/users/avatar-4.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Config p/ Claymore</p>
                                    <p class="inbox-item-text">Bat para todas as coins do REI</p>
                                    <p class="inbox-item-date">12:20 PM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="images/users/avatar-5.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Bios MOD RX470</p>
                                    <p class="inbox-item-text">Bios MOD RX470 para ETH por Mestre</p>
                                    <p class="inbox-item-date">10:15 AM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="images/users/avatar-1.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Simpleming</p>
                                    <p class="inbox-item-text">Sistema operacional para mineração!</p>
                                    <p class="inbox-item-date">13:40 PM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="images/users/avatar-2.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Claymore 10.1</p>
                                    <p class="inbox-item-text">Atualização do Claymore</p>
                                    <p class="inbox-item-date">13:34 PM</p>
                                </div>
                            </a>

                        </div>

                    </div> <!-- end card -->
                </div>
                <!-- end col -->
                <div class="col-md-4">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Download's Importantes</h4>

                        <div class="inbox-widget slimscroll-alt" style="min-height: 302px;">
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="images/users/avatar-1.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Simpleming</p>
                                    <p class="inbox-item-text">Sistema operacional para mineração!</p>
                                    <p class="inbox-item-date">13:40 PM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="images/users/avatar-2.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Claymore 10.1</p>
                                    <p class="inbox-item-text">Atualização do Claymore</p>
                                    <p class="inbox-item-date">13:34 PM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="images/users/avatar-4.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Config p/ Claymore</p>
                                    <p class="inbox-item-text">Bat para todas as coins do REI</p>
                                    <p class="inbox-item-date">12:20 PM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="images/users/avatar-5.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Bios MOD RX470</p>
                                    <p class="inbox-item-text">Bios MOD RX470 para ETH por Mestre</p>
                                    <p class="inbox-item-date">10:15 AM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="images/users/avatar-1.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Simpleming</p>
                                    <p class="inbox-item-text">Sistema operacional para mineração!</p>
                                    <p class="inbox-item-date">13:40 PM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="images/users/avatar-2.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Claymore 10.1</p>
                                    <p class="inbox-item-text">Atualização do Claymore</p>
                                    <p class="inbox-item-date">13:34 PM</p>
                                </div>
                            </a>

                        </div>

                    </div> <!-- end card -->
                </div>
                <!-- end col -->
                <div class="col-md-4">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Twitter</h4>

                        <div class="inbox-widget slimscroll-alt" style="min-height: 302px;">
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="images/users/avatar-1.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Simpleming</p>
                                    <p class="inbox-item-text">Sistema operacional para mineração!</p>
                                    <p class="inbox-item-date">13:40 PM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="images/users/avatar-2.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Claymore 10.1</p>
                                    <p class="inbox-item-text">Atualização do Claymore</p>
                                    <p class="inbox-item-date">13:34 PM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="images/users/avatar-4.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Config p/ Claymore</p>
                                    <p class="inbox-item-text">Bat para todas as coins do REI</p>
                                    <p class="inbox-item-date">12:20 PM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="images/users/avatar-5.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Bios MOD RX470</p>
                                    <p class="inbox-item-text">Bios MOD RX470 para ETH por Mestre</p>
                                    <p class="inbox-item-date">10:15 AM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="images/users/avatar-1.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Simpleming</p>
                                    <p class="inbox-item-text">Sistema operacional para mineração!</p>
                                    <p class="inbox-item-date">13:40 PM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="images/users/avatar-2.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Claymore 10.1</p>
                                    <p class="inbox-item-text">Atualização do Claymore</p>
                                    <p class="inbox-item-date">13:34 PM</p>
                                </div>
                            </a>

                        </div>

                    </div> <!-- end card -->
                </div>
                <!-- end col -->

                <!-- end col -->

            </div>
            <!-- end row -->
            <div class="row">

                <div class="col-md-8">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Ultimos Tutoriais!</h4>

                        <div class="table-responsive">
                            <table class="table table table-hover m-0">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Titulo</th>
                                    <th>Categoria</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>
                                        <img src=" images/users/avatar-6.jpg" alt="user" class="thumb-sm img-circle" />
                                    </th>
                                    <td>
                                        <h5 class="m-0"><a href="#"> O titulo da noticia é!</a></h5>
                                        <p class="m-0 text-muted font-13"><small>Eu não sei criar exemplo de texto e to com preguiça de usar LOREM IPSUN</small></p>
                                    </td>
                                    <td>Qualquer uma</td>
                                    <td>07/08/2016</td>
                                </tr>
                                <tr>
                                    <th>
                                        <span class="avatar-sm-box bg-primary">C</span>
                                    </th>
                                    <td>
                                        <h5 class="m-0">Craig Hause</h5>
                                        <p class="m-0 text-muted font-13"><small>Programmer</small></p>
                                    </td>
                                    <td>+89 345 6789</td>
                                    <td>29/07/2016</td>
                                </tr>
                                <tr>
                                    <th>
                                        <img src=" images/users/avatar-7.jpg" alt="user" class="thumb-sm img-circle" />
                                    </th>
                                    <td>
                                        <h5 class="m-0">Edward Grimes</h5>
                                        <p class="m-0 text-muted font-13"><small>Founder</small></p>
                                    </td>
                                    <td>+12 29856 256</td>
                                    <td>22/07/2016</td>
                                </tr>
                                <tr>
                                    <th>
                                        <span class="avatar-sm-box bg-pink">B</span>
                                    </th>
                                    <td>
                                        <h5 class="m-0">Bret Weaver</h5>
                                        <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                                    </td>
                                    <td>+00 567 890</td>

                                    <td>20/07/2016</td>
                                </tr>
                                <tr>
                                    <th>
                                        <img src="images/users/avatar-8.jpg" alt="user" class="thumb-sm img-circle" />
                                    </th>
                                    <td>
                                        <h5 class="m-0">Mark</h5>
                                        <p class="m-0 text-muted font-13"><small>Web design</small></p>
                                    </td>
                                    <td>+91 123 456</td>
                                    <td>07/07/2016</td>
                                </tr>
                                </tbody>
                            </table>

                        </div> <!-- table-responsive -->
                    </div> <!-- end card -->
                </div>
                <div class="col-md-4">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Noticias em geral!</h4>

                        <div class="inbox-widget slimscroll-alt" style="min-height: 302px;">
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="images/users/avatar-1.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Simpleming</p>
                                    <p class="inbox-item-text">Sistema operacional para mineração!</p>
                                    <p class="inbox-item-date">13:40 PM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="images/users/avatar-2.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Claymore 10.1</p>
                                    <p class="inbox-item-text">Atualização do Claymore</p>
                                    <p class="inbox-item-date">13:34 PM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="images/users/avatar-4.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Config p/ Claymore</p>
                                    <p class="inbox-item-text">Bat para todas as coins do REI</p>
                                    <p class="inbox-item-date">12:20 PM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="images/users/avatar-5.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Bios MOD RX470</p>
                                    <p class="inbox-item-text">Bios MOD RX470 para ETH por Mestre</p>
                                    <p class="inbox-item-date">10:15 AM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="images/users/avatar-1.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Simpleming</p>
                                    <p class="inbox-item-text">Sistema operacional para mineração!</p>
                                    <p class="inbox-item-date">13:40 PM</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="images/users/avatar-2.jpg" class="img-circle" alt=""></div>
                                    <p class="inbox-item-author">Claymore 10.1</p>
                                    <p class="inbox-item-text">Atualização do Claymore</p>
                                    <p class="inbox-item-date">13:34 PM</p>
                                </div>
                            </a>

                        </div>

                    </div> <!-- end card -->
                </div>
                <!-- end col -->

                <!-- end col -->
            </div>
@endsection