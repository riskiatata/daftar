<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale-1.0">
        <title> Responsive Contact Us</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
        <style>
            *{
                margin:0;
                padding:0;
                box-sizing:border-box;
                font-family:"Poppins", sans-serif;
            }
            body{
                min-height:100vh;
                background:url(upload/ngetikk.jpg)no-repeat;
                background-size:cover;
                display:flex;
                justify-content:center;
                align-items:center;
            }
            .contact-section{
                width:100%;
                display:flex;
                justify-content:center;
                align-items:center;
            }
            .contact-info{
                color:#fff;
                max-width:500px;
                line-height:65px;
                padding-left:50px;
                font-size:18px;
            }
            .contact-info i{
                margin-right:20px;
                font-size:25px;
            }
            .contact-form{
                max-width: 700px;
                margin-right:50px;
            }
            .contact-info, .contact-form{
                flex:1;
            }
            .contact-form h2{
                color:#55AD9B;
                text-align:center;
                font-size:35px;
                font-family: courier;
                text-transform:uppercase;
                margin-bottom:30px;
            }
            .contact-form .text-box{
                background:#000;
                color:#fff;
                border:none;
                width: calc(50% -10%);
                height:50%;
                padding:12px;
                font-size:15px;
                border-radius: 5px;
                box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
                margin-bottom:20px;
                opacity:0.9;
            }
            .content-form .text-box:first-child{
                margin-right:15px;
            }
            .contact-form textarea{
                background: #000;
                color: #fff;
                border:none;
                width:100%;
                padding: 12px;
                font-size:15px;
                min-height:200px;
                max-height:400px;
                resize:vertical;
                border-radius:5px;
                box-shadow:0 1px 1px rgba(0, 0, 0, 0.1);
                margin-bottom:20px;
                opacity:0.9;
            }
            .contact-form .send-btn{
                float:right;
                background:#538392;
                color:#fff;
                border:none;
                width:120px;
                height:40px;
                font-size:15px;
                font-weight:600;
                text-transform: uppercase;
                letter-spacing:2px;
                border-radius:5px;
                cursor:pointer;
                transition:0.3s;
                transition-property: background;
            }
            .contact-form .send-btn:hover{
                background:#6295A2;
            }
            @media screen and(max-width: 950px){
                .contact-section{
                    flex-direction:column;
                }
                .contact-info .contact-form{
                margin:10px 50px;
            }
            
            .contact-formh2{
                font-size:30px;
            }
            .contact-form .text-box{
                width:100%;

            }
            }

            .alert-succes{
                z-index:1;
                background:#FEB941;
                font-size:18px;
                padding:20px 40px;
                min-width:420px;
                position:fixed;
                right:0;
                top: 10px;
                border-left:8px solid #FEEFAD;
                border-radius:4px;
                
            }
            </style>
</head>
<body>

<div class="alert-succes">
    <span> Pesan Telah Terkirim! Terima Kasih!</span>
        </div>

    <div class="contact-section">
        <div class="contact-info">
            <div><i class="fas fa-map-marker-alt"></i>Jl. Trs.Candi Mendut No.9B, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142</div>
            <div><i class="fas fa-envelope"></i>sarastyatechnology.hg@gmail.com</div>
            <div><i class="fas fa-phone">0851-7538-5499</i></div>
            <div><i class="fas fa-clock">Senin-Jumat 08.00 - 17.00</i></div>
</div>
<div class="contact-form">
    <h2>Contact Us</h2>
    <form class="contact" action="" method="post">
        <input type="text" name="nama" class="text-box" placeholder="Your Name" required>
        <input type="email" name="email" class="text-box" placeholder="Your Email" required>
        <textarea name="message" rows="5" placeholder="Your Message"required></textarea>
        <input type="submit" name="submit" class="send-btn" value="send">
</form>
</div>
</div>