<?php 
header("Content-type: text/css; charset: UTF-8");

$color1 = "#f5cf94";
$color2 = "#975c52";
$color3 = "#e1ae6e";

$mainColor = "#8c530f";
?>
html,
button,
input,
select,
textarea {
    color: #222;
}

body {

    font-size: 1.1em;
    line-height: 1.4;
    background: <?php echo $color3; ?>;
}


::selection {
    background: #b3d4fc;
    text-shadow: none;
}

hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0;
}

img {
    vertical-align: middle;
}

fieldset {
    border: 0;
    margin: 0;
    padding: 0;
}

textarea {
    resize: vertical;
}

.chromeframe {
    margin: 0.2em 0;
    background: #ccc;
    color: #000;
    padding: 0.2em 0;
}


/* ===== Initializr Styles ==================================================
   Author: Jonathan Verrecchia - verekia.com/initializr/responsive-template
   ========================================================================== */

body {    
    font-family:palatino linotype, palatino, serif;
}

.wrapper {
    width: 90%;
    margin: 0 5%;
}

/* ===================
    ALL: Orange Theme
   =================== */

.header-container {       
    border-bottom: 20px solid #c59051;
}

.footer-container,
.main aside {
    border-top: 20px solid #c59051;
}

.header-container,
.footer-container,
.main aside {
    background: <?php echo $color3; ?>;
}

.title {
    color: white;
    text-align: center;
    text-transform: uppercase;
}

.recipelist ul {
    padding: 0;
    margin: 0;
    width: 100%;
    color: #998e62;    
    list-style: none;
}

.recipelist ul li:hover {
    color: black;
}

.recipelist ul li  {        
    margin: 0.2em;    
    color: <?php echo $color2; ?>;    
    padding: 0.4em 0.4em;
    background: <?php echo $color3; ?>; /* Old browsers */
}

.recipelist a {
    text-decoration: none;
    color: white;
    text-transform: uppercase;
    font-weight: bold;
}

/* ==============
    MOBILE: Menu
   ============== */

nav ul {
    margin: 0;
    padding: 0;
}

nav a {
    display: block;
    margin-bottom: 10px;
    padding: 15px 0;

    text-align: center;
    text-decoration: none;
    font-weight: bold;

    color: white;
    background: #c59051;
}

nav a:hover,
nav a:visited {
    color: white;
}

nav a:hover {
    text-decoration: underline;
}

/* ==============
    MOBILE: Main
   ============== */

.main {
    font-weight:normal;
    color:<?php echo $mainColor; ?>;
    letter-spacing:2pt
    word-spacing:2pt;    
    line-height:1;
    padding: 0;
    background: <?php echo $color1; ?>;
}

.main article h1 {
    font-size: 2em;
}

.main aside {
    color: white;    
}

.footer-container footer {
    color: white;
    padding: 20px 0;
}

/* ===============
    ALL: IE Fixes
   =============== */

.ie7 .title {
    padding-top: 20px;
}

/* ==========================================================================
   Author's custom styles
   ========================================================================== */
.header-container {
    background: url('../img/paw.png') no-repeat top 10px left 10px;
} 

.main article {    
    padding: 1em;
}

.main article img {
    width: 100%;
}

.main article ul {    
    padding: 0; margin: 0;
    list-style: none;
}

article blockquote {
    font-family: Georgia, serif;
    font-size: 0.9em;
    font-style: italic;    
    margin: 0.25em 0;
    padding: 0.2em 30px;
    line-height: 1.45;
    position: relative;
    border: solid 1px <?php echo $color3; ?>;
    border-radius: 1em;
    background: #f5e1c2;
}

article blockquote:before {
    display: block;
    content: "\201C";
    font-size: 40px;
    position: absolute;
    left: 10px;
    top: 0px;
}
 
article blockquote cite:before {
    content: "\2014 \2009";
}

/* ==========================================================================
   Media Queries
   ========================================================================== */

@media only screen and (min-width: 480px) {

/* ====================
    INTERMEDIATE: Menu
   ==================== */

    nav a {
        float: left;
        width: 27%;
        margin: 0 1.7%;
        padding: 25px 2%;
        margin-bottom: 0;
    }

    nav li:first-child a {
        margin-left: 0;
    }

    nav li:last-child a {
        margin-right: 0;
    }

/* ========================
    INTERMEDIATE: IE Fixes
   ======================== */

    nav ul li {
        display: inline;
    }

    .oldie nav a {
        margin: 0 0.7%;
    }
}

@media only screen and (min-width: 768px) {

/* ====================
    WIDE: CSS3 Effects
   ==================== */
    
/* ============
    WIDE: Menu
   ============ */

    .title {
        float: left;
    }

    nav {
        float: right;
        width: 38%;
    }

/* ============
    WIDE: Main
   ============ */

    .main article {
        float: left;
        width: 57%;
        font-size: 1.3em;
    }

    .main aside {
        float: right;
        width: 28%;
    }
}

@media only screen and (min-width: 1140px) {

/* ===============
    Maximal Width
   =============== */

    .wrapper {
        width: 1026px; /* 1140px - 10% for margins */
        margin: 0 auto;
    }
}

/* ==========================================================================
   Helper classes
   ========================================================================== */

.ir {
    background-color: transparent;
    border: 0;
    overflow: hidden;
    *text-indent: -9999px;
}

.ir:before {
    content: "";
    display: block;
    width: 0;
    height: 150%;
}

.hidden {
    display: none !important;
    visibility: hidden;
}

.visuallyhidden {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
}

.visuallyhidden.focusable:active,
.visuallyhidden.focusable:focus {
    clip: auto;
    height: auto;
    margin: 0;
    overflow: visible;
    position: static;
    width: auto;
}

.invisible {
    visibility: hidden;
}

.clearfix:before,
.clearfix:after {
    content: " ";
    display: table;
}

.clearfix:after {
    clear: both;
}

.clearfix {
    *zoom: 1;
}

/* ==========================================================================
   Print styles
   ========================================================================== */

@media print {
    * {
        background: transparent !important;
        color: #000 !important; /* Black prints faster: h5bp.com/s */
        box-shadow: none !important;
        text-shadow: none !important;
    }

    .header-container {
        border-bottom: solid 1px black;
    }

    .header-container nav {
        display: none;
    }

    .footer-container {
        border-top: solid 1px black;
    }

    a,
    a:visited {
        text-decoration: underline;
    }
    /*
     * Don't show links for images, or javascript/internal links
     */
    pre,
    blockquote {
        border: 1px solid #999;
        page-break-inside: avoid;
    }

    thead {
        display: table-header-group; /* h5bp.com/t */
    }

    tr,
    img {
        page-break-inside: avoid;
    }

    img {
        max-width: 100% !important;
    }

    @page {
        margin: 0.5cm;
    }

    p,
    h2,
    h3 {
        orphans: 3;
        widows: 3;
    }

    h2,
    h3 {
        page-break-after: avoid;
    }
}