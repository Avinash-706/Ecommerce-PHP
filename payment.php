<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>

        Complete Your Purchase

    </title>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="payment.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Delius+Swash+Caps&display=swap" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>

</head>

<body>
<header class="custom-header">
        <div class="left-section">
            <span class="brand-name">Shree Bhandar</span>
        </div>

    </header>

    <div class="container">

        <div class="card-container">

            <div class="front">
                

                <div class="image">

                    <img src="images\chip.png" alt="chip">

                    <img src="images\visa.png" alt='visa'>

                </div>

                <div class="card-number-box">

                    ################

                </div>

                <div class="flexbox">

                    <div class="box">

                        <div class="card-holder-name">

                            Name of card holder

                        </div>

                    </div>

                    <div class="box">

                        <span>

                            expiry

                        </span>

                        <div class="expiration">

                            <span class="exp-month">

                                mm /

                            </span>

                            <span class="exp-year">

                                yyyy

                            </span>

                        </div>

                    </div>

                </div>

            </div>


            <div class="back">

                <div class="stripe"> </div>

                <div class="box">

                    <span>

                        cvv

                    </span>

                    <div class="cvv-box"> </div>

                    <img src="images\visa.png" alt="Visa">

                </div>

            </div>

        </div>

        <form action="">

            <div class="inputBox">

                <span>

                    card number

                </span>

                <input type="text" maxlength="16" class="card-number-input" required>

            </div>

            <div class="inputBox">

                <span>

                    name on card

                </span>

                <input type="text" class="card-holder-input" required>

            </div>

            <div class="flexbox">

                <div class="inputBox">

                    <span>

                        expiry mm

                    </span>

                    <select name="" id="" class="month-input" required>

                        <option value="month" selected disabled>

                            month

                        </option>

                        <option value="01">

                            01

                        </option>

                        <option value="02">

                            02

                        </option>

                        <option value="03">

                            03

                        </option>

                        <option value="04">

                            04

                        </option>

                        <option value="05">

                            05

                        </option>

                        <option value="06">

                            06

                        </option>

                        <option value="07">

                            07

                        </option>

                        <option value="08">

                            08

                        </option>

                        <option value="09">

                            09

                        </option>

                        <option value="10">

                            10

                        </option>

                        <option value="11">

                            11

                        </option>

                        <option value="12">

                            12

                        </option>

                    </select>

                </div>

                <div class="inputBox">

                    <span>

                        expiry yy

                    </span>

                    <select name="" id="" class="year-input" required>

                        <option value="year" selected disabled>

                            year

                        </option>

                        <option value="2025">

                            2025

                        </option>

                        <option value="2026">

                            2026

                        </option>

                        <option value="2027">

                            2027

                        </option>

                        <option value="2028">

                            2028

                        </option>

                        <option value="2029">

                            2029

                        </option>

                        <option value="2030">

                            2030

                        </option>

                        <option value="2031">

                            2031

                        </option>

                        <option value="2032">

                            2032

                        </option>

                        <option value="2033">

                            2033

                        </option>

                    </select>

                </div>

                <div class="inputBox">

                    <span>

                        CVV

                    </span>

                    <input type="text" maxlength="4" class="cvv-input" required>

                </div>

            </div>

            <button type="button" class="submit-btn">

                <a href='success.php' style='color: white; text-decoration: none;'>

                    Submit

                </a>

            </button>

        </form>

    </div>

    <footer class="footer">
        <div class="container-text-center">
            <span class="text-muted">
                <b>Copyright&copy;Shree Bhandar | All Rights Reserved | Contact Us: +91 70636 28574</b>
            </span>
        </div>
    </footer>
    
    <script src='payment.js'> </script>


</body>

</html>