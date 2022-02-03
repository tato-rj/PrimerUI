<div id="navbar-vertical" style="position: fixed; left: 0; top: 0; height: 100vh">
  <nav class="navbar navbar-open navbar-vertical navbar-light bg-light align-items-start">
    <div class="collapse show navbar-collapse w-100">
      <div class="navbar-nav">
        {{$slot}}
      </div>
    </div>

    <button data-toggle="collapse" class="p-3 d-center btn-raw w-100 position-absolute" style="bottom: 0; left: 0; background: rgba(0,0,0,0.025);">
      @fa(['icon' => 'chevron-left', 'mr' => 0, 'color' => 'auto'])
    </button>
  </nav>
</div>