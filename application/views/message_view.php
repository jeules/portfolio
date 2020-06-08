<style>
    html,body{
        height: 100%;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }
    img {
        border-radius: 50%;
        max-width: 150px;
        max-height: 150px;
        margin-bottom: 10px;
    }
    .card {
        padding: 30px;
        width: 40%;
        
        -webkit-box-shadow: -2px -2px 50px -7px rgba(0,0,0,0.54);
        -moz-box-shadow: -2px -2px 50px -7px rgba(0,0,0,0.54);
        box-shadow: -2px -2px 50px -7px rgba(0,0,0,0.54);
    }
    @media only screen and (max-width: 600px) {
        .card {
            width: 100%;
        }
    }

    ul {
        overflow: auto;
    }

    ul li {
        list-style-type: none;
        float: left;
    }

    ul li a i {
        background: #205D7A;
        color: #fff;
        width: 40px;
        height: 40px;
        border-radius: 20px;
        font-size: 25px;
        text-align: center;
        margin-right: 10px;
        padding-top: 15%;
    }

    ul li a i {
        transition: all 0.2s ease-in-out;
    }
    ul li a i:hover {
        opacity: .7;
    }

    .fa-facebook-f {
        background:#3b5998
    } 
    .fa-linkedin-in {
        background:#007bb6
    }
    .fa-twitter {
        background:#00aced
    }
    .fa-instagram {
        background: #3f729b
    }
</style>

<div class="container-fluid h-100">
    <div class="row h-100 align-items-center">
        <div class="col-12">
            <div class="card text-center align-items-center m-auto">
                <img src="<?php echo base_url('assets/media/img_profile.jpg'); ?>">
                <?php echo $message; ?>
                <ul>
                    <!-- <li><a href="http://facebook.com/julesalmodal"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="http://instagram.com/julesalmodal"><i class="fab fa-instagram"></i> </a></li> -->
                    <!-- <li><a href="http://linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li> -->
                    <!-- <li><a href="http://twitter.com/"><i class="fab fa-twitter"></i></a></li> -->
                </ul>
            </div>
        </div>
    </div>
</div>