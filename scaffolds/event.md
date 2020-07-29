% name: Event
% folder: event
% def: author='/about'
% def: post_date=$(date +%Y-%m-%d)
% def: collection_name='Posts'
% def: start_dt=$(date +%Y-%m-%d)
% def: end_dt=$(date +%Y-%m-%d)
% def: all_day=true
---
title: ${title}
subtitle: ${subtitle}
author: ${author}
collection:
    name: ${collection_name}
    showCount: true
    showMenu: true
content:
    items: '@self.children'
child_type: post
taxonomy:
    category: 
        - ${category}
    tag: 
        - ${tag}
show_gallery: false
date: ${post_date}
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

- The regular monthly meeting of the Port of Alsea Board of Commissioners will be held on ${start_dt_long} via teleconference
===
