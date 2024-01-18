<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retail POS</title>
    <link rel="stylesheet" href="index.css">
    <!-- <link rel="stylesheet" href="./output.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>

<body>


    <!-- Top Panel -->
    <!-- <div class="top-panel">

        <div class="logo">
            <img src="../sources/images/X_logo.png" alt="logo" height="50px" width="50px">
        </div>
        <div class="headings">
            <h3>Retail Pos system</h3>
        </div>

        <div class="user-profile">
            <div class="user-circle"></div>
            <div class="username">John Doe</div>
        </div>
    </div> -->

    <!-- Left Side Navigation -->
    <div class="left-navigation">
        <div class="logo">
            <img src="../sources/images/X_logo.png" alt="logo" height="50px" width="50px">
        </div>

        <nav>
            <ul>
                <li>
                    <a href="#dashboard"><i class="fas fa-exchange-alt"></i>
                        Dashboard</a>
                </li>

                <li>
                    <a href="#sales"><i class="fas fa-exchange-alt"></i>
                        Sales</a>
                </li>
                <li>
                    <a href="#myStore"><i class="fas fa-store"></i>
                        My Store</a>
                </li>
                <li>
                    <a href="#reports"><i class="fas fa-chart-bar"></i>
                        Reports</a>
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
        <section id="dashboard">
            <div class="top-panel">
                <div class="headings">
                    <h1>Dashboard</h1>
                </div>

                <div class="user-profile">
                    <div class="user-circle"></div>
                    <div class="username">John Doe</div>
                </div>
            </div>
            <div class="dashboard-content">
                <div class="select-time">
                    <b style="font-size: 25px;">Today</b>

                </div>
                <div class="dash-cards">
                    <div class="dash-card1">
                        <h1>Total Sales</h1>
                        <h3 class="contentTag">780,200/= Tzs</h3>
                    </div>
                    <div class="dash-card2">
                        <h1>Avarage Transaction</h1>
                        <h3 class="contentTag">86,700/= Tzs</h3>
                    </div>
                    <div class="dash-card3">
                        <h1>Number of Transactions</h1>
                        <h3 class="contentTag">56</h3>
                    </div>
                    <div class="dash-card4">
                        <h1>Profit Margin</h1>
                        <h3 class="contentTag">340,000/= Tzs</h3>
                    </div>
                </div>
                <div class="popular-products">
                    <h1>popular products</h1>
                </div>

            </div>
        </section>
        <section id="sales">
            <div class="top-panel">
                <div class="headings">
                    <h1>Sales</h1>
                </div>

                <div class="user-profile">
                    <div class="user-circle"></div>
                    <div class="username">John Doe</div>
                </div>
            </div>

            <div class="sales-actions">
                <input type="button" value='+ New Transaction' class="transaction-button">
                <input type="button" value='export file' class="transaction-button">
            </div>
            <div class="sales-details">
                <table class="sales-table">
                    <thead>
                        <tr>
                            <th>Transaction Id</th>
                            <th>Date</th>
                            <th>Type</th>
                            <th>payment method</th>
                            <th>Amount</th>
                            <th>customer name</th>
                            <th>contacts</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>11890</td>
                            <td>17/1/2024</td>
                            <td>sales</td>
                            <td>Cash</td>
                            <td>40,000 Tsh</td>
                            <td>Bernad Arnault</td>
                            <td>+255 678 675 423</td>
                            <td><button style="border-radius: 5px;">Edit</button> <button style="background-color: rgb(210, 42, 42); border-radius: 5px;">Delete</button> <button style="background-color:rgb(17, 128, 17); border-radius: 5px;">View</button></td>
                        </tr>
                        <tr>
                            <td>12345</td>
                            <td>16/1/2024</td>
                            <td>sales</td>
                            <td>Cash</td>
                            <td>123,000 Tsh</td>
                            <td>Rebecca</td>
                            <td>+255 655 776 236</td>
                            <td><button style="border-radius: 5px;">Edit</button> <button style="background-color: rgb(210, 42, 42); border-radius: 5px;">Delete</button> <button style="background-color:rgb(17, 128, 17); border-radius: 5px;">View</button></td>
                        </tr>
                        <tr>
                            <td>16778</td>
                            <td>12/1/2024</td>
                            <td>sales</td>
                            <td>credit card</td>
                            <td>80,000 Tsh</td>
                            <td>Stephen</td>
                            <td>+255 620 456 250</td>
                            <td><button style="border-radius: 5px;">Edit</button> <button style="background-color: rgb(210, 42, 42); border-radius: 5px;">Delete</button> <button style="background-color:rgb(17, 128, 17); border-radius: 5px;">View</button></td>
                        </tr>
                        <tr>
                            <td>14321</td>
                            <td>11/1/2024</td>
                            <td>refund</td>
                            <td>credit card</td>
                            <td>24,000 Tsh</td>
                            <td>Akelah</td>
                            <td>+255 789 233 423</td>
                            <td><button style="border-radius: 5px;">Edit</button> <button style="background-color: rgb(210, 42, 42); border-radius: 5px;">Delete</button> <button style="background-color:rgb(17, 128, 17); border-radius: 5px;">View</button></td>
                        </tr>
                        <tr>
                            <td>24554</td>
                            <td>10/1/2024</td>
                            <td>sales</td>
                            <td>Cash</td>
                            <td>100,000 Tsh</td>
                            <td>joh Gasper</td>
                            <td>+255 765 890 432</td>
                            <td><button style="border-radius: 5px;">Edit</button> <button style="background-color: rgb(210, 42, 42); border-radius: 5px;">Delete</button> <button style="background-color:rgb(17, 128, 17); border-radius: 5px;">View</button></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </section>
        <section id="myStore">
            <div class="top-panel">
                <div class="headings">
                    <h1>Inventory</h1>
                </div>

                <div class="user-profile">
                    <div class="user-circle"></div>
                    <div class="username">John Doe</div>
                </div>
            </div>
            <div class="inventory-actions">
                <input type="button" value='+ Add Product' class="add-button">
                <input type="button" value='Export' class="add-button">
            </div>
            <div class="inventory-details">
                <table class="inventory-table">
                    <thead>
                        <tr>
                            <th>Products</th>
                            <th>Category</th>
                            <th>Price @</th>
                            <th>Items Remained</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Product 1</td>
                            <td>Category A</td>
                            <td>$19.99</td>
                            <td>15</td>
                            <td><button style="border-radius: 5px;">Edit</button> <button style="background-color: rgb(210, 42, 42); border-radius: 5px;">Delete</button></td>
                        </tr>
                        <tr>
                            <td>Product 2</td>
                            <td>Category B</td>
                            <td>$25.00</td>
                            <td>8</td>
                            <td><button style="border-radius: 5px;">Edit</button> <button style="background-color: rgb(210, 42, 42); border-radius: 5px;">Delete</button></td>
                        </tr>
                        <tr>
                            <td>Product 2</td>
                            <td>Category B</td>
                            <td>$25.00</td>
                            <td>8</td>
                            <td><button style="border-radius: 5px;">Edit</button> <button style="background-color: rgb(210, 42, 42); border-radius: 5px;">Delete</button></td>
                        </tr>
                        <tr>
                            <td>Product 2</td>
                            <td>Category B</td>
                            <td>$25.00</td>
                            <td>8</td>
                            <td><button style="border-radius: 5px;">Edit</button> <button style="background-color: rgb(210, 42, 42); border-radius: 5px;">Delete</button></td>
                        </tr>
                        <tr>
                            <td>Product 2</td>
                            <td>Category B</td>
                            <td>$25.00</td>
                            <td>8</td>
                            <td><button style="border-radius: 5px;">Edit</button> <button style="background-color: rgb(210, 42, 42); border-radius: 5px;">Delete</button></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </section>
        <section id="reports">
            <div class="top-panel">
                <div class="headings">
                    <h1>Reports</h1>
                </div>

                <div class="user-profile">
                    <div class="user-circle"></div>
                    <div class="username">John Doe</div>
                </div>
            </div>
            <p>reports</p>
        </section>

        <section id="orders">
            <div class="top-panel">
                <div class="headings">
                    <h1>Orders</h1>
                </div>

                <div class="user-profile">
                    <div class="user-circle"></div>
                    <div class="username">John Doe</div>
                </div>
            </div>
            <p>Orders</p>
        </section>
        <section id="supplier">
            <div class="top-panel">
                <div class="headings">
                    <h1>Supplier</h1>
                </div>

                <div class="user-profile">
                    <div class="user-circle"></div>
                    <div class="username">John Doe</div>
                </div>
            </div>
            <p>Supplier</p>
        </section>
        <section id="option">
            <div class="top-panel">
                <div class="headings">
                    <h1>Option</h1>
                </div>

                <div class="user-profile">
                    <div class="user-circle"></div>
                    <div class="username">John Doe</div>
                </div>
            </div>
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