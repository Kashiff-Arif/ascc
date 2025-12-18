<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'components/head.php';  ?>
    </head>
    <body class="booking-details-page">
        <?php
            $title = "Booking details";
            $image = "images/booking-details-banner.jpg";
            include 'components/page-title-banner.php';
        ?>
        <main class="main-content">
            <div class="booking-details">
                <div class="container">
                    <div class="columns">
                        <div class="left">
                            <h2 class="section-title mb-3">Camp / Trip Name</h2>
                            <p>Explore Kuwalt's rich history on an all-inclusive tour of Al Salam Palace Museum.</p>
                            <div class="important-notes">
                                <h3 class="title">Important Notice</h3>
                                <ul>
                                    <li>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</li>
                                    <li>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</li>
                                    <li>As opposed to using 'Content here, content here making it look like readable English.</li>
                                    <li>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</li>
                                    <li>A search for 'lorem ipsum' will uncover many web sites still in their infancy.</li>
                                    <li>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</li>
                                </ul>
                            </div>
                        </div>
                        <div class="middle">
                            <h3 class="title">Your Booking Details</h3>
                            <div class="row gx-3">
                                <div class="col-sm-6">
                                    <div class="form-element">
                                        <label class="control-label">No Tickets</label>
                                        <input type="text" readonly value="3 Tickets" class="form-control" />
                                        <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1018_6638)">
                                                <path d="M5.20879 6.58032H0.970078C0.931429 6.58032 0.893158 6.58793 0.85745 6.60271C0.821742 6.6175 0.789296 6.63918 0.761967 6.66651C0.734638 6.69384 0.712961 6.72628 0.698173 6.76199C0.683385 6.7977 0.675776 6.83597 0.675781 6.87462V17.125C0.675781 17.203 0.706787 17.2779 0.761979 17.3331C0.81717 17.3883 0.892026 17.4193 0.970078 17.4193H18.0283C18.0669 17.4193 18.1052 17.4117 18.1409 17.3969C18.1766 17.3821 18.2091 17.3604 18.2364 17.3331C18.2637 17.3058 18.2854 17.2733 18.3002 17.2376C18.315 17.2019 18.3226 17.1636 18.3226 17.125V6.87462C18.3226 6.79657 18.2916 6.72171 18.2364 6.66652C18.1812 6.61133 18.1063 6.58032 18.0283 6.58032H6.38605C6.308 6.58032 6.23315 6.61133 6.17796 6.66652C6.12276 6.72171 6.09176 6.79657 6.09176 6.87462C6.09176 6.95267 6.12276 7.02753 6.17796 7.08272C6.23315 7.13791 6.308 7.16892 6.38605 7.16892H17.734V16.8306H1.26437V7.16892H5.20879C5.24744 7.16892 5.28571 7.16131 5.32142 7.14652C5.35713 7.13174 5.38957 7.11006 5.4169 7.08273C5.44423 7.0554 5.46591 7.02296 5.48069 6.98725C5.49548 6.95154 5.50309 6.91327 5.50309 6.87462C5.50309 6.83597 5.49548 6.7977 5.48069 6.76199C5.46591 6.72628 5.44423 6.69384 5.4169 6.66651C5.38957 6.63918 5.35713 6.6175 5.32142 6.60271C5.28571 6.58793 5.24744 6.58032 5.20879 6.58032Z" fill="#CF9C5A"/>
                                                <path d="M18.4209 5.40645H17.1252L10.7041 2.23496C10.7188 2.16215 10.7265 2.08691 10.7265 2.00988C10.7265 1.3798 10.2139 0.867188 9.58387 0.867188C8.95379 0.867188 8.44117 1.3798 8.44117 2.00988C8.44117 2.08691 8.44895 2.16219 8.46355 2.23496L2.0425 5.40645H0.579141C-0.0158985 5.40645 -0.5 5.89055 -0.5 6.48559V17.5139C-0.5 18.1089 -0.0158985 18.593 0.579141 18.593H13.1119C13.1506 18.593 13.1888 18.5854 13.2245 18.5706C13.2602 18.5559 13.2927 18.5342 13.32 18.5068C13.3473 18.4795 13.369 18.4471 13.3838 18.4114C13.3986 18.3757 13.4062 18.3374 13.4062 18.2987C13.4062 18.2601 13.3986 18.2218 13.3838 18.1861C13.369 18.1504 13.3473 18.118 13.32 18.0907C13.2927 18.0633 13.2602 18.0416 13.2245 18.0269C13.1888 18.0121 13.1506 18.0045 13.1119 18.0045H0.579141C0.308672 18.0045 0.0886328 17.7844 0.0886328 17.5139V6.48559C0.0886328 6.21512 0.308672 5.99508 0.579141 5.99508H11.8187C11.8968 5.99508 11.9717 5.96407 12.0268 5.90888C12.082 5.85369 12.113 5.77883 12.113 5.70078C12.113 5.62273 12.082 5.54787 12.0268 5.49268C11.9717 5.43749 11.8968 5.40648 11.8187 5.40648H3.37172L8.725 2.76238C8.93457 3.00133 9.2418 3.15262 9.58387 3.15262C9.92594 3.15262 10.2332 3.00133 10.4427 2.76238L15.796 5.40648H12.996C12.918 5.40648 12.8431 5.43749 12.7879 5.49268C12.7327 5.54787 12.7017 5.62273 12.7017 5.70078C12.7017 5.77883 12.7327 5.85369 12.7879 5.90888C12.8431 5.96407 12.918 5.99508 12.996 5.99508H18.4209C18.6913 5.99508 18.9114 6.21512 18.9114 6.48559V17.5139C18.9114 17.7844 18.6913 18.0044 18.4209 18.0044H14.2891C14.2111 18.0044 14.1362 18.0354 14.081 18.0906C14.0259 18.1458 13.9948 18.2207 13.9948 18.2987C13.9948 18.3768 14.0259 18.4516 14.081 18.5068C14.1362 18.562 14.2111 18.593 14.2891 18.593H18.4209C19.0159 18.593 19.5 18.1089 19.5 17.5139V6.48559C19.5 5.89055 19.0159 5.40645 18.4209 5.40645ZM9.58387 2.56398C9.27836 2.56398 9.0298 2.31543 9.0298 2.00992C9.0298 1.70441 9.27836 1.45586 9.58387 1.45586C9.88937 1.45586 10.1379 1.70441 10.1379 2.00992C10.1379 2.31543 9.88934 2.56398 9.58387 2.56398Z" fill="#CF9C5A"/>
                                                <path d="M4.51133 10.505C4.58938 10.505 4.66424 10.474 4.71943 10.4189C4.77462 10.3637 4.80562 10.2888 4.80562 10.2107C4.80562 10.1327 4.77462 10.0578 4.71943 10.0027C4.66424 9.94746 4.58938 9.91645 4.51133 9.91645H3.24742C3.20877 9.91645 3.1705 9.92406 3.13479 9.93885C3.09909 9.95363 3.06664 9.97531 3.03931 10.0026C3.01198 10.03 2.9903 10.0624 2.97552 10.0981C2.96073 10.1338 2.95312 10.1721 2.95313 10.2107V13.3575L2.95316 13.3584L2.95313 13.3593C2.95313 13.4374 2.98413 13.5122 3.03932 13.5674C3.09451 13.6226 3.16937 13.6536 3.24742 13.6536H4.51133C4.58938 13.6536 4.66424 13.6226 4.71943 13.5674C4.77462 13.5122 4.80562 13.4374 4.80562 13.3593C4.80562 13.2813 4.77462 13.2064 4.71943 13.1512C4.66424 13.096 4.58938 13.065 4.51133 13.065H3.54172V12.0793H4.51133C4.58938 12.0793 4.66424 12.0483 4.71943 11.9931C4.77462 11.938 4.80562 11.8631 4.80562 11.785C4.80562 11.707 4.77462 11.6321 4.71943 11.5769C4.66424 11.5218 4.58938 11.4908 4.51133 11.4908H3.54172V10.5051H4.51133V10.505ZM8.64375 13.6536H9.9077C9.98575 13.6536 10.0606 13.6226 10.1158 13.5674C10.171 13.5122 10.202 13.4373 10.202 13.3593C10.202 13.2812 10.171 13.2064 10.1158 13.1512C10.0606 13.096 9.98575 13.065 9.9077 13.065H8.93805V12.0793H9.9077C9.94634 12.0793 9.98461 12.0717 10.0203 12.0569C10.056 12.0421 10.0885 12.0204 10.1158 11.9931C10.1431 11.9658 10.1648 11.9333 10.1796 11.8976C10.1944 11.8619 10.202 11.8237 10.202 11.785C10.202 11.7464 10.1944 11.7081 10.1796 11.6724C10.1648 11.6367 10.1431 11.6042 10.1158 11.5769C10.0885 11.5496 10.056 11.5279 10.0203 11.5131C9.98461 11.4983 9.94634 11.4907 9.9077 11.4907H8.93805V10.5051H9.9077C9.98575 10.5051 10.0606 10.4741 10.1158 10.4189C10.171 10.3637 10.202 10.2888 10.202 10.2108C10.202 10.1327 10.171 10.0579 10.1158 10.0027C10.0606 9.9475 9.98575 9.91649 9.9077 9.91649H8.64375C8.5657 9.91649 8.49084 9.9475 8.43565 10.0027C8.38046 10.0579 8.34945 10.1327 8.34945 10.2108V13.3575L8.34949 13.3584L8.34945 13.3593C8.34946 13.398 8.35707 13.4362 8.37187 13.4719C8.38666 13.5076 8.40834 13.5401 8.43567 13.5674C8.463 13.5947 8.49544 13.6164 8.53114 13.6312C8.56684 13.646 8.60511 13.6536 8.64375 13.6536ZM5.17953 10.2897L6.00453 13.2503C6.07172 13.4915 6.28512 13.6536 6.53551 13.6536C6.78586 13.6536 6.99926 13.4915 7.06645 13.2503L7.89145 10.2897C7.9124 10.2145 7.90262 10.1341 7.86427 10.0661C7.82592 9.99813 7.76213 9.94817 7.68693 9.92722C7.61174 9.90626 7.5313 9.91604 7.46332 9.95439C7.39533 9.99274 7.34537 10.0565 7.32441 10.1317L6.53547 12.9629L5.74648 10.1317C5.73611 10.0945 5.7185 10.0597 5.69467 10.0293C5.67084 9.99884 5.64125 9.97341 5.60759 9.95442C5.57393 9.93543 5.53686 9.92326 5.4985 9.9186C5.46014 9.91394 5.42123 9.91688 5.384 9.92725C5.34678 9.93763 5.31196 9.95524 5.28154 9.97907C5.25111 10.0029 5.22568 10.0325 5.2067 10.0661C5.18771 10.0998 5.17554 10.1369 5.17088 10.1752C5.16622 10.2136 5.16916 10.2525 5.17953 10.2897ZM11.4052 13.3575V11.3349L12.6242 13.5035C12.693 13.6259 12.8436 13.6832 12.9765 13.6375C13.094 13.5972 13.1751 13.4834 13.1751 13.3592V10.2107C13.1751 10.1327 13.1441 10.0578 13.0889 10.0026C13.0337 9.94742 12.9588 9.91642 12.8808 9.91642C12.8027 9.91642 12.7279 9.94742 12.6727 10.0026C12.6175 10.0578 12.5865 10.1327 12.5865 10.2107V12.235L11.3675 10.0665C11.3356 10.0097 11.2858 9.96513 11.2259 9.93968C11.166 9.91423 11.0993 9.90937 11.0364 9.92585C10.9734 9.94234 10.9177 9.97925 10.8779 10.0308C10.8381 10.0823 10.8166 10.1456 10.8166 10.2107V13.3575C10.8166 13.4355 10.8476 13.5104 10.9028 13.5656C10.958 13.6208 11.0329 13.6518 11.1109 13.6518C11.1496 13.6518 11.1879 13.6442 11.2236 13.6294C11.2593 13.6146 11.2917 13.5929 11.319 13.5656C11.3464 13.5383 11.3681 13.5058 11.3828 13.4701C11.3976 13.4344 11.4052 13.3961 11.4052 13.3575ZM14.9013 13.6536C14.94 13.6536 14.9782 13.646 15.014 13.6312C15.0497 13.6164 15.0821 13.5947 15.1094 13.5674C15.1368 13.54 15.1584 13.5076 15.1732 13.4719C15.188 13.4362 15.1956 13.3979 15.1956 13.3593V10.5068H15.9173C15.9954 10.5068 16.0703 10.4758 16.1254 10.4206C16.1806 10.3655 16.2116 10.2906 16.2116 10.2125C16.2116 10.1345 16.1806 10.0596 16.1254 10.0044C16.0703 9.94926 15.9954 9.91825 15.9173 9.91825H13.8853C13.8073 9.91825 13.7324 9.94926 13.6772 10.0044C13.622 10.0596 13.591 10.1345 13.591 10.2125C13.591 10.2906 13.622 10.3655 13.6772 10.4206C13.7324 10.4758 13.8073 10.5068 13.8853 10.5068H14.607V13.3593C14.607 13.4373 14.638 13.5122 14.6932 13.5674C14.7484 13.6226 14.8233 13.6536 14.9013 13.6536Z" fill="#CF9C5A"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1018_6638">
                                                    <rect width="20" height="20" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-element">
                                        <label class="control-label">Date</label>
                                        <input type="text" value="13-09-2025" readonly class="form-control js-datepicker" />
                                        <img class="icon js-datepicker-icon" src="images/calender_icon.svg" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="your-information">
                                <h3 class="title">Your Information</h3>
                                <div class="grid">
                                    <div class="form-element">
                                        <label class="control-label">First Name</label>
                                        <input type="text" placeholder="Enter First Name" value="Murad" class="form-control" />
                                    </div>
                                    <div class="form-element">
                                        <label class="control-label">Last Name</label>
                                        <input type="text" placeholder="Enter Last Name" value="Mohamed" class="form-control" />
                                    </div>
                                    <div class="form-element">
                                        <label class="control-label">Email</label>
                                        <input type="email" placeholder="Enter Email" value="Mohamednagy@gmail.com" class="form-control" />
                                    </div>
                                    <div class="form-element phone-field dropdown">
                                        <label class="control-label">Phone</label>
                                        <input type="tel" placeholder="Enter Phone" value="+965 22222211" class="form-control" />
                                        <div class="country-selector" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img width="21" height="14" src="images/kuwait_flag.jpg" alt="" />
                                            <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.445738 0.448722C0.644223 0.25041 0.966029 0.25041 1.16451 0.448722L4.51175 3.79306C4.71023 3.99137 5.03204 3.99137 5.23052 3.79306L8.57775 0.448723C8.77624 0.250411 9.09804 0.250411 9.29653 0.448723C9.49501 0.647036 9.49501 0.968564 9.29653 1.16688L5.9493 4.51121C5.35384 5.10615 4.38842 5.10615 3.79297 4.51121L0.445738 1.16688C0.247254 0.968563 0.247254 0.647035 0.445738 0.448722Z" fill="black" stroke="black" stroke-width="0.6" stroke-linecap="round"/>
                                            </svg>
                                        </div>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li class="dropdown-item"><img src="images/kuwait_flag.jpg" alt="" />Kuwait</li>
                                            <li class="dropdown-item"><img src="images/kuwait_flag.jpg" alt="" />Kuwait</li>
                                        </ul>
                                    </div>
                                    <div class="form-element full">
                                        <label class="control-label">Country</label>
                                        <input type="text" placeholder="Enter Conutry" value="Kuwait" class="form-control" />
                                    </div>
                                    <div class="d-grid gap-1 full">
                                        <div class="custom-checkbox">
                                            <input type="checkbox" />
                                            <span class="check">
                                                <svg width="13" height="9" viewBox="0 0 13 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.4674 0.800049L4.13411 8.13338L0.800781 4.80005" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>
                                            <label class="lbl">I agree to the <a href="terms.php">Terms and Condations</a><label>
                                        </div>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" />
                                            <span class="check">
                                                <svg width="13" height="9" viewBox="0 0 13 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.4674 0.800049L4.13411 8.13338L0.800781 4.80005" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>
                                            <label class="lbl">I consent to receiving Emails and SMS Text Messages from ASCC<label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-outline-primary w-100">Sign In / Register</button>
                        </div>
                        <div class="right">
                            <div class="your-order">
                                <h3 class="title">Your Order</h3>
                                <div class="tdata">
                                    <div class="trow">
                                        <div class="tcell">Lecture Hall Inside Fine Arts Centre Booking on 17/04/2025 12:00 pm</div>
                                        <div class="tcell">K.D 5000</div>
                                    </div>
                                    <div class="trow">
                                        <div class="tcell">x3 Days</div>
                                        <div class="tcell"></div>
                                    </div>
                                    <div class="trow">
                                        <div class="tcell">Subtotal</div>
                                        <div class="tcell">K.D 15000</div>
                                    </div>
                                    <div class="trow total">
                                        <div class="tcell">Total</div>
                                        <div class="tcell">K.D 15000</div>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="item">
                                        <input type="radio" name="payment_method" />
                                        <div class="icon-rounded"></div>
                                        <span>KNET</span>
                                        <img src="images/knet_payment.jpg" alt="" />
                                    </div>
                                    <div class="item">
                                        <input type="radio" name="payment_method" />
                                        <div class="icon-rounded"></div>
                                        <span>Card</span>
                                        <img src="images/visa_payment.jpg" alt="" />
                                    </div>
                                    <div class="last-margin-0">
                                        <p>Your personal data will be used to process your order, support your experience through out this website, and for other purposes described in our privacy policy.</p>
                                    </div>
                                </div>
                                <button class="btn btn-primary w-100">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'components/footer.php';  ?>
    </body>
</html>
