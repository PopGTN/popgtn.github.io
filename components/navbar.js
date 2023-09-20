class navbar extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        this.innerHTML = `
<!--<nav class="navbar navbar-expand-lg bg-body-tertiary">-->
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="../photos/logo.png" alt="Logo" width="35" height="35" class="d-inline-block align-text-top">
            JoshuaMC
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="https://github.com/PopGTN" target="_blank">Projects</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="/page/contact.html">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="/page/About-Me.html">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        test
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="https://about.joshuamc.ca">About Site</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
<!--</nav>-->
    `;
    }
}

customElements.define('navbar-component', navbar);
