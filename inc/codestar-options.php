<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = 'my_framework';

//
// Create options
//
CSF::createOptions( $prefix, array(
  // framework title
  'framework_title'         => 'Sumon CV <small>by <a href="https://mdsumonmia.com/">Sumon</a></small>',
  'framework_class'         => '',

  'menu_title' => 'Theme Options',
  'menu_slug'  => 'my-framework',
) );

//
// Home Section
//

CSF::createSection( $prefix, array(
  'id'     => 'home',
  'title'  => 'Home',
  'icon'   => 'fas fa-home',
));

//
// Home bg effect sub section
//
CSF::createSection( $prefix, array(
  'parent'     => 'home',
  'title'  => 'Home Effects',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array(
      'id'         => 'home_effect',
      'type'       => 'radio',
      'title'      => 'Select an Effect',
      'subtitle'   => 'Select an Effect for Your Home Section',
      'options'    => array(
        'none'     => 'None',
        'ripple'   => 'Water Ripples',
        'particles' => 'Particles',
      ),
      'default'    => 'none'
    ),
  ),
));

//
// Home bg sub section
//
CSF::createSection( $prefix, array(
  'parent'     => 'home',
  'title'  => 'Background',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array (
      'id' => 'home_bg',
      'type' => 'background',
      'title' => 'Home Background',
      'output' => '.home-bg',
      'background_gradient' => false,
      'default' => array(
        'background-image'              => 'https://i.ibb.co/RcMdQWN/md-sumon-mia-office-desk.jpg',
        'background-size'               => 'cover',
        'background-position'           => 'center center',
        'background-repeat'             => 'no-repeat',
        'background-color'              => 'rgba(2,0,0,0.53)',
        'background-gradient-color'     => 'rgba(2,0,0,0.53)',
      ),
    ),
    array(
      'id'          => 'home_bg_color',
      'type'        => 'color',
      'title'       => 'Home Background Color',
      'output'      => '.start-page .sub-page-inner .mask',
      'output_mode' => 'background-color',
      'default'     => 'rgba(0, 0, 0, 0.5)',
    ),
  ),
));

//
// Home Buttons sub section
//
CSF::createSection( $prefix, array(
  'parent'     => 'home',
  'title'  => 'Buttons',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array (
      'id' => 'button_1',
      'type' => 'text',
      'title' => 'Button One',
      'default' => 'Contact Me',
    ),
    array (
      'id' => 'button_1_url',
      'type' => 'text',
      'title' => 'Button One Url',
      'default' => 'your-website-url#contact',
    ),
    array (
      'id' => 'button_1_icon',
      'type' => 'icon',
      'title' => 'Button One Icon',
      'default' => 'lnr lnr-envelope',
    ),
    array (
      'id' => 'button_2',
      'type' => 'text',
      'title' => 'Button Two',
      'default' => 'Hire Me',
    ),
    array (
      'id' => 'button_2_url',
      'type' => 'text',
      'title' => 'Button Two Url',
      'default' => 'https://www.fiverr.com/mdsumonmiaup',
    ),
    array (
      'id' => 'button_2_icon',
      'type' => 'icon',
      'title' => 'Button Two Icon',
      'default' => 'lnr lnr-briefcase',
    ),
  ),
));

//
// About Section
//

CSF::createSection( $prefix, array(
  'id'     => 'about_section',
  'title'  => 'About Yourself',
  'icon'   => 'fas fa-user-tie',
));

//
// About description sub section
//
CSF::createSection( $prefix, array(
  'parent'     => 'about_section',
  'title'  => 'About Heading',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array (
      'id' => 'about_title',
      'type' => 'text',
      'title' => 'About Title',
      'default' => 'About Me',
    ),
    array(
      'id'     => 'about_subtitle',
      'type'   => 'text',
      'title'  => 'About Subtitle',
      'default' => 'introduce my self',
    ),
  ),
));

