<?php

/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package start-theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <?php echo get_field('insert_scripts_just_after_head', 'options'); ?>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php 
    $iconSet = get_option('site_icon', false);
    if (false == $iconSet) { ?>
        <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png">
    <?php } ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@graph": [{
                    "@type": "Organization",
                    "additionalType": "Men's Hair Salon and Men's Haircuts",
                    "name": "Men's Ultimate Grooming",
                    "image": "https://mughaircuts.com/wp-content/uploads/2016/01/rsz_mug_logo_final-01.png",
                    "logo": "https://mughaircuts.com/wp-content/uploads/2016/01/rsz_mug_logo_final-01.png",
                    "@id": "https://mughaircuts.com/",
                    "url": "https://mughaircuts.com/",
                    "description": "Affordable and stylish Men's Hair Salon combining the experience of a barbershop and hair salon to create the ulmiate men's haircut experience for children and Men.",
                    "hasOfferCatalog": {
                        "@type": "OfferCatalog",
                        "name": "Men's Grooming Services",
                        "itemListElement": [{
                                "@type": "Offer",
                                "price": "$22",
                                "name": "Men's Haircut",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Men's Haircut"
                                }
                            },
                            {
                                "@type": "Offer",
                                "price": "$19",
                                "name": "Kid's Haircut",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Kid's Haircut"
                                }
                            },
                            {
                                "@type": "Offer",
                                "price": "$35",
                                "name": "Haircut and Facial Shave",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Haircut and Facial Shave"
                                }
                            }
                        ]
                    },
                    "contactPoint": {
                        "@type": "ContactPoint",
                        "telephone": "+1 480-507-3437",
                        "contactType": "customer service"
                    },
                    "aggregateRating": {
                        "@type": "AggregateRating",
                        "ratingValue": "4",
                        "reviewCount": "234"
                    },
                    "review": {
                        "@type": "Review",
                        "url": "https://www.facebook.com/pg/MUG.Westgate/reviews/?ref=page_internal",
                        "itemReviewed": {
                            "@type": "HairSalon",
                            "image": "https://mughaircuts.com/wp-content/uploads/2016/01/rsz_mug_logo_final-01.png",
                            "description": "Glendale Westgate Location: Affordable and stylish Men's Hair Salon combining the experience of a barbershop and hair salon to create the ulmiate men's haircut experience for children and Men.",
                            "name": "Men's Ultimate Grooming",
                            "url": "https://mughaircuts.com/wp-content/uploads/",
                            "priceRange": "$10 - $35",
                            "telephone": "623-772-7279",
                            "address": {
                                "@type": "PostalAddress",
                                "addressLocality": "Glendale",
                                "addressRegion": "AZ",
                                "postalCode": "85305",
                                "streetAddress": "9390 W Hanna Dr Suite B107"
                            },
                            "sameAs": [
                                "https://www.facebook.com/MUG.Westgate/",
                                "https://plus.google.com/104308527374481928412",
                                "https://www.yelp.com/biz/mens-ultimate-grooming-glendale-2",
                                "https://www.instagram.com/mughaircuts.westgate/"
                            ]
                        },
                        "author": {
                            "@type": "Person",
                            "name": "Trevor Wall",
                            "sameAs": "https://www.facebook.com/trevor.wall.16?hc_ref=ARSVHu0NiAmyZk5vJDrlZpvDbByL5J-6N48h87QEWw3mOlGD6nHYXKAiEDJGIs7Q5S4"
                        },
                        "publisher": {
                            "@type": "Organization",
                            "name": "Facebook",
                            "sameAs": "https://www.facebook.com/pg/MUG.Westgate/reviews/?ref=page_internal"
                        },
                        "datePublished": "2016-06-16T20:00",
                        "description": "Awesome place. Sara just cut my hair for the first time and will definitely be returning. Only request I would have is to carry more Beard product in store. Other then that tho awesome place!",
                        "inLanguage": "en",
                        "reviewRating": {
                            "@type": "Rating",
                            "worstRating": 1,
                            "bestRating": 5,
                            "ratingValue": 5
                        }
                    }
                },
                {
                    "@type": "LocalBusiness",
                    "additionalType": "Men's Hair Salon and Men's Haircuts",
                    "parentOrganization": {
                        "name": "Men's Ultimate Grooming"
                    },
                    "name": "Men's Ultimate Grooming (MUG) - Chandler",
                    "image": "https://mughaircuts.com/mughaircuts.com/wp-content/uploads/2016/01/rsz_mug_logo_final-01.png",
                    "logo": "https://mughaircuts.com/mughaircuts.com/wp-content/uploads/2016/01/rsz_mug_logo_final-01.png",
                    "@id": "https://mughaircuts.com/location/chandler/",
                    "url": "https://mughaircuts.com/location/chandler/",
                    "description": "Affordable and stylish Men's Hair Salon combining the experience of a barbershop and hair salon to create the ulmiate men's haircut experience for children and Men.",
                    "priceRange": "$10 - $35",
                    "hasOfferCatalog": {
                        "@type": "OfferCatalog",
                        "name": "Men's Grooming Services",
                        "itemListElement": [{
                                "@type": "Offer",
                                "price": "$22",
                                "name": "Men's Haircut",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Men's Haircut"
                                }
                            },
                            {
                                "@type": "Offer",
                                "price": "$19",
                                "name": "Kid's Haircut",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Kid's Haircut"
                                }
                            },
                            {
                                "@type": "Offer",
                                "price": "$35",
                                "name": "Haircut and Facial Shave",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Haircut and Facial Shave"
                                }
                            }
                        ]
                    },
                    "telephone": "480-794-1594",
                    "address": {
                        "@type": "PostalAddress",
                        "addressLocality": "Chandler",
                        "addressRegion": "AZ",
                        "postalCode": "85286",
                        "streetAddress": "3020 S Gilbert Rd Suite 6"
                    },
                    "geo": {
                        "@type": "GeoCoordinates",
                        "latitude": 33.868549,
                        "longitude": -118.09704249999999
                    },
                    "openingHoursSpecification": [{
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": [
                                "Monday",
                                "Tuesday",
                                "Wednesday",
                                "Thursday",
                                "Friday"
                            ],
                            "opens": "09:00",
                            "closes": "18:00"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": "Saturday",
                            "opens": "09:00",
                            "closes": "18:00"
                        }, {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": "Sunday",
                            "opens": "10:00",
                            "closes": "17:00"
                        }
                    ],
                    "sameAs": [
                        "https://www.facebook.com/MUG.GilbertRoad/",
                        "https://plus.google.com/118048240953855032469",
                        "https://www.yelp.com/biz/mens-ultimate-grooming-mug-chandler",
                        "https://www.instagram.com/mughaircuts.gilbert/"
                    ],
                    "aggregateRating": {
                        "@type": "AggregateRating",
                        "ratingValue": "4.4",
                        "bestRating": "5",
                        "worstRating": "1",
                        "ratingCount": "140"
                    }
                },
                {
                    "@type": "LocalBusiness",
                    "additionalType": "Men's Hair Salon and Men's Haircuts",
                    "parentOrganization": {
                        "name": "Men's Ultimate Grooming"
                    },
                    "name": "Men's Ultimate Grooming (MUG) - Dana Park",
                    "image": "https://mughaircuts.com/mughaircuts.com/wp-content/uploads/2016/01/rsz_mug_logo_final-01.png",
                    "logo": "https://mughaircuts.com/mughaircuts.com/wp-content/uploads/2016/01/rsz_mug_logo_final-01.png",
                    "@id": "https://mughaircuts.com/location/gilbert-dana-park/",
                    "url": "https://mughaircuts.com/location/gilbert-dana-park/",
                    "description": "Affordable and stylish Men's Hair Salon combining the experience of a barbershop and hair salon to create the ulmiate men's haircut experience for children and Men.",
                    "priceRange": "$10 - $35",
                    "hasOfferCatalog": {
                        "@type": "OfferCatalog",
                        "name": "Men's Grooming Services",
                        "itemListElement": [{
                                "@type": "Offer",
                                "price": "$22",
                                "name": "Men's Haircut",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Men's Haircut"
                                }
                            },
                            {
                                "@type": "Offer",
                                "price": "$19",
                                "name": "Kid's Haircut",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Kid's Haircut"
                                }
                            },
                            {
                                "@type": "Offer",
                                "price": "$35",
                                "name": "Haircut and Facial Shave",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Haircut and Facial Shave"
                                }
                            }
                        ]
                    },
                    "telephone": "480-590-4713",
                    "address": {
                        "@type": "PostalAddress",
                        "addressLocality": "Gilbert",
                        "addressRegion": "AZ",
                        "postalCode": "85234",
                        "streetAddress": "3425 E Baseline Rd, Suite 105"
                    },
                    "geo": {
                        "@type": "GeoCoordinates",
                        "latitude": 33.378640,
                        "longitude": -111.757500
                    },
                    "openingHoursSpecification": [{
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": [
                                "Monday",
                                "Tuesday",
                                "Wednesday",
                                "Thursday",
                                "Friday"
                            ],
                            "opens": "09:00",
                            "closes": "20:00"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": "Saturday",
                            "opens": "9:00",
                            "closes": "18:00"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": "Sunday",
                            "opens": "10:00",
                            "closes": "17:00"
                        }
                    ],
                    "sameAs": [
                        "https://www.facebook.com/MUG.DanaPark/",
                        "https://g.page/MUG-Dana-Park?gm",
                        "https://www.yelp.com/biz/mens-ultimate-grooming-gilbert-7",
                        "https://www.instagram.com/mug.danapark/"
                    ],
                    "aggregateRating": {
                        "@type": "AggregateRating",
                        "ratingValue": "4.3",
                        "bestRating": "5",
                        "worstRating": "1",
                        "ratingCount": "72"
                    }
                },
                {
                    "@type": "LocalBusiness",
                    "additionalType": "Men's Hair Salon and Men's Haircuts",
                    "parentOrganization": {
                        "name": "Men's Ultimate Grooming"
                    },
                    "name": "Men's Ultimate Grooming (MUG) - McQueen Rd.",
                    "image": "https://mughaircuts.com/mughaircuts.com/wp-content/uploads/2016/01/rsz_mug_logo_final-01.png",
                    "logo": "https://mughaircuts.com/mughaircuts.com/wp-content/uploads/2016/01/rsz_mug_logo_final-01.png",
                    "@id": "https://mughaircuts.com/location/gilbert/",
                    "url": "https://mughaircuts.com/location/gilbert/",
                    "description": "Walk-in's & appointments available. Visit your Men's Ultimate Grooming location in Gilbert on McQueen and see how we reinvented the barbershop experience.",
                    "priceRange": "$10 - $35",
                    "hasOfferCatalog": {
                        "@type": "OfferCatalog",
                        "name": "Men's Grooming Services",
                        "itemListElement": [{
                                "@type": "Offer",
                                "price": "$22",
                                "name": "Men's Haircut",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Men's Haircut"
                                }
                            },
                            {
                                "@type": "Offer",
                                "price": "$19",
                                "name": "Kid's Haircut",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Kid's Haircut"
                                }
                            },
                            {
                                "@type": "Offer",
                                "price": "$35",
                                "name": "Haircut and Facial Shave",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Haircut and Facial Shave"
                                }
                            }
                        ]
                    },
                    "telephone": "480-507-3437",
                    "address": {
                        "@type": "PostalAddress",
                        "addressLocality": "Gilbert",
                        "addressRegion": "AZ",
                        "postalCode": "85233",
                        "streetAddress": "734 N McQueen Rd #103"
                    },
                    "geo": {
                        "@type": "GeoCoordinates",
                        "latitude": 33.868549,
                        "longitude": -118.09704249999999
                    },
                    "openingHoursSpecification": [{
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": [
                                "Monday",
                                "Tuesday",
                                "Wednesday",
                                "Thursday",
                                "Friday"
                            ],
                            "opens": "09:00",
                            "closes": "20:00"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": "Saturday",
                            "opens": "9:00",
                            "closes": "18:00"
                        }
                    ],
                    "sameAs": [
                        "https://www.facebook.com/MUG.McQueen/",
                        "https://g.page/MUG-McQueen-Road?gm",
                        "https://www.yelp.com/biz/mens-ultimate-grooming-gilbert-3",
                        "https://www.instagram.com/mug.mcqueen/"
                    ],
                    "aggregateRating": {
                        "@type": "AggregateRating",
                        "ratingValue": "4.6",
                        "bestRating": "5",
                        "worstRating": "1",
                        "ratingCount": "157"
                    }
                },
                {
                    "@type": "LocalBusiness",
                    "additionalType": "Men's Hair Salon and Men's Haircuts",
                    "parentOrganization": {
                        "name": "Men's Ultimate Grooming"
                    },
                    "name": "Men's Ultimate Grooming (MUG) - Val Vista Dr.",
                    "image": "https://mughaircuts.com/mughaircuts.com/wp-content/uploads/2016/01/rsz_mug_logo_final-01.png",
                    "logo": "https://mughaircuts.com/mughaircuts.com/wp-content/uploads/2016/01/rsz_mug_logo_final-01.png",
                    "@id": "https://mughaircuts.com/location/gilbert-val-vista-dr/",
                    "url": "https://mughaircuts.com/location/gilbert-val-vista-dr/",
                    "description": "Walk-in's & appointments available. Call (480) 275-8055 to get your haircut in Gilbert at our MUG location on Val Vista today!",
                    "priceRange": "$10 - $35",
                    "hasOfferCatalog": {
                        "@type": "OfferCatalog",
                        "name": "Men's Grooming Services",
                        "itemListElement": [{
                                "@type": "Offer",
                                "price": "$22",
                                "name": "Men's Haircut",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Men's Haircut"
                                }
                            },
                            {
                                "@type": "Offer",
                                "price": "$19",
                                "name": "Kid's Haircut",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Kid's Haircut"
                                }
                            },
                            {
                                "@type": "Offer",
                                "price": "$35",
                                "name": "Haircut and Facial Shave",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Haircut and Facial Shave"
                                }
                            }
                        ]
                    },
                    "telephone": "480-275-8055",
                    "address": {
                        "@type": "PostalAddress",
                        "addressLocality": "Gilbert",
                        "addressRegion": "AZ",
                        "postalCode": "85295",
                        "streetAddress": "2512 S. Val Vista Dr. #104"
                    },
                    "geo": {
                        "@type": "GeoCoordinates",
                        "latitude": 33.868549,
                        "longitude": -118.09704249999999
                    },
                    "openingHoursSpecification": [{
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": [
                                "Monday",
                                "Tuesday",
                                "Wednesday",
                                "Thursday",
                                "Friday"
                            ],
                            "opens": "09:00",
                            "closes": "20:00"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": "Saturday",
                            "opens": "9:00",
                            "closes": "18:00"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": "Sunday",
                            "opens": "10:00",
                            "closes": "17:00"
                        }
                    ],
                    "sameAs": [
                        "https://www.facebook.com/MUG.ValVista/",
                        "https://g.page/MUG-Val-Vista-Road?gm",
                        "https://www.yelp.com/biz/mens-ultimate-grooming-gilbert-4",
                        "https://www.instagram.com/mug.valvista/"
                    ],
                    "aggregateRating": {
                        "@type": "AggregateRating",
                        "ratingValue": "4.5",
                        "bestRating": "5",
                        "worstRating": "1",
                        "ratingCount": "137"
                    }
                },
                {
                    "@type": "LocalBusiness",
                    "additionalType": "Men's Hair Salon and Men's Haircuts",
                    "parentOrganization": {
                        "name": "Men's Ultimate Grooming"
                    },
                    "name": "Men's Ultimate Grooming (MUG) - Power Rd",
                    "image": "https://mughaircuts.com/mughaircuts.com/wp-content/uploads/2016/01/rsz_mug_logo_final-01.png",
                    "logo": "https://mughaircuts.com/mughaircuts.com/wp-content/uploads/2016/01/rsz_mug_logo_final-01.png",
                    "@id": "https://mughaircuts.com/location/gilbert-power-rd/",
                    "url": "https://mughaircuts.com/location/gilbert-power-rd/",
                    "description": "Walk-in's & appointments available - (480) 219-5119 | Visit Men's Ultimate Grooming on Power Rd for the ultimate men's haircut in Gilbert, AZ!",
                    "priceRange": "$10 - $35",
                    "hasOfferCatalog": {
                        "@type": "OfferCatalog",
                        "name": "Men's Grooming Services",
                        "itemListElement": [{
                                "@type": "Offer",
                                "price": "$22",
                                "name": "Men's Haircut",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Men's Haircut"
                                }
                            },
                            {
                                "@type": "Offer",
                                "price": "$19",
                                "name": "Kid's Haircut",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Kid's Haircut"
                                }
                            },
                            {
                                "@type": "Offer",
                                "price": "$35",
                                "name": "Haircut and Facial Shave",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Haircut and Facial Shave"
                                }
                            }
                        ]
                    },
                    "telephone": "480-219-5119",
                    "address": {
                        "@type": "PostalAddress",
                        "addressLocality": "Gilbert",
                        "addressRegion": "AZ",
                        "postalCode": "85295",
                        "streetAddress": "5498 S Power Rd Ste. #105"
                    },
                    "geo": {
                        "@type": "GeoCoordinates",
                        "latitude": 33.314920,
                        "longitude": -111.686940
                    },
                    "openingHoursSpecification": [{
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": [
                                "Monday",
                                "Tuesday",
                                "Wednesday",
                                "Thursday",
                                "Friday"
                            ],
                            "opens": "09:00",
                            "closes": "20:00"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": "Saturday",
                            "opens": "9:00",
                            "closes": "18:00"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": "Sunday",
                            "opens": "10:00",
                            "closes": "17:00"
                        }
                    ],
                    "sameAs": [
                        "https://www.facebook.com/MUG.PowerRoad/",
                        "https://g.page/MUG-Power-Road?gm",
                        "https://www.yelp.com/biz/mens-ultimate-grooming-gilbert-6",
                        "https://www.instagram.com/mug.power/"
                    ],
                    "aggregateRating": {
                        "@type": "AggregateRating",
                        "ratingValue": "4.8",
                        "bestRating": "5",
                        "worstRating": "1",
                        "ratingCount": "107"
                    }
                },
                {
                    "@type": "LocalBusiness",
                    "additionalType": "Men's Hair Salon and Men's Haircuts",
                    "parentOrganization": {
                        "name": "Men's Ultimate Grooming"
                    },
                    "name": "Men's Ultimate Grooming (MUG) - Westgate",
                    "image": "https://mughaircuts.com/mughaircuts.com/wp-content/uploads/2016/01/rsz_mug_logo_final-01.png",
                    "logo": "https://mughaircuts.com/mughaircuts.com/wp-content/uploads/2016/01/rsz_mug__final-01.png",
                    "@id": "https://mughaircuts.com/location/glendale/",
                    "url": "https://mughaircuts.com/location/glendale/",
                    "description": "Affordable and stylish Men's Hair Salon combining the experience of a barbershop and hair salon to create the ulmiate men's haircut experience for children and Men.",
                    "priceRange": "$10 - $35",
                    "hasOfferCatalog": {
                        "@type": "OfferCatalog",
                        "name": "Men's Grooming Services",
                        "itemListElement": [{
                                "@type": "Offer",
                                "price": "$22",
                                "name": "Men's Haircut",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Men's Haircut"
                                }
                            },
                            {
                                "@type": "Offer",
                                "price": "$19",
                                "name": "Kid's Haircut",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Kid's Haircut"
                                }
                            },
                            {
                                "@type": "Offer",
                                "price": "$35",
                                "name": "Haircut and Facial Shave",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Haircut and Facial Shave"
                                }
                            }
                        ]
                    },
                    "telephone": "623-772-7279",
                    "address": {
                        "@type": "PostalAddress",
                        "addressLocality": "Glendale",
                        "addressRegion": "AZ",
                        "postalCode": "85305",
                        "streetAddress": "9390 W Hanna Dr Suite B107"
                    },
                    "geo": {
                        "@type": "GeoCoordinates",
                        "latitude": 33.868549,
                        "longitude": -118.09704249999999
                    },
                    "openingHoursSpecification": [{
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": [
                                "Monday",
                                "Tuesday",
                                "Wednesday",
                                "Thursday",
                                "Friday"
                            ],
                            "opens": "09:00",
                            "closes": "20:00"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": "Saturday",
                            "opens": "9:00",
                            "closes": "18:00"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": "Sunday",
                            "opens": "11:00",
                            "closes": "17:00"
                        }
                    ],
                    "sameAs": [
                        "https://www.facebook.com/MUG.Westgate/",
                        "https://g.page/MUG-Glendale?gm",
                        "https://www.yelp.com/biz/mens-ultimate-grooming-glendale-2",
                        "https://www.instagram.com/MUG.Westgate/"
                    ],
                    "aggregateRating": {
                        "@type": "AggregateRating",
                        "ratingValue": "4.4",
                        "bestRating": "5",
                        "worstRating": "1",
                        "ratingCount": "199"
                    }
                },
                {
                    "@type": "LocalBusiness",
                    "additionalType": "Men's Hair Salon and Men's Haircuts",
                    "parentOrganization": {
                        "name": "Men's Ultimate Grooming"
                    },
                    "name": "Men's Ultimate Grooming (MUG) - Tempe",
                    "image": "https://mughaircuts.com/mughaircuts.com/wp-content/uploads/2016/01/rsz_mug_logo_final-01.png",
                    "logo": "https://mughaircuts.com/mughaircuts.com/wp-content/uploads/2016/01/rsz_mug_logo_final-01.png",
                    "@id": "https://mughaircuts.com/location/tempe/",
                    "url": "https://mughaircuts.com/location/tempe/",
                    "description": "Walk-in's & appointments available - (480) 491-5182 | Visit your Men's Ultimate Grooming location for the ultimate men's haircuts in Tempe, AZ.",
                    "priceRange": "$10 - $35",
                    "hasOfferCatalog": {
                        "@type": "OfferCatalog",
                        "name": "Men's Grooming Services",
                        "itemListElement": [{
                                "@type": "Offer",
                                "price": "$22",
                                "name": "Men's Haircut",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Men's Haircut"
                                }
                            },
                            {
                                "@type": "Offer",
                                "price": "$19",
                                "name": "Kid's Haircut",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Kid's Haircut"
                                }
                            },
                            {
                                "@type": "Offer",
                                "price": "$35",
                                "name": "Haircut and Facial Shave",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Haircut and Facial Shave"
                                }
                            }
                        ]
                    },
                    "telephone": "480-491-5182",
                    "address": {
                        "@type": "PostalAddress",
                        "addressLocality": "Tempe",
                        "addressRegion": "AZ",
                        "postalCode": "85284",
                        "streetAddress": "1761 E Warner Rd # A-15"
                    },
                    "geo": {
                        "@type": "GeoCoordinates",
                        "latitude": 33.334580,
                        "longitude": -111.911720
                    },
                    "openingHoursSpecification": [{
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": [
                                "Monday",
                                "Tuesday",
                                "Wednesday",
                                "Thursday",
                                "Friday"
                            ],
                            "opens": "09:00",
                            "closes": "20:00"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": "Saturday",
                            "opens": "9:00",
                            "closes": "18:00"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": "Sunday",
                            "opens": "10:00",
                            "closes": "17:00"
                        }
                    ],
                    "sameAs": [
                        "https://www.facebook.com/MUG.Warner/",
                        "https://g.page/MUG-Tempe?gm",
                        "https://www.yelp.com/biz/mens-ultimate-grooming-tempe-2",
                        "https://www.instagram.com/mug.warner"
                    ],
                    "aggregateRating": {
                        "@type": "AggregateRating",
                        "ratingValue": "4.4",
                        "bestRating": "5",
                        "worstRating": "1",
                        "ratingCount": "82"
                    }
                },
                {
                    "@type": "LocalBusiness",
                    "additionalType": "Men's Hair Salon and Men's Haircuts",
                    "parentOrganization": {
                        "name": "Men's Ultimate Grooming"
                    },
                    "name": "Men's Ultimate Grooming (MUG) - Glendale - Rose Garden",
                    "image": "https://mughaircuts.com/mughaircuts.com/wp-content/uploads/2016/01/rsz_mug_logo_final-01.png",
                    "logo": "https://mughaircuts.com/mughaircuts.com/wp-content/uploads/2016/01/rsz_mug_logo_final-01.png",
                    "@id": "https://mughaircuts.com/location/glendale-rose-garden/",
                    "url": "https://mughaircuts.com/location/glendale-rose-garden/",
                    "description": "Walk-in's & appointments available - (623) 215-8184 | Visit your Men's Ultimate Grooming location for the ultimate men's haircuts in Glendale, AZ.",
                    "priceRange": "$10 - $35",
                    "hasOfferCatalog": {
                        "@type": "OfferCatalog",
                        "name": "Men's Grooming Services",
                        "itemListElement": [{
                                "@type": "Offer",
                                "price": "$22",
                                "name": "Men's Haircut",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Men's Haircut"
                                }
                            },
                            {
                                "@type": "Offer",
                                "price": "$19",
                                "name": "Kid's Haircut",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Kid's Haircut"
                                }
                            },
                            {
                                "@type": "Offer",
                                "price": "$35",
                                "name": "Haircut and Facial Shave",
                                "itemOffered": {
                                    "@type": "Service",
                                    "name": "Haircut and Facial Shave"
                                }
                            }
                        ]
                    },
                    "telephone": " (623) 215-8184",
                    "address": {
                        "@type": "PostalAddress",
                        "addressLocality": "Glendale",
                        "addressRegion": "AZ",
                        "postalCode": "85308",
                        "streetAddress": "7507 W Rose Garden Ln Ste 106"
                    },
                    "geo": {
                        "@type": "GeoCoordinates",
                        "latitude": 33.674330,
                        "longitude": -112.219780
                    },
                    "openingHoursSpecification": [{
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": [
                                "Monday",
                                "Tuesday",
                                "Wednesday",
                                "Thursday",
                                "Friday"
                            ],
                            "opens": "09:00",
                            "closes": "20:00"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": "Saturday",
                            "opens": "9:00",
                            "closes": "18:00"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": "Sunday",
                            "opens": "10:00",
                            "closes": "17:00"
                        }
                    ],
                    "sameAs": [
                        "https://www.facebook.com/MUG.RoseGarden/",
                        "https://yelp.com/biz/mens-ultimate-grooming-glendale-3",
                        "https://www.instagram.com/mug.rosegarden/"
                    ],
                    "aggregateRating": {
                        "@type": "AggregateRating",
                        "ratingValue": "4.8",
                        "bestRating": "5",
                        "worstRating": "1",
                        "ratingCount": "18"
                    }
                }
            ]
        }
        }
    </script>
    <?php wp_head(); ?>

    <?php
    if (get_field('button_options', 'options') == 'btn-sharp') {
        $button_style = '0px';
    } elseif (get_field('button_options', 'options') == 'btn-rounded') {
        $button_style = '7.5px';
    } elseif (get_field('button_options', 'options') == 'btn-pill') {
        $button_style = '50px';
    }

    //theme colors 
    $theme_main = get_field('theme_primary', 'options');
    $theme_secondary = get_field('theme_secondary', 'options');

    //darker theme primary
    $theme_main_dark = color_luminance($theme_main, '-0.2');
    ?>

    <!-- Website Color Options -->
    <style>
        /* Other Features */
        .progress-bar {
            background: <?php echo $theme_main; ?> !important;
        }

        .social-links a {
            background-color: <?php echo $theme_main; ?> !important;
        }

        #navigation-top a:hover {
            color: #0076B6;
        }

        /* Buttons */
        .btn.blue {
            background-color: <?php echo $theme_main; ?> !important;
        }

        .btn.blue:hover {
            /* background-color: <?php echo $theme_main_dark; ?> !important; */
        }

        /* .nav-collapse .nav-top ul.nav>li:last-child a:hover:after,
    .nav-collapse .nav-top ul.nav>li:last-child a:hover:before,
    .nav-collapse .nav-top ul.nav>li:last-child a:after {
      background-color: <?php echo $theme_main_dark; ?> !important;
      color: #fff !important;
    } */

        /* .nav-collapse .nav-top ul.nav>li:last-child a:hover {
      background-color: <?php echo $theme_main; ?> !important;
    } */

        .btn.white {
            /* color: <?php echo $theme_main; ?> !important; */
        }

        .btn.white:hover:before,
        .btn.white:hover:after,
        .btn.white:after {
            /* background-color: <?php echo $theme_main; ?> !important; */
        }

        /* .nav-collapse .nav-top ul.nav>li:last-child a {
      background-color: <?php echo $theme_main; ?> !important;
    } */

        a,
        a:hover,
        a:visited {
            color: <?php echo $theme_main; ?>;
        }


        .btn {
            border-radius: <?php echo $button_style; ?> !important;
        }

        /* Backgrounds */
        .bg-blue {
            background: <?php echo $theme_secondary; ?> !important;
            /* This is a light blue background by default */
        }
    </style>
    <?php echo get_field('insert_scripts_just_before_body', 'options'); ?>
</head>

<body <?php body_class(); ?>>
    <?php echo get_field('insert_scripts_just_after_body', 'options'); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'start-theme'); ?></a>

        <!-- Navbar Selection-->
        <?php
        //get_template_part( 'template-parts/content-top-bar' );
        get_template_part('template-parts/content-navbar-3');
        ?>

        <div id="content" class="site-content">