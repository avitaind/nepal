<?php

function bytesToHuman($bytes, $precision = 2)
{
    $units = [' bytes', ' KB', ' MB', ' GB', ' TB'];

    for ($i = 0; $bytes > 1024; $i++) {
        $bytes /= 1024;
    }

    return round($bytes, $precision) . $units[$i];
}

function enabled_countries() {

     return ['np'];
     
}

function supported_language( $country ) {

    switch ( $country ) {
        case 'np':
            return ['en'];


        default:
            return ['en'];
    }

}

function facebookLinkForCountry( $country ) {

    switch ( $country ) {
        default:    return "https://www.facebook.com/AVITA-Nepal-106156631660214";
    }
}

function instagramLinkForCountry( $country ) {

    switch ( $country ) {
        default:    return "https://www.instagram.com/avitanepal/";
    }
}

function twitterLinkForCountry( $country ) {

    switch ( $country ) {
        case 'np':  return '#';
        default:    return "";
    }
}

function whatsappLinkForCountry( $country ) {

    switch ( $country ) {
            //  default:    return "https://api.whatsapp.com/send?phone=#";
            default:    return "#";

    }
}


function youtubeLinkForCountry( $country ) {

    switch ( $country ) {
             default:    return "https://www.youtube.com/channel/UCBxwd2BXZ0zHrU-l9RkDOwg";
    }
}


function linkedinLinkForCountry( $country ) {

    switch ( $country ) {
        case 'np':  return '#';
             default:    return "";
    }
}

function metaKeywordByCountryAndLanguage( $country, $language ) {

    // Default
    $keyword = "AVITA LIBER 12.5\", Core i5 Intel CPU, Windows Hello, fingerprint, USB 3.0 ports, USB Type-C, USB-C";

    switch ( $country ) {
        case 'np':
            if ( $language == 'en') {
                $keyword = "AVITA LIBER 12.5\", Core i5 Intel CPU, Windows Hello, fingerprint, USB 3.0 ports, USB Type-C, USB-C";
            } else {
                $keyword = "AVITA LIBER 12.5\", Core i5 Intel CPU, Windows Hello, fingerprint, USB 3.0 ports, USB Type-C, USB-C";
            }
            break;

    }

    return $keyword;
}

function metaDescriptionByPage( $page ) {

    // Default
    $description = "AVITA is a US based smart technology firm which prides itself on its elegant and highly efficient catalog of gadgets which transcend various categories. These gadgets not only make your work life balance tenable but augment your personality as well.";

    if ( $page == 'home') {
                $description = "AVITA is a US based smart technology firm which prides itself on its elegant and highly efficient catalog of gadgets which transcend various categories. These gadgets not only make your work life balance tenable but augment your personality as well.";
            } 
            else if( $page == 'aboutus') {
                 $description = "At AVITA we believe in the wonder and power of the individual. We make premium technology products that not only fit your lifestyle but are representations of you.";
            }
            else if( $page == 'products') {
                $description = "LIBER is a new journey of self-discovery through art and humanity in technology. Where the form of a laptop remains, it on top features chic and interchangeable form factors to reveal your true colors.";
            }
           else if( $page == 'contactus') {
                $description = "AVITA Customer Support. We are always available in case you need help. For queries on the product, warranty related inquiries or any form of customer support, please contact us on our toll-free customer support number or write to on our support email for general sales enquiry.";
            }
            else if( $page == 'terms') {
                $description = "Nexstgo Company Limited and our affiliates (“Nexstgo,” “we,” “us,” “our”) know how important privacy is to our customers, and we strive to be clear about how we collect, use, disclose, transfer and store your information. This Privacy Policy provides an overview of our information practices. The Privacy Policy applies to Nexstgo devices, websites or online applications that refer to or link to the Privacy Policy (collectively, our “Services”).";
                }
            else if( $page == 'repairs') {
                $description = "During the warranty period, the free-of-charge repair service for official Products of Nexstgo Company Limited (“NEXSTGO” or “Repair Service Centre”) shall be offered and subjected to these Repair Service Terms and Conditions and Limited Warranty Terms and Conditions.";
            }
            else if( $page == 'privacy') {
                $description = "While this Privacy Policy applies to all our Services, we also have provided certain specific privacy supplements that contain additional information about our practices in connection with particular Services. These supplements apply to your use of the Services they cover. Additional consent will be obtained for certain data processing activities.";
            }
            else if( $page == 'blogs') {
                $description = "LIBER is a new journey of self-discovery through art and humanity in technology.  Where the form of a laptop remains, it on top features chic and interchangeable form factors to reveal your true colors.";
            }
            else if( $page == 'events') {
                $description = "LIBER is a new journey of self-discovery through art and humanity in technology.  Where the form of a laptop remains, it on top features chic and interchangeable form factors to reveal your true colors.";
            }
            else if( $page == 'wheretobuy') {
                $description = "LIBER is a new journey of self-discovery through art and humanity in technology.  Where the form of a laptop remains, it on top features chic and interchangeable form factors to reveal your true colors.";
            }
            else if( $page == 'support') {
                $description = "Thanks for the valuable suggestion from our customers. You can purchase the newly launched “Warranty Extension Service” online now. You may choose to extend 1 or 2 years to enjoy our worry-free warranty service.";
            }
            else if( $page == 'sales') {
                $description = "Dear AVITA fans, Thank you for your support for AVITA. Please fill in the form below for any sales enquiries. Our tech support team replies to all your sales enquiry promptly. All fields marked with an asterisk (*) are required to register your sales enquiry.";
            }
            else if( $page == 'global') {
                $description = "LIBER is a new journey of self-discovery through art and humanity in technology.  Where the form of a laptop remains, it on top features chic and interchangeable form factors to reveal your true colors.";
            }
            else{
                
                $description = "AVITA is a US based smart technology firm which prides itself on its elegant and highly efficient catalog of gadgets which transcend various categories. These gadgets not only make your work life balance tenable but augment your personality as well.";

            }
            return $description;

}


function googleAnalyticCode( $country ) {

    switch ( $country ) {

        case 'np' : return "UA-133345635-5";

    }
    return 'UA-133345635-5'; 
}
function GoogleMap( $key ) {

    return 'AIzaSyB3wqCQ7o8SIe4vkDPqHTbCWrmelQKPwFQ';    // Default

}
function BaiduMap( $key ) {

    return '123';    // Default

}