//
// profile sub section
//
CSF::createSection( $prefix, array(
  'parent'     => 'about_section',
  'title'  => 'Profile',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array (
      'id' => 'your_name',
      'type' => 'text',
      'title' => 'Your Name',
      'default' => 'Md Sumon Mia',
    ),
    array (
      'id' => 'short_bio',
      'type' => 'textarea',
      'title' => 'Your Bio',
      'default' => "I'm working as a Professional Web Developer since 2017. Worked in more than 100 live projects and also with more than 50 different clients! I'm a person who is positive in every aspect of life.",
    ),
    array(
      'id'     => 'profile_pic',
      'type'   => 'media',
      'title'  => 'Profile Picture',
      'library' => 'image',
      'default' => 'https://i.ibb.co/dm7p0cq/25.jpg',
    ),
    array(
      'id'     => 'works',
      'type'   => 'repeater',
      'title'  => 'Work As',
      'fields' => array(
        array(
          'id'    => 'work',
          'type'  => 'text',
          'title' => 'Works',
        ),
      ),
      'default' => array(
        array(
          'work' => 'Web Designer',
        ),
        array(
          'work' => 'Web Developer',
        ),
        array(
          'work' => 'Wordpress Expert',
        ),
      ),
    ),
  ),
));

//
// About description sub section
//
CSF::createSection( $prefix, array(
  'parent'     => 'about_section',
  'title'  => 'Details Information',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array(
      'id'     => 'about_sec_pic',
      'type'   => 'media',
      'title'  => 'About Section Picture',
      'library' => 'image',
      'default' => 'https://i.ibb.co/dm7p0cq/25.jpg',
    ),
    array(
      'id'     => 'about_desc',
      'type'   => 'repeater',
      'title'  => 'About Description',
      'subtitle' => 'Add text for about description',
      'fields' => array(
        array(
          'id'    => 'description',
          'type'  => 'textarea',
        ),
      ),
      'default' => array(
        array(
          'description' => "I'm working as a Professional Web Developer since 2017. Worked in more than 100 live projects and also with more than 50 different clients! I'm a person who is positive in every aspect of life. I'm simple & ordinary yet quite different from others. I always love to do code...",
        ),
        array(
          'description' => "For every single project that I have done my focus has been on creating the best user Experience Possible.",
        ),
      ),
    ),
    array(
      'id'     => 'about_achive',
      'type'   => 'group',
      'title'  => 'About Achivements',
      'fields' => array(
        array(
          'id'     => 'achive_title',
          'type'   => 'text',
          'title'  => 'Achive Title',
        ),
        array(
          'id'     => 'achive_subtitle',
          'type'   => 'text',
          'title'  => 'Achive Subtitle',
        ),
        array(
          'id'    => 'achive_icon',
          'type'  => 'icon',
          'title' => 'Achive Icon',
        ),
      ),
      'default' => array(
        array(
          'achive_icon' => 'lnr lnr-briefcase',
          'achive_title' => '3 Years+ Job',
          'achive_subtitle' => 'Experience',
        ),
        array(
          'achive_icon' => 'lnr lnr-layers',
          'achive_title' => '100+ Projects',
          'achive_subtitle' => 'Completed',
        ),
        array(
          'achive_icon' => 'lnr lnr-coffee-cup',
          'achive_title' => '50+ Meetings',
          'achive_subtitle' => 'Successful',
        ),
      )
    ),
  ),
));

