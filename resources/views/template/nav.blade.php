<style>
    .logo{
        width: 55px;
        margin-left: 10px;
    }
    @media only screen and (min-width: 993px) {
        .logo {
            width: 65px;
        }
    }
</style>
<nav>
    <div class="nav-wrapper red darken-3">
        <a href="/" class="brand-logo"><img src="{{asset('img/logo.png')}}" alt="IESB Teoria e Prática" class="logo"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{route('aluno.index')}}">Aluno</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="{{route('aluno.index')}}">Aluno</a></li>
        </ul>
    </div>
</nav>

