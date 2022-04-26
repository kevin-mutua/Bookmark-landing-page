<?php get_header(); ?>

<div id="wrapper">
    <div class="background"></div>
</div>
<!--=== Section_1 ===-->
<section class="section_1 clearfix" id="features">
    <div class="container">
        <!-- Heading Box -->
        <div class="h_box">
            <h2><?php _e( 'Features', 'bookmark_landing' ); ?></h2>
            <p><?php _e( 'Our aim is to make it quick and easy for you to access your favourite websites. Your bookmarks sync between your devices so you can access them on the go.', 'bookmark_landing' ); ?></p>
        </div>
        <div class="sub_of_section_1">
            <!-- Tab -->
            <div class="tab_header">
                <div class="tab">
                    <div class="tab_item">
                        <button class="tab_links" onclick="cssTab(event, 'simple_bookmarking')" id="defaultOpen">
                            <?php _e( 'Simple Bookmarking', 'bookmark_landing' ); ?>
                        </button>
                    </div>
                    <div class="tab_item">
                        <button class="tab_links" onclick="cssTab(event, 'speedy_searching')">
                            <?php _e( 'Speedy Searching', 'bookmark_landing' ); ?>
                        </button>
                    </div>
                    <div class="tab_item">
                        <button class="tab_links" onclick="cssTab(event, 'easy_sharing')">
                            <?php _e( 'Easy Sharing', 'bookmark_landing' ); ?>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Tab Content Section -->
            <div class="tab_content clearfix" id="simple_bookmarking">
                <div class="col span_1_of_2 tab_image">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./asset/images/illustration-features-tab-1.svg" alt="illustration-features-tab-1" class="tab_c_image">
                </div>
                <div class="col span_1_of_2 tab_h_box">
                    <h2 class="tab_heading"><?php _e( 'Bookmark in one click', 'bookmark_landing' ); ?></h2>
                    <p class="tab_para"><?php _e( 'Organize your bookmarks however you like. Our simple drag-and-drop interface gives you complete control over how you manage your favourite sites.', 'bookmark_landing' ); ?></p>
                    <div class="tab_button">
                        <button class="button_1 btn">
                            <?php _e( 'More Info', 'bookmark_landing' ); ?>
                        </button>
                    </div>
                </div>
            </div>
            <div class="tab_content clearfix" id="speedy_searching">
                <div class="col span_1_of_2 tab_image">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./asset/images/illustration-features-tab-2.svg" alt="illustration-features-tab-2" class="tab_c_image">
                </div>
                <div class="col span_1_of_2 tab_h_box">
                    <h2 class="tab_heading"><?php _e( 'Intelligent search', 'bookmark_landing' ); ?></h2>
                    <p class="tab_para"><?php _e( 'Our powerful search feature will help you find saved sites in no time at all. No need to trawl through all of your bookmarks.', 'bookmark_landing' ); ?></p>
                    <div class="tab_button">
                        <button class="button_1 btn">
                            <?php _e( 'More Info', 'bookmark_landing' ); ?>
                        </button>
                    </div>
                </div>
            </div>
            <div class="tab_content clearfix" id="easy_sharing">
                <div class="col span_1_of_2 tab_image">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./asset/images/illustration-features-tab-3.svg" alt="illustration-features-tab-3" class="tab_c_image">
                </div>
                <div class="col span_1_of_2 tab_h_box">
                    <h2 class="tab_heading"><?php _e( 'Share your bookmarks', 'bookmark_landing' ); ?></h2>
                    <p class="tab_para"><?php _e( 'Easily share your bookmarks and collections with others. Create a shareable link that you can send at the click of a button.', 'bookmark_landing' ); ?></p>
                    <div class="tab_button">
                        <button class="button_1 btn">
                            <?php _e( 'More Info', 'bookmark_landing' ); ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== Section_2 ===-->
