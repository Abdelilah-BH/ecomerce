<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
    if (navbarStyle && navbarStyle !== 'transparent') {
        document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
    }
    </script>
    <div class="d-flex align-items-center">
        <div>
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Menu"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>
        </div><a class="navbar-brand" href="/">
            <div class="d-flex py-3">
                <span class="font-sans-serif">Ecom</span>
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                    <a class="nav-link" href="/commandes" role="button" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon">
                                <i class="fas fa-shopping-bag"></i>
                            </span>
                            <span class="nav-link-text ps-2">Commandes</span>
                        </div>
                    </a>
                    <a class="nav-link" href="/produits" role="button" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon">
                                <i class="fab fa-product-hunt"></i>
                            </span>
                            <span class="nav-link-text ps-2">Produits</span>
                        </div>
                    </a>
                    <a class="nav-link" href="/categories" role="button" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon">
                                <i class="fas fa-list"></i>
                            </span>
                            <span class="nav-link-text ps-2">Categories</span>
                        </div>
                    </a>
                    <a class="nav-link" href="/utilisateurs" role="button" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon">
                                <i class="fas fa-user"></i>
                            </span>
                            <span class="nav-link-text ps-2">Utilisateurs</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>