<?php
/**
 * Created by: HungDang
 * Filename: index.php
 * Date: 10/13/2017
 * Desription:
 */
$this->load->view( 'Public/header' );
?>
<section id="main" class="container">
    <div class="text">
        <!-- Add Gategory description on AdminCP -->
        <h1>Chuyên mục</h1>
    </div>

    <div class="row">
        <!-- Get all category with thumb images -->
        <div class="gallery col-lg-3 col-md-6 col-sm-6">
            <a href="category.html" title="Gategory Name">
                <div class="image-shadow img-fluid" style="background-image:url(public/images/20-11.jpg)">
                    <img src="public/images/20-11.jpg" alt="Gategory Name" class="img-fluid">
                </div>
            </a>
        </div>
        <div class="gallery col-lg-3 col-md-6 col-sm-6">
            <a href="category.html" title="Gategory Name">
                <div class="image-shadow img-fluid" style="background-image:url(public/images/2.jpg)">
                    <img src="public/images/2.jpg" alt="Gategory Name" class="img-fluid">
                </div>
            </a>
        </div>
        <div class="gallery col-lg-3 col-md-6 col-sm-6">
            <a href="category.html" title="Gategory Name">
                <div class="image-shadow img-fluid" style="background-image:url(public/images/3.jpg)">
                    <img src="public/images/3.jpg" alt="Gategory Name" class="img-fluid">
                </div>
            </a>
        </div>
        <div class="gallery col-lg-3 col-md-6 col-sm-6">
            <a href="category.html" title="Gategory Name">
                <div class="image-shadow img-fluid" style="background-image:url(public/images/4.jpg)">
                    <img src="public/images/4.jpg" alt="Gategory Name" class="img-fluid">
                </div>
            </a>
        </div>
</section>
<?php
$this->load->view( 'Public/footer' );
?>
