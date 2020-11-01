<a href="https://photon-platform.net/">
    <img src="https://photon-platform.net/user/images/photon-logo-banner.png" alt="photon" title="photon" align="right" height="120" />
</a>


# photon ✴ Event

## 0.1.0

---


> structure, style and logic for Event and Calendar content

- [configuration](#configuration)
- [templates](#templates)
- [scaffolds](#scaffolds)
- [scss](#scss)
- [assets](#assets)
- [languages](#languages)

# configuration
blueprints.yaml

fields:
- enabled
- built_in_css
- built_in_js
- notes

Before configuring this plugin, you should copy the `user/plugins/photon-event/photon-event.yaml` to `user/config/plugins/photon-event.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```
enabled: true
built_in_css: true
built_in_js: true

description: Custom Text added by the **photon-event** plugin (disable plugin to remove)
```

Note that if you use the admin plugin, a file with your configuration, and named photon-event.yaml will be saved in the `user/config/plugins/` folder once the configuration is saved in the admin.


# blueprints

```sh
blueprints
├── calendar.yaml
└── event.yaml
```

### Event
event.yaml
extends: article
fields:
- header.data.event
  - .startDate
  - .endDate
  - .allDay
  - .address
    - header.data.event.address.streetAddress
    - header.data.event.address.postOfficeBoxNumber
    - header.data.event.address.addressLocality
    - header.data.event.address.addressRegion
    - header.data.event.address.postalCode
    - header.data.event.address.addressCountry
  - .location
  - .coordinates

### Calendar
calendar.yaml
extends: article
fields:
- header.data.calendar
  - .description

# templates

```sh
templates
├── _articles
│   ├── _block
│   │   ├── calendar_collection.html.twig
│   │   ├── calendar_figure.html.twig
│   │   ├── event_data.html.twig
│   │   ├── event_header_excerpt.html.twig
│   │   └── event_header.html.twig
│   ├── calendar-showcase.html.twig
│   ├── event-excerpt.html.twig
│   └── event.html.twig
├── _json-ld
│   ├── calendar.html.twig
│   └── event.html.twig
├── partials
│   ├── event_item.html.twig
│   ├── event_meta.html.twig
│   └── events_sidebar.html.twig
├── calendar.html.twig
└── event.html.twig
```

# scaffolds

```sh
scaffolds
└── event.md
```

# scss

```sh
scss
├── articles
│   ├── _calendar.scss
│   └── _event.scss
├── templates
│   ├── _calendar.scss
│   └── _event.scss
├── calendar.scss
└── event.scss
```

# assets

```sh
assets
├── fullcalendar-5.2.0
│   ├── lib
│   │   ├── locales
│   │   │   ├── af.js
│   │   │   ├── ar-dz.js
│   │   │   ├── ar.js
│   │   │   ├── ar-kw.js
│   │   │   ├── ar-ly.js
│   │   │   ├── ar-ma.js
│   │   │   ├── ar-sa.js
│   │   │   ├── ar-tn.js
│   │   │   ├── az.js
│   │   │   ├── bg.js
│   │   │   ├── bs.js
│   │   │   ├── ca.js
│   │   │   ├── cs.js
│   │   │   ├── da.js
│   │   │   ├── de.js
│   │   │   ├── el.js
│   │   │   ├── en-au.js
│   │   │   ├── en-gb.js
│   │   │   ├── en-nz.js
│   │   │   ├── es.js
│   │   │   ├── es-us.js
│   │   │   ├── et.js
│   │   │   ├── eu.js
│   │   │   ├── fa.js
│   │   │   ├── fi.js
│   │   │   ├── fr-ca.js
│   │   │   ├── fr-ch.js
│   │   │   ├── fr.js
│   │   │   ├── gl.js
│   │   │   ├── he.js
│   │   │   ├── hi.js
│   │   │   ├── hr.js
│   │   │   ├── hu.js
│   │   │   ├── id.js
│   │   │   ├── is.js
│   │   │   ├── it.js
│   │   │   ├── ja.js
│   │   │   ├── ka.js
│   │   │   ├── kk.js
│   │   │   ├── ko.js
│   │   │   ├── lb.js
│   │   │   ├── lt.js
│   │   │   ├── lv.js
│   │   │   ├── mk.js
│   │   │   ├── ms.js
│   │   │   ├── nb.js
│   │   │   ├── ne.js
│   │   │   ├── nl.js
│   │   │   ├── nn.js
│   │   │   ├── pl.js
│   │   │   ├── pt-br.js
│   │   │   ├── pt.js
│   │   │   ├── ro.js
│   │   │   ├── ru.js
│   │   │   ├── sk.js
│   │   │   ├── sl.js
│   │   │   ├── sq.js
│   │   │   ├── sr-cyrl.js
│   │   │   ├── sr.js
│   │   │   ├── sv.js
│   │   │   ├── th.js
│   │   │   ├── tr.js
│   │   │   ├── ug.js
│   │   │   ├── uk.js
│   │   │   ├── uz.js
│   │   │   ├── vi.js
│   │   │   ├── zh-cn.js
│   │   │   └── zh-tw.js
│   │   ├── locales-all.js
│   │   ├── locales-all.min.js
│   │   ├── main.css
│   │   ├── main.js
│   │   ├── main.min.css
│   │   └── main.min.js
│   ├── LICENSE.txt
│   └── README.md
├── calendar.css
├── calendar.css.map
├── calendar.js
├── event.css
├── event.css.map
├── event.js
└── fc-photon.css
```

# languages

```sh
languages
└── en.yaml
```


## Installation

- all photon plugins are installed as git submodules. More on that later.



## Configuration


## Usage

Select template type when creating a new page

## Credits


## To Do

- [ ] Future plans, if any


copyright &copy; 2020