<section class="section_2 clearfix" id="pricing">
    <div class="container">
        <!-- Heading Box -->
        <div class="h_box section_2_h_box">
            <h2><?php _e( 'Download the extension', 'bookmark_landing' ); ?></h2>
            <p><?php _e( 'We’ve got more browsers in the pipeline. Please do let us know if you’ve got a favourite you’d like us to prioritize.', 'bookmark_landing' ); ?></p>
        </div>
        <!-- Sub-section of Section_2 / Card -->
        <div class="card_section">
            <div class="card_1 card">
                <div class="card_logo">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./asset/images/logo-chrome.svg" alt="Chrome">
                </div>
                <h3 class="card_heading"><?php _e( 'Add to Chrome', 'bookmark_landing' ); ?></h3>
                <p class="card_para"><?php _e( 'Minimum version 62', 'bookmark_landing' ); ?></p>
                <div class="card_button">
                    <button class="button_1 btn">
                        <?php _e( 'Add & Install Extension', 'bookmark_landing' ); ?>
                    </button>
                </div>
            </div>
            <div class="card_2 card">
                <div class="card_logo">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./asset/images/logo-firefox.svg" alt="Firefox">
                </div>
                <h3 class="card_heading"><?php _e( 'Add to Firefox', 'bookmark_landing' ); ?></h3>
                <p class="card_para"><?php _e( 'Minimum version 55', 'bookmark_landing' ); ?></p>
                <div class="card_button">
                    <button class="button_1 btn">
                        <?php _e( 'Add & Install Extension', 'bookmark_landing' ); ?>
                    </button>
                </div>
            </div>
            <div class="card_3 card">
                <div class="card_logo">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./asset/images/logo-opera.svg" alt="Opera">
                </div>
                <h3 class="card_heading"><?php _e( 'Add to Opera', 'bookmark_landing' ); ?></h3>
                <p class="card_para"><?php _e( 'Minimum version 46', 'bookmark_landing' ); ?></p>
                <div class="card_button">
                    <button class="button_1 btn">
                        <?php _e( 'Add & Install Extension', 'bookmark_landing' ); ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== Section_3 ===-->
<section class="section_3">
    <div class="container">
        <!-- Heading Box -->
        <div class="h_box">
            <h2><?php _e( 'Frequently Asked Questions', 'bookmark_landing' ); ?></h2>
            <p><?php _e( 'Here are some of our FAQs. If you have any other questions you’d like answered please feel free to email us.', 'bookmark_landing' ); ?></p>
        </div>
        <!-- Sub-section / Accordion -->
        <div class="accordion_container">
            <button class="accordion accordion_1">
                <?php _e( 'What is Bookmark?', 'bookmark_landing' ); ?>
            </button>
            <div class="panel">
                <p><?php _e( 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa ducimus illum blanditiis saepe fugit neque suscipit autem magnam tempore, omnis architecto voluptas nemo totam aut fuga. Odit optio ducimus repudiandae facere cupiditate dolor unde necessitatibus nemo, odio possimus reiciendis rerum.', 'bookmark_landing' ); ?></p>
            </div>
            <button class="accordion">
                <?php _e( 'How can I request a new browser?', 'bookmark_landing' ); ?>
            </button>
            <div class="panel">
                <p><?php _e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus rem sapiente id animi quibusdam adipisci repudiandae doloremque commodi dolorum eius, nostrum ipsam molestias in corporis hic quasi debitis ducimus. Facere laudantium quos unde ea sequi dolor minus. Deserunt, quas nostrum.', 'bookmark_landing' ); ?></p>
            </div>
            <button class="accordion">
                <?php _e( 'Is there a mobile app?', 'bookmark_landing' ); ?>
            </button>
            <div class="panel">
                <p><?php _e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et voluptas illum dolorem, dicta incidunt necessitatibus laudantium esse reprehenderit nisi asperiores aliquam, perferendis voluptatibus ex odit ipsa amet consequuntur natus aliquid. Fugit laudantium exercitationem voluptatum repellat autem pariatur libero reprehenderit corporis.', 'bookmark_landing' ); ?></p>
            </div>
            <button class="accordion">
                <?php _e( 'What about other Chromium browsers?', 'bookmark_landing' ); ?>
            </button>
            <div class="panel">
                <p><?php _e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni repellendus omnis corrupti aliquid. Expedita culpa sit, perspiciatis placeat sint blanditiis magni veritatis, dolorem modi reiciendis laboriosam harum nulla molestiae rem animi voluptate laudantium! Dicta enim, quae officia nihil possimus ullam.', 'bookmark_landing' ); ?></p>
            </div>
            <div class="section_3_btn">
                <button class="button_1 btn">
                    <?php _e( 'More Info', 'bookmark_landing' ); ?>
                </button>
            </div>
        </div>
    </div>
</section>
<!--=== Section_4 ===-->
<section class="section_4" id="contact">
    <div class="container">
        <p class="section_4_para"><?php _e( '35,000+ ALREADY JOINED', 'bookmark_landing' ); ?></p>
        <div class="h_box h_section_4">
            <h2><?php _e( 'Stay up-to-date with what we\'re doing', 'bookmark_landing' ); ?></h2>
        </div>
        <div class="form_container">
            <form>
                <p> <label for="mail">
                        <input type="text" id="mail" name="mail" placeholder="Enter your email address" required>
                        <span class="error" aria-live="polite"></span>
                    </label> </p>
                <button type="submit" class="form_button btn">
                    <?php _e( 'Contact Us', 'bookmark_landing' ); ?>
                </button>
            </form>
        </div>
    </div>
</section>            

<?php get_footer(); ?>