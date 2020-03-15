<nav class="navbar navbar-expand-md navbar-light bg-white">
    <div class="container" style="margin: 25px;">
        <div>
            <!-- Left Side Of Navbar -->
            <button class="dib menuButton topLeft bg-animate hover-bg-white" onclick="window.location.href = '/list';">
              <span>⏎</span>
            </button>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto rightDrop" style="z-index: 1;">
                <!-- Authentication Links -->
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link topRight menuButton bg-animate hover-bg-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      <span>⑇</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" data-toggle="modal" data-target="#deleteContact" href='#'>
                        Delete Contact
                      </a>
                      <a class="dropdown-item" href="{{ route('dash') }}">
                        Dashboard
                      </a>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="modal fade" id="deleteContact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Contact?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure? This action cannot be reversed.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" method='GET' onclick="window.location.href = '{{ route('contact.delete', ['id' => $contact->id]) }}';">Yes</button>
      </div>
    </div>
  </div>
</div>