//
// My Services sub section
//
CSF::createSection( $prefix, array(
  'parent'     => 'about_section',
  'title'  => 'My Services',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array (
      'id' => 'service_heading',
      'type' => 'text',
      'title' => 'Service Heading',
      'default' => 'My Services',
    ),
    array (
      'id' => 'service_subheading',
      'type' => 'text',
      'title' => 'Service Sub-heading',
      'default' => 'What Actually I Do',
    ),
    array(
      'id'     => 'services',
      'type'   => 'group',
      'title'  => 'My Services',
      'fields' => array(
        array(
          'id'     => 'service_name',
          'type'   => 'text',
          'title'  => 'Service Name',
        ),
        array(
          'id'     => 'service_desc',
          'type'   => 'text',
          'title'  => 'Service Description',
        ),
        array(
          'id'    => 'service_icon',
          'type'  => 'icon',
          'title' => 'Services Icon',
        ),
      ),
      'default' => array(
        array(
          'service_name' => 'Web Design',
          'service_desc' => "When you're ready to build a website. If you are not familiar with HTML programming language and Web design applications.",
          'service_icon' => 'lnr lnr-laptop-phone',
        ),
        array(
          'service_name' => 'Web Development',
          'service_desc' => "Let’s our professionals develop your dream site. Our developers make our client’s money worthy by offering something better than their competitors have.",
          'service_icon' => 'lnr lnr-code',
        ),
        array(
          'service_name' => 'Responsive Design',
          'service_desc' => "Almost every new client these days wants a mobile version of their website. It’s practically essential after all screen resolutions must be compatible.",
          'service_icon' => 'lnr lnr-smartphone',
        ),
        array(
          'service_name' => 'Wordpress Theme Development',
          'service_desc' => "I develop various kind of wordpress theme from html and psd file. You can make your any kind of wordpress site from me by my custom theme.",
          'service_icon' => 'fab fa-wordpress-simple',
        ),
      )
    ),
  ),
));

//
// Hire Reason sub section
//
CSF::createSection( $prefix, array(
  'parent'     => 'about_section',
  'title'  => 'Hire Reason',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array (
      'id' => 'hire_heading',
      'type' => 'text',
      'title' => 'Hire Section Heading',
      'default' => 'Why You Hire Me ?',
    ),
    array (
      'id' => 'hire_reason',
      'type' => 'text',
      'title' => 'Hire Reason',
      'default' => 'I Am The Best Front End Expert in the marketplace',
    ),
    array (
      'id' => 'video_link',
      'type' => 'text',
      'title' => 'Video URL Here',
      'default' => 'https://youtu.be/OqPJiVw2Qgg',
    ),
  ),
));

//
// Achivements sub section
//
CSF::createSection( $prefix, array(
  'parent'     => 'about_section',
  'title'  => 'My Achivements',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array (
      'id' => 'achivement_heading',
      'type' => 'text',
      'title' => 'Achivement Heading',
      'default' => 'Achivements',
    ),
    array (
      'id' => 'achivement_subheading',
      'type' => 'text',
      'title' => 'Achivement Sub-heading',
      'default' => 'There are some of my ',
    ),
    array(
      'id'     => 'achivements',
      'type'   => 'group',
      'title'  => 'My Achivements',
      'fields' => array(
        array(
          'id'     => 'achivement_name',
          'type'   => 'text',
          'title'  => 'Service Name',
        ),
        array(
          'id'     => 'achivement_number',
          'type'   => 'number',
          'title'  => 'Amount',
        ),
      ),
      'default' => array(
        array(
          'achivement_name' => 'Happy Clients',
          'achivement_number' => 50,
        ),
        array(
          'achivement_name' => 'Experiences Years',
          'achivement_number' => 3,
        ),
        array(
          'achivement_name' => 'Awards Won',
          'achivement_number' => 5,
        ),
        array(
          'achivement_name' => 'Meetings',
          'achivement_number' => 60,
        ),
      )
    ),
  ),
));

