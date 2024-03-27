
<!-- Button trigger modal -->
<button type="button" class="btn btn-lg bg-trasparent text-dark fixed-top text-start" style="width: 50px;" data-bs-toggle="modal" data-bs-target="#modal">
    <i class="bi bi-list"></i>
</button>

<!-- Modal -->
<div class="modal fade text-dark" id="modal" data-bs-keyboard="false" aria-labelledby="modal" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen" style="width: 200px;">
    <div class="modal-content">
      <div class="modal-header" style="border: none;">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex flex-column justify-content-between">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="<?= $router->route("web.home") ?>" class="nav-link text-dark fw-bold"><i class="bi bi-house-fill"></i> Inicio</a></li>
            <li class="nav-item"><a href="<?= $router->route("web.tips") ?>" class="nav-link text-dark fw-bold"><i class="bi bi-bookmark-check-fill"></i> Dicas</a></li>
            <li class="nav-item"><a href="<?= $router->route("web.email") ?>" class="nav-link text-dark fw-bold"><i class="bi bi-envelope-fill"></i> Email</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
