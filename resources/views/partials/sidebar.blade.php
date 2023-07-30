<div class="sidebar">
<div class="sidebar-container">
  <a class="sidebar-link" href="{{ route('home') }}"> <!-- Diperbarui -->
    <span class="material-icons sidebar-icon">home</span>
    <p class="sidebar-text">Home</p>
  </a>
  <!-- Diperbarui -->
  <a class="sidebar-link" href="{{ route('auth.login') }}">
    <span class="material-icons sidebar-icon">list</span>
    <p class="sidebar-text">Feedback List</p>
  </a>
  @if (Auth::check())
      <a class="sidebar-link" href=""
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <span class="material-icons sidebar-icon">logout</span>
        <p class="sidebar-text">Logout</p>
      </a>
      <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
        @csrf
        @method('post')
      </form>
    @endif
</div>
</div>
