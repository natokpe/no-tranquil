<?php
/**
 * Template Name: Homepage
 * 
 * The Homepage
 * 
 * @package natokpe
 * @subpackage Ecjp
 * @since Ecjp 0.0.0
 */

declare(strict_types = 1);

use NatOkpe\Wp\Theme\Tranquil\Theme;

get_header();

?><!-- Header Area -->
<header>
    <?php get_template_part('tpl/parts/navbar'); ?>
</header><?php

echo do_shortcode(
    '[hero_banner slide_image_1="http://ecjpnigeria.local/wp-content/uploads/2024/12/4b156b5a9f83bf95ffe8ce09b9e87ddd8775b73a4de7c92fe459624bc1e0b87f.jpg" slide_title_1="Join Our Journey for Justice and Peace" slide_desc_1="We are dedicated to empowering communities, fostering unity and creating a foundation for lasting peace." slide_image_2="http://ecjpnigeria.local/wp-content/uploads/2024/12/4b156b5a9f83bf95ffe8ce09b9e87ddd8775b73a4de7c92fe459624bc1e0b87f.jpg" slide_title_2="We Transform Lives Through Care and Compassion" slide_desc_2="We extend care and compassion to those affected by HIV/AIDS, offering not only medical support but also a beacon of hope." slide_link_url_1="#" slide_link_text_1="Discover Us" /]'
);

echo do_shortcode(
    '[title_text heading="Who we are" sub_heading="We Are Dedicated '
    . 'Individuals Committed to Positive Transformation." desc="Our identity '
    . 'is rooted in a profound commitment to compassion and an unwavering '
    . 'drive to catalyze positive change. Who we are extends beyond an '
    . 'organisation - we a collective force dedicated to fostering peace, '
    . 'justice and holistic development in Benue State." '
    . 'image="http://ecjpnigeria.local/wp-content/uploads/2024/12/4b15'
    . '6b5a9f83bf95ffe8ce09b9e87ddd8775b73a4de7c92fe459624bc1e0b87f.jpg" '
    . 'margin="1" theme="white" align="left" /]'
);

echo do_shortcode(
    '[box_list title_1="Our Vision" text_1="Sustained Peace and security in'
    . 'Nigeria with the participation of all stakeholders for holistic '
    . 'development." title_2="Our Mission" text_2="To promote peace, Security '
    . 'and Justice especially among the neglected rural urban communities in '
    . 'order to enhance democratic principle and holistic development." '
    . 'image="http://ecjpnigeria.local/wp-content/uploads/2024/12/4b156b'
    . '5a9f83bf95ffe8ce09b9e87ddd8775b73a4de7c92fe459624bc1e0b87f.jpg" margin'
    . '="1" style="alt" icon_1="fas fa-binoculars" icon_2="fas fa-bullseye" /]'
);

echo do_shortcode(
    '[title_list heading="We Are Focused" sub_heading="We have set forth five'
    . ' fundamental objectives to guide our every effort in pursuit of our '
    . 'mission." image="http://ecjpnigeria.local/wp-content/uploads/2024/12/'
    . '4b156b5a9f83bf95ffe8ce09b9e87ddd8775b73a4de7c92fe459624bc1e0b87f.jpg" '
    . 'item_1="Promote Peaceful Co-existence" item_desc_1="We are committed to promoting and encouraging peaceful co-existence among communities and different ethnic groups in Nigeria." item_2="Foster Democracy and Accountability" item_desc_2="We strive to promote the understanding and practice of democracy and encourage participation and accountability in governance." item_3="Enhance Living Conditions" item_desc_3="We aim to sensitize people to work together in community projects to improve living conditions." item_4="Combat HIV/AIDS and Provide Support" item_desc_4="We are committed to contributing to the reduction and prevention of the spread of HIV/AIDS in Benue State and provide care and support to those infected and affected." item_5="Fostering Food Security" item_desc_5="We empower households through economic strengthening and fostering food security through enhanced cassava farming and agricultural extension." margin="1" theme="tint" /]'
);

echo do_shortcode(
    '[title_text heading="We Are Focused" sub_heading="We are Committed to '
    . 'Fostering a Culture of Integrity and Excellence" desc="From programs '
    . 'to progress, we have a resolute dedication to building a more just, '
    . 'peaceful and sustainable society. Our focus extends to comprehensive '
    . 'programs addressing aspects of community well-being, including conflict'
    . ' resolution, community development, good governance, health education/'
    . 'support and sustainable agriculture." '
    . 'image="http://ecjpnigeria.local/wp-content/uploads/2024/12/4b15'
    . '6b5a9f83bf95ffe8ce09b9e87ddd8775b73a4de7c92fe459624bc1e0b87f.jpg" '
    . 'margin="1" theme="dark" align="left" /]'
);

// By concentrating our efforts on these focal points, we aim to create a holistic impact that resonates with the diverse needs of the community we serve.

get_template_part('tpl/parts/home-events');
get_template_part('tpl/parts/home-news');

echo do_shortcode(
    '[cta_banner title="Be a Force for Positive Change" desc="Your '
    . 'involvement matters, whether it is through donations, volunteering your'
    . ' skills, staying informed via our newsletter, or spreading the word. '
    . 'can build a more peaceful and just Nigeria." '
    . 'image="http://ecjpnigeria.local/wp-content/uploads/2024/12/4b15'
    . '6b5a9f83bf95ffe8ce09b9e87ddd8775b73a4de7c92fe459624bc1e0b87f.jpg" '
    . 'link_text="Get Involved" image_fixed="0" '
    . 'link_url="' . home_url('/contact-us') . '" /]'
);

// get_template_part('tpl/parts/home-newsletter');
get_template_part('tpl/parts/footer');

get_footer();
