<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fs-2" href="<?=$router->route("web.home")?>">Apps</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbar">
      <ul class="navbar-nav text-center gap-3">
        <li class="nav-item">
          <a class="nav-link <?=$emailClass?>" href="<?=$router->route("web.email")?>">Email</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=$router->route("web.tips")?>">Dicas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
