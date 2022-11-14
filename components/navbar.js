class navbar extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        this.innerHTML = `
<style>
    @import '/Styling-Config.css';

/*    @font-face {
        font-family: 'Pixeltext';
        src: url('/CSS/fonts/Pixeltext.woff2') format('woff2'),
        url('/CSS/fonts/Pixeltext.woff') format('woff');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'ProductSans';
        src: url('/CSS/fonts') format('woff2'),
        url('/CSS/fonts/productsans-regular-webfont.woff') format('woff');
        font-weight: normal;
        font-style: normal;
    }*/

    html{
        margin: 0px!important;
        padding: 0px;
    }
    
    body{
        margin: 0px!important;
        padding: 0px;
    }
    header{
        block-size: border-box;
        background-image: var(--imageNavBar);
        background-size: var(--imageNavBarSize);
        background-repeat: var(--imageNavBarRepeat);
        background-color: var(--navBkGrdColour);
        position: sticky;
        top: 0;
    }
    nav {
        display: block;
        overflow: hidden;
        font-family: var(--navtextfont);
        text-align: center;
        position: sticky;
        color: var(--navTextColour);
        top: 0px;
    }
    header {
        padding: 0px !important;
    }
    #SiteTitle{
        text-align: center;
    }
    #SiteTitle a, #SiteTitle a:hover  {
        float: left;
        display: block;
        position: relative;
        color: var(--webtitleColour);
        margin-left: 1vw !important;
    
        text-align: center;
        text-decoration: none;
        font-weight: bold;
        font-size: var(--webtitlefontSize);
        text-transform: uppercase;

        border: none !important;
    }

    #navLinks {
        float: right;
        list-style: none;
        display: inline-block;
        font-family: var(--navtextfont);
    }

    #navLinks > li {
        display: inline-flex;
        text-align: center;
        height: min-content;
        padding: 0px;

    }

    nav ul {
        margin-right: 1vw;
        padding: 0px;
        margin-top: 0px;
        margin-right: 1vw;
        margin-bottom: 0px;

    }

    #navLinks > li > a:hover, #navLinks > li > a:active {

        background-image: var(--HoverBackGroundimage);
        background-size: var(--HoverImageSize);
        background-color: var(--HoverColour);
        background-repeat: var(--HoverImageRepeat);
        font-weight: var(--HoverButtonTxtWeight);
        padding: 0.875em 1em;
        margin: 0px;
        
        border: var(--HoverButtonBorderColor) var(--HoverButtonBorderSize);
        border-style: var(--HoverButtonBorderType);
    }

    #navLinks > li > a {
        float: left;
        display: block;
        margin: 0px !important;
        text-align: center;
        padding: 0.875em 1em;
        text-decoration: none;

        /*Remove this When removing the border*/
        margin-top: 11.5px;
        margin-bottom: 4px;

        color: var(--navtextColour);
        text-decoration: none;
        font-size: var(--navFontSize);
        font-weight: var(--navTextWeight);
        /*Remove this When removing the border*/
        border: var(--ButtonBorderColor) var(--ButtonBorderSize);
        border-style: var(--ButtonBorderType);

        background-image: var(--BackGroundimage);
        background-size: var(--ImageSize);
        background-color: var(--BackGroundColour);
        background-repeat: var(--NavBtnImageRepeat);
    }
    img.logo{
        width: 46px;
        height: 46px;   
            
    }   
</style>
<header>
    <nav>
        <span id="SiteTitle"><a href="../index.html"><img CLASS="logo" src="../photos/logo.png"> Joshua Mckenna</a></span>
        <ul id="navLinks">
            <li><a href="/index.html">Home</a></li>
            <li><a href="https://github.com/PopGTN" target="_blank">Projects</a></li>
            <li><a href="/page/contact.html">Contact</a></li>
            <li><a href="#">Updates</a></li>
            <li><a href="/page/About-Me.html">About</a></li>
        </ul>
    </nav>
</header>
    `;
    }
}

customElements.define('navbar-component', navbar);
