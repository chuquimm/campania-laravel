<footer class="page-footer">
        <div class="container">
            <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
            </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2014 Copyright Text
                @if (Route::has('login'))
                    @auth
                    <a class="grey-text text-lighten-4 right" href="{{ url('/home') }}">Admin</a>
                    <a class="grey-text text-lighten-4 right" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout ') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @else
                    <a class="grey-text text-lighten-4 right" href="{{ route('login') }}">Admin Login</a>
                    
                    @if (Route::has('register'))
                    <a class="grey-text text-lighten-4 right" href="{{ route('register') }}">Register</a>
                    @endif
                    @endauth
                @endif
            </div>
        </div>
    </footer>