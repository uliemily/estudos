<!doctype html>
<html lang="pt-br" class="light-theme">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../assets/images/favicon-32x32.png" type="image/png" />
  <!--plugins-->
  <link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="../assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="../assets/css/style.css" rel="stylesheet" />
  <link href="../assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- loader-->
	<link href="../assets/css/pace.min.css" rel="stylesheet" />
  <!--Theme Styles-->
  <link href="../assets/css/dark-theme.css" rel="stylesheet" />
  <link href="../assets/css/light-theme.css" rel="stylesheet" />
  <title>ClickCenter - Painel de controle da loja</title>
</head>
<body>
  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
      <header class="top-header">        
        <nav class="navbar navbar-expand gap-3">
          <div class="mobile-toggle-icon fs-3">
              <i class="bi bi-list"></i>
            </div>
            <div class="top-navbar-right ms-auto">
              <ul class="navbar-nav align-items-center">
                <li class="nav-item search-toggle-icon">
                  <a class="nav-link" href="#">
                    <div class="">
                      <i class="bi bi-search"></i>
                    </div>
                  </a>
              </li>
              <li class="nav-item dropdown dropdown-user-setting">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                  <div class="user-setting d-flex align-items-center">
                    <img src="https://via.placeholder.com/110X110" class="user-img" alt="">
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                          <img src="https://via.placeholder.com/110X110" alt="" class="rounded-circle" width="54" height="54">
                          <div class="ms-3">
                            <h6 class="mb-0 dropdown-user-name">Jhon Deo</h6>
                            <small class="mb-0 dropdown-user-designation text-secondary">HR Manager</small>
                          </div>
                       </div>
                     </a>
                   </li>
                   <li><hr class="dropdown-divider"></li>
                   <li>
                      <a class="dropdown-item" href="pages-user-profile.html">
                         <div class="d-flex align-items-center">
                           <div class=""><i class="bi bi-person-fill"></i></div>
                           <div class="ms-3"><span>Meu perfil</span></div>
                         </div>
                       </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                         <div class="d-flex align-items-center">
                           <div class=""><i class="bi bi-piggy-bank-fill"></i></div>
                           <div class="ms-3"><span>Assinatura</span></div>
                         </div>
                       </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                      <a class="dropdown-item" href="authentication-signup-with-header-footer.html">
                         <div class="d-flex align-items-center">
                           <div class=""><i class="bi bi-lock-fill"></i></div>
                           <div class="ms-3"><span>Sair</span></div>
                         </div>
                       </a>
                    </li>
                </ul>
              </li>
              <li class="nav-item dropdown dropdown-large">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                  <div class="notifications">
                    <span class="notify-badge">1</span>
                    <i class="bi bi-bell-fill"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end p-0">
                  <div class="p-2 border-bottom m-2">
                      <h5 class="h5 mb-0">Notificações</h5>
                  </div>
                  <div class="header-notifications-list p-2">
                      <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                           <div class="notification-box bg-light-primary text-primary"><i class="bi bi-basket2-fill"></i></div>
                           <div class="ms-3 flex-grow-1">
                             <h6 class="mb-0 dropdown-msg-user">Nova Venda <span class="msg-time float-end text-secondary">1 m</span></h6>
                             <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Você tem uma nova venda</small>
                           </div>
                        </div>
                      </a>
                     
                 </div>
                 <div class="p-2">
                   <div><hr class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">
                       <div class="text-center">Ver todas Notificações</div>
                     </a>
                 </div>
                </div>
              </li>
              <li>
                <a href="../dark/dashboard.html">
                  <i class="bi bi-moon-fill" style="color: black;"></i>
                </a>
              </li>
              </ul>
              </div>
        </nav>
      </header>
       <!--end top header-->

        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
          <div class="sidebar-header">
            <div>
              <img src="../assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            </div>
            <div>
              <h4 class="logo-text">ClickCenter</h4>
            </div>
            <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
            </div>
          </div>
          <!--navigation-->
          <ul class="metismenu" id="menu">
            <li>
              <a href="javascript:;" class="">
                <div class="parent-icon"><i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">Painel de controle</div>
              </a>
            </li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-pencil-square"></i>
                </div>
                <div class="menu-title">Cadastrar</div>
              </a>
              <ul>
                <li> <a href="app-emailbox.html"><i class="bi bi-circle"></i>Produtos</a>
                </li>
                <li> <a href="app-chat-box.html"><i class="bi bi-circle"></i>Variações</a>
                </li>
                <li> <a href="app-file-manager.html"><i class="bi bi-circle"></i>Categorias</a>
                </li>
                <li> <a href="app-to-do.html"><i class="bi bi-circle"></i>Fornecedores</a>
                </li>
                <li> <a href="app-invoice.html"><i class="bi bi-circle"></i>Parceiros</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-gear-fill"></i>
                </div>
                <div class="menu-title">Gerenciar</div>
              </a>
              <ul>
                <li> <a href="widgets-static-widgets.html"><i class="bi bi-circle"></i>Produtos</a>
                </li>
                <li> <a href="widgets-data-widgets.html"><i class="bi bi-circle"></i>Estoque</a>
                </li>
                <li> <a href="widgets-data-widgets.html"><i class="bi bi-circle"></i>Despesas</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                </div>
                <div class="menu-title">Loja</div>
              </a>
              <ul>
                <li> <a href="ecommerce-products-list.html"><i class="bi bi-circle"></i>Personalização</a>
                </li>
                <li> <a href="ecommerce-products-grid.html"><i class="bi bi-circle"></i>Canais oficiais</a>
                </li>
                <li> <a href="ecommerce-products-categories.html"><i class="bi bi-circle"></i>Endereço</a>
                </li>
                <li> <a href="ecommerce-orders.html"><i class="bi bi-circle"></i>Atendimento</a>
                </li>
                <li> <a href="ecommerce-orders-detail.html"><i class="bi bi-circle"></i>Entrega e retirada</a>
                </li>
                <li> <a href="ecommerce-add-new-product.html"><i class="bi bi-circle"></i>Pagamentos e recebimento</a>
                </li>
                <li> <a href="ecommerce-add-new-product-2.html"><i class="bi bi-circle"></i>Pedido</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-file-earmark-bar-graph-fill"></i>
                </div>
                <div class="menu-title">Relatórios</div>
              </a>
              <ul>
                <li> <a href="component-alerts.html"><i class="bi bi-circle"></i>Pedidos</a>
                </li>
                <li> <a href="component-accordions.html"><i class="bi bi-circle"></i>Loja</a>
                </li>
                <li> <a href="component-badges.html"><i class="bi bi-circle"></i>Vendas</a>
                </li>
                <li> <a href="component-buttons.html"><i class="bi bi-circle"></i>Clientes</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-share-fill"></i>
                </div>
                <div class="menu-title">Compartilhar</div>
              </a>
            </li>
            <li>
              <a class="" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-tag-fill"></i>
                </div>
                <div class="menu-title">Cupons de desconto</div>
              </a>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-arrow-left-right"></i>
                </div>
                <div class="menu-title">Integrações</div>
              </a>
              <ul>
                <li> <a href="table-basic-table.html"><i class="bi bi-circle"></i>Facebook Pixel</a>
                </li>
                <li> <a href="table-advance-tables.html"><i class="bi bi-circle"></i>Sacolinha do Instagram</a>
                </li>
                <li> <a href="table-datatable.html"><i class="bi bi-circle"></i>Google Analytics</a>
                </li>
                <li> <a href="table-datatable.html"><i class="bi bi-circle"></i>Google Shopping</a>
                </li>
                <li> <a href="table-datatable.html"><i class="bi bi-circle"></i>Dominio próprio</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-question-circle-fill"></i>
                </div>
                <div class="menu-title">Ajuda</div>
              </a>
            </li>
            
          </ul>
          <!--end navigation-->
       </aside>
       <!--end sidebar -->

       <!--start content-->
          <main class="page-content">
          <button type="button" class="btn btn-primary">Primary</button>
            <table class="table">
              <input type='text'>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Primeiro</th>
      <th scope="col">Último</th>
      <th scope="col">Nickname</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
            
          </main>
       <!--end page main-->

       <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

       <!--Start Back To Top Button-->
		     <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
       <!--End Back To Top Button-->

  </div>
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="../assets/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="../assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="../assets/js/pace.min.js"></script>
  <script src="../assets/plugins/chartjs/js/Chart.min.js"></script>
  <script src="../assets/plugins/chartjs/js/Chart.extension.js"></script>
  <script src="../assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
  <!--app-->
  <script src="../assets/js/app.js"></script>
  <script src="../assets/js/index.js"></script>
  <script>
    new PerfectScrollbar(".best-product")
 </script>


</body>

</html>