//
// Clients sub section
//
CSF::createSection( $prefix, array(
  'parent'     => 'about_section',
  'title'  => 'Client Reviews',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array (
      'id' => 'client_heading',
      'type' => 'text',
      'title' => 'Client Reviews',
      'default' => 'Reviews',
    ),
    array (
      'id' => 'client_subheading',
      'type' => 'text',
      'title' => 'Client Sub heading',
      'default' => 'Here is my Client',
    ),
    array(
      'id'     => 'clients',
      'type'   => 'group',
      'title'  => 'Client Reviews',
      'fields' => array(
        array(
          'id'     => 'client_name',
          'type'   => 'text',
          'title'  => 'Client Name',
        ),
        array(
          'id'     => 'client_comment',
          'type'   => 'textarea',
          'title'  => 'Comment',
        ),
        array(
          'id'      => 'client_image',
          'type'    => 'media',
          'title'   => 'Client Photo',
          'library' => 'image',
        ),
        array(
          'id'         => 'client_review',
          'type'       => 'radio',
          'title'      => 'Select Reviews',
          'options'    => array(
            'option-1' => '1 Star',
            'option-2' => '2 Stars',
            'option-3' => '3 Stars',
            'option-4' => '4 Stars',
            'option-5' => '5 Stars',
          ),
        ),
      ),
      'default' => array(
        array(
          'client_name' => 'Rose Marry',
          'client_comment' => "This is one of the great experience to work with him. He always completed the projects before the deadline. So I recommend him. His work is always awesome. I have worked with him for a long time. I love this guy for his awesome work.",
          'client_image' => '',
          'client_review' => 'option-5',
        ),
        array(
          'client_name' => 'Justin Bobe',
          'client_comment' => "Wow what great experience, I love it! It's exactly what I've been looking for. Sumon's group was the best investment I ever made. I don't know if I would have ever made it without her guidance and support!",
          'client_image' => '',
          'client_review' => 'option-5',
        ),
        array(
          'client_name' => 'Goerge Bill',
          'client_comment' => "I like this group more and more each day. It makes my life a lot easier. It's really wonderful to be able to get support from like minded entrepreneurs. And Sumon is always available to advise us. Thank you so much!",
          'client_image' => '',
          'client_review' => 'option-5',
        ),
      )
    ),
  ),
));

//
// Resume Section
//

CSF::createSection( $prefix, array(
  'id'     => 'resume',
  'title'  => 'Resume',
  'icon'   => 'fas fa-award',
));

//
// Resume Heading sub section
//
CSF::createSection( $prefix, array(
  'parent'     => 'resume',
  'title'  => 'Resume Heading',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array (
      'id' => 'resume_title',
      'type' => 'text',
      'title' => 'Resume Title',
      'default' => 'Resume',
    ),
    array(
      'id'     => 'resume_subtitle',
      'type'   => 'text',
      'title'  => 'Resume Subtitle',
      'default' => 'introduce my self',
    ),
  ),
));

//
// Work History sub section
//
CSF::createSection( $prefix, array(
  'parent'     => 'resume',
  'title'  => 'Work History',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array (
      'id' => 'work_history_title',
      'type' => 'text',
      'title' => 'Work History Title',
      'default' => 'Work History',
    ),
    array(
      'id'     => 'work_history_subtitle',
      'type'   => 'text',
      'title'  => 'Work History Subtitle',
      'default' => 'My Professional',
    ),
    array(
      'id'     => 'download_resume_btn',
      'type'   => 'text',
      'title'  => 'Download Resume Button',
      'default' => 'Download Resume',
    ),
    array(
      'id'    => 'cv_file',
      'type'  => 'upload',
      'title' => 'Upload Your CV Here',
    ),
    array(
      'id'     => 'resume_works',
      'type'   => 'group',
      'title'  => 'Work History',
      'fields' => array(
        array(
          'id'     => 'position',
          'type'   => 'text',
          'title'  => 'Working Position',
        ),
        array(
          'id'       => 'work_start_time',
          'type'     => 'text',
          'title'    => 'Work Start Time',
          'placeholder'    => 'Dec 2017 type like this',
        ),
        array(
          'id'       => 'work_end_time',
          'type'     => 'Text',
          'title'    => 'Work End Time',
          'placeholder'    => 'Till Now type like this',
        ),
        array(
          'id'      => 'work_company_logo',
          'type'    => 'media',
          'title'   => 'Company Logo',
          'library' => 'image',
        ),
        array(
          'id'      => 'work_Desc',
          'type'    => 'textarea',
          'title'   => 'Work Description',
        ),
      ),
      'default' => array(
        array(
          'position' => 'Web Developer',
          'work_start_time' => 'Dec 2017',
          'work_end_time' => 'Till Now',
          'work_company_logo' => '',
          'work_Desc' => 'Currently I am working as the Web Developer at Upwork from 2017. I always love to do code. And this havit make me a Web Developer. Generally I work as web design, Development, speed optimization, website bug fixing etc...',
        ),
        array(
          'position' => 'Front-End Developer',
          'work_start_time' => 'Dec 2017',
          'work_end_time' => 'Till Now',
          'work_company_logo' => '',
          'work_Desc' => 'Currently I am working as the Web Developer at Upwork from 2017. I always love to do code. And this havit make me a Web Developer. Generally I work as web design, Development, speed optimization, website bug fixing etc...',
        ),
        array(
          'position' => 'Front-End Developer',
          'work_start_time' => 'Dec 2017',
          'work_end_time' => 'Till Now',
          'work_company_logo' => '',
          'work_Desc' => 'Currently I am working as the Web Developer at Upwork from 2017. I always love to do code. And this havit make me a Web Developer. Generally I work as web design, Development, speed optimization, website bug fixing etc...',
        ),
      )
    ),
  ),
));

