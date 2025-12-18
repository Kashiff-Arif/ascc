<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'components/head.php';  ?>
    </head>
    <body>
        <?php
            $title = "Theatre";
            $image = "images/inner-banner-about.jpg";
            include 'components/page-title-banner.php';
        ?>
        <main class="main-content">
            <div class="tickets">
                <div class="container">
                    <h2 class="section-title text-primary mb-4">Ticket Prices</h2>
                    <div class="tickets-holder">
                        <?php include 'components/ticket_card.php'; ?>
                        <?php include 'components/ticket_card.php'; ?>
                        <?php include 'components/ticket_card.php'; ?>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'components/footer.php';  ?>
    </body>
</html>
