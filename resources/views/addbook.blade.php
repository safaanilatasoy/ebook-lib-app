<!DOCTYPE html>
<html>
    <head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <title>Books</title>
        <style type="text/css">
           @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap');

        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
        }

    html {
    font-size: 62.5%;
    font-family: 'Roboto', sans-serif;
    background-color: #D2DAE2;
    }

    li {
    list-style: none;
    }

    a {
            text-decoration: none;
    }
    .header{
    border-bottom: 1px solid #E2E8F0;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 1.5rem;
    background: #ECF0F1;
    
}
.hamburger {
    display: none;
}

.bar {
    display: block;
    width: 25px;
    height: 3px;
    margin: 5px auto;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    background-color: #101010;
}
.nav-menu {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-item {
    margin-left: 5rem;
}

.nav-link{
    font-size: 1.6rem;
    font-weight: 400;
    color: #475569;
}

.nav-link:hover{
    color: #482ff7;
}

.nav-logo {
    font-size: 2.1rem;
    font-weight: 500;
    color: #482ff7;
}
.maincontainer{
    position:relative;
    margin:auto;
    width:60%;
    height: 1000px;
    
}
.addbookcontainer{
    position:relative;
    width: 70%;
    height: 450px;
    background:#ECF0F1;
    margin:auto;
    margin-top:100px;
    border-radius:11px;
}
#addbookbutton:hover{
    background-color:#0984e3;
    border:1px solid #fff;
}
#addbuttoninner{
    color:#0984e3;
}
#addbuttoninner:hover{
    color:#fff;
}
.addbook-leftdiv{
    position:relative;
    width:40%;
    height:100%;
    background-color:red;
    float:left;
    border-top-left-radius: 11px;
    border-bottom-left-radius: 11px;
     
}
.addbook-rightdiv{
    position:relative;
    width:60%;
    height:100%;
    background-color:yellow;
   left: 40%;
   border-top-right-radius: 11px;
    border-bottom-right-radius: 11px;
   
}
.addbook-rightdiv-bottom{
    position:relative;
    width:100%;
    height:20%;
    background-color:pink;
   top:80%;
   border-bottom-right-radius: 11px;
   
   
}
        </style>
    </head>
    <body>
    <header class="header">
        <nav class="navbar">
            <a href="{{url('dashboard')}}" class="nav-logo">EBook Library</a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="{{url('dashboard')}}" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Settings</a>
                </li>
                <li class="nav-item" id="addbookbutton" style="border: 1px solid #0984e3; border-radius:5px; padding:3px;">
                    <a href="{{url('addbook')}}" id="addbuttoninner" class="nav-link" style="font-size:14px;">Add Book</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Logout</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar">as</span>
                <span class="bar">sa</span>
                <span class="bar">sa</span>
            </div>
        </nav>
</header>

<div class="maincontainer">
  <div class="addbookcontainer">
      <div class="addbook-leftdiv">

      </div>
      <div class="addbook-rightdiv">

      <div class="addbook-rightdiv-bottom"></div>
      </div>
  </div>
</div>


    </body>
</html>