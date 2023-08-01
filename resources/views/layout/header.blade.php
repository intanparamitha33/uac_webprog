<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <h1 class="navbar-brand">ConnectFriend</h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" style="color:black;" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:black;" href="/chats">Chats </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color:black;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Interest
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
          </div>
        </li>
      </ul>
      @auth
        <form class="form-inline my-2 my-lg-0 mr-3">
            @csrf
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <a href="/logout" class="mr-3">
            Log Out
        </a>
      @else
        <div class="flex-inline">
            <a href="/login" class="mr-3">
                Login
            </a>
            <a href="/register">
                Register
            </a>
        </div>
      @endauth
    </div>
  </nav>
