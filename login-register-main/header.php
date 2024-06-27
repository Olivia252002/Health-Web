<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600;1,800&display=swap');
*{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    outline: none;
    border: none;
    text-decoration: none;
    transition: all .4s linear;
}

*::selection{
    background:rgb(35, 118, 251);
    color:#fff;
}

html{
    font-size: 60%;
    overflow-x: hidden;
    scroll-padding-top:5rem;
    scroll-behavior: smooth;
}

header{
    position:sticky;
    top:0;
    left:0;
    right:0;
    background: linear-gradient(45deg,rgb(240, 240, 236),rgb(55, 154, 219)); 
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2rem 10%;
}

header .logo span{
    font-size: 2.5rem;
    font-weight: bolder;
    color:rgba(10, 39, 134, 0.925);
}

header .logo span span{
    color:rgba(72, 13, 235, 0.925);
    font-weight: bold ;
    font-style: italic;
}

header .logo span span span{
    color:rgba(10, 39, 134, 0.925);
    font-weight: bold ;
    font-style: italic;
}

header .logo span span span span{
    color: rgb(38, 113, 199);
    font-weight: bold ;
    font-style: italic;
}


header .navbar a{
    color:rgba(10, 39, 134, 0.925);
    font-size: 2rem;
    font-weight: 500;
    margin: 0.8rem;
}

header .navbar a:hover{
    color:rgb(245, 10, 120);
}

header .icons i{
    font-size: 2.5rem;
    color:rgba(10, 39, 134, 0.925);
    cursor: pointer;
    margin-right: 2rem;
    margin-left: 2rem;
}

header .icons i:hover{
    color:rgb(245, 10, 120);
}

header .icons #menu-btn{
    display: none;
} 

header .searchbar-container{
    position: absolute;
    top:100%;      
    left:0;
    right:0;
    padding:1.5rem 2rem;
    background: linear-gradient(45deg,rgb(252, 251, 245),rgb(168, 198, 255));  
    border-top: .2rem solid transparent;
    display: flex;
    align-items: center;
    z-index: 1001;
    clip-path: polygon(0 0,100% 0,100% 0,0 0);
}

header .searchbar-container.active{
    clip-path: polygon(0 0,100% 0,100% 100%,0 100%);
}

header .searchbar-container #searchbar{
    width:100%;
    padding: 1rem;
    text-transform: none;
    color:black;
    font-size: 2rem;
    border-radius: 0.5rem;
}

header .searchbar-container label{
    color:rgba(10, 39, 134, 0.925);
    cursor: pointer;
    font-size: 3rem;
    margin-left: 1.5rem;
}
header .searchbar-container label:hover{
    color:rgb(245, 10, 120);
}








/* media queries */

@media (max-width:1200px){
    html{
        font-size: 50%;
    }
    
}

@media(max-width:990px){
    .header{
        padding: 2rem;
    }
}

@media(max-width:768px){
    header .icons #menu-btn{
        display: initial;
    }

    header .navbar{
        position: absolute;
        top:100%;
        right:0;
        left:0;
        padding:1rem 2rem;
        background: linear-gradient(45deg,rgb(241, 240, 235),rgb(168, 213, 255)); 
        border-top: 0.1 rem solid rgba(34, 30, 30, 0.2);
        clip-path: polygon(0 0,100% 0,100% 0,0 0);
        text-align: center;
    }

    header .navbar.active{
        clip-path: polygon(0 0,100% 0,100% 100%,0 100%);
    }

    header .navbar a{
        display: block;
        padding:1rem;
        border-radius: .5rem;
        margin: 1rem 0;
        background: linear-gradient(45deg,rgb(233, 231, 220),rgb(168, 209, 255)); 
    }

}

@media(max-width:450px){
    html{
        font-size: 30%;
    }
}


  </style>
</head>
<header class="header">
    <a href="#" class="logo"><span><i
          class="fas fa-running"></i><span>HealthWeb</span></span></span></a>

    <nav class="navbar">
      <a href="indexlink.php">HOME</a>
      <a href="Prevention.php">PREVENTION</a>
      <a href="Testing.php">BOOK SLOT</a>
      <a href="app.php">APPOINTMENT</a>
      <a href="aboutus.php">CONTACT</a>
      <a href="logout.php">LOGOUT</a>
      
    </nav>

    <div class="icons">
      <i id="search-btn" class="fas fa-search"></i>
      <i id="menu-btn" class="fas fa-bars"></i>
    </div>
    <form action="https://www.google.com/search" method="get" class="searchbar-container">
      <input type="search" id="searchbar" placeholder="Search Here.....">
      <label for="searchbar" class="fas fa-search"></label>
    </form>
  </header>
