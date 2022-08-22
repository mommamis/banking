 <!-- Header-->
 <header class="bg-dark py-5" id="main-header">
    <div class="container">
        <div class="text-center text-white">
            <h1 class="display-8 fw-bolder">About <?php echo $_settings->info('name') ?></h1>
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container">
        <div class="card rounded-0">
            <div class="card-body">
                <?php include "about.html" ?>
            </div>
        </div>
    </div>
</section>