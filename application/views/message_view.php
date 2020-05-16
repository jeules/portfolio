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
        margin: auto;
        width: 600px;
        
        -webkit-box-shadow: -2px -2px 50px -7px rgba(0,0,0,0.54);
        -moz-box-shadow: -2px -2px 50px -7px rgba(0,0,0,0.54);
        box-shadow: -2px -2px 50px -7px rgba(0,0,0,0.54);
    }
</style>

<div class="container-fluid h-100">
    <div class="row h-100 align-items-center">
        <div class="col-12">
            <div class="card text-center align-items-center">
                <img src="<?php echo base_url('assets/media/img_profile.jpg'); ?>">
                <?php echo $message; ?>
            </div>
        </div>
    </div>
</div>