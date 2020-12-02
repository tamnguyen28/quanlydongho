<!-- <div class="tab-pane active" id="Audiobooks"> -->
<!-- <div class="tab-active owl-carousel"> -->
<div class="product-wrapper">
    <div class="product-img">
        <a href="product-details.php?idproduct=<?php echo $row['ID'] ?>">
            <img src=<?php echo "public/frontend/img/product/" . $row['Image']; ?> alt="book" class="primary" width="50px" height="50px" />
        </a>
        <div class="quick-view">
            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                <i class="fa fa-search-plus"></i>
            </a>
        </div>
        <div class="product-flag">
            <ul>
                <li><span class="sale">new</span></li>
                <li><span class="discount-percentage">-5%</span></li>
            </ul>
        </div>
    </div>
    <div class="product-details text-center">
        <div class="product-rating">
            <ul>
                <li><a href="#"><i class="fa fa-star"></i></a></li>
                <li><a href="#"><i class="fa fa-star"></i></a></li>
                <li><a href="#"><i class="fa fa-star"></i></a></li>
                <li><a href="#"><i class="fa fa-star"></i></a></li>
                <li><a href="#"><i class="fa fa-star"></i></a></li>
            </ul>
        </div>
        <h4><a href="#"><?php echo $row['Name'] ?></a></h4>
        <div class="product-price">
            <ul>
                <li><?php echo $row['Price'] ?> VND</li>
            </ul>
        </div>
    </div>
    <div class="product-link">
        <div class="product-button">
            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
        </div>
        <div class="add-to-link">
            <ul>
                <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- </div> -->
<!-- </div> -->
