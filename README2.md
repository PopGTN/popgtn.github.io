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
        <a href="#">Contact</a>
        <a href="#">Updates</a>
        <a href="About-Me.html">About</a>
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