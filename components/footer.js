const footerTemplate = document.createElement('template');

footerTemplate.innerHTML = `
<footer class="footer mt-auto py-3 bg-light">

    <small><a href="https://www.joshuamc.ca/" target="_blank">www.joshuamc.ca</a> Copyright © 2022</small> |
    <small>Email:&nbsp&nbsp<a href="mailto:email@joshuamc.ca"
                              target="_blank">email@joshuamc.ca</a></small>

</footer>
`;

class Footer extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        const shadowRoot = this.attachShadow({mode: 'closed'});

        shadowRoot.appendChild(footerTemplate.content);
    }
}

customElements.define('footer-component', Footer);