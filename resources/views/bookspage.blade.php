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
.book_categories{
    position: relative;
    margin:auto;
    width: 100%;
    height: 250px;
    
    margin-top:50px;
}
.book_ct_title{
    position:relative;
    margin:auto;
    width: 100%;
    height:20%;
    background-color:#E9EBEE;
    border-top-left-radius: 11px;
    border-top-right-radius: 11px;
}
.books_general_container{
    position:relative;
    margin:auto;
    width: 100%;
    height:80%;
    background-color:#DFE4EA;
    border-bottom-left-radius: 11px;
    border-bottom-right-radius: 11px;
   
    
}
.books_container{
    position:relative;
    margin:auto;
    width: 14%;
    height:80%;
    background-color:yellow;
    float:left;
    margin-left: 5%;
    margin-top:2%;
   
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
 <div class="book_categories">
     <div class="book_ct_title">
         <h2 style="padding:10px;">Action and Adventure</h2>
     </div>
     <div class="books_general_container">
         <div class="books_container">

         </div>
         <div class="books_container">

</div>
<div class="books_container">

</div>
<div class="books_container">

</div>
<div class="books_container">

</div>

     </div>

 
</div>
<div class="book_categories">
     <div class="book_ct_title">
         <h2 style="padding:10px;">Classics</h2>
     </div>
     <div class="books_general_container">
         <div class="books_container">

         </div>
         <div class="books_container">

</div>
<div class="books_container">

</div>
<div class="books_container">

</div>
<div class="books_container">

</div>

     </div>

 
</div>
<div class="book_categories">
     <div class="book_ct_title">
         <h2 style="padding:10px;">Detective and Mystery</h2>
     </div>
     <div class="books_general_container">
         <div class="books_container">

         </div>
         <div class="books_container">

</div>
<div class="books_container">

</div>
<div class="books_container">

</div>
<div class="books_container">

</div>

     </div>

 
</div>
<div class="book_categories">
     <div class="book_ct_title">
         <h2 style="padding:10px;">Fantasy</h2>
     </div>
     <div class="books_general_container">
         <div class="books_container">

         </div>
         <div class="books_container">

</div>
<div class="books_container">

</div>
<div class="books_container">

</div>
<div class="books_container">

</div>

     </div>

 
</div>


    </body>
</html>