<div class="row">
  <div class="col-sm-6">
    <h1 class="mb-0 fs-3">Dashboard</h1>
  </div>
  <div class="col-sm-6">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb float-sm-end">
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </nav>
  </div>
</div>
<div class="row margin-bottom-50">
  <!--begin::Col-->
  <div class="col-lg-4 col-12">
    <div class="dashboard-stat-card">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill dashboard-stat-icon" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg>
      <div class="dashboard-stat-number">{{ $qtdeClientes }}</div>
      <div class="dashboard-stat-label">Clientes</div>
      <a href="{{ route('admin.cliente.index')}}" class="dashboard-stat-link">Mais informações <i class="bi bi-arrow-right-circle"></i></a>
    </div>
  </div>
  <!--end::Col-->   

  <!--begin::Col-->
  <div class="col-lg-4 col-12">
    <div class="dashboard-stat-card">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-scissors dashboard-stat-icon" viewBox="0 0 16 16">
  <path d="M3.5 3.5c-.614-.884-.074-1.962.858-2.5L8 7.226 11.642 1c.932.538 1.472 1.616.858 2.5L8.81 8.61l1.556 2.661a2.5 2.5 0 1 1-.794.637L8 9.73l-1.572 2.177a2.5 2.5 0 1 1-.794-.637L7.19 8.61zm2.5 10a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0m7 0a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
</svg>
      <div class="dashboard-stat-number">{{ $qtdeServicos }}</div>
      <div class="dashboard-stat-label">Serviços</div>
      <a href="{{ route('admin.servicos.index')}}" class="dashboard-stat-link">Mais informações <i class="bi bi-arrow-right-circle"></i></a>
    </div>
  </div>
  <!--end::Col-->  

  <div class="col-lg-4 col-12">
    <div class="dashboard-stat-card">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam-fill dashboard-stat-icon" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003zM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z"/>
</svg>
      <div class="dashboard-stat-number">{{ $qtdeProdutos }}</div>
      <div class="dashboard-stat-label">Produtos</div>
      <a href="{{ route('admin.produto.index')}}" class="dashboard-stat-link">Mais informações <i class="bi bi-arrow-right-circle"></i></a>
    </div>
  </div>
  <!--end::Col-->
  
  
  <!--end::Col-->
</div>
