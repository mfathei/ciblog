<html>
<head>
    <title>ciBlog</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="<?php echo base_url(); ?>">
                ciBlog
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">

                <li class="dropdown"><a href="/">Home</a></li>
                <li class="dropdown"><a href="/posts">Blog</a></li>
                <li class="dropdown"><a href="/about">About</a></li>

            </ul>

        </div>
    </div>
</nav>

<div class="container">