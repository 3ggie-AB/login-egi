<div class="zz">
    
    <a href="{{ route('register') }}">
        <button class="zzz">
            Register
        </button>
    </a>
    @auth
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button class="zzz text-primary" type="submit">
            logout
        </button>
    </form>
    @else
    
    
    <a href="{{ url('/login') }}">
        <button class="zzz">
            login
        </button>
    </a>
    @endauth
</div>