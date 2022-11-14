const footerTemplate = document.createElement('template');

footerTemplate.innerHTML = `
  <style>
   @import '/Styling-Config.css';
   
   

footer {
    background-image: var(--Footerbodyimage) !important;
    background-size: var(--FooterImageSize);
    background-repeat: var(--FooterImageRepeat);
    font-family: var(--FootFontFamily);

    text-align: center;
    background-color: var(--FootBackaroundColor);
    color: var(--FootTextColour);
    padding-top: 20px;
    padding-bottom: 20px;
    position: relative;
    bottom: 0%;
    min-width: 100vw;

    /* position: fixed;
    z-index: 1; */
}
footer a{
    color: var(--FootTextColour);
    text-decoration: none;
    text-underline-style: none;
}
  </style>
<footer class="footer" id="footer">
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