//
// My Skill sub section
//
CSF::createSection( $prefix, array(
  'parent'     => 'resume',
  'title'  => 'My Skill',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array (
      'id' => 'skill_title',
      'type' => 'text',
      'title' => 'Skill Title',
      'default' => 'Work Skills',
    ),
    array(
      'id'     => 'skill_subtitle',
      'type'   => 'text',
      'title'  => 'Skill Subtitle',
      'default' => 'My Professional',
    ),
    array(
      'id'     => 'skills',
      'type'   => 'group',
      'title'  => 'My Skills',
      'fields' => array(
        array(
          'id'     => 'skill_name',
          'type'   => 'text',
          'title'  => 'Skill Name',
        ),
        array(
          'id'       => 'skill_percentage',
          'type'     => 'number',
          'title'    => 'Skill Percentage',
          'placeholder'    => 'No Need to add % sign. Just type the number',
        ),
      ),
      'default' => array(
        array(
          'skill_name' => 'HTML5',
          'skill_percentage' => 100,
        ),
        array(
          'skill_name' => 'PSD to HTML5',
          'skill_percentage' => 100,
        ),
        array(
          'skill_name' => 'CSS3',
          'skill_percentage' => 100,
        ),
        array(
          'skill_name' => 'WordPress',
          'skill_percentage' => 80,
        ),
        array(
          'skill_name' => 'Bootstrap',
          'skill_percentage' => 100,
        ),
        array(
          'skill_name' => 'PHP & MySQL',
          'skill_percentage' => 70,
        ),
        array(
          'skill_name' => 'Javascript',
          'skill_percentage' => 80,
        ),
        array(
          'skill_name' => 'Time Management',
          'skill_percentage' => 100,
        ),
        array(
          'skill_name' => 'jQuery',
          'skill_percentage' => 75,
        ),
        array(
          'skill_name' => 'Team Work',
          'skill_percentage' => 100,
        ),
        array(
          'skill_name' => 'Responsive Design',
          'skill_percentage' => 100,
        ),
        array(
          'skill_name' => 'Adobe Photoshop',
          'skill_percentage' => 70,
        ),
        array(
          'skill_name' => 'Adobe Illustrator',
          'skill_percentage' => 40,
        ),
        array(
          'skill_name' => 'Adobe XD',
          'skill_percentage' => 40,
        ),
      )
    ),
  ),
));

