<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Retail POS</title>
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>

<body>

    <!-- Top Panel -->
    <div class="top-panel">

        <div class="logo">
            <img src="../../sources/images/X_logo.png" alt="logo" height="50px" width="50px">
        </div>
        <div class="headings">
            <h3>Retail Pos system</h3>
        </div>

        <div class="user-profile">
            <div class="user-circle"></div>
            <div class="username">John Doe</div>
        </div>
    </div>

    <!-- Left Side Navigation -->
    <div class="left-navigation">
        <!-- <div class="user-profile-small">
            <div class="user-circle"></div>
            <div class="username">John Doe</div>
        </div> -->

        <nav>
            <ul>
                <li>
                    <a href="#sales"><i class="fas fa-exchange-alt"></i>
                        Sales</a>
                </li>
                <li>
                    <a href="#reports"><i class="fas fa-chart-bar"></i>
                        Reports</a>
                </li>
                <li>
                    <a href="#myStore"><i class="fas fa-store"></i>
                        My Store</a>
                </li>
                <li>
                    <a href="#orders"><i class="fas fa-shopping-cart"></i>
                        Orders</a>
                </li>
                <li>
                    <a href="#supplier"><i class="fas fa-truck"></i>
                        Supplier</a>
                </li>
                <li>
                    <a href="#option"><i class="fas fa-cogs"></i>
                        Options</a>
                </li>
            </ul>
        </nav>
</div>    

        <div class="content">

            <section id="sales">
                <p>Sales</p>
            </section>
            <section id="reports">
                <p>reports</p>
            </section>
            <section id="myStore">
                <p>myStore</p>
            </section>
            <section id="orders">
                <p>Orders</p>
            </section>
            <section id="supplier">
                <p>Supplier</p>
            </section>
            <section id="option">
                <p>Option</p>
            </section>

        </div>


        <script>
            const navLinks = document.querySelectorAll('nav a');

            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault(); // prevent default jump to section

                    const clickedSection = document.getElementById(this.getAttribute('href').substring(1)); // get selected section based on link's href

                    const allSections = document.querySelectorAll('.content section'); // get all content sections

                    allSections.forEach(section => {
                        section.style.display = 'none'; // hide all sections
                    });

                    clickedSection.style.display = 'block'; // show only the clicked section
                });
            });
        </script>


        <!-- <?php include('../Footer.php') ?> -->

</body>

</html>