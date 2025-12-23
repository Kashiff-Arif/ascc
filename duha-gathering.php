<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'components/head.php';  ?>
    </head>
    <body>
        <?php
            $title = "Duha Gathering";
            $image = "images/inner-banner-about.jpg";
            include 'components/page-title-banner.php';
        ?>
        <main class="main-content">
            <div class="duha-gathering">
                <div class="container">
                    <div class="title-holder d-flex align-items-center justify-content-between">
                        <h2 class="section-title" date="16 Sep 2025">Duha Gathering</h2>
                        <div class="dropdown">
                            <a href="javascript: void(0);" data-bs-offset="0,10" data-bs-toggle="dropdown" class="btn btn-primary">Add to Calendar</a>
                            <div class="dropdown-menu book-now-dropdown dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1572_40038)">
                                    <path d="M12.3735 0C11.4139 0.066375 10.2923 0.680625 9.63866 1.4805C9.04241 2.20613 8.55191 3.28388 8.74316 4.33125C9.79166 4.36388 10.875 3.735 11.5028 2.92163C12.09 2.1645 12.5344 1.0935 12.3735 0Z" fill="currentColor"/>
                                    <path d="M16.1665 6.039C15.2451 4.88363 13.9503 4.21313 12.7274 4.21313C11.113 4.21313 10.4302 4.98601 9.30853 4.98601C8.15204 4.98601 7.27342 4.21538 5.8773 4.21538C4.50593 4.21538 3.04569 5.0535 2.11982 6.48675C0.818206 8.50498 1.04095 12.2996 3.15032 15.5317C3.90519 16.6882 4.91318 17.9887 6.23167 17.9999C7.40504 18.0112 7.73579 17.2473 9.32541 17.2394C10.915 17.2304 11.2165 18.0101 12.3876 17.9977C13.7073 17.9876 14.7704 16.5464 15.5252 15.3899C16.0664 14.5608 16.2677 14.1435 16.6874 13.2075C13.6353 12.0453 13.1459 7.70511 16.1665 6.039Z" fill="currentColor"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_1572_40038">
                                    <rect width="18" height="18" fill="white"/>
                                    </clipPath>
                                    </defs>
                                    </svg>
                                    <span>Apple Calendar</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1572_40044)">
                                            <path d="M0 9C0 4.0374 4.0374 0 9 0C11.0043 0 12.9013 0.644829 14.4861 1.8648L12.3946 4.5816C11.4147 3.82731 10.2409 3.42857 9 3.42857C5.92791 3.42857 3.42857 5.92791 3.42857 9C3.42857 12.0721 5.92791 14.5714 9 14.5714C11.4743 14.5714 13.577 12.9503 14.3016 10.7143H9V7.28571H18V9C18 13.9626 13.9626 18 9 18C4.0374 18 0 13.9626 0 9Z" fill="currentColor"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1572_40044">
                                                <rect width="18" height="18" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span>Google Calendar</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.3714 8.37692L17.0149 5.24638C17.0149 4.87585 16.6694 4.61011 16.4742 4.61011H11.1738V7.69747L12.253 8.37692C12.292 8.38548 12.3324 8.38548 12.3714 8.37692Z" fill="currentColor"/>
                                        <path d="M12.4648 9.52594C12.4648 9.52594 12.2978 9.62786 12.1594 9.52594L11.1745 8.84967H11.1738V13.0454H16.1764C16.6209 13.0454 17.0165 12.7867 17.0165 12.1688V6.49414C17.0165 6.49414 12.2987 9.62786 12.4654 9.52626L12.4648 9.52594ZM5.9208 10.8563C6.251 10.8563 6.51294 10.7074 6.7063 10.4099C6.89934 10.112 6.99681 9.69866 6.99681 9.17066C6.99681 8.6198 6.90315 8.19118 6.71519 7.88479C6.52723 7.57904 6.27069 7.426 5.94462 7.426C5.60902 7.426 5.34137 7.5838 5.1442 7.89844C4.94672 8.2134 4.84766 8.63028 4.84766 9.14875C4.84766 9.67517 4.94672 10.0914 5.1442 10.3972C5.34137 10.7039 5.60077 10.8563 5.9208 10.8563Z" fill="currentColor"/>
                                        <path d="M1.27148 15.1213L10.4602 17.0475V1.26367L1.2718 3.0423L1.27148 15.1213ZM4.42171 7.17361C4.81129 6.65481 5.32691 6.39542 5.96921 6.39542C6.57563 6.39542 7.06649 6.64307 7.4405 7.13995C7.81515 7.63652 8.00248 8.29089 8.00248 9.10369C8.00311 9.93903 7.8088 10.6124 7.4205 11.1236C7.03188 11.6348 6.52578 11.8907 5.90095 11.8907C5.29198 11.8907 4.79636 11.643 4.41282 11.1477C4.02992 10.6525 3.83783 10.0073 3.83783 9.21164C3.83783 8.37153 4.03246 7.6924 4.42203 7.17361H4.42171Z" fill="currentColor"/>
                                    </svg>
                                    <span>Outlook</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.3714 8.37692L17.0149 5.24638C17.0149 4.87585 16.6694 4.61011 16.4742 4.61011H11.1738V7.69747L12.253 8.37692C12.292 8.38548 12.3324 8.38548 12.3714 8.37692Z" fill="currentColor"/>
                                        <path d="M12.4648 9.52594C12.4648 9.52594 12.2978 9.62786 12.1594 9.52594L11.1745 8.84967H11.1738V13.0454H16.1764C16.6209 13.0454 17.0165 12.7867 17.0165 12.1688V6.49414C17.0165 6.49414 12.2987 9.62786 12.4654 9.52626L12.4648 9.52594ZM5.9208 10.8563C6.251 10.8563 6.51294 10.7074 6.7063 10.4099C6.89934 10.112 6.99681 9.69866 6.99681 9.17066C6.99681 8.6198 6.90315 8.19118 6.71519 7.88479C6.52723 7.57904 6.27069 7.426 5.94462 7.426C5.60902 7.426 5.34137 7.5838 5.1442 7.89844C4.94672 8.2134 4.84766 8.63028 4.84766 9.14875C4.84766 9.67517 4.94672 10.0914 5.1442 10.3972C5.34137 10.7039 5.60077 10.8563 5.9208 10.8563Z" fill="currentColor"/>
                                        <path d="M1.27148 15.1213L10.4602 17.0475V1.26367L1.2718 3.0423L1.27148 15.1213ZM4.42171 7.17361C4.81129 6.65481 5.32691 6.39542 5.96921 6.39542C6.57563 6.39542 7.06649 6.64307 7.4405 7.13995C7.81515 7.63652 8.00248 8.29089 8.00248 9.10369C8.00311 9.93903 7.8088 10.6124 7.4205 11.1236C7.03188 11.6348 6.52578 11.8907 5.90095 11.8907C5.29198 11.8907 4.79636 11.643 4.41282 11.1477C4.02992 10.6525 3.83783 10.0073 3.83783 9.21164C3.83783 8.37153 4.03246 7.6924 4.42203 7.17361H4.42171Z" fill="currentColor"/>
                                    </svg>
                                    <span>Outlook Online</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="last-margin-0">
                        <p>Sheikh Abdullah Al-Salem Cultural Centre is one of the world’s largest cultural projects of its kind. Specialist exhibitions and world-class cultural programs have been created with the aim to facilitate learning and promote museums culture in Kuwait and the region, housing more than 22 galleries with over 3000 exhibits.</p>
                        <p>The project was developed through a remarkable global collaboration among 13 countries involving nearly 96 specialist organizations, covering a total of 127 thousand square meters and a total construction area of 130 thousand square meters, The Centre is home not just to the various museums and Fine Arts Centre, but also a Theatre, Guest Services Centre, and Cafes. The Centre’s umbrella is inspired by the sea and wild environments from Maidan Hawalli to the Gulf Street which represents the interconnection of the Kuwaiti community</p>
                        <img class="image" src="images/duha-gathering.jpg" alt="" />
                        <p>Join us at Sheikh Abdullah Al Salem Cultural Centre for "Duha Gathering" under the theme “Every story deserves to be told… come share yours,” on Thursday, September 25 at the Fine Arts Auditorium at 10:00 AM.</p>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'components/footer.php';  ?>
    </body>
</html>
