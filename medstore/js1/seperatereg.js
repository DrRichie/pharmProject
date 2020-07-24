
// Login & Register Pages Urls
// http://localhost/wordpress49/login/
// http://localhost/wordpress49/register/
//Jquery code. I got both urls and split them and get page names and with pages, I shown require form for require page.



jQuery(document).ready(function($){
var url = window.location.href;
url = url.split("/http://woosite.test/register/");
if(url[4] == "login") // You can set url[] according to slash parameter wise
{
$("#customer_login .u-column2").remove(); //Remove Registration Div
}
if(url[4] == "register")
{
$("#customer_login .u-column1").remove(); // Remove Login Div
}
})