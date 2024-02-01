<style>
    body{
    font-family: "barlow", sans-serif;
    line-height: 1.7;
    color:#516171;
}
h1,h2,h3,h4,h6 {
    font-weight: 700 !important;
    color: #092032;
}
a {
    color: #092032;
    text-decoration: none;
    transition: all 0.4s ease;
    font-weight: 500;
}
.bg-cover {
    background-position: center !important;
    background-size: cover !important;
    background-position: center !important;
}
/* top navigation */
:root {
    --custom-purple-100:#a58ecf;
 }
.top-nav {
    background-color:var(--custom-purple-100);
    padding-top: 5px;
    padding-bottom: 5px;
}
.top-nav p {
   margin-bottom: 0;
   display:inline-block;
   margin-right: 16px;
   color: white ;
}
.top-nav i,
.top-nav span{
     vertical-align: middle;
}
.socila-links a {
     width: 34px;
     height: 34px;
     background-color: #ffffff3a;
     display:inline-flex;
     align-items: center;
     justify-content: center;
     color:white;
     font-size: 20px;
     border-radius: 100%;
}
.socila-links a:hover{
    background-color: white;
    color:#a58ecf;
}
/*   navbar  */ 
.navbar-brand img {
    width: 104px;
    height: 48px;
    opacity: 101.9;
    margin-top: -2px;
    margin-left: -19px;
}

.pt-5 {
    padding-top: 1rem!important;
}
:root {
   --custom-gray-400:#adb5bd;
}

.navbar {
    
    background-color:var(--custom-gray-400);
    box-shadow: 0px 6px 30px rgb(0,0,0,0.08);
}
.navbar-text,
.navbar-brand{
    font-weight: 700;
    font-size: 26px;
    color: #092032;
}
.navbar-brand span{
color:#ff4d29;
}
.nav-link {
      color: white !important;
}
.nav-link {
    position: relative;
}
.nav-link:hover::after{
    opacity: 0;
    transition: all 0.2s;
} 
.nav-link:hover::after{
    content:'';
    opacity: 1;
    height: 2px;
    width: 100%;
    background-color:black;
    position: absolute;
    bottom: 0;
    left:0;

}


/* button */

.btn{
    padding: 9px 24px;
    font-weight: 500;
}
.btn-brand {
    background-color: #a58ecf;
    color: #ffffff;
    border-color: #296dff;
}
.btn-brand:hover{
    color:#ffffff;
    background-color: #7d4bda;
}
/* Slider */
.slide1 {
    background-image: linear-gradient(hwb(206 4% 80% / 0.4),hsla(206, 69%, 12%, 0.4)), url(../assetes/images/image2.jpg);
    background-attachment: fixed;
}



</style>