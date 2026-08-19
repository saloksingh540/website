<?php include('includes/header.php') ?>

<?php
    $fatjoe = [
        [ "name" => "Lorem ipsum dolo - 1.", "img" => "https://cdn.fatjoe.com/wp-content/uploads/2023/08/press-release-distribution.png", "url" => "/", "class" => "col-span-12 md:col-span-4 item-0", "child_style" => "height: 150px;", "row_start" => 1, "row_end" => 3, "col_start" => 1, "col_end" => 2,],
        [ "name" => "Lorem ipsum dolo - 2.", "img" => "https://cdn.fatjoe.com/wp-content/uploads/2023/08/local-citation-building.png", "url" => "/", "class" => "col-span-12 md:col-span-4 item-1", "child_style" => "height: 200px;", "row_start" => 1, "row_end" => 4, "col_start" => 2, "col_end" => 3,],
        [ "name" => "Lorem ipsum dolo - 3.", "img" => "https://cdn.fatjoe.com/wp-content/uploads/2023/08/website-copywriting.png", "url" => "/", "class" => "col-span-12 md:col-span-4 item-0", "child_style" => "height: 50px;", "row_start" => 1, "row_end" => 2, "col_start" => 3, "col_end" => 4 ],
        [ "name" => "Lorem ipsum dolo - 4.", "img" => "https://cdn.fatjoe.com/wp-content/uploads/2023/08/content-syndication.png", "url" => "/", "class" => "col-span-12 md:col-span-4 item-0", "child_style" => "height: 150px;", "row_start" => 3, "row_end" => 6, "col_start" => 1, "col_end" => 1,],
        [ "name" => "Lorem ipsum dolo - 5.", "img" => "https://cdn.fatjoe.com/wp-content/uploads/2023/08/infographic-outreach.png", "url" => "/", "class" => "col-span-12 md:col-span-4 item-1", "child_style" => "height: 100px;", "row_start" => 4, "row_end" => 6, "col_start" => 2, "col_end" => 2,],
        [ "name" => "Lorem ipsum dolo - 6.", "img" => "https://cdn.fatjoe.com/wp-content/uploads/2023/08/product-description.png", "url" => "/", "class" => "col-span-12 md:col-span-4 item-0", "child_style" => "height: 250px;", "row_start" => 2, "row_end" => 6, "col_start" => 3, "col_end" => 3, ],   
        
        

        [ "name" => "Lorem ipsum dolo - 7.", "img" => "https://cdn.fatjoe.com/wp-content/uploads/2023/08/press-release-distribution.png", "url" => "/", "class" => "col-span-12 md:col-span-4 item-0", "child_style" => "height: 150px;", "row_start" => 6, "row_end" => 8, "col_start" => 1, "col_end" => 2,],
        [ "name" => "Lorem ipsum dolo - 8.", "img" => "https://cdn.fatjoe.com/wp-content/uploads/2023/08/local-citation-building.png", "url" => "/", "class" => "col-span-12 md:col-span-4 item-1", "child_style" => "height: 200px;", "row_start" => 6, "row_end" => 9, "col_start" => 2, "col_end" => 3,],
        [ "name" => "Lorem ipsum dolo - 9.", "img" => "https://cdn.fatjoe.com/wp-content/uploads/2023/08/website-copywriting.png", "url" => "/", "class" => "col-span-12 md:col-span-4 item-0", "child_style" => "height: 50px;", "row_start" => 6, "row_end" => 7, "col_start" => 3, "col_end" => 4 ],
        [ "name" => "Lorem ipsum dolo - 10.", "img" => "https://cdn.fatjoe.com/wp-content/uploads/2023/08/content-syndication.png", "url" => "/", "class" => "col-span-12 md:col-span-4 item-0", "child_style" => "height: 150px;", "row_start" => 8, "row_end" => 11, "col_start" => 1, "col_end" => 1,],
        [ "name" => "Lorem ipsum dolo - 11.", "img" => "https://cdn.fatjoe.com/wp-content/uploads/2023/08/infographic-outreach.png", "url" => "/", "class" => "col-span-12 md:col-span-4 item-1", "child_style" => "height: 100px;", "row_start" => 9, "row_end" => 11, "col_start" => 2, "col_end" => 2,],
        [ "name" => "Lorem ipsum dolo - 12.", "img" => "https://cdn.fatjoe.com/wp-content/uploads/2023/08/product-description.png", "url" => "/", "class" => "col-span-12 md:col-span-4 item-0", "child_style" => "height: 250px;", "row_start" => 7, "row_end" => 11, "col_start" => 3, "col_end" => 3, ],  
    ];
?> 

<style>
    .fat_joe_container {
        position: relative;
        height: 500px; /* The visible height for the scrolling container */
        overflow: hidden; /* Hide content that overflows outside the container */
    }
    .fat_joe_container::before, .fat_joe_container::after {
        content: "";
        position: absolute;
        left: 0px;
        width: 100%;
        z-index: 1;
        transition: 0.3s ease-in-out;
    }
    .fat_joe_container::after {
        bottom: 0px;
        height: 75px;
        background: linear-gradient(0deg, rgb(21, 20, 26) 0%, rgba(21, 20, 26, 0) 100%);
    }
    .fat_joe_container::before {
        top: 0px;
        height: 75px;
        background: linear-gradient(rgb(21, 20, 26) 0%, rgba(21, 20, 26, 0) 100%);
    }

    .fat_joe {
        position: absolute;
        width: 100%;
        height: auto; /* Allow the content inside the divs to grow as needed */
    }

    .up-scroll, .down-scroll {
        position: absolute;
        width: 100%;
        height: auto;
        top: 0; /* Set the initial position */
    }

    .up-scroll {
        animation: scrollUp 10s linear infinite;
    }

    .down-scroll {
        animation: scrollDown 10s linear infinite;
    }

    @keyframes scrollUp {
        0% {
            transform: translateY(0); /* Start at the top */
        }
        100% {
            transform: translateY(-100%); /* Move upwards */
        }
    }

    @keyframes scrollDown {
        0% {
            transform: translateY(0); /* Start at the bottom */
        }
        100% {
            transform: translateY(100%); /* Move downwards */
        }
    }

    .fat_joe {
        position: relative;
        display: grid;
        grid-template-columns: repeat(3, 1fr); /* Three equal-width columns */
        grid-auto-rows: auto; /* Automatically adjust row height based on content */
        gap: 0; /* Remove gaps between items */
        width: 100%; /* Full-width container */
        background-color: rgb(21, 20, 26);
        margin: 0 auto;
    }

    .fj_item {
        display: flex;
        align-items: flex-end;
        justify-content: flex-start;
        margin: 0; /* No extra spacing between items */
        padding: 12px;
        font-size: 12px;
        background-color: rgb(32, 30, 38);
        transition: 0.3s ease-in-out;
        width: 100%;
        height: fit-content;
        position: relative;
    }

    .fj_item a {
        border: 1px solid rgb(195, 255, 0);
        border-radius: 12px;
        color: rgb(255, 255, 255);
        padding: 5px;
        overflow: hidden;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-span-12 md:col-span-6"></div>
        <div class="col-span-12 md:col-span-6 bg-primary">
            <div class="fat_joe_container">
                <div class="fat_joe up-scroll">
                    <?php foreach ($fatjoe as $key => $i) { ?>
                        <div class="fj_item item-<?php echo $key + 1; ?>" style="height: fit-content; grid-area : <?php echo $i['row_start']; ?> / <?php echo $i['col_start']; ?> / <?php echo $i['row_end']; ?> / <?php echo $i['col_end']; ?>;">
                            <a href="<?php echo $i['url']; ?>" style="<?php echo $i['child_style']; ?>">
                                <span class="absolute bottom-0 left-0 right-0 pb-5 px-3 text-center block" style="z-index: 1;"><?php echo $i['name']; ?></span>
                                <img src="<?php echo $i['img']; ?>" alt=""/>
                            </a>
                        </div>
                    <?php } ?>
                </div>
                <div class="fat_joe down-scroll">
                    <?php foreach ($fatjoe as $key => $i) { ?>
                        <div class="fj_item item-<?php echo $key + 1; ?>" style="height: fit-content; grid-area : <?php echo $i['row_start']; ?> / <?php echo $i['col_start']; ?> / <?php echo $i['row_end']; ?> / <?php echo $i['col_end']; ?>;">
                            <a href="<?php echo $i['url']; ?>" style="<?php echo $i['child_style']; ?>">
                                <span class="absolute bottom-0 left-0 right-0 pb-5 px-3 text-center block" style="z-index: 1;"><?php echo $i['name']; ?></span>
                                <img src="<?php echo $i['img']; ?>" alt=""/>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../js/jquery-3.1.0.js" defer></script>
<script src="../js/fatjoe.js" defer></script> 

<?php include('includes/footer.php') ?>