//
// Education History sub section
//
CSF::createSection( $prefix, array(
  'parent'     => 'resume',
  'title'  => 'Education History',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array (
      'id' => 'education_history_title',
      'type' => 'text',
      'title' => 'Education History Title',
      'default' => 'Background History',
    ),
    array(
      'id'     => 'education_history_subtitle',
      'type'   => 'text',
      'title'  => 'Education History Subtitle',
      'default' => 'My Education',
    ),
    array(
      'id'     => 'educations',
      'type'   => 'group',
      'title'  => 'Education History',
      'fields' => array(
        array(
          'id'     => 'degree',
          'type'   => 'text',
          'title'  => 'Degree Name',
        ),
        array(
          'id'       => 'passing_year',
          'type'     => 'text',
          'title'    => 'Passing Year',
          'placeholder' => 'If complete type like "2015" If continue 2017 - Till Now',
        ),
        array(
          'id'      => 'institution_logo',
          'type'    => 'media',
          'title'   => 'Institution Logo',
          'library' => 'image',
        ),
        array(
          'id'      => 'degree_details',
          'type'    => 'textarea',
          'title'   => 'Degree Details',
          'subtitle'   => 'Institution Name and full description',
        ),
      ),
      'default' => array(
        array(
          'degree' => 'SSC',
          'passing_year' => '2015',
          'institution_logo' => '',
          'degree_details' => 'I have completed a 5-years Secondary School Certificate (SSC) from Gohalkandi High School, Tarakanda, Mymensingh.',
        ),
        array(
          'degree' => 'HSC',
          'passing_year' => '2017',
          'institution_logo' => '',
          'degree_details' => 'I have completed a 2-years Higher Secondery School Certificate from Haji Kashem Ali College, Mymensingh.',
        ),
        array(
          'degree' => "BA Honour's",
          'passing_year' => '2017 - Till Now',
          'institution_logo' => '',
          'degree_details' => 'Now I am studying at English Literature in National University, Ananda Mohan University College, Mymensingh.',
        ),
      )
    ),
  ),
));

//
// Portfolio Section
//

CSF::createSection( $prefix, array(
  'id'     => 'portfolio',
  'title'  => 'Portfolio',
  'icon'   => 'fas fa-business-time',
));

//
// Portfolio Heading sub section
//
CSF::createSection( $prefix, array(
  'parent'     => 'portfolio',
  'title'  => 'Portfolio Heading',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array (
      'id' => 'portfolio_title',
      'type' => 'text',
      'title' => 'Portfolio Title',
      'default' => 'Portfolio',
    ),
    array(
      'id'     => 'portfolio_subtitle',
      'type'   => 'text',
      'title'  => 'Portfolio Subtitle',
      'default' => 'Samples of some of my work from the past year.',
    ),
  ),
));

//
// Blog Section
//

CSF::createSection( $prefix, array(
  'id'     => 'blog',
  'title'  => 'Blog',
  'icon'   => 'fas fa-book-reader',
));

//
// Blog Heading sub section
//
CSF::createSection( $prefix, array(
  'parent'     => 'blog',
  'title'  => 'Blog Heading',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array (
      'id' => 'blog_title',
      'type' => 'text',
      'title' => 'Blog Title',
      'default' => 'Blog',
    ),
    array(
      'id'     => 'blog_subtitle',
      'type'   => 'text',
      'title'  => 'Blog Subtitle',
      'default' => 'I share my news and blog.',
    ),
  ),
));


//
// Contact Section
//
CSF::createSection( $prefix, array(
  'id'     => 'contact',
  'title'  => 'Contact',
  'icon'   => 'fas fa-paper-plane',
));

//
// Contact Heading sub section
//
CSF::createSection( $prefix, array(
  'parent'     => 'contact',
  'title'  => 'Contact Heading',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array (
      'id' => 'contact_title',
      'type' => 'text',
      'title' => 'Contact Title',
      'default' => 'Contact',
    ),
    array(
      'id'     => 'contact_subtitle',
      'type'   => 'text',
      'title'  => 'Contact Subtitle',
      'default' => 'NEED SOME HELP ?',
    ),
  ),
));

//
// Contact Information sub section
//
CSF::createSection( $prefix, array(
  'parent'     => 'contact',
  'title'  => 'Contact Information',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array(
      'id'     => 'con_info_title',
      'type'   => 'text',
      'title'  => 'Find Me Title',
      'default' => 'Find me here',
    ),
    array(
      'id'     => 'con_info_subtitle',
      'type'   => 'text',
      'title'  => 'Find Me Subtitle',
      'default' => 'Contact Information',
    ),
    array (
      'id' => 'your_email',
      'type' => 'text',
      'title' => 'Your Email',
      'default' => 'mdsumonmiaup@gmail.com',
    ),
    array(
      'id'     => 'phone_num',
      'type'   => 'text',
      'title'  => 'Your Phone Number',
      'default' => '+8801798001344',
    ),
    array(
      'id'     => 'contact_side_img',
      'type'   => 'media',
      'title'  => 'Add an Image',
      'subtitle'  => 'This image will be displayed beside the contact box..',
      'library' => 'image',
    ),
    array(
      'id'          => 'your_address',
      'type'        => 'map',
      'title'       => 'Your Address',
      'subtitle'       => 'Please write & pick the address correctly',
      'default'     => array(
        'address'   => 'Tarakanda, Mymensingh, Bangladesh',
        'latitude'  => '24.863088072012367',
        'longitude' => '90.42581968793132',
        'zoom'      => '14',
      )
    ),
  ),
));

