# Referances
Found this cool little trick to allow scrolling in blocks/sections
```
    overflow-x: hidden;
    overflow-y: auto;
````
### Refencees
````
backaround-image:(Image1, image2);

````
### Page Template

````
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Joshua Mckenna's Website | This is a website about Joshua Mckenna</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Navigation-Stylesheet.css">
</head>

<style>
</style>
<body>
<nav>
    <span id="SiteTitle"><a href="index.html">Joshua Mckenna</a></span>
    <div id="navLinks">
        <a href="index.html" class="active">Home</a>
        <a href="#">Projects</a>
        <a href="#">contact</a>
        <a href="#">Updates</a>
        <a href="about-Me.html">about</a>
    </div>
</nav>
<main>

/* Content Goes Here! */

</main>
    <footer class="footer">
        <small><a href="https://www.joshuamc.ca/" target="_blank">www.joshuamc.ca</a> Copyright © 2022</small> |
        <small><strong>Email:</strong>&nbsp&nbsp<a href="mailto:email@joshuamc.ca"
                                                   target="_blank">email@joshuamc.ca</a></small>
    </footer>
</body>
</html>
````
### backaround Shading on photo 
````
    background-image: linear-gradient(
            to bottom,
            rgba(255, 255, 0, 0.5),
            rgba(0, 0, 255, 0.5)
    ), url("../photos/grass_blackground_around_ 512x512.png");
````