% name: Event
% folder: event
% def: post_date=$(date +%m/%d/%Y)
% def: author='/about'
% def: collection_name='Attachments'
% def: start_dt=$(date +%Y-%m-%d)
% def: end_dt=$(date +%Y-%m-%d)
% def: all_day=true
---
title: ${title}
subtitle: ${subtitle}
date: ${post_date}
author: ${author}
sets:
    default:
        name: ${collection_name}
        showCount: true
        showMenu: true
content:
    items: '@self.children'
taxonomy:
    category: 
        - ${category}
    tag: 
        - ${tag}
show_gallery: false
data:
    event:
        '@type': Event
        startDate: ${start_dt}
        endDate: ${end_dt}
        allDay: ${all_day}
        location:
            '@type': Place
            name: ${place_name}
            address:
                streetAddress: ${place_street}
                addressLocality: ${place_city}
                addressRegion: ${place_state}
                postalCode: ${place_zip}
                addressCountry: ${place_country}
            geo:
                '@type': GeoCoordinates
                latitude: ${place_lat}
                longitude:  ${place_long} 
---

${summary}

===