//
// Contact Form sub section
//
CSF::createSection( $prefix, array(
  'parent'     => 'contact',
  'title'  => 'Contact Form',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array (
      'id' => 'contact_form',
      'type' => 'text',
      'title' => 'Contact Form Id',
      'placeholder' => 'Paste your contact form 7 id here',
      'default' => 'Please import demo data for the contact form here. Or create a contact form in "contact form 7" plugin and place the id here.....',
    ),
  ),
));


//
// Contact Heading sub section
//
CSF::createSection( $prefix, array(
  'parent'     => 'contact',
  'title'  => 'Social Links',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array(
      'id'     => 'follow_text',
      'type'   => 'text',
      'title'  => 'Follow me text',
      'default'  => 'Follow Me',
    ),
    array(
      'id'     => 'social_links',
      'type'   => 'group',
      'title'  => 'Social Links',
      'fields' => array(
        array(
          'id'     => 'social_name',
          'type'   => 'text',
          'title'  => 'Social Name',
          'placeholder'  => 'This is optional',
        ),
        array(
          'id'     => 'social_url',
          'type'   => 'text',
          'title'  => 'Social URL',
          'placeholder'  => 'Place your social media link here...',
        ),
        array(
          'id'    => 'social_icon',
          'type'  => 'icon',
          'title' => 'Choose Icon',
        ),
      ),
      'default' => array(
        array(
          'social_name' => 'Facebook',
          'social_url' => 'https://web.facebook.com/D.B.Sumonr/',
          'social_icon' => 'fab fa-facebook-f',
        ),
        array(
          'social_name' => 'Twitter',
          'social_url' => 'https://twitter.com/MdSumonMiaa',
          'social_icon' => 'fab fa-twitter',
        ),
        array(
          'social_name' => 'Linkedin',
          'social_url' => 'https://www.linkedin.com/in/mdsumonmiaup/',
          'social_icon' => 'fab fa-linkedin-in',
        ),
        array(
          'social_name' => 'Instagram',
          'social_url' => 'https://www.instagram.com/mdsumonmiaup/',
          'social_icon' => 'fab fa-instagram',
        ),
        array(
          'social_name' => 'Behance',
          'social_url' => 'https://www.behance.net/mdsumonmiaup/',
          'social_icon' => 'fab fa-behance',
        ),
        array(
          'social_name' => 'Github',
          'social_url' => 'https://github.com/SamrtDesign',
          'social_icon' => 'fab fa-github',
        ),
        array(
          'social_name' => 'Youtube',
          'social_url' => 'https://www.youtube.com/channel/UCsqL-uUHYYZMf3gUbqxMCdA',
          'social_icon' => 'fab fa-youtube',
        ),
      )
    ),
  ),
));

//
// Others Section
//

CSF::createSection( $prefix, array(
  'id'     => 'others',
  'title'  => 'Others',
  'icon'   => 'lnr lnr-book',
));

//
// Resume Heading sub section
//
CSF::createSection( $prefix, array(
  'parent'     => 'others',
  'title'  => 'Copyright',
  'icon'   => 'fas fa-arrow-right',
  'fields' => array(
    array(
      'id'      => 'preloader',
      'type'    => 'switcher',
      'title'   => 'Preloader',
      'label'   => 'Do you want activate Preloader ?',
      'default' => false
    ),
    array (
      'id' => 'copyright_text',
      'type' => 'text',
      'title' => 'Copyright Text',
      'default' => 'All rights reserved <a href="https://mdsumonmia.com/">Sumon</a>',
    ),
  ),
));
