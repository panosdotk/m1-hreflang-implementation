# m1-hreflang-implementation
Implement rel alternate links in Magento

When you’re setting up a multilingual store, Google has some directives and recommendations as to what should be done for your website to be indexed correctly, and rank higher in their search.

One of those recommendations is implementation of rel=”alternate” links, if you have pages translated to another language.

Syntax we should be using looks like this:
```
<link rel="alternate" hreflang="es" href="http://es.example.com/" />
```
If we adapt this syntax to a Magento store, this would look like:
```
<link rel="alternate" hreflang="first-two-letters-of-a-store-locale" href="url-of-the-page-in-other-language" />
```

Module created by [Inchoo](http://inchoo.net/magento/implement-rel-alternate-links-in-magento/)
