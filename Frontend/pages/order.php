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

<div class="Order flex ai-c jc-c">
    <div class="Order-overview flex flex-col">
        <?php
        foreach ($bought as $item) {
            ?>

            <div class="Card flex jc-c wrap">
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
                <div class="Card-sub d4 flex flex-col">
                    <?php if ($item["status"] == true){?>
                    <div>
                        <p>
                            Date of Delivery
                            <br>
                            <?php echo $item["dateOfDelivery"] ?>
                        </p>
                    </div>
                    <div>
                        <p>Your Item has been delivered</p>
                    </div>
                    <?php
                        }else{
                    ?>
                        <div>
                            <p>Not Delivered</p>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
