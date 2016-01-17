<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Halls & Reserve</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <?php
        $pid = $_GET["pid"];
        $pname = $_GET["pname"];
        
        ?>
        <div class="container">
            <a href="index.php"><div class="logo right"></div></a>
            <div class="clear"></div>
            <div class="all_reserve">
                <div class="header_reserve">
                    <h2>حجز <?php echo $pname; ?></h2>
                    <div class="reserve_form">
                        <form method="post" action="lib/reserved.php?" <?php echo $pid; ?> >
                            <input type="hidden" name="hall_id" value="<?php echo $pid; ?>">
                            <input type="hidden" name="hall_name" value="<?php echo $pname; ?>">
                            <div class="clear"></div>
                            <label for="reserve_name">أسم الحاجز :</label>
                            <input type="text" name="res_name"/>
                            <div class="clear"></div>
                            <label for="reserve_name">أسم العريس :</label>
                            <input type="text" name="groom_name"/>
                            <div class="clear"></div>
                            <label for="reserve_name">أول حرف من العروسة :</label>
                            <input type="text" class="bride_name" name="bride_name"/>
                            <div class="clear"></div>
                            <label for="reserve_name">تاريخ الحجز :</label>
                            <input type="date" class="date" name="reserve_date"/>
                            <div class="clear"></div>
                            <span class="desc"><label for="reserve_name">التفاصيل :</label></span>
                            <div class="clear"></div>
                            <div class="textarea"><textarea name="description"></textarea></div>
                            <div class="clear"></div>
                            <input type="submit" value="حجز القاعة" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
