<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
</head>

<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
    <style>

        
        img.slider-img {
            height: 400px !important
        }

        .slider-text {
            background-color: #35443585 !important        
        }

         .carousel-control-prev-icon {
            width: 40px;
            height: 40px;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23c593d8' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e");
        }
 
        .carousel-control-next-icon {
            width: 40px;
            height: 40px;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23c593d8' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e");
        }

        

        .trend-img{
            max-height: auto !important;
            max-width: auto !important;
            
        }

        .trending-item{
            float:left;
            width: 20%;
        }

        .trending-wrapper{
            margin:30px;
        }

      

        .product-details-sigle{
            max-height:40% !important;
            max-width:40% !important;
        }

        

        .btn-outline-success{
            margin-left:5px !important;
        }

       

.footer-bs {
    background-color: #3c3d41;
    padding: 60px 40px;
    color: rgba(255, 255, 255, 1.00);
    margin-bottom: 20px;
    border-bottom-right-radius: 6px;
    border-top-left-radius: 0px;
    border-bottom-left-radius: 6px;
}

.footer-bs .footer-brand,
.footer-bs .footer-nav,
.footer-bs .footer-social,
.footer-bs .footer-ns {
    padding: 10px 25px;
}

.footer-bs .footer-nav,
.footer-bs .footer-social,
.footer-bs .footer-ns {
    border-color: transparent;
}

.footer-bs .footer-brand h2 {
    margin: 0px 0px 10px;
}

.footer-bs .footer-brand p {
    font-size: 12px;
    color: rgba(255, 255, 255, 0.70);
}

.footer-bs .footer-nav ul.pages {
    list-style: none;
    padding: 0px;
}

.footer-bs .footer-nav ul.pages li {
    padding: 5px 0px;
}

.footer-bs .footer-nav ul.pages a {
    color: rgba(255, 255, 255, 1.00);
    font-weight: bold;
    text-transform: uppercase;
}

.footer-bs .footer-nav ul.pages a:hover {
    color: rgba(255, 255, 255, 0.80);
    text-decoration: none;
}

.footer-bs .footer-nav h4 {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 3px;
    margin-bottom: 10px;
}

.footer-bs .footer-nav ul.list {
    list-style: none;
    padding: 0px;
}

.footer-bs .footer-nav ul.list li {
    padding: 5px 0px;
}

.footer-bs .footer-nav ul.list a {
    color: rgba(255, 255, 255, 0.80);
}

.footer-bs .footer-nav ul.list a:hover {
    color: rgba(255, 255, 255, 0.60);
    text-decoration: none;
}

.footer-bs .footer-social ul {
    list-style: none;
    padding: 0px;
}

.footer-bs .footer-social h4 {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 3px;
}

.footer-bs .footer-social li {
    padding: 5px 4px;
}

.footer-bs .footer-social a {
    color: rgba(255, 255, 255, 1.00);
}

.footer-bs .footer-social a:hover {
    color: rgba(255, 255, 255, 0.80);
    text-decoration: none;
}

.footer-bs .footer-ns h4 {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 3px;
    margin-bottom: 10px;
}

.footer-bs .footer-ns p {
    font-size: 12px;
    color: rgba(255, 255, 255, 0.70);
}

@media (min-width: 768px) {
    .footer-bs .footer-nav,
    .footer-bs .footer-social,
    .footer-bs .footer-ns {
        border-left: solid 1px rgba(255, 255, 255, 0.10);
    }
} 

    </style>
</html>