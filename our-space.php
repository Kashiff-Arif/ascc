<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'components/head.php';  ?>
    </head>
    <body class="nature-page our-space-page">
        <?php
            $title = "Space";
            $tagline = "The study of space and the universe has always evoked mystery and inspiration.";
            $image = "images/space-banner.jpg";
            $classes = "v2";
            include 'components/page-title-banner.php';
        ?>
        <main class="main-content">
            <div class="video-area">
                <video class="background-video" autoplay muted loop playsinline>
                    <source src="images/space.mp4" type="video/mp4">
                </video>
                <div class="container">
                    <div class="sections-grid">
                        <section class="image-content">
                            <h2 class="section-title">Your Space Adventure Starts Here</h2>
                            <div class="grid">
                                <figure class="image">
                                    <img src="images/earth-story-image.jpg" class="object-fit-cover" alt="" />
                                </figure>
                                <div class="content">
                                    <div class="inner">
                                        <p>The Centre’s Space exhibit gives audiences an unprecedented opportunity to explore the wonders of this unknown universe. Visitors can observe the galaxies and the vast cosmos and get a glimpse of some of the most important discoveries in the history of space exploration.</p>
                                        <p>Some of the most important discoveries in particle physics are due to the work undertaken at the Large Hadron Collider, (LHC), a giant particle collider based near Geneva. It is considered the most complex experimental facility ever built. Visitors have a rare chance to see for themselves why this gargantuan scientific experiment is so important.</p>
                                        <p>Experiment spaces are an important part of the Centre’s unique quest for innovation and intellectual growth in science, technology, geology, and the environment.</p>
                                        <p>The museum has a learning area (learning Zone) and the hall of the late astronomer Dr. Salih Al-Ajeery (Intergalactic Space)</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="explore-spacestation">
                            <h2 class="section-title" data-tagline="Take a closer look inside the ISS and learn how astronauts live and work in orbit.">Explore the International Space Station</h2>
                            <div class="grid">
                                <figure class="item"><img src="images/earth-story-image.jpg" alt="" /></figure>
                                <figure class="item"><img src="images/earth-story-image.jpg" alt="" /></figure>
                                <figure class="item"><img src="images/earth-story-image.jpg" alt="" /></figure>
                                <figure class="item"><img src="images/earth-story-image.jpg" alt="" /></figure>
                            </div>
                        </section>
                        <section class="space-center">
                            <div class="info">
                                <p>The Centre’s Space Exhibition offers visitors a unique opportunity to explore the wonders of the universe. Guests can observe distant galaxies, learn about the cosmos, and discover some of the most important milestones in the history of space exploration.</p>
                                <p>Major breakthroughs in particle physics have been achieved through advanced research facilities, including giant particle accelerators. These complex scientific instruments give visitors an exceptional chance to understand the scale and significance of modern scientific experiments.</p>
                                <p>Interactive experiment zones are a key part of the Centre’s mission to inspire innovation and support intellectual growth in science, technology, geology, and the environment.</p>
                                <p>The museum also includes a dedicated learning area and a special exhibition space focused on intergalactic exploration</p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <section class="other-museums">
                <div class="container">
                    <div class="title-bar">
                        <h2 class="section-title">Other Museums</h2>
                        <div class="h-list arrows">
                            <svg class="prev arrow" width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <foreignObject x="-40" y="-40" width="125.818" height="125"><div xmlns="http://www.w3.org/1999/xhtml" style="backdrop-filter:blur(20px);clip-path:url(#bgblur_0_782_7059_clip_path);height:100%;width:100%"></div></foreignObject><rect data-figma-bg-blur-radius="40" x="-1" y="1" width="43.8182" height="43" rx="21.5" transform="matrix(-1 0 0 1 43.8184 0)" stroke="currentColor" stroke-width="2"/>
                                <path d="M25.1992 17.25L19.8538 22.5L25.1992 27.75" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <defs>
                                    <clipPath id="bgblur_0_782_7059_clip_path" transform="translate(40 40)"><rect x="-1" y="1" width="43.8182" height="43" rx="21.5" transform="matrix(-1 0 0 1 43.8184 0)"/></clipPath>
                                </defs>
                            </svg>
                            <svg class="next arrow" width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <foreignObject x="-40" y="-40" width="125.818" height="125"><div xmlns="http://www.w3.org/1999/xhtml" style="backdrop-filter:blur(20px);clip-path:url(#bgblur_0_782_6833_clip_path);height:100%;width:100%"></div></foreignObject><rect data-figma-bg-blur-radius="40" x="1" y="1" width="43.8182" height="43" rx="21.5" stroke="currentColor" stroke-width="2"/>
                                <path d="M20.6191 17.25L25.9646 22.5L20.6191 27.75" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <defs>
                                    <clipPath id="bgblur_0_782_6833_clip_path" transform="translate(40 40)"><rect x="1" y="1" width="43.8182" height="43" rx="21.5"/></clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <?php $category_type = "earth"; include 'components/museum_item.php'; ?>
                            </div>
                            <div class="swiper-slide">
                                <?php $category_type = "teck"; include 'components/museum_item.php'; ?>
                            </div>
                            <div class="swiper-slide">
                                <?php $category_type = "human"; include 'components/museum_item.php'; ?>
                            </div>
                            <div class="swiper-slide">
                                <?php $category_type = "earth"; include 'components/museum_item.php'; ?>
                            </div>
                            <div class="swiper-slide">
                                <?php $category_type = "teck"; include 'components/museum_item.php'; ?>
                            </div>
                            <div class="swiper-slide">
                                <?php $category_type = "human"; include 'components/museum_item.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include 'components/footer.php';  ?>
        <script>
            ascc_app.initMuseumsSlider();
        </script>
    </body>
</html>
