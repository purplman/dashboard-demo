<aside id="sidebar">
  
    <div class="sidebar">
        <div class="brand">
        <a class="brand__link" href="">
            <img src="{{ asset('smylmrz/img/logo2.png') }}" class="brand__logo" alt="" />
        </a>
        </div>
        <div class="sidebar__menu">
            <ul class="sidebar__list">
                <li>
                <a class="sidebar__link sidebar__link--active" title="Dashboard" href="{{ route('dashboard') }}">
                    <ion-icon name="pizza-outline"></ion-icon>
                    <span class="sidebar__link-text"> Dashboard </span>
                </a>
                </li>
                <li>
                    <a class="sidebar__link" title="Pages" href="">
                        <ion-icon name="albums-outline"></ion-icon>
                        <span class="sidebar__link-text"> Pages </span>
                    </a>
                    <div class="sidebar__dropdown">
                        <ul>
                            <li>
                                <a href="{{ route('login') }}">Login</a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">Register</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="sidebar__link" title="Components" href="">
                        <ion-icon name="diamond-outline"></ion-icon>
                        <span class="sidebar__link-text"> Elements </span>
                    </a>
                    <div class="sidebar__dropdown">
                        <ul>
                            <li>
                                <a href="buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="cards.html">Cards</a>
                            </li>
                            <li>
                                <a href="dropdowns.html">Dropdowns</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="sidebar__link" title="Charts" href="">
                        <ion-icon name="pie-chart-outline"></ion-icon>
                        <span class="sidebar__link-text"> Charts </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
  
</aside>