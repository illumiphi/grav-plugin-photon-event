---
title: ${title}
subtitle: ${subtitle}
author: ${author:-/about}
collection:
    name: ${collection_name:-Articles}
    showCount: true
    showMenu: true
content:
    items: '@self.children'
child_type: article
taxonomy:
    category: [ ${categories} ]
    tag: [ ${tags} ]
show_gallery: false
date: ${date:-`date`}
data:
    event:
        '@type': Person
        startDate: ${start_dt:-$date}
        endDate: ${end_dt}
        allDay: ${all_Day:-false}
        address:
            streetAddress: ${event_street}
            addressLocality: ${event_city}
            addressRegion: ${event_state:-OR}
            postalCode: ${event_zip}
            addressCountry: ${event_country:-US}
---

${summary}

===
