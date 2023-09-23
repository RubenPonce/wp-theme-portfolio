<?php get_header(); ?>

    <main class="hero-section" style="background:linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1)), url(<?php echo get_theme_file_uri('/images/tech-hero.webp') ?>);">
        <div class="hero-section__content">
            <h1 class="hero-section__headline">Crafting WordPress & React Solutions</h1>
            <p class="hero-section__subheadline">Building Bespoken Websites & JavaScript Applications</p>
            <p class="hero-section__description">Experienced web developer specializing in WordPress, React, and general JavaScript applications. Transforming your ideas into digital realities.</p>
            <a href="https://calendly.com/rubenponce/have-a-conversation" class="hero-section__cta">Schedule a Consultation</a>
        </div>
    </main>

    <h2 id="workExperienceToggle" class="work-experience__title">Work Experience</h2>
    <div id="workExperienceSidebar" class="work-experience__sidebar">
        <span id="workExperienceClose" class="work-experience__close">X</span>
    <section class="work-experience">
        <div class="work-experience__company">
            <h3 class="work-experience__company-name">Nexient, Ann Arbor, MI</h3>
            <p class="work-experience__role">Software Engineering Consultant (Oct 2019 - Mar 2023)</p>

            <div class="work-experience__job">
                <h4 class="work-experience__job-title">Williams Sonoma - Frontend Developer (Jan 2022 - Jan 2023)</h4>
                <!-- details -->
            </div>
            <div class="work-experience__job">
                <h4 class="work-experience__job-title">Restoration Hardware - Frontend Developer (Mar 2021 - Jan 2022)</h4>
                <!-- details -->
            </div>
            <!-- @TODO add more jobs -->
        </div>
    </section>
    </div>

<?php get_footer(); ?>