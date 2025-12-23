<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'components/head.php';  ?>
    </head>

    <body>
        <?php
            $title = "Profile";
            $image = "images/inner-banner-about.jpg";
            include 'components/page-title-banner.php';
        ?>
        <main class="main-content">
            <div class="container">
                <div class="profile">
                    <div class="left">
                        <div class="nav tabs">
                            <figure class="profile-image">
                                <input type="file" />
                                <img src="images/profile-image.jpg" alt="" />
                                <div class="icon">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.509 14.75C13.4889 14.75 14.278 13.567 14.3712 12.125L14.7443 6.343C14.8447 4.831 13.6108 3.55 12.0542 3.55C11.6166 3.55 11.2149 3.305 11.014 2.927L10.4975 1.912C10.1675 1.275 9.30667 0.75 8.57497 0.75H6.93221C6.19333 0.75 5.33249 1.275 5.0025 1.912L4.486 2.927C4.28514 3.305 3.88342 3.55 3.44583 3.55C1.88916 3.55 0.655294 4.831 0.755725 6.343L1.12875 12.125C1.21484 13.567 2.01111 14.75 3.99103 14.75H11.509Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6.75 4.75H8.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9.75 9.75C9.75 8.64846 8.85154 7.75 7.75 7.75C6.64846 7.75 5.75 8.64846 5.75 9.75C5.75 10.8515 6.64846 11.75 7.75 11.75C8.85154 11.75 9.75 10.8515 9.75 9.75Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </figure>
                            <div class="item active" data-bs-toggle="tab" data-bs-target="#my_profile_tab">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.8325 10.87C9.4525 10.79 7.5625 8.84 7.5625 6.44C7.5625 3.99 9.5425 2 12.0025 2C14.4525 2 16.4425 3.99 16.4425 6.44C16.4325 8.84 14.5425 10.79 12.1625 10.87C12.0625 10.86 11.9425 10.86 11.8325 10.87Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7.15875 20.43C9.90875 22.27 14.4188 22.27 17.1688 20.43C19.5888 18.81 19.5888 16.17 17.1688 14.56C14.4288 12.73 9.91875 12.73 7.15875 14.56C4.73875 16.18 4.73875 18.82 7.15875 20.43Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>My profile</span>
                            </div>
                            <div class="item" data-bs-toggle="tab" data-bs-target="#my_booking_tab">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_562_7863)">
                                        <path d="M21.5 7.90039C22.9332 7.90039 24.0996 9.06677 24.0996 10.5V12.5C24.0996 12.6591 24.0364 12.8113 23.9238 12.9238C23.8113 13.0363 23.6591 13.0996 23.5 13.0996H23C22.6248 13.1006 22.258 13.213 21.9463 13.4219C21.6345 13.6308 21.3917 13.9277 21.248 14.2744C21.1045 14.6211 21.0669 15.0029 21.1396 15.3711C21.2125 15.7391 21.3926 16.0778 21.6572 16.3438C22.0154 16.7027 22.4917 16.9004 22.999 16.9004H23.499C23.6581 16.9004 23.8103 16.9637 23.9229 17.0762C24.0354 17.1887 24.0986 17.3409 24.0986 17.5V19.5C24.0981 20.1892 23.8241 20.8505 23.3369 21.3379C22.8497 21.8251 22.189 22.0988 21.5 22.0996H2.5C1.81072 22.0988 1.1495 21.8253 0.662109 21.3379C0.174717 20.8505 -0.0987837 20.1893 -0.0996094 19.5V17.5C-0.0996091 17.3409 -0.0363498 17.1887 0.0761719 17.0762C0.188694 16.9637 0.34087 16.9004 0.5 16.9004H1C2.04777 16.9004 2.90039 16.0478 2.90039 15C2.90039 13.9522 2.04777 13.0996 1 13.0996H0.5C0.34087 13.0996 0.188694 13.0363 0.0761719 12.9238C-0.0363497 12.8113 -0.0996094 12.6591 -0.0996094 12.5V10.5C-0.0996092 9.06677 1.06677 7.90039 2.5 7.90039H21.5ZM2.5 9.09961C1.72823 9.09961 1.09961 9.72823 1.09961 10.5V11.9023C2.76292 11.9551 4.09961 13.3241 4.09961 15C4.09961 16.6759 2.76291 18.0439 1.09961 18.0967V19.5C1.09961 20.2718 1.72823 20.9004 2.5 20.9004H21.5C22.2718 20.9004 22.9004 20.2718 22.9004 19.5V18.0977C22.5272 18.0866 22.1578 18.0083 21.8125 17.8652C21.4368 17.7096 21.0955 17.4815 20.8086 17.1934C20.5198 16.9061 20.2907 16.5639 20.1348 16.1875C19.9789 15.8111 19.8994 15.4074 19.9004 15L19.9043 14.8408C19.9858 13.2382 21.2901 11.9535 22.9004 11.9023V10.5C22.9004 9.72823 22.2718 9.09961 21.5 9.09961H2.5Z" fill="currentColor" stroke="currentColor" stroke-width="0.2"/>
                                        <path d="M8.5 19.9004C8.65913 19.9004 8.81131 19.9636 8.92383 20.0762C9.03635 20.1887 9.09961 20.3409 9.09961 20.5V21.5C9.09961 21.6591 9.03635 21.8113 8.92383 21.9238C8.81131 22.0364 8.65913 22.0996 8.5 22.0996C8.34087 22.0996 8.18869 22.0364 8.07617 21.9238C7.96365 21.8113 7.90039 21.6591 7.90039 21.5V20.5C7.90039 20.3409 7.96365 20.1887 8.07617 20.0762C8.18869 19.9636 8.34087 19.9004 8.5 19.9004ZM8.5 15.6699C8.65902 15.6699 8.81133 15.7333 8.92383 15.8457C9.03624 15.9581 9.09948 16.1106 9.09961 16.2695V17.9619C9.09929 18.1208 9.03632 18.2735 8.92383 18.3857C8.83939 18.47 8.73249 18.5269 8.61719 18.5498L8.5 18.5605C8.34109 18.5605 8.18865 18.498 8.07617 18.3857C7.96365 18.2732 7.90039 18.1201 7.90039 17.9609V16.2695C7.90052 16.1106 7.96376 15.9581 8.07617 15.8457C8.18867 15.7333 8.34098 15.6699 8.5 15.6699ZM8.5 11.4395C8.65891 11.4395 8.81135 11.502 8.92383 11.6143C9.03635 11.7268 9.09961 11.8799 9.09961 12.0391V13.7314C9.09949 13.8904 9.03625 14.0429 8.92383 14.1553C8.81133 14.2677 8.65902 14.3311 8.5 14.3311C8.34098 14.3311 8.18867 14.2677 8.07617 14.1553C7.96375 14.0429 7.90051 13.8904 7.90039 13.7314V12.0391C7.90039 11.8799 7.96365 11.7268 8.07617 11.6143C8.18865 11.502 8.34109 11.4395 8.5 11.4395ZM8.5 7.90039C8.65913 7.90039 8.81131 7.96365 8.92383 8.07617C9.03635 8.18869 9.09961 8.34087 9.09961 8.5V9.5C9.09961 9.65913 9.03635 9.81131 8.92383 9.92383C8.81131 10.0364 8.65913 10.0996 8.5 10.0996C8.34087 10.0996 8.18869 10.0364 8.07617 9.92383C7.96365 9.81131 7.90039 9.65913 7.90039 9.5V8.5C7.90039 8.34087 7.96365 8.18869 8.07617 8.07617C8.18869 7.96365 8.34087 7.90039 8.5 7.90039Z" fill="currentColor" stroke="currentColor" stroke-width="0.2"/>
                                        <path d="M18.1904 2.00165C19.0166 1.69171 19.9836 2.15378 20.2656 2.98602L22.0684 8.30731L22.0693 8.30829C22.118 8.4582 22.1057 8.62144 22.0352 8.76239C21.9645 8.90343 21.8408 9.01148 21.6914 9.06219C21.5419 9.11287 21.3783 9.10191 21.2363 9.0329C21.0944 8.96389 20.9851 8.84192 20.9326 8.69305V8.69208L19.1289 3.37079V3.36981C19.0916 3.26969 19.0165 3.18817 18.9199 3.14227C18.8222 3.0959 18.7095 3.08997 18.6074 3.12567L2.70996 9.06024L2.71094 9.06122C2.6443 9.08679 2.57332 9.09933 2.50195 9.0993L2.50293 9.10028C2.36064 9.10331 2.22152 9.05558 2.11133 8.96552C2.00114 8.87543 1.92669 8.74815 1.90137 8.60809C1.87618 8.46815 1.90201 8.32371 1.97363 8.20087C2.0274 8.10867 2.10442 8.03297 2.19629 7.98114L2.29297 7.93719L18.1904 2.00165Z" fill="currentColor" stroke="currentColor" stroke-width="0.2"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_562_7863">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>My Bookings</span>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="tab-content">
                            <div class="tab-pane show active" id="my_profile_tab" role="tabpanel">
                                <h2 class="section-title mb-4">My profile</h2>
                                <form class="profile-data">
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
                                        <div class="form-element">
                                            <label class="control-label">Gender</label>
                                            <input type="text" placeholder="Enter Gender" value="Male" class="form-control" />
                                        </div>
                                        <div class="form-element">
                                            <label class="control-label">Country</label>
                                            <input type="text" placeholder="Enter Conutry" value="Kuwait" class="form-control" />
                                        </div>
                                        <div class="form-element pass-field">
                                            <label class="control-label">Password</label>
                                            <input type="text" placeholder="**********************" value="" class="form-control" />
                                            <span class="change-pass-text" data-bs-target="#change-password-modal" data-bs-toggle="modal">Change Password</span>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary action-button">Save Data</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="my_booking_tab" role="tabpanel">
                                <h2 class="section-title mb-4">My Bookings</h2>
                                <div class="nav tickets-tabs">
                                    <div class="item active" data-bs-toggle="tab" data-bs-target="#current_tickets">Current Tickets</div>
                                    <div class="item" data-bs-toggle="tab" data-bs-target="#expired_tickets">Expired tickets</div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="current_tickets" role="tabpanel">
                                        <div class="tickets-grid">
                                            <?php include 'components/ticket_card_v2.php'; ?>
                                            <?php include 'components/ticket_card_v2.php'; ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="expired_tickets" role="tabpanel">
                                        <div class="tickets-grid">
                                            <?php $status = 'expired'; include 'components/ticket_card_v2.php'; ?>
                                            <?php $status = 'expired'; include 'components/ticket_card_v2.php'; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'components/footer.php';  ?>
    </body>
</html>
