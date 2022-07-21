<section class="header">
    <header>
        <h1><a href="beranda.php">CINEMA<span>VISION </span></a></h1>
        <ul>
            <li><a href="/" class="" aria-current="page">Merchandise</a></li>

            <li><a href="/animation" class="" aria-current="page">Animation</a></li>

            <li><a href="/cinema" class="" aria-current="page">Cinematography</a></li>

            <li><a href="/about" class="" aria-current="page">About</a></li>
            
            
            @auth
            <li><a  href="#" >
                Welcome Back, {{auth()->user()->name }}
              </a></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">
                    logout
                  </button>
                </form>
              </li>
                @else
                <li >
                    <a href="/login">Login</a>
                </li>
                @endauth

        </ul>
    </header>
        <div class="text">
            <h2>Let's Keep Your Moment With Us</h2>
            <p>Sudut Rantau is a website that sells Merchandise, Photography, Videography, and Animation services</p>
            <a href="">Visit Us To Know More</a>
        </div>
</section>