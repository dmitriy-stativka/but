<div class="section_request_an_invite">
    <div class="container">
        <div class="section_request_an_invite-content">
            <img src="/wp-content/themes/butgetkit_theme/images/btn-send.svg" alt="">
            <div class="section_request_an_invite-text">
                <h2 class="section_request_an_invite-title"><?php the_sub_field('title_of_block');?></h2>
                <p class="section_request_an_invite-desc"><?php the_sub_field('description_of_block');?></p>
                <a class="section_request_an_invite-btn btnBudget" href="<?php the_sub_field('button_link');?>"><?php the_sub_field('button_text');?></a>
            </div>
        </div>
        <a class="section_request_an_invite-button" href="<?php the_sub_field('next_button_link');?>">
            <?php the_sub_field('next_button_text');?>
            <svg width="56" height="24" viewBox="0 0 56 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M46.0147 1.43934L55.5607 10.9853C56.1464 11.5711 56.1464 12.5208 55.5607 13.1066L46.0147 22.6525C45.4289 23.2383 44.4792 23.2383 43.8934 22.6525C43.3076 22.0668 43.3076 21.117 43.8934 20.5312L50.8787 13.5459H1.5C0.671573 13.5459 0 12.8744 0 12.0459C0 11.2175 0.671573 10.5459 1.5 10.5459H50.8787L43.8934 3.56066C43.3076 2.97487 43.3076 2.02513 43.8934 1.43934C44.4792 0.853553 45.4289 0.853553 46.0147 1.43934Z" fill="#181E4B" fill-opacity="0.7"/>
            </svg>
        </a>
    </div>
</div>