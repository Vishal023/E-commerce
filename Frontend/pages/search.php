<?php
$bought = [
    array(
        "name" => "Acer Predator Helios 300",
        "color" => "Abyssal Black",
        "seller" => "RetailNet",
        "price" => 119990,
        "dateOfDelivery" => "Jan 25, 2020",
        "status" => true
    ),
    [
        "name" => "Phone Cover",
        "color" => "Black",
        "seller" => "XYZ",
        "price" => 190,
        "dateOfDelivery" => "Mar 25, 2018",
        "status" => true
    ],
    [
        "name" => "Wrist Watch",
        "color" => "Red Black",
        "seller" => "Abyssal",
        "price" => 500,
        "dateOfDelivery" => false,
        "status" => false
    ], [
        "name" => "Wrist Watch",
        "color" => "Red Black",
        "seller" => "Abyssal",
        "price" => 500,
        "dateOfDelivery" => false,
        "status" => false
    ], [
        "name" => "Wrist Watch",
        "color" => "Red Black",
        "seller" => "Abyssal",
        "price" => 500,
        "dateOfDelivery" => false,
        "status" => false
    ], [
        "name" => "Wrist Watch",
        "color" => "Red Black",
        "seller" => "Abyssal",
        "price" => 500,
        "dateOfDelivery" => false,
        "status" => false
    ], [
        "name" => "Wrist Watch",
        "color" => "Red Black",
        "seller" => "Abyssal",
        "price" => 500,
        "dateOfDelivery" => false,
        "status" => false
    ], [
        "name" => "Wrist Watch",
        "color" => "Red Black",
        "seller" => "Abyssal",
        "price" => 500,
        "dateOfDelivery" => false,
        "status" => false
    ]
];
?>

<section class="Search flex">
    <aside class="Left flex">
        <div class="Filter flex flex-col">
            <div class="Head">
                <h3>Filters</h3>
            </div>
            <div class="Category flex flex-col">
                <h3>Price</h3>
                <button class="btn btn-block btn-outline-secondary">
                    Low to High
                </button>
                <button class="btn btn-block btn-outline-secondary">
                    High to Low
                </button>
                <h3>Popularity</h3>
                <button class="btn btn-block btn-outline-secondary">
                    Most Popular
                </button>
                <button class="btn btn-block btn-outline-secondary">
                    Least Popular
                </button>
                <h3>Other</h3>
                <button class="btn btn-block btn-outline-secondary">
                    Newest First
                </button>
                <button class="btn btn-block btn-outline-secondary">
                    Relevance
                </button>
            </div>
        </div>
    </aside>
    <aside class="Result flex wrap">
        <?php
        foreach ($bought as $item) {
            ?>
            <div class="Card flex flex-col">
                <div class="Card-sub d1 flex">
                    <div class="Card-img">
                        <img src="./assets/img/watch.jfif" alt="">
                    </div>
                </div>
                <div class="Card-sub d2 flex flex-col jc-sa">
                    <div class="Card-head">
                        <?php echo $item["name"]?>
                    </div>
                    <div class="Card-details">
                        Color : <?php echo $item["color"]?>
                    </div>
                    <div class="Card-details">
                        Seller : <?php echo $item["seller"]?>
                    </div>
                </div>
                <div class="Card-sub d3 flex jc-c ai-c">
                    $<?php echo $item["price"]?>
                </div>
                <div class="Card-sub d4 flex flex-col ai-c jc-sa">
                    <div>
                        <button class="btn btn-block btn-success " id="add">
                            + Add
                        </button>
                    </div>
                    <div>
                        <button class="btn btn-block btn-danger disabled" id="rem">
                            - Remove
                        </button>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </aside>
